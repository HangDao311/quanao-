<?php
class QuanAo
{
    public $id;
    public $name;
    public $price;

    public function _construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}
