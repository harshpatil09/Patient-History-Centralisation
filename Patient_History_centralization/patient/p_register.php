
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>New Patient Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="p_reg.css">

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
       <form action="p_register.php" method="post">
               <h2>Patient Registration Form</h2>
               <br><br><br>
    <?php
    // print_r($_POST);
    if(isset($_POST["submit"]))
    {
        $PatientName = $_POST["PatientName"];
        $Aadhar = $_POST["Aadhar"];
        $BirthDate = $_POST["BirthDate"];
        $bgroup = $_POST["bgroup"];
        $p_email = $_POST["p_email"];
        $p_contact = $_POST["p_contact"];
        $p_City = $_POST["p_City"];
    

        $errors = array();
        if(empty($PatientName) OR empty($Aadhar) OR empty($BirthDate) OR empty($bgroup) OR empty($p_email) OR empty($p_contact)  OR empty($p_City))
        {
            array_push($errors,"All fields are required");
        }
        if (!filter_var($p_email, FILTER_VALIDATE_EMAIL)) 
        {
            array_push($errors, "Email is not valid");
        }

        require_once "../database.php";
        $sql = "SELECT * FROM patient WHERE Aadhar = '$Aadhar'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            array_push($errors,"Adhaar No already exists!");
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
            
            $sql = "INSERT INTO patient (PatientName , Aadhar, bgroup, BirthDate,p_email, p_contact, City) VALUES ( ?, ?, ? , ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sisssis",$PatientName,$Aadhar, $bgroup, $BirthDate, $p_email,$p_contact,$p_City);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully!! CLick on Home Page Button.</div>";

                // Create a table with the patient's Aadhar as the table name
                 $createTableSql = "CREATE TABLE IF NOT EXISTS `$Aadhar` (id INT(11) AUTO_INCREMENT PRIMARY KEY,Diagnosis VARCHAR(50),Treatment VARCHAR(50), Hospital_treated VARCHAR(50),Files VARCHAR(50) )";

               if (mysqli_query($conn, $createTableSql)) {
                 echo "Table '$Aadhar' created successfully.";
                } else {
                    echo "Error creating table: " . mysqli_error($conn);
                     }
            }
            else
            {
                die("Something went wrong");
            }
            // Close the statement
            mysqli_stmt_close($stmt);

            // Close the database connection when you're done with it
            mysqli_close($conn);
        }
    }
    ?>

               <div class ="form-group">
                   <label for="PatientName">Patient Name  :</label><span class="star"><b>*</b></span>
                     <input type="text"  name="PatientName" placeholder="eg : Name Surname">
               </div>
               <div class ="form-group">
                   <label for="Aadhar">Aadhar No : </label><span class="star"><b>*</b></span>
             <input type="number"  name="Aadhar" placeholder="eg : XXXXXXXXXX12">
               </div>

                <div class="form-group">
                <label for="bgroup">Blood Group : </label><span class="star"><b>*</b></span>
                <input type="text" name="bgroup" placeholder="eg : A+ ">
                </div>
               
                <div class="form-group">
                <label for="bgroup">Birth Date :</label><span class="star"><b>*</b></span>
                <input type="date" name="BirthDate">
                </div>

               <div class ="form-group">
               <label for="p_email">Patient email :</label><span class="star"><b>*</b></span>
               <input type="email"  name="p_email" placeholder="eg : patient@gmail.com" id="p_email">
               </div>
   
               <div class="form-group">
               <label for="p_contact">Contact Number :</label><span class="star"><b>*</b></span>
               <input type="number"   name="p_contact" placeholder="eg : 8291399745" id="p_contact">
               </div>
   
               <div class="form-group">
               <label for="p_City">City: </label><span class="star"><b>*</b></span>
               <input type="text"   name="p_City" placeholder="eg : Kolhapur">
               </div>

               <br>
               <div class="buttons-bottom">
                    <div class="btn">
                        <input type="submit" class =" btn" name="submit">
                    </div>
                        
                    <div class="form-btn">
                        <a href="../h_home.php" class="btn">Home Page</a>
                    </div>
               </div>
           </form>
       </div>
   </body>
   </html>