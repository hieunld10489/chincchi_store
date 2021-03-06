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
 * InvoiceDetailRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InvoiceDetailRepository extends BaseRepository
{
    /**
     * @param $fromDate
     * @param $toDate
     * @param $invoiceType
     * @return Array
     *
     * @author HieuNLD 2014/11/21
     */
    public function getData_ReportInventory($fromDate, $toDate, $invoiceType) {
        $invoice = self::ENTITY_BUNDLE . ":Invoice";

        $query = $this->querySimpleEntities(array(
            'selects' => array('SUM(entity.quantity) AS quantity', 'productId')
        ));

        $query->leftJoin($invoice, 'invoice', 'WITH', "entity.invoiceId = invoice.id");
        $query->groupBy('entity.productId');

        if ($fromDate) {
            $query->andWhere('invoice.createInvoiceDate >= :fromDate')
                  ->setParameter('fromDate', $fromDate);
        }
        if ($toDate) {
            $query->andWhere('invoice.createInvoiceDate <= :toDate')
                  ->setParameter('toDate', $toDate);
        }
        if ($invoiceType) {
            $query->andWhere('invoice.invoiceType = :invoiceType')
                  ->setParameter('invoiceType', $invoiceType);
        }

        return $query->getQuery()->getArrayResult();
    }

    public function getData_ReportRevenue($fromDate, $toDate, $invoiceType) {
        $invoice     = self::ENTITY_BUNDLE . ":Invoice";
        $liabilities = self::ENTITY_BUNDLE . ":Liabilities";

        $query = $this->querySimpleEntities(array(
            'selects' => array("SUM(entity.price) AS price")
        ));
        $query->addSelect("DATE_FORMAT(invoice.createInvoiceDate, '%Y-%m') AS createInvoiceDate");
        $query->leftJoin($invoice, 'invoice', 'WITH', "entity.invoiceId = invoice.id");
        if($invoiceType == InvoiceConst::INVOICE_TYPE_2) {
            $query->addSelect('SUM(l.price) AS liabilitiesPrice');
            $query->leftJoin($liabilities, 'l', 'WITH', "entity.invoiceId = l.invoiceId");

            $query->andWhere('invoice.paymentStatus = :paymentStatus');
            $query->andWhere('invoice.deliveryStatus = :deliveryStatus');
            $query->setParameter('paymentStatus', InvoiceConst::PAYMENT_STATUS_3);
            $query->setParameter('deliveryStatus', InvoiceConst::DELIVERY_STATUS_2);
        }

        if ($fromDate) {
            $query->andWhere('invoice.createInvoiceDate >= :fromDate')
                  ->setParameter('fromDate', $fromDate);
        }
        if ($toDate) {
            $query->andWhere('invoice.createInvoiceDate <= :toDate')
                  ->setParameter('toDate', $toDate);
        }
        if ($invoiceType) {
            $query->andWhere('invoice.invoiceType = :invoiceType')
                  ->setParameter('invoiceType', $invoiceType);
        }

        $query->groupBy('createInvoiceDate');

        return $query->getQuery()->getArrayResult();
    }
}
