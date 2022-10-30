<?php
require_once 'models/QuanAoModel.php';
require_once 'Util/ExecuteQuery.php';

class QuanAoService
{
    public function get_all_quanao(){
        $sql = "Select * From product LIMIT 10";

        $quanAoList = array();

        $result = executeSelect($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $quanAo = new QuanAo(
                    $row["id"],
                    $row["name"],
                    $row["price"]
                );
                $quanAoList[] = $quanAo;
            }
        }
        return $quanAoList;
    }
   
}