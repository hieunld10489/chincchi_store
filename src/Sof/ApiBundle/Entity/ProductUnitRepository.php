<?php

namespace Sof\ApiBundle\Entity;

use Sof\ApiBundle\Entity\ValueConst\InvoiceConst;
use Sof\ApiBundle\Lib\Config;

use Sof\ApiBundle\Lib\SofUtil;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * ProductUnitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductUnitRepository extends BaseRepository
{
    /**
     * @return Array
     *
     * @author HieuNLD 2014/11/13
     */
    public function getDataUnitByProductId_Invoice($productId) {
        $query = $this->querySimpleEntities(array(
          'selects' => array('entity.productId AS id', 'entity.unitId1', 'entity.unitId2' , 'entity.convertAmount')
        ));
        $query->addSelect('p.salePrice, p.originalPrice');
        $query->addSelect('entity.unitId1, entity.unitId2 , entity.convertAmount');
        $query->addSelect("SUM(CASE WHEN in1.invoiceType = 1"
          .' THEN ind1.quantity'
          .' ELSE 0 END) AS inputQuantity');
        $query->addSelect("SUM(CASE WHEN in1.invoiceType = 2"
          .' THEN ind1.quantity'
          .' ELSE 0 END) AS outputQuantity');

        $query->innerJoin(self::ENTITY_BUNDLE . ":Product", 'p', 'WITH', "entity.productId = p.id");
        $query->leftJoin(self::ENTITY_BUNDLE . ":Unit", 'u1', 'WITH', "entity.unitId1 = u1.id");
        $query->leftJoin(self::ENTITY_BUNDLE . ":Unit", 'u2', 'WITH', "entity.unitId2 = u2.id");

        $query->leftJoin(self::ENTITY_BUNDLE . ":Invoice", 'in1', 'WITH', "in1.invoiceType = :invoiceType1 OR in1.invoiceType = :invoiceType2");
        $query->innerJoin(self::ENTITY_BUNDLE . ":InvoiceDetail", 'ind1', 'WITH', "in1.id = ind1.invoiceId AND ind1.productId = :productId");

        $query->andWhere('entity.productId = :productId')
              ->setParameter('productId', $productId)
              ->setParameter('invoiceType1', InvoiceConst::INVOICE_TYPE_1)
              ->setParameter('invoiceType2', InvoiceConst::INVOICE_TYPE_2);

        return SofUtil::formatScalarArrayList($query->getQuery()->getScalarResult());
    }
}
