<?php


namespace redmenta\SzamlazzHu\Contracts;

/**
 * Interface ArrayableInvoiceItemCollection
 * @package redmenta\SzamlazzHu\Contracts
 */
interface ArrayableItemCollection
{

    /**
     * @see ArrayableItem
     * @return ArrayableItem[]
     */
    function toItemCollectionArray();

}
