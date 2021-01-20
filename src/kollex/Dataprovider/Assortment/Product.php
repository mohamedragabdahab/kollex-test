<?php


namespace kollex\Dataprovider\Assortment;


interface Product
{
    public function getId(): string;

    public function getGtin(): string;

    public function getName(): string;

    public function getManufacture(): string;

    public function getPackaging(): string;

    public function getBaseProductPackaging(): string;

    public function getBaseProductUnit(): string;

    public function getBaseProductAmount(): string;

    public function getBaseProductQuantity(): string;
}
