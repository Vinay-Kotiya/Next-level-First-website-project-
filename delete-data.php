<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DeletData</title>
<!-- <link rel="stylesheet" href=""> -->
<style>
		
		body{
			font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			background-image:url(5243028) ;
			background-repeat: no-repeat;
			background-size: cover;
			font-weight: 700;
			
		}
	table{
		/* margin-top:30vh ; */
		justify-content: center;
		align-items: center;
		background-color: aliceblue;
		border:2px solid rgb(255, 255, 255);
		border-radius: 20px;
		box-shadow:2px 2px 3px #000;
		/* position:fixed; */
		/* box-shadow:-2px -2px 2px rgb(72, 160, 255) ; */
		}
		input{
			border:2px solid rgb(255, 255, 255);
		border-radius: 10px;
		box-shadow:1px 1px 2px #000;
		}
		.vk{
		    margin: 10px;
			padding: 5px;
			font-weight: 600;
			background-color:lightskyblue;
            font-size: 18px;
            transition:.3s;
		}
	.vk:hover{
		
            margin: 10px;
			padding: 5px;
			font-weight: 600;
			background-color: rgb(72, 160, 255);
            box-shadow:2px 2px 2px #000;
	}
		
		/* #submit
		{
			margin: 10px;
			padding: 5px;
			font-weight: 600;
			background-color: rgb(72, 160, 255);
		} */
		.phpalert
		{
			margin: 20px;
		}
		a{
			text-decoration: none;
			color: black;

		}
		td{
			padding: 10px;
		}
</style>
</head>

<body>
<h3 align="center" class="phpalert">
	
	
	</h3>
	<center><h2 style="color:#000"> Delete Account </h2></center>
	<FORM  method="post">
    	<table align="center">
        	<!-- <tr>
            	<th colspan="2">
					
                	Delete Account
                </th>
            </tr> -->
            <tr>
            	<td>
                	Enter User ID
                </td>
                <td>
                	<input type="text" maxlength="30" 
                    placeholder="Enter ID" name="uname"
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
			
            <th colspan="2">
				<input type="submit" onclick="vkclick()" value="Submit" NAME="msub" class="vk"/>
            </th>
            </tr>
        </table>
    </FORM>
    <?php
    if(isset($_POST["msub"]))
    {
         $uid=$_POST["uname"];
        //$upass=$_POST["pass"];
        $conn=mysqli_connect("localhost","root","","vkdata");
		$str="delete from form2db where rollno=$uid";
		mysqli_query($conn,$str);
		// if(mysqli_query($conn,$str)){
		// 	echo
		// }
    }

    ?>
	
</body>
<script>
</script>
</html>
