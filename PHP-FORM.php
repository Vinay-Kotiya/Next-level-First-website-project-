<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPform</title>
<style>
		
		html,body{
			font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			background-image:url(5243028.jpg) ;
			/* background-color: #000; */
			background-repeat: no-repeat;
			background-size: cover;
			font-weight: 700;
			/* display: flex; */
			
		}
	table{
		margin-top:30vh ;
		justify-content: center;
		align-items: center;
		background-color: aliceblue;
		border:2px solid rgb(255, 255, 255);
		border-radius: 20px;
		box-shadow:2px 2px 3px rgb(72, 160, 255);
		/* position:fixed; */
		/* box-shadow:-2px -2px 2px rgb(72, 160, 255) ; */
		}
		input{
			
			border:2px solid rgb(255, 255, 255);
		border-radius: 10px;
		box-shadow:1px 1px 2px #000;
		}
		
		#submit{
		    margin: 10px;
			padding: 5px;
			font-weight: 600;
			background-color:lightskyblue;
            font-size: 18px;
            transition:.3s;
			border:2px solid rgb(255, 255, 255);
		border-radius: 10px;
		box-shadow:1px 1px 2px #000;
		}
		#submit:hover{
		
            margin: 10px;
			padding: 5px;
			font-weight: 600;
			background-color: rgb(72, 160, 255);
            box-shadow:2px 2px 2px #000;
	}
		
		.phpalert
		{
			margin: 20px;
		}
		a{
			text-decoration: none;
			color: black;

		}
</style>
</head>

<body>
<h3 align="center" class="phpalert">
	
	<?php
	
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
			 $course=filter_input(INPUT_POST,'course',FILTER_SANITIZE_STRING);
		
			 
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
						  //  echo"$ject";
					}
			
	 
			 $fullname="$fname $mname $lname";
			 
	 
			 $conn=mysqli_connect('localhost','root','','vkdata');
			$str="INSERT INTO `form2db` VALUES($rollno,'$pass','$fullname','$email','$number','$gender',$age,'$course','$ject')";
			mysqli_query($conn,$str);
		   
			 if ($conn)
			 echo $conn->error;
			else
			echo('Connection fail');
			// if($conn->query($str)===true)
			// {
			//        echo'row inserted';
			// }
			// else{
			//        echo $conn->error;
			// }
			
		   
			 
			 // $option[0]=$_POST["option1"];
			 // $option[1]=$_POST["option2"];
			 // $option[2]=$_POST["option3"];
			 // $option[3]=$_POST["option4"];
			 // $option[4]=$_POST["option5"];
			 // $option[5]=$_POST["option6"];
			//  echo "<style>
			// 	   table{
			// 			  border:solid black 1px;
			// 			  margin:30vh; 
			// 			  margin-left:40vw;
	 
			// 			  padding:0;
			// 			  border-radius:6px;
			// 	   }
			// 	   td{
			// 			  background-color:#DFDFDF;
			// 			  border-radius:3px;
			// 	   }
	 
			//  </style>";
	//This is for display all datafor Recheck
			//  echo "<table>";
			//  echo "<tr><th colspan=2>User Information</th></tr>";
			//  echo "<tr><td>Rollno:</td><td>$rollno</td></tr>";
			//  echo "<tr><td>Name:</td><td>$fname $mname $lname</td></tr>";
			//  echo "<tr><td>PassWord:</td><td>$pass</td></tr>";
			//  echo "<tr><td>Email:</td><td>$email</td></tr>";
			//  echo "<tr><td>Number:</td><td>$number</td></tr>";
			//  echo "<tr><td>Gender:</td><td>$gender</td></tr>";
			//  echo "<tr><td>Age:</td><td>$age</td></tr>";
			//  echo "<tr><td>Course:</td><td>$course</td></tr>";
			 
			// 	   if(isset($_POST["sub"]))
			//  {
			// 		if(!empty($_POST["subject"]))
			// 		{  $i=0;
			// 			  echo "<tr><td>Subject:</td><td>";
			// 			   foreach($_POST["subject"] as $c)
			// 			   {
							   
			// 					  if($i==1||$i==2||$i==3)
			// 					  {
			// 							 echo",";
			// 					  }
			// 					  echo"$c ";
			// 					  $i++;
								 
			// 			   }
			// 			   echo " </td></tr>";
						  
			// 		}
			//  }
			//  echo"</table>";
	 
			} 
			?>
	</h3>
	<FORM  method="post" action="phpcode.php" >
    	<table align="center">
        	<tr>
            	<th colspan="2">
					
                	Login Form
                </th>
            </tr>
            <tr>
            	<td>
                	Enter Roll No.
                </td>
                <td>
                	<input type="text" maxlength="30" 
                    placeholder="Enter Roll No." name="uname"
                     id="uname" required="required"/>
                </td>
            </tr>
            <tr>
            	<td>Enter Password</td>
            
            	<td>
                	<input type="password" maxlegth="20"
                    placeholder="Enter Password" name="pass"
                    id="pass" required="required" />
                </td>
            </tr>
            <tr>
			<td>
			<a href="Form2Tag.php"  id="submit">Sign up</a>
			</td>
            <th>
				<input type="submit" onclick="vkclick()" value="Login" NAME="msub" id="submit"/>
            </th>
            </tr>
        </table>
    </FORM>
	
</body>
<script>
	// function vkclick()
	// {
	// 	window.location.replace("http://localhost:90/PHP_VK24/Allmainshery-car-explor.php");
	// 	// windos.open("Allmain\shery-car-explor.php");
	// }

	// function vkclick()
	// {		
	// 	var upass="vinay";
	// 	var wpass=7714;
	// 		var uname=document.getElementById("uname").value;
	// 		var pass=document.getElementById("pass").value;
	// 		//document.write(uname);
	// 		//document.write(pass);
	// 		if(uname==upass)
	// 		{
	// 			if(pass==wpass)
	// 			{
	// 				alert("User-Name and Password is True");
	// 				// document.write(uname,pass);
	// 				window.scr="";
					
	// 			}
	// 			else{
	// 				alert("Password is False");
	// 				}		
	// 		}
	// 		else{
	// 			alert("User Name is False");
	// 			}
			
	// }
</script>
</html>
