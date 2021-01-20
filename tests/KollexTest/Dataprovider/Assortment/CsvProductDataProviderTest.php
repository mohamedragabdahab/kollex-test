<?php


namespace KollexTest\Dataprovider\Assortment;


use kollex\Dataprovider\Assortment\CsvProduct;
use kollex\Dataprovider\Assortment\CsvProductDataProvider;
use kollex\Dataprovider\Assortment\ProductAdapter;
use PHPUnit\Framework\TestCase;

class CsvProductDataProviderTest extends TestCase
{
    private $csvProductData;
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->csvProductData = new CsvProductDataProvider('tests/data/test.csv');
    }

    public function testGetCsvProductsIsTypeOfArray()
    {
        $this->assertIsArray($this->csvProductData->getProducts());
        $this->assertInstanceOf(CsvProduct::class, $this->csvProductData->getProducts()[0]);
    }

    public function testCsvProductMappingToTargetFormat()
    {
        $data = new ProductAdapter($this->csvProductData);
        $expected = '[{"id":"12345600001","gtin":"23880602029774","manufacture":"Soda Drink, 12 * 1,0l","name":"Lorem ipsum usu amet dicat nullam ea","packaging":"case 12","productPacking":"bar","baseProductUnit":"bottle","baseProductAmount":"1.0l","baseProductQuantity":"123"}]';

        $this->assertEquals($expected, $data->getJsonData());
    }

}
