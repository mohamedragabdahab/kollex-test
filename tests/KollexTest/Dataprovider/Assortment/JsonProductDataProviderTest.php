<?php


namespace KollexTest\Dataprovider\Assortment;


use kollex\Dataprovider\Assortment\JsonProduct;
use kollex\Dataprovider\Assortment\JsonProductDataProvider;
use kollex\Dataprovider\Assortment\ProductAdapter;
use PHPUnit\Framework\TestCase;

class JsonProductDataProviderTest extends TestCase
{
    private $jsonProductData;
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->jsonProductData = new JsonProductDataProvider('tests/data/test.json');
    }

    public function testGetJsonProductsIsTypeOfArray()
    {
        $this->assertIsArray($this->jsonProductData->getProducts());
        $this->assertInstanceOf(JsonProduct::class, $this->jsonProductData->getProducts()[0]);
    }

    public function testJsonProductMappingToTargetFormat()
    {
        $data = new ProductAdapter($this->jsonProductData);
        $expected = '[{"id":"12345600001","gtin":"24880602029766","manufacture":"Drinks Corp.","name":"Soda Drink, 12x 1L","packaging":"case","productPacking":"","baseProductUnit":"bottle","baseProductAmount":"12","baseProductQuantity":"1"}]';
        
        $this->assertEquals($expected, $data->getJsonData());
    }

}
