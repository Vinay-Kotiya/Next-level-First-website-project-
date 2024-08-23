<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login FORM</title>
<style>
    body{
			margin: 0;
            padding: 0;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			background-image:url(5243028.jpg) ;
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
    .gender
    {
        box-shadow: 1px 1px 5px  #fff;

    }
   td{
    padding: 10px;
   }
  
</style>
</head>

<body>
 <center>
<div class="main">
	<center><h1 style="color:#000">Sign-in</h1></center>
 
	<form action="PHP-FORM.php" method="post">
    
        <table border="0">
            <tr>
                <td>Roll.No</td>
                <td><input type="number" name="rno" required="required"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass" required="required"/></td>
            </tr>


			<tr>
            	<td>Your Name:</td>
                <td><input type="text" name="fname" required="required"/></td>
            </tr> 
            <tr>
            	<td>Father's Name:</td>
                <td><input type="text" name="mname" required="required"/></td>
            </tr>           
            <tr>
            	<td>Surname Name:</td>
                <td><input type="text" name="lname" required="required" /></td>
            </tr>
            <tr>
            <td>Email:</td>
            <td><input type="email" name="email" required="required"/></td>
            </tr>
            <tr>
            <td>Mobile Number:</td>
            <td><input type="number" name="mnumber" required="required"/></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td> Male<input type="radio"  value="Male" name="gender" class="gender" required="required"/>
              Female<input type="radio"  value="Female" name="gender" class="gender"  required="required"/></td>
            </tr>
            <tr>
            <td>Age:</td>
            <td><input type="text" name="age" required="required"/></td>
            </tr>
            <tr>
            <td>Courses:</td>
            
            
                <td >
                    <select name="course" required="required">
                    	<option name="opti" value="BCA">BCA</option>
                        <option name="opti" value="BBA">BBA</option>
                        <option name="opti" value="B.COM">B.COM</option>
                        <option name="opti" value="MCA">MCA</option>
                        <option name="opti" value="MBA">MBA</option>
                        <option name="opti" value="M.COM">M.COM</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Subjects:
                </td>
                <td>

                   PHP<input type="checkbox" name="subject[]" value="PHP">
                   DS<input type="checkbox" name="subject[]" value="DS">
                   COA<input type="checkbox" name="subject[]" value="COA">
                   Eglish<input type="checkbox" name="subject[]" value="English">
                </td>
            </tr>
            <tr>
            	<td colspan="2" align="center" id="vktd" ><input type="submit" class="vk" value="Sign in" name="sub"/></td>
                <!-- <input type="submit" value="Delete" formaction=""> -->
            </tr>
            
            
        </table>
    
    </form>
    </center>
   
    </div>
</body>
</html>
