<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: h_home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
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
    <form action="h_register.php" method="post">
            <h2>Hospital Registration Form</h2>
            <br><br><br>
    <?php
    // print_r($_POST);
    if(isset($_POST["submit"]))
    {
        $HospitalName = $_POST["HospitalName"];
        $h_RegNo = $_POST["h_RegNo"];
        $h_email = $_POST["h_email"];
        $h_contact = $_POST["h_contact"];
        $h_City = $_POST["h_City"];
        $h_Speciality = $_POST["h_Speciality"];
        $password = $_POST["password"];
        $repeat = $_POST["repeat"];

        $errors = array();
        if(empty($HospitalName) OR empty($h_RegNo) OR empty($h_email) OR empty($h_contact) OR empty($h_City) OR empty($h_Speciality) OR empty($password) OR empty($repeat))
        {
            array_push($errors,"All fields are required");
        }
        if (!filter_var($h_email, FILTER_VALIDATE_EMAIL)) 
        {
            array_push($errors, "Email is not valid");
        }
        if (strlen($password)<8) 
        {
            array_push($errors,"Password must be at least 8 charactes long");
        }
        if ($password!==$repeat) 
        {
            array_push($errors,"Password does not match");
        }

        require_once "./database.php";
        $sql = "SELECT * FROM hospital_login WHERE reg_no = '$h_RegNo'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
         array_push($errors,"Hospital Reg No already exists!");
        }
        if (count($errors)>0)
        {
            foreach ($errors as  $error)
            {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }
        else
        {
            
            $sql = "INSERT INTO hospital_login (reg_no , h_name, h_email, h_phone, h_city, h_speciality, h_password) VALUES ( ?, ?, ? , ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssisss",$h_RegNo,$HospitalName, $h_email, $h_contact,$h_City,$h_Speciality,$password);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
    }
    ?>


            <div class ="form-group">
                <label for="HospitalName">Hospital Name: </label><span class="star">*</span>
                  <input type="text"  name="HospitalName" placeholder="eg : Aster Adhaar">
            </div>
            <div class ="form-group">
                <label for="h_RegNo">Hospital Reg.No: </label><span class="star">*</span>
          <input type="text"  name="h_RegNo" placeholder="eg : AA12789BGH23">
            </div>

            <div class ="form-group">
            <label for="h_email">Hospital email: </label><span class="star">*</span>
            <input type="email"  name="h_email" placeholder="eg : marketing.aadhar@asterhospital.com" id="h_email">
            </div>

            <div class="form-group">
            <label for="contact">Contact Number: </label><span class="star">*</span>
            <input type="number"   name="h_contact" placeholder="eg : 9623896869" id="h_contact">
            </div>

            <div class="form-group">
            <label for="h_City">City :  </label><span class="star">*</span>
            <input type="text"   name="h_City" placeholder="eg : Kolhapur">
            </div>

            <div class="form-group">
                <label for="h_Speciality">Speciality:  </label><span class="star">*</span>   
                <input type="text"   name="h_Speciality" placeholder="eg : Cardiac ">
                </div>

            <div class="form-group">
            <label for="password">Password:  </label><span class="star">*</span>   
            <input type="Password" name="password" placeholder="eg : Pass@123">
            </div>
            <br>
            
            <div class="form-group">
            <label for="repeat">Confirm Password:  </label><span class="star">*</span>  
           
                <input type="Password" name="repeat" placeholder=" Same as above ">
            </div>
            
            <div class="form-btn btn">
                <input type="submit" class =" btn" name="submit" value="Register">
            </div>
        </form>
        <br>
        <div>
        <div><p>Already Registered <a href="index.php">Login Here</a></p></div>
      </div>
    </div>
</body>
</html>