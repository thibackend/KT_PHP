

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 0);
function validate(){
    $errors =[];
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
      }
    if(empty($_POST["fName"])){
        $errors["fName"]="Need enter first name";
    }
    if(empty($_POST["lName"])){
        $errors["lName"]="Need enter last name";
    }

    if(empty($_POST["password"])){
        $errors["password"]="Need enter password";
    }else{
        if(strlen($_POST["password"])<8){
            $errors["password"]="enter leatest 8 letter";
        }
    }
    return $errors;
}

if(isset($_REQUEST["signup"])){
    $errors=validate();
    if(empty($errors)){
        $name=$_POST['fName']." ".$_POST['lName'];
        $info=[
            "name"=>$name,
            "email"=>$_POST['email'],
            "password"=>$_POST['password']
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<link rel="stylesheet" href="bt.css">
<body>
<center>
    <form action="" class="frm" method="POST">
        <h2>Welcome</h2>
        <input type="text" name="email" id="email" placeholder="Work email" value="<?php echo$_POST['email'] ?>">
        <br><span class="error"><?php if(isset($_REQUEST["signup"])){ echo $errors["email"]; }?></span>
         <br>
        <div class="name">
            <div class="fname">
              <input type="text" name="fName" id="fName" placeholder="First Name"value="<?php echo$_POST['fName'] ?>"><br>
              <span class="error"><?php if(isset($_REQUEST["signup"])){ echo $errors["fName"];} ?></span>
            </div><br>
            <div class="lname">
                <input type="text" name="lName" id="lName" placeholder="Last Name" value="<?php echo$_POST['lName'] ?>"><br>
                <span class="error"><?php if(isset($_REQUEST["signup"])){ echo $errors["lName"];}?></span>
             </div><br>
        </div>
        <input type="text" name="password" id="password" placeholder="Password"value="<?php echo$_POST['password'] ?>"> <br>
        <span class="error"><?php if(isset($_REQUEST["signup"])){ echo $errors["password"];}?></span><br>
        <input type="submit" value="Sign Up" name="signup">
    </form>

       <?php if(isset($_POST['signup'])&& empty($errors)) { ?>
       <ul>
       <li> Name:<?php echo "   ". $info["name"]?></li>
        <li> Email:<?php echo "   ". $info['email']?></li>
        <li> Password:<?php echo "   ".$info["password"]?></li>
       </ul>
       <br><br>
        <h3>Hello  <?php echo "  ". $info["name"]?></h3>
        <h4> Do you want to see your product?</h4> <br>
        <button><a href="products.php">Yes</a></button> <button><a href="index.php">No</a></button>
       <?php }?>
       
</center>
</body>
</html>