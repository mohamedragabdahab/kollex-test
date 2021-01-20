<?php


namespace kollex\Dataprovider\Assortment;


class CsvProduct extends AbstractProduct
{
    const PRODUCT_ID = 'id';
    const PRODUCT_GTIN = 'ean';
    const PRODUCT_MANUFACTURE = 'product';
    const PRODUCT_NAME = 'description';
    const PRODUCT_PACKAGING = 'packaging product';
    const PRODUCT_BASE_PRODUCT_PACKAGING = 'foo';
    const PRODUCT_BASE_PRODUCT_UNIT = 'packaging unit';
    const PRODUCT_BASE_PRODUCT_AMOUNT = 'amount per unit';
    const PRODUCT_BASE_PRODUCT_QUANTITY = 'items on stock (availability)';
}
