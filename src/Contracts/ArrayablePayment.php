<?php


namespace redmenta\SzamlazzHu\Contracts;

use redmenta\SzamlazzHu\Internal\Support\PaymentMethods;

/**
 * Interface ArrayablePayment
 * @package redmenta\SzamlazzHu\Contracts
 */
interface ArrayablePayment
{

    /**
     * [
     *  'paymentMethod' => '', // @see \redmenta\SzamlazzHu\Internal\Support\PaymentMethods::$paymentMethods
     *  'amount' => '', // The amount was paid
     *  'comment' => '', // A single note on payment
     * ]
     *
     * @return array
     */
    function toPaymentArray();

}
