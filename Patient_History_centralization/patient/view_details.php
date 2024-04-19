

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="view_details.css">
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="topg">
                <img src ="../h_images/logoo.png" alt="" class="logo">
                <input type="text" placeholder="search data" name="search">
                <button class="btn" name="submit">search</button>
                <a href="../h_home.php" class="btn b2">Home Page</a>
            </div>    
        </form>
        <div class="container my-5">
            <table class="table">
                
            <?php
                error_reporting(0);
                if (isset($_POST["submit"])) {
                $search=$_POST["search"];
                
                require_once "../database.php";
                $sql1="Select * from  `$search`";
                $sql = "SELECT * FROM patient WHERE Aadhar = $search";
                $result1=mysqli_query($conn,$sql1);
                $result=mysqli_query($conn,$sql);

                if($result){
                    if(mysqli_num_rows($result)>0)
                    {   
                        while($row=mysqli_fetch_assoc($result)){
                            echo'<ul class="final" >
                                     <h5 class = "data">Name: '.$row['PatientName'].'</h5>
                                     <h5 class = "data">Aadhar: '.$row['Aadhar'].'</h5>
                                     <h5 class = "data">Contact: '.$row['p_contact'].'</h5>
                                     <h5 class = "data">Patient Email: '.$row['p_email'].'</h5>       
                                     <h5 class = "data">Blood Group: '.$row['bgroup'].'</h5>
                                     <h5 class = "data">Birthday: '.$row['BirthDate'].'</h5>      
                                     <h5 class = "data">City: '.$row['City'].'</h5>
                                 </ul>   
                                 <br>
                                 <br> 
                            ';
                        }
                    }
                    else{
                        echo '<h2 class="text-danger">Data not Found</h2>';
                    }
                }

                if($result1){
                      if(mysqli_num_rows($result1)>0)
                      {
                        echo '<thead>
                        <tr>
                        <th><h3> Sr no </h3></th>
                        <th><h3>Diagnosis</h3></th>
                        <th><h3>Treatment</h3></th>
                        <th><h3>Hospital Treated</h3></th>
                        <th><h3>Files</h3></th>     
                        
                        </tr>
                        </thead>';

                        while($row=mysqli_fetch_assoc($result1))
                        {

                        echo '<tbody>
                        <tr>
                        <td><b><h4>'.$row['id'].'</h4></b></td>
                        <td><b><h4>'.$row['Diagnosis'].'</h4></b></td>
                        <td><b><h4>'.$row['Treatment'].'</h4></b></td>
                        <td><b><h4>'.$row['Hospital_treated'].'</h4></b></td>
                        
                        ';

                        echo "";

            ?>

                        <td><b><a href="./image/<?php echo $row['Files'] ?>" target="_blank"><?php echo $row['Files']?></a></b></td>
               
     
                        
                        <?php
                "";
                echo '
                        </tr>
                        
                        </tbody>';
                        }
                      } 
                }

                // else{
                //     echo '<h2 class="text-danger">Data not Found</h2>';
                // }
                }
                ?>
                
                
            
            </table>
            <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                     
                        
        </div>
    </div>
</body>
<footer>
<div class="footerConatiner">
	<!--<div class="socialIcons">
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
		<a href=""><i class ="fa-brands fa-facebook"></i></a>
	</div>-->
	<div class="footerNav">
		<ul>
			<li><a href ="">Home</a></li>
			<li><a href ="">About</a></li>
			<li><a href ="">Contact Us</a></li>
			<!--<li><a href ="">Home</a></li>-->
		</ul>
	</div>
	<div class="footerBottom">
		<p>Copyright &copy; 2022</p>
	</div>
</div>
</footer>
</html>