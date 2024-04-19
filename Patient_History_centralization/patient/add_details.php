



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient Details</title>

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
        
<?php
    // print_r($_POST);
    if(isset($_POST["submit"]))
    {
        $adhar = $_POST["adhar"];
        $diagnosis = $_POST["diagnosis"];
        $Treatment = $_POST["Treatment"];
        $HospitalName = $_POST["HospitalName"];

        //file upload
        $filename = $_FILES["choosefile"]["name"];
        $tempfile = $_FILES["choosefile"]["tmp_name"];
        $folder = "image/".$filename;

        $errors = array();
        if(empty($adhar) OR empty($diagnosis) OR empty($Treatment) OR empty($HospitalName) OR empty($filename))
        {
            array_push($errors,"All fields are required");
        }

        require_once "../database.php";
        $sql = "SELECT Aadhar FROM patient WHERE Aadhar = $adhar";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount<1) {
          array_push($errors,"Invalid Aadhar or not yet Registered");
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
            //file upload - edited between
            $sql = "INSERT INTO `$adhar`( Diagnosis, Treatment, Hospital_treated, Files) VALUES ( ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ssss",$diagnosis, $Treatment, $HospitalName, $filename);
                mysqli_stmt_execute($stmt);
                move_uploaded_file($tempfile, $folder);
                echo "<div class='alert alert-success'>Patients details added successfully!! CLick on Home Page Button.</div>";
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
       <form action="add_details.php" method="post" enctype="multipart/form-data" > <!-- file upload-->
                    <h2>Add Patient Details</h2>
                    <br>
                    <div class ="form-group">
                        <label for="adhar">Adhar no. </label><span class="star"><b>*</b></span>
                        <input type="text"  name="adhar" placeholder="eg. XXXXXXXXXX12">
                    </div>

                    <div class="form-group">
                        <label for="diagnosis">Diagnosis</label><span class="star"><b>*</b></span>   
                        <input type="text" name="diagnosis" placeholder="eg. Cancer">
                    </div>
                    
                    <div class="form-group">
                        <label for="teatment">Treatment</label><span class="star"><b>*</b></span>   
                        <input type="text" name="Treatment" placeholder="eg. Chemotherapy">
                    </div>

                    <div class="form-group">
                        <label for="HospitalName">Hospital Name</label><span class="star"><b>*</b></span>   
                        <input type="text" name="HospitalName" placeholder="eg. CPR Hospital">
                    </div>
                    
                    <!-- file upload -->
                    <div class="form-group">
                        <input type="file" class="form-control" name="choosefile"  id="">
                    </div>
                    <br><br>

                    <div class="buttons-bottom">
                        <div class="form-btn">          
                            <input type="submit" class =" btn btn-primary" name="submit" value="Add Details">
                        </div>
                        <div class="form-btn">
                            <a href="../h_home.php" class="btn">Home Page</a>
                        </div>    
                    </div>

                </form>
                <br>
               
            </div>
        </div>

</body>
</html>