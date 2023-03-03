

<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bt.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 2</title>
</head>
<body>
    <button><a href="data.php">add data</a></button>
    <center><h1> WELCOME TO YOUR PRODUCT!</h1>
</center> 
<h3 class="title"> SẢN PHẨM GIÀY CAO GÓT</h3>
    <div class="show">
        
        <?php
         $giaydep=$_SESSION["products"]['giaydep'];
         foreach($giaydep as $key =>$value){ ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $value['img']?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['name']?></h5>
                <p class="card-text"><?php echo $value['Price']?></p>
                <a href="#" class="btn btn-primary">buy</a>
            </div>
        </div>
        <?php }?>
    </div>

    <h3 class="title"> SẢN PHẨM TÚI XÁCH</h3>
    <div class="show">
        
        <?php
         $giaydep=$_SESSION["products"]['tuixach'];
         foreach($giaydep as $key =>$value){ ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $value['img']?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['name']?></h5>
                <p class="card-text"><?php echo $value['Price']?></p>
                <a href="#" class="btn btn-primary">buy</a>
            </div>
        </div>
        <?php }?>
    </div>
</body>
</html>