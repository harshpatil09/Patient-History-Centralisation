<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: h_home.php");
}
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Login</title>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="logreg.css">
   
   <style>
        *{
            box-sizing: content-box !important;
        }
        label{
            width:140px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
        if (isset($_POST["login"])) {
           $RegNo = $_POST["h_RegNo"];
           $password = $_POST["password"];
            require_once "./database.php";
            $sql = "SELECT * FROM hospital_login WHERE reg_no = '$RegNo'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                // if (password_verify($password, $user["h_password"])) {
                if ($password == $user["h_password"]) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: h_home.php");
                    die();
                 }else{
                     echo "<div class='alert alert-danger'>Password does not match</div>";
                 }
            }else{
                echo "<div class='alert alert-danger'>Hospital Reg No does not match</div>";
            }
        }
        ?>

    <form action="index.php" method="post">
            <h2>Hospital Login Page</h2>
            <br><br><br>
            <div class ="form-group">
                <label for="h_RegNo">Hospital Reg.No : </label>
                <input type="text"  name="h_RegNo" placeholder="Enter Hospital Registration No">
            </div>

            <div class="form-group">
                <label for="password">Password :  </label>   
                <input type="Password" name="password" placeholder="Enter Password">
            </div>

            <div class="form-btn">
                <input type="submit" class =" btn" name="login" value="Login">
            </div>
        </form>
        <br>
        <div><p>Not registered yet <a href="h_register.php">Register Here</a></p></div>
    </div>
</div>
    
</body>
</html>