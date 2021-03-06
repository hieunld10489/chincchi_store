<?php

namespace Sof\ApiBundle\Entity;

use Sof\ApiBundle\Entity\ValueConst\InvoiceConst;
use Sof\ApiBundle\Lib\SofUtil;

/**
 * InvoiceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InvoiceRepository extends BaseRepository
{
    /**
     * @param $id
     * @param $searchInvoiceName
     * @return Array
     *
     * @author HieuNLD 2014/11/13
     */
    public function getData($id, $searchInvoiceName) {
        $query = $this->querySimpleEntities(array(
            'selects' => array('id AS invoiceId', 'invoiceNumber', 'paymentStatus', 'deliveryStatus'),
            'conditions' => array('subject'       => $id,
                                  'invoiceType'   => InvoiceConst::INVOICE_TYPE_2,
                                  'paymentStatus' => InvoiceConst::PAYMENT_STATUS_1,
//                                  'deliveryStatus' => InvoiceConst::DELIVERY_STATUS_1
            )
        ));
        $query->addSelect('l.id, l.name, l.amount, l.price, l.customerId');
        $query->leftJoin(self::ENTITY_BUNDLE . ":Liabilities", 'l', 'WITH', "entity.subject = l.customerId AND entity.id = l.invoiceId");

        if ($searchInvoiceName) {
            $query->andWhere('entity.invoiceNumber LIKE :invoiceNumber')
                  ->setParameter('invoiceNumber', '%'.$searchInvoiceName.'%');
        }

        return SofUtil::formatScalarArray($query->getQuery()->getScalarResult());
    }

    /**
     * @param $arrDriverInvoice
     * @return Array
     *
     * @author HieuNLD 2014/11/13
     */
    public function getDataInvoice_Delivery($arrDriverInvoice = array()) {
        $query = $this->querySimpleEntities(array(
                'selects' => array('id', 'invoiceNumber', 'createInvoiceDate'),
                'conditions' => array(
                    'invoiceType'    => InvoiceConst::INVOICE_TYPE_2,
                    'deliveryStatus' => InvoiceConst::DELIVERY_STATUS_1,
//                    'paymentStatus'  => InvoiceConst::PAYMENT_STATUS_1
                )
            ));
        $query->addSelect('c.name AS customerName');
        $query->leftJoin(self::ENTITY_BUNDLE . ":Customer", 'c', 'WITH', "entity.subject = c.id");

        if ($arrDriverInvoice) {
            $query->andWhere('entity.id NOT IN(:arrInvoiceId)')
                  ->setParameter('arrInvoiceId', $arrDriverInvoice);
        }

        return SofUtil::formatScalarArray($query->getQuery()->getScalarResult());
    }
}
