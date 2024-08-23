<title>DATA-BASE</title>


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        
    body{
       font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			font-weight: 700;
			background-image:url(5243028.jpg) ;
			background-repeat: no-repeat;
			background-size: cover;
                     /* display: flex;
                     align-items: center;
                     margin: 1vh; */
    }
    #main{
             display: flex;
            align-items: center;
            justify-content: center;
            /* margin:10px;  */
            width: 100vw;
            height: 100vh;
    }
    #part{
        height: 95vh;
        width: 20vw;
        border-radius: 20px;
	box-shadow:2px 2px 3px #000;
        background-color: transparent;
        margin: .1vh; 
        padding:1vw;
        /* align-items: center;
        position: relative; */
    }
    .mainpart
    {
        height: 95vh;
        width: 80vw;
        border-radius: 20px;
	box-shadow:2px 2px 3px #000;
        background-color: transparent;
        margin: .1vh; 
        padding:1vw;
    }
     a{
       color:#000;
       text-decoration: none;
      
    }
    a:hover{
       text-shadow: 2px 2px 3px cornflowerblue;
       color:#000;
       padding: 10px;
    }
    .links{
       margin: 40px;

    }
    .links li{
       border:2px solid lightskyblue;
       padding: 5px;
       border-radius: 20px;
       margin:10px;
       list-style: none;
    }
     .links :hover{
       text-shadow: 2px 2px 3px lightskyblue;
       /* color:#000; */
       padding: 10px;
    }
    .head{
       width:100%;
       height: 20vh;
       background-color:lightskyblue;
       border-radius: 20px;
       padding-top: 10vh;
    }
    </style>
</head>
<body>
    <div id="main">
        <div id="part">
              <ul class="links">
                     <li> <a href="PHP-FORM.php">Login</a></li>
                     <li><a href="UPDATE-DATA.php">Edite Data</a></li>
                     <li> <a href="delete-data.php">Delete Account</a></li>
              </ul>
        
        </div>
        <div class="mainpart">
              <div class="head" align="center"> <h1>User Imformation</h1></div>
            <?php
            session_start();
       
            //This code for insert data in database
                   if(isset($_POST["sub"])) 
                   {
                    
                    $rollno=$_POST["rno"];
                    $pass=$_POST["pass"];
                    $fname=$_POST["fname"];
                    $mname=$_POST["mname"];
                    $lname=$_POST["lname"];
                    $email=$_POST["email"];
                    $number=$_POST["mnumber"];
                    $gender=$_POST["gender"];
                    $age=$_POST["age"];
                    $course=filter_input(INPUT_POST,'course');//,FILTER_SANITIZE_STRING
               
                    
                           if(!empty($_POST["subject"]))
                           {  $i=0;
                                 $ject="";
                                
                                  foreach($_POST["subject"] as $c)
                                  {
                                          if($i==1||$i==2||$i==3)
                                          {
                                                 $ject=$ject.",";
                                          }
                                         $ject=$ject.$c;
                                         
                                         $i++;
                                        
                                  }
                           }
                    $fullname="$fname $mname $lname";
                    $conn=mysqli_connect('localhost','root','','vkdata');
                   $str="INSERT INTO `form2db` VALUES($rollno,'$pass','$fullname','$email','$number','$gender',$age,'$course','$ject')";
                   mysqli_query($conn,$str);
                  
                    if ($conn)
                    echo $conn->error;
                   else
                   echo('Connection fail');
                  
                    echo "<style>
                          table{
                                 border:solid black 1px;
                                 margin:30vh; 
                                 margin-left:40vw;
            
                                 padding:0;
                                 border-radius:6px;
                          }
                          td{
                                 background-color:#DFDFDF;
                                 border-radius:3px;
                          }
            
                    </style>";
                    echo "<table>";
                    echo "<tr><th colspan=2>User Information</th></tr>";
                    echo "<tr><td>Name:</td><td>$fname $mname $lname</td></tr>";
                    echo "<tr><td>Email:</td><td>$email</td></tr>";
                    echo "<tr><td>Number:</td><td>$number</td></tr>";
                    echo "<tr><td>Gender:</td><td>$gender</td></tr>";
                    echo "<tr><td>Age:</td><td>$age</td></tr>";
                    echo "<tr><td>Course:</td><td>$course</td></tr>";
                    
                          if(isset($_POST["sub"]))
                    {
                           if(!empty($_POST["subject"]))
                           {  $i=0;
                                 echo "<tr><td>Subject:</td><td>";
                                  foreach($_POST["subject"] as $c)
                                  {
                                      
                                         if($i==1||$i==2||$i==3)
                                         {
                                                echo",";
                                         }
                                         echo"$c ";
                                         $i++;
                                        
                                  }
                                  echo " </td></tr>";
                                 
                           }
                    }
                    echo"</table>";
            
                   } 
            //This code for Update data in database
                   if(isset($_POST["edit"])) 
                   {
                    $rollno=$_POST["rno"];
                    $fname=$_POST["fname"];
                    $mname=$_POST["mname"];
                    $lname=$_POST["lname"];
                    $email=$_POST["email"];
                    $number=$_POST["mnumber"];
                    $gender=$_POST["gender"];
                    $age=$_POST["age"];
                    $course=filter_input(INPUT_POST,'course');//,FILTER_SANITIZE_STRING      
                           if(!empty($_POST["subject"]))
                           {  $i=0;
                                 $ject="";
                                
                                  foreach($_POST["subject"] as $c)
                                  {
                                          if($i==1||$i==2||$i==3)
                                          {
                                                 $ject=$ject.",";
                                          }
                                         $ject=$ject.$c;    
                                        $i++;        
                                  }
                                  echo"$ject";
                           }
                    $fullname="$fname $mname $lname";
                    $conn=mysqli_connect('localhost','root','','vkdata');
                   $str="UPDATE `form2db` SET name='$fullname',email='$email',p_number='$number',
                   gender='$gender',age=$age,course='$course',subject='$ject' where rollno=$rollno";
                   mysqli_query($conn,$str);
                  
                    if ($conn)
                    echo('Connection done');
                   else
                   echo('Connection fail');

                    echo "<style>
                          table{
                                 border:solid black 1px;
                                 margin:30vh; 
                                 margin-left:40vw;
            
                                 padding:0;
                                 border-radius:6px;
                          }
                          td{
                                 background-color:#DFDFDF;
                                 border-radius:3px;
                          }
            
                    </style>";
                    echo "<table>";
                    echo "<tr><th colspan=2>User Information</th></tr>";
                    echo "<tr><td>Name:</td><td>$fname $mname $lname</td></tr>";
                    echo "<tr><td>Email:</td><td>$email</td></tr>";
                    echo "<tr><td>Number:</td><td>$number</td></tr>";
                    echo "<tr><td>Gender:</td><td>$gender</td></tr>";
                    echo "<tr><td>Age:</td><td>$age</td></tr>";
                    echo "<tr><td>Course:</td><td>$course</td></tr>";
                    
                          if(isset($_POST["sub"]))
                    {
                           if(!empty($_POST["subject"]))
                           {  $i=0;
                                 echo "<tr><td>Subject:</td><td>";
                                  foreach($_POST["subject"] as $c)
                                  {
                                      
                                         if($i==1||$i==2||$i==3)
                                         {
                                                echo",";
                                         }
                                         echo"$c ";
                                         $i++;
                                        
                                  }
                                  echo " </td></tr>";
                                 
                           }
                    }
                    echo"</table>";     
                   }   
                   $trueroll;       
            if(isset($_POST['msub']))
            {  
                          $roll=$_POST["uname"];
                          $pas=$_POST["pass"];
                          $conn=mysqli_connect("localhost","root","","vkdata");
                          $str="select rollno,pass_word from form2db where rollno=$roll and pass_word='$pas'";
                          $result=mysqli_query($conn, $str);
                          $row=mysqli_fetch_array($result);
                   //Thids is for print Roll no and Pass
                     //      echo"".$row[0]."".$row[1];
            
                          if($roll==$row[0]&&$pas==$row[1])
                          {        $_SESSION['trueroll']=$row[0];
                                 echo "<script>
                                        alert('User-Name and Password is Correct')
                                               </script>";
                          }
                          else{
                                 echo "<script>
                                 alert('User-Name and Password is Incorrect')
                                        </script>";

                          }
                   //tHIS IS TO PRINT ALL DATA IN ROW
                          // $i=0;
                    //         while($i<=8){
                            
                    //                 echo"$row[$i]<br>";
                    
                    //             $i++;
                    //         }
            }
            
                   
                   // if($username==$uname&&$_SESSION['newp']==$pas)
                   // {	
                          
                          
                   // 	echo '<a href="Allmain\shery-car-explor.php" calss="homesuc">Home Page</a>';
                   // 	echo '<script>
                   // 	 window.location.replace("http://localhost:90/PHP_VK24/Allmainshery-car-explor.php");
                   // 	// windos.open("Allmain\shery-car-explor.php");
                   // 		  </script>';
            
            
                          
                   // }
                   // else{
                   // 	echo '<script type="text/JavaScript">
                   // 	alert("Password is Wrong");
                   // 	</script>';
                   // }
                   
                   
                   
//main select script
// global $rollno;

       $ron=$_SESSION['trueroll'];
                $conn=mysqli_connect("localhost","root","","vkdata");
                $str="select rollno,name,email,p_number,gender,age,course,subject from form2db where rollno=$ron";
                $result=mysqli_query($conn, $str);
                ?>
                
               <table>
               <?php
               
               while($row=mysqli_fetch_assoc($result))
               {
              
                     echo "<style>
                          table{
                                
                                 width:100%;
                                 height: 60vh;
                                 border-radius: 20px;
                                 font-size:30px;
                                 


                          }
                                 
                          td{
                                 background-color: aliceblue;
                                 border-radius:20px;
                                 padding:5px;
                                 border:2px solid lightskyblue;
                            
                          }
            
                    </style>";
                        echo"<tr>
                               <td>Rollno: $row[rollno]</td>
                           
                               <td>Name: $row[name] </td>
                            </tr>
                            <tr>
                               <td>Email: $row[email] </td>
                            
                               <td>phone number: $row[p_number] </td>
                            </tr>
                            <tr>
                               <td>Gender: $row[gender] </td>
                           
                               <td>Age: $row[age] </td>
                            </tr>
                            <tr>
                               <td>Course: $row[course] </td>
                            </tr>
                            ";
                                   
             
               }

              //   $i=0;
              //   while($i<=7){
                
              //           echo"$row[$i]<br>";
        
              //       $i++;
              //   }
            
                ?>

        </div>
    </div>
    
</body>
</html>