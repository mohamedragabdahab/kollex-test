<?php


namespace kollex\Dataprovider\Assortment;


class JsonProduct extends AbstractProduct
{
    const PRODUCT_ID = 'PRODUCT_IDENTIFIER';
    const PRODUCT_GTIN = 'EAN_CODE_GTIN';
    const PRODUCT_MANUFACTURE = 'BRAND';
    const PRODUCT_NAME = 'NAME';
    const PRODUCT_PACKAGING = 'PACKAGE';
    const PRODUCT_BASE_PRODUCT_PACKAGING = 'ADDITIONAL_INFO';
    const PRODUCT_BASE_PRODUCT_UNIT = 'VESSEL';
    const PRODUCT_BASE_PRODUCT_AMOUNT = 'BOTTLE_AMOUNT';
    const PRODUCT_BASE_PRODUCT_QUANTITY = 'LITERS_PER_BOTTLE';
}
