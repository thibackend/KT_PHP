
<?php 
session_start();
$products=[
    'giaydep'=>[
        "1"=>[
            "name"=>"Sandal nữ cao gót phong cách Hàn Quốc - Kem",
            "Code"=>"SD02K",
            "Price"=>"459,5847 đ",
            "oldprice"=>"500,500 đ",
            "img"=>'https://cf.shopee.vn/file/e2e2a9a964ac89d803e55fecfc760372'
        ],
        "2"=>[
            "name"=>"Sandal nữ cao gót phong cách Hàn Quốc - Kem",
            "Code"=>"SD02K",
            "Price"=>"459,5847 đ",
            "oldprice"=>"500,500 đ",
            "img"=>'https://cf.shopee.vn/file/e2e2a9a964ac89d803e55fecfc760372'
        ],
        "3"=>[
            "name"=>"Sandal nữ cao gót phong cách Hàn Quốc - Kem",
            "Code"=>"SD02K",
            "Price"=>"459,5847 đ",
            "oldprice"=>"500,500 đ",
            "img"=>'https://cf.shopee.vn/file/e2e2a9a964ac89d803e55fecfc760372'
        ],
        "4"=>[
            "name"=>"Sandal nữ cao gót phong cách Hàn Quốc - Kem",
            "Code"=>"SD02K",
            "Price"=>"459,5847 đ",
            "img"=>'https://cf.shopee.vn/file/e2e2a9a964ac89d803e55fecfc760372'
        ]

        ],
    "tuixach"=>[
        '1'=>[
            "name"=>"Sale hot Túi xách nữ da cao cấp",
            "Code"=>"T68-SP-2A1-ĐEN",
            "Price"=>"600,000 đ",
            "img"=>'https://cdn.sablanca.vn/ImageProducts/sa0047/pik/sa0047_pik_1000x1000_2403973550.jpg'

        ],
        '2'=>[
            "name"=>"Sale hot Túi xách nữ da cao cấp",
            "Code"=>"T68-SP-2A1-ĐEN",
            "Price"=>"600,000 đ",
            "img"=>'https://cdn.sablanca.vn/ImageProducts/sa0047/pik/sa0047_pik_1000x1000_2403973550.jpg'

        ],
        '3'=>[
            "name"=>"Sale hot Túi xách nữ da cao cấp",
            "Code"=>"T68-SP-2A1-ĐEN",
            "Price"=>"600,000 đ",
            "img"=>'https://cdn.sablanca.vn/ImageProducts/sa0047/pik/sa0047_pik_1000x1000_2403973550.jpg'

        ]
    ]

        ];

?>
<html> 
<link rel="stylesheet" href="bt.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <body>
    <form action="products.php">
    <div class="mb-3 mt-3">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name product" name="name">
    </div>
    <div class="mb-3">
      <label for="pwd">Price</label>
      <input type="text" class="form-control" id="Price" placeholder="Enter passwor Price" name="Price">
    </div>
    <div class="mb-3">
      <label for="pwd">Img</label>
      <input type="text" class="form-control" id="Price" placeholder="Enter passwor Price" name="img">
    </div>
    <div class="mb-3">
      <label for="pwd">Code</label>
      <input type="text" class="form-control" id="Price" placeholder="Enter passwor Price" name="img">
    </div>
    <button type="submit" class="btn btn-primary">Submit </button>
  </form>

  <!-- em làm đoạn này chưa xong thầy ạ chưa thêm được sản phẩm ạ -->
    </body>
</html>