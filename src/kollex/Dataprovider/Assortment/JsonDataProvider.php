<?php


namespace kollex\Dataprovider\Assortment;


class JsonDataProvider implements DataProvider
{
    protected $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getProducts(): array
    {
        $products = [];
        $data = json_decode(file_get_contents($this->file), true);

        foreach ($data['data'] as $item) {
            $products[] = new JsonProduct($item);
        }

        return $products;
    }
}
