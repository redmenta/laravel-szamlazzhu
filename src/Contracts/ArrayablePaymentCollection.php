<?php


namespace redmenta\SzamlazzHu\Contracts;


interface ArrayablePaymentCollection
{

    /**
     * @see ArrayablePayment
     * @return ArrayablePayment[]
     */
    function toPaymentCollectionArray();

}
