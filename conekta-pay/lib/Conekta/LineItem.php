<?php

namespace Conekta;

use Conekta\{Conekta, ConektaResource, Exceptions, Lang};

class LineItem extends ConektaResource
{
     public $name = '';
     public $description = '';
     public $unitPrice = '';
     public $quantity = '';
     public $sku = '';
     public $shippable = '';
     public $tags = '';
     public $brand = '';
     public $type = '';
     public $parentId = '';
     public string $apiVersion;
     public $order;

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->{$property};
        }
    }

    public function __isset($property)
    {
        return isset($this->{$property});
    }

    public function instanceUrl(): string
    {
        $this->apiVersion = Conekta::$apiVersion;
        $id = $this->id;
        parent::idValidator($id);
        $class = get_class($this);
        $base = $this->classUrl($class);
        $extn = urlencode($id);
        $orderUrl = $this->order->instanceUrl();

        return $orderUrl . $base . "/{$extn}";
    }

    public function update($params = null): LineItem
    {
        return parent::_update($params);
    }

    public function delete(): LineItem
    {
        return parent::_delete('order', 'line_items');
    }
}
