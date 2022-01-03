<?php
// mysql connection
include "connect.php";

// fetch
$result = @mysqli_query($con, "SELECT * FROM products") or die("Error: " . mysqli_error($con));

// delete
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    foreach ($arr as $id) {
        @mysqli_query($con,"DELETE FROM products WHERE id = " . $id);
    }
    $msg = "Deleted Successfully!";
    header("Location: index.php?msg=$msg");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
  <script type="text/javascript" src="./js/scripts.js"></script>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <header class="header">
    <h1>Product List</h1>
    <nav class="nav">
      <a href="./addproduct.html">
        <input type="button" value="ADD" class="headerBtn">
      </a>
      <form action="index.php" method="POST">
        <button id="delete-product-btn" class="headerBtn" type="submit">MASS DELETE</button>
      
    </nav>
  </header>
  <main class="main">
    <div class="productList">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="product">
            <input class="delete-checkbox" name="chk_id[]" type="checkbox" value="<?= $row['id'];?>"/>
            <p><?= $row['sku']; ?></p>
            <p><?= $row['name']; ?></p>
            <p><?= $row['price']. " $"; ?></p>
            <p>
            <?php 
            if ($row['size'] > 0)
              echo "Size: " . $row['size'] . " MB"; 
            if ($row['weight'] > 0)
              echo "Weight: " . $row['weight'] . "KG"; 
            if ($row['height'] > 0) 
            echo "Dimension: " . $row['height'] . "x" . $row['width'] . "x" . $row['length'] ; 
            ?>
            </p>
          </div>
        <?php
        }
        ?>
    </div>
  </form>
  </main>

  <footer class="footer">
    <p>
      ScandiWeb Test assignment
    </p>
  </footer>
</body>

</html>