<?php


namespace redmenta\SzamlazzHu\Tests\Client\Invoice;


use redmenta\SzamlazzHu\Client\Client;
use redmenta\SzamlazzHu\Invoice;

class TestCase extends \redmenta\SzamlazzHu\Tests\Client\TestCase {

    /**
     * @param null $number
     * @param Client|null $client
     * @return Invoice
     */
    protected function getEmptyInvoice($number = null, Client $client = null)
    {
        $invoice = new Invoice();

        if ($client) {
            $invoice->setClient($client);
        }

        if ($number) {
            $invoice->invoiceNumber = $number;
        }

        return $invoice;
    }

}
