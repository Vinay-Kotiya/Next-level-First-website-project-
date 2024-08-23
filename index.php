<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next lavel</title>
    
    <style>
        *{
            padding: 0%;
            margin: 0%;
            
        }
        body{ 
            background-image: url(5243028.jpg);
               background-repeat: no-repeat;
               background-size: cover; 
               color:#000000;
               
               /* filter: contrast(3); */
               
        }
        #main{
           
           z-index: 1;
            height:100%;
            width:100%;
			
        }
        
        #navbar{
            /* background-color:black; */
            word-spacing: 2vw; 
            font-weight: 300;
            height: 10vh;
            
          
        }
        a.alink
        {
            font-size: 3vh;
            color:rgb(0, 0, 0);
            text-decoration: none;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            float: right;
            margin:30px;
            z-index: 2;
            transition-duration: 0s;
            
         }
        a.alink:hover
         {
            color: black;
         }
      #navbar nav
         {
            width: 100%;
            
            
         }
      /* #navbar img
         {
            height: 10vh;
            width: 7vw;
            border-radius: 50%;
            padding-left: 20px;
            padding-right: 20px;
            float: left;
         } */
         .vklogo
         {
            font-size: 40PX;
            font-family:cursive;
            font-weight: 100;
            margin:15px;
            /* color: rgb(246, 246, 246);  */
            float:left;
         }
     .hero
         {
            width: 100%;
            height:calc(100%-10vh); 
            display:flex;
            padding-top: 6vh;
            padding-bottom: 6vh;
         }
     .heroleft
         {
            width: 28%;
            height: 70vh;
            position:sticky;
            padding-right: 0PX;
            padding-left: 3vw;
         }
    .herocenter
        {
            width: 35%;
            height: 70vh;
            /* background-color: rgba(68, 44, 27, 0); */
            position:sticky;
            padding: 3vh;

        }
    .heroright
         {
            width: 28%;
            height: 70vh;
            /* background-color: rgba(30, 210, 180, 0.482); */
            position: sticky;
            float:right;
            direction: rtl;
            padding: 3vh;
            /* color: aliceblue; */
          
         }
         .JURNY
         {
            font-size: 34PX;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 700;
            padding-top: 100PX;
            /* color: rgb(246, 246, 246); */
         }
         /* P.JURNY.START
         {
            color: brown;
         } */
         .explor
         {
            font-size: 20px;
            background-color: rgb(255, 255, 255);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 600;
            border-radius: 10px;
            margin: 10px;
            padding: 7px;
            transition-duration: 1s;
            border: 0px;
            color: black;
            
         }
         .explor:hover
         {  
            color: #ffffff;
            background-color: black;
            border: #ffffff;
         }
         .p1
         {
           padding-top:2vh;
           padding-bottom: 3vh;
           font-family:  "Trebuchet MS", Arial, Helvetica, sans-serif;
         }
         .p2 img
         {
            height: 8vw;
            width: 15vw;
            padding-top:3vh;
           padding-bottom: 4vh;
           transition-duration: 1s;
           position: absolute;
          
           
         }
         .p2 img:hover
         {
            filter:opacity(10%);
            width: 14vw;
            padding-right: 0.5vw;

          
         }

         .p3
         {
            font-family:  "Trebuchet MS", Arial, Helvetica, sans-serif;
            padding-top:1vh;
           padding-bottom: 2vh;
           padding-top: 15vw;
         
         }
         .p4
         {  font-family:  "Trebuchet MS", Arial, Helvetica, sans-serif;
            padding-top:2vh;
           padding-bottom: 3vh;
            padding-top: 20px;
            /* padding: 70vh; */
         }
         p::selection
         {
            /* color:white; */
            background-color: black;

         }
         span.vklogo::selection
         {
            /* color:white; */
            background-color: black;

         }
         a::selection
         {
            /* color:white; */
            background-color: black;

         }
         .cursor{
	height:20px;
	width:20px;
	background-color:#ffffff;
	border-radius:50%;
	position:fixed;
	z-index:-1;
	

	}
	.blur{
	height:100px;
	width:100px;
	background-color:rgb(0, 0, 0);
	border-radius:50%;
	position:fixed;
    z-index:-1; 
	filter:blur(50px);

	}
   #mode1
   {
            float: right;
            margin: 25px;
            margin-top: 28px;
            /* box-shadow: 2px 3px 2px #000000; */
            filter: brightness();
            margin-left: 10px;
            z-index: 2;
            /* height: 2vw;
            width: 4vh; */
            /* border-radius: 50%; */
            
            
       
   }
  
   #darkp
   {
      font-size: 3vh;
            /* color:black; */
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            float: right;
            margin:30px;
            margin-right: 0;
            margin-left: 0;
            z-index: 2;
            word-spacing: 5px;
            /* width: 30px; */
            
       
   }
   #selectin
   {
      float: right;
   }
   #baclvid{
      /* display: flex; */
      height: 8vw;
            width: 15vw;
            padding-top:3vh;
           padding-bottom: 4vh;
           transition-duration: 1s;
           position: absolute;
   }
   .switch {
  display: block;
  --width-of-switch: 2.5em;
  --height-of-switch: 1.5em;
  /* size of sliding icon -- sun and moon */
  --size-of-icon: 1em;
  /* it is like a inline-padding of switch */
  --slider-offset: 0.15em;
  position: relative;
  width: var(--width-of-switch);
  height: var(--height-of-switch);
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f4f4f5;
  transition: .4s;
  border-radius: 30px;
}

.slider:before {
  position: absolute;
  content: "";
  height: var(--size-of-icon,1.4em);
  width: var(--size-of-icon,1.4em);
  border-radius: 20px;
  left: var(--slider-offset,0.3em);
  top: 50%;
  transform: translateY(-50%);
  background: linear-gradient(40deg,#ff0080,#ff8c00 70%);
  ;
 transition: .4s;
}

input:checked + .slider {
  background-color: #303136;
}

input:checked + .slider:before {
  left: calc(100% - (var(--size-of-icon,1.4em) + var(--slider-offset,0.3em)));
  background: #303136;
  /* change the value of second inset in box-shadow to change the angle and direction of the moon  */
  box-shadow: inset -3px -2px 5px -2px #8983f7, inset -10px -4px 0 0 #a3dafb;
}
     </style>
</head>
<body  id="backimg">
    <div class="cursor"></div>
    <div class="blur"></div>
        <div id="main">
            
            <div id="navbar">
                <nav>
                    <span class="vklogo">VinayK</span>
                  
                  <!-- <input type="button" id="mode1" value="" name="mode"  onclick="darkscreen()"> -->
                  <!-- <input type="radio" id="light" value="light" name="mode" onclick="darkscreen()"><p id="darkp">Light</p> -->
                  <!-- <p id="darkp">Modes:</p> -->
                  <!-- <img src="ICON-LD.jpg" id="mode1" value="" name="mode" onclick="darkscreen()"> -->
                  <label class="switch" id="mode1" name="mode" >
                      <input type="checkbox" onclick="darkscreen()">
                      <span class="slider"></span>
                  </label>
               
                    <a href="phpcode.php" class="alink">Profile</a>
                    <a href="PHP-FORM.php"  class="alink">Login</a>
                
                </nav>
            </div>
            <div class="hero">
                <div class="heroleft">
             <p class="JURNY">  
                START <BR>YOUR JOURNEY<BR> TO BE A  <br> WEB-DEVELOPER 
            </p>
            <br>
            <input type="button" class="explor" value="Explor"/>
                </div>
                <div class="herocenter">
                       
                </div>

                <div class="heroright">
                 <p class="p1">Explor this chennele</p>
                 <p class="p2" >
                  <video src="VID-20230923-WA0002.mp4" id="baclvid" autoplay loop muted></video>
                    <img src="backimhLIGHTmode.jpg" alt="background" id="simg" >
                   
                 </p>
                 <p class="p3">
                    Click Abow and See in My YouTube
                    <br>.Chennele
                </p>
                <p class="p4">
                Lorem ipsum dolor sit amet consectetur<br> Adipisicing elit.
                voluptatibus harum deleniti <br> eaqueillum expedita
                </p>

                </div>
            </div>
        </div>
</body>
<script>
    var crsr=document.querySelector(".cursor");
    var blir=document.querySelector(".blur");
    
    document.addEventListener("mousemove",function(dets){
    
    crsr.style.left=dets.x -10+ "px"
    crsr.style.top=dets.y + "px"
    blir.style.left=dets.x -60 +"px"
    blir.style.top=dets.y -50 +"px"
    
    })
   
      var mode = document.getElementById("mode1");
      var backimg = document.getElementById("backimg");
      var link = document.getElementsByTagName("a");
      var blir=document.querySelector(".blur");
      var simg = document.getElementById("simg");  
      da=0;
      li=1;  
function darkscreen()//true
    {
       
    
        if(mode=li)
        {
         
         backimg.style.backgroundImage="url(backimhLIGHTmode.jpg)";
         backimg.style.color="white";
       
        
         simg.src="5243028.jpg";
         
         blir.style.backgroundColor="white";
         for(var i=0;i<2;i++){
           
            link[i].style.color="white";
            
           }
            //  mode.style.backgroundColor="white";
            li=0;
            da=1;
        }
        else
        {
         
         backimg.style.backgroundImage="url(5243028.jpg)";
         backimg.style.color="black";
        
         simg.src="backimhLIGHTmode.jpg";
         // backimg.photo.style.backgroundImage="url(backimhdarkmode.jpg)";
         for(var i=0;i<2;i++){
            
            link[i].style.color="black";
            
         }
         //it is for change a blur color
         blir.style.backgroundColor="black";
         // mode.style.backgroundColor="black";
            da=0;
            li=1;
           
        }
     
     
     
    }
</script>

</html>