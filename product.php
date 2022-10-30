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
      $quanAoList = $quanAoController->invoke();

      foreach ($quanAoList as $i => $item) {
        echo '<tr>';
      ?>
        <th scope="row"><?php echo $count ?></th>
        <td><?php echo $item->getId(); ?> </td>
        <td><?php echo $item->getName(); ?> </td>
        <td><?php echo $item->getPrice(); ?> </td>

        <td>
          <div>
            <button type="button" class="btn btn-success btn-sm">Xem</button>';
            <button type="button" class="btn btn-success btn-sm">Sua</button>';
            <button type="button" class="btn btn-danger btn-sm">Xoá</button>
          </div>
        </td>
      <?php
        echo '<tr>';
      }
      ?>

    </tbody>
  </table>
</body>

</html>