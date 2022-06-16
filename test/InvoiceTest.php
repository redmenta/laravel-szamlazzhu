<?php


namespace redmenta\SzamlazzHu\Tests;


use redmenta\SzamlazzHu\Internal\Support\ItemHolder;
use redmenta\SzamlazzHu\Invoice;

class InvoiceTest extends \Orchestra\Testbench\TestCase {

    /** @test */
    public function it_is_item_holder()
    {
        $this->assertArrayHasKey(ItemHolder::class, class_uses_recursive(Invoice::class));
    }

}
