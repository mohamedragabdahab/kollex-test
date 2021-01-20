<?php


namespace kollex\Dataprovider\Assortment;


abstract class AbstractProduct implements Product
{
    const PRODUCT_ID = 'id';
    const PRODUCT_GTIN = 'gtin';
    const PRODUCT_MANUFACTURE = 'manufacture';
    const PRODUCT_NAME = 'name';
    const PRODUCT_PACKAGING = 'package';
    const PRODUCT_BASE_PRODUCT_PACKAGING = 'baseProductPackaging';
    const PRODUCT_BASE_PRODUCT_UNIT = 'baseProductUnit';
    const PRODUCT_BASE_PRODUCT_AMOUNT = 'baseProductAmount';
    const PRODUCT_BASE_PRODUCT_QUANTITY = 'baseProductQuantity';

    protected $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getId(): string
    {
        return $this->data[static::PRODUCT_ID];
    }

    public function getGtin(): string
    {
        return $this->data[static::PRODUCT_GTIN];
    }

    public function getName(): string
    {
        return $this->data[static::PRODUCT_NAME];
    }

    public function getManufacture(): string
    {
        return $this->data[static::PRODUCT_MANUFACTURE];
    }

    public function getPackaging(): string
    {
        return $this->data[static::PRODUCT_PACKAGING];
    }

    public function getBaseProductPackaging(): string
    {
        return $this->data[static::PRODUCT_BASE_PRODUCT_PACKAGING];
    }

    public function getBaseProductUnit(): string
    {
        return $this->data[static::PRODUCT_BASE_PRODUCT_UNIT];
    }

    public function getBaseProductAmount(): string
    {
        return $this->data[static::PRODUCT_BASE_PRODUCT_AMOUNT];
    }

    public function getBaseProductQuantity(): string
    {
        return $this->data[static::PRODUCT_BASE_PRODUCT_QUANTITY];
    }
}
