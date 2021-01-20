<?php


namespace kollex\Dataprovider\Assortment;


class CsvProductDataProvider implements DataProvider
{
    protected $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getProducts(): array
    {
        $rows = array_map(function ($value) {
            return str_getcsv($value, ";");
        },
            file($this->file)
        );

        $header = array_shift($rows);

        $products = [];
        foreach ($rows as $row) {
            $products[] = new CsvProduct(array_combine($header, $row));
        }

        return $products;
    }
}
