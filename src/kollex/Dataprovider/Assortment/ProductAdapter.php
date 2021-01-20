<?php


namespace kollex\Dataprovider\Assortment;


class ProductAdapter
{
    const PRODUCT_ID = 'id';
    const PRODUCT_GTIN = 'gtin';
    const PRODUCT_MANUFACTURE = 'manufacture';
    const PRODUCT_NAME = 'name';
    const PRODUCT_PACKAGING = 'packaging';
    const PRODUCT_BASE_PRODUCT_PACKAGING = 'productPacking';
    const PRODUCT_BASE_PRODUCT_UNIT = 'baseProductUnit';
    const PRODUCT_BASE_PRODUCT_AMOUNT = 'baseProductAmount';
    const PRODUCT_BASE_PRODUCT_QUANTITY = 'baseProductQuantity';

    protected $products;

    /**
     * @param DataProvider $products
     */
    public function __construct(DataProvider $products)
    {
        $this->products = $products->getProducts();
    }

    public function getJsonData(): string
    {
        $data = [];

        foreach ($this->products as $product) {
            $data[] = [
                self::PRODUCT_ID => $product->getId(),
                self::PRODUCT_GTIN => $product->getGtin(),
                self::PRODUCT_MANUFACTURE => $product->getManufacture(),
                self::PRODUCT_NAME => $product->getName(),
                self::PRODUCT_PACKAGING => $product->getPackaging(),
                self::PRODUCT_BASE_PRODUCT_PACKAGING => $product->getBaseProductPackaging(),
                self::PRODUCT_BASE_PRODUCT_UNIT => $product->getBaseProductUnit(),
                self::PRODUCT_BASE_PRODUCT_AMOUNT => $product->getBaseProductAmount(),
                self::PRODUCT_BASE_PRODUCT_QUANTITY => $product->getBaseProductQuantity(),
            ];
        }

        return json_encode($data);
    }
}
