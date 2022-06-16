<?php


namespace redmenta\SzamlazzHu\Tests\Fixtures;


use Illuminate\Support\Collection;

class PaymentHolder {

    use \redmenta\SzamlazzHu\Internal\Support\PaymentHolder;

    public function __construct()
    {
        $this->payments = Collection::make();
    }


}
