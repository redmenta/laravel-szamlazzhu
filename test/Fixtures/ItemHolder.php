<?php


namespace redmenta\SzamlazzHu\Tests\Fixtures;


use Illuminate\Support\Collection;

class ItemHolder {
    use \redmenta\SzamlazzHu\Internal\Support\ItemHolder;

    public function __construct()
    {
        $this->items = $this->items ?: Collection::make();
    }


}
