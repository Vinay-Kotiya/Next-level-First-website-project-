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
			background-image:url(5243028) ;
			background-repeat: no-repeat;
			background-size: cover;
			font-weight: 700;
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
        background-color: aliceblue;
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
        background-color: aliceblue;
        margin: .1vh; 
        padding:1vw;
    }
    </style>
</head>
<body>
    <div id="main">
        <div id="part">
            vinay
            <a href="UPDATE-DATA.php">Edit</a>
            
           
        
        </div>
        <div class="mainpart">
            hello
            <?php
        $ron=1;
                $conn=mysqli_connect("localhost","root","","vkdata");
                $str="select rno,Name,Email,Mnum,Gender,Age,Course,Subject from form2db where rno=$ron";
                $result=mysqli_query($conn, $str);
                $row=mysqli_fetch_array($result);
               
                // $row=$result->fetch_array()
                $i=0;
                while($i<=7){
                
                        echo"$row[$i]<br>";
        
                    $i++;
                }
            
                ?>

        </div>
    </div>
    
</body>
</html>