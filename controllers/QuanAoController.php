<?php 
include_once 'service/QuanAoService.php';

class QuanAoController 
{
    public QuanAoService $service;

    public function __construct()
    {
        $this->service = new QuanAoService();
    }

    public function invoke()
    {
        return $this->service->get_all_quanao();
    }
}
