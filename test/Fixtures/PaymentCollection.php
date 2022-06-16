<?php


namespace redmenta\SzamlazzHu\Tests\Fixtures;


use redmenta\SzamlazzHu\Contracts\ArrayablePayment;
use redmenta\SzamlazzHu\Contracts\ArrayablePaymentCollection;

class PaymentCollection implements ArrayablePaymentCollection {

    /**
     * @var array
     */
    protected $payments;

    /**
     * PaymentCollection constructor.
     * @param array $payments
     */
    public function __construct(array $payments)
    {
        $this->payments = $payments;
    }


    /**
     * @see ArrayablePayment
     * @return ArrayablePayment[]
     */
    function toPaymentCollectionArray()
    {
        return $this->payments;
    }
}
