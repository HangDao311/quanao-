<!DOCTYPE html>
<html lang="en">
<?php
include "components/head.php";

include_once 'controllers/QuanAoController.php';

$quanAoController = new QuanAoController();
?>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $quanAoList = $this->quanAoController->invoke();
            echo $quanAoList;
            // foreach ($quanAoList as $i => $item) {
            //     echo '<tr>';
            //     echo '<th scope="row">' . ($i + 1) . '</th>';
            //     echo '<td>' . $item->getId() . '</td>';
            //     echo '<td>' . $item->getName() . '</td>';
            //     echo '<td>' . $item->getPrice() . '</td>';
            //     echo '<td>' .
            //         '<div>
            //             <button type="button" class="btn btn-success btn-sm">Xem</button>';
            //     echo '<button type="button" onclick="onEdit(' . $item->getId() . ')" class="btn btn-primary btn-sm">Sửa</button>';
            //     echo '<button type="button" class="btn btn-danger btn-sm">Xoá</button>
            //         </div>'
            //         . '<td>';
            //     echo '</tr>';
            // }
            ?>

        </tbody>
    </table>
</body>

</html>