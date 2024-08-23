<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPform</title>
<style>
		body{
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			background-image:url(5243028) ;
			/* background-color:black; */
			background-repeat: no-repeat;
			background-size: cover;
			/* position: relative; */
		}
	table{
		margin-top:38vh ;
		/* justify-content: center;
		align-items: center; */
		background-color: aliceblue;
		/* position:absolute; */
		border:2px solid rgb(255, 255, 255);
		border-radius: 20px;
		box-shadow:2px 2px 3px rgb(72, 160, 255);
		/* box-shadow:-2px -2px 2px rgb(72, 160, 255) ; */
		}
		input{
			border:2px solid rgb(255, 255, 255);
		border-radius: 10px;
		box-shadow:1px 1px 2px rgb(72, 160, 255);
		}
        .butt
		{
			margin: 10px;
			padding: 5px;
			font-weight: 600;
			background-color: rgb(72, 160, 255);
		}
</style>
</head>

<body>
	<FORM action="PHP-FORM.php" method="post">
    	<table align="center">
        	<tr>
            	<th colspan="2">
					
                	Login Form
                </th>
            </tr>
            <tr>
            	<td>
                	Enter User Name
                </td>
                <td>
                	<input type="password" maxlength="30" 
                    placeholder="Enter New Password" name="newpass"
                     id="newpass" required="required"/>
                </td>
            </tr>
            <tr>
            	<td>Enter Password</td>
            
            	<td>
                	<input type="number" maxlegth="20"
                    placeholder="Enter OTP" name="otp"
                    id="otp" required="required" />
                </td>
            </tr>
            <tr>
                
            	<th colspan="2">
                    <input type="button" name="cretopt" class="butt" value="Create OTP"/>                   
                	<input type="submit" onclick="vkclick()" value="Chenge" NAME="sub" class="butt"/>
                </th>
            </tr>
        </table>
    </FORM>
	
</body>
<script>

	// function vkclick()
	// {		
	// 	var upass="vinay";
	// 	var wpass=7714;
	// 		var ne=document.getElementById("ne").value;
	// 		var pass=document.getElementById("pass").value;
	// 		//document.write(ne);
	// 		//document.write(pass);
	// 		if(ne==upass)
	// 		{
	// 			if(pass==wpass)
	// 			{
	// 				alert("User-Name and Password is True");
	// 				// document.write(ne,pass);
					
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
