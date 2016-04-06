<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />

    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <title>Galerie d'Art</title>

   <style>


                .bg{

                        z-index:-100;
            width: 100%;

                }
                #video-bg-elem{
                        position:absolute;
                        top:100px;  
                        left:0;
            margin: 0;
                        width: 100%;
                        min-width:100%;
            height: 500px;
            object-fit: initial;

                }
                div.content{
                        position:absolute;
                        width:100%;
                        min-width:100%;
                        z-index:100;
                        }
                .content h1{
                        text-align:center;
                        font-size:65px;

                        font-weight:300;
                        color:#fff;
                        padding-top:15%;
                        margin-bottom:10px;
                }
                .content p{
                        text-align:center;
                        font-size:20px;
                        letter-spacing:3px;
                        color:white;
                }
                .new_op{
                        opacity:0.8;
                        text-align:center;
                }

        .filtered {

           -webkit-filter: grayscale(100%); /* Chrome, Safari, Opera */
            filter: grayscale(100%);
        }

       .left
{
    width:350px;
    height:350px;
    float:left;
    border-style:solid;
    margin-left:25px;
}
.middle
{
        background-image:url();
    background-repeat:repeat-x;
    height:350px;
    margin-right:auto;
    margin-left:auto;
    width:350px;
    border-style:solid;
}
.right
{
    width:350px;
    height:350px;
    float:right;
    border-style:solid;
         margin-right:25px;
}
.divpic{
    opacity: 0.7;
}

 .divpic:hover {
    opacity: 1.0;
}

.imgdiv {
  -webkit-filter: grayscale(0.8);
  filter: grayscale(0.5);
}

       <style>
    /*setup*/

* {
  margin: 0;
  padding: 0;
}


/*neeeeoooon*/

.myFont {
  text-align: center;
  font-size: 0em;
  margin: 250px 0 20px 0;
  font-family: 'My Custom Font', Fallback;
}

a {
     text-decoration: none;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
}

p:nth-child(1) a {
  color: #fff;
  
  -webkit-animation: neon1 1.5s ease-in-out infinite alternate;
  -moz-animation: neon1 1.5s ease-in-out infinite alternate;
  animation: neon1 1.5s ease-in-out infinite alternate;
}




p a:hover {
  color: #ffffff;
}
/*glow for webkit*/

@-webkit-keyframes neon1 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #ffff, 0 0 30px #fff, 0 0 40px darkturquoise, 0 0 70px darkturquoise, 0 0 80px darkturquoise, 0 0 100px darkturquoise, 0 0 150px darkturquoise;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px darkturquoise, 0 0 35px darkturquoise, 0 0 40px darkturquoise, 0 0 50px darkturquoise, 0 0 75px darkturquoise;
  }
}

 @font-face {
             font-family: 'My Custom Font';
             

             src: url('FoglihtenNo07.otf') format('truetype');
           }

       
    
    </style>

    
</head>
<body>

    <script>
var xmlhttp = new XMLHttpRequest();
var url = "https://api.particle.io/v1/devices/54ff70066667515143431367/events?access_token=5edd276a090e01151de379c23c7035ca7d814016";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        change(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function change(arr) {
   document.getElementById("chg").innerHTML="There's a fire! Save your house!";
}
</script>

</body>
</html>
    
      <?php include("menu.php"); ?>
      <div class="bg">
           <video id="video-bg-elem" preload="auto" autoplay ="true" loop="loop" muted="muted" class="filtered">
                <source src="Untitled.mp4" type="video/mp4" >
            </video>


   <div class="content">
                  <p class="myFont" style="font-size:50px;"><a href="#">Smart Smoke Detector</a></p>
	   
    </div>
    </div>
   
    
    <div style="background-color:white;margin-top:0;width:100%;height:150px;position:relative;float:left;clear:both;top:450px;text-align:center;">
        
       <h1 id="chg">There&apos;s no smoke! Keep calm!</h1>

    </div>
    

    <div id="footer" style="bottom:0px;position:relative;top:450px;background-color:darkturquoise;opacity:1.0;color:white;">
    <p><i><strong>&copy; Information uploaded by Smart Smoke Detector</strong></i></p>
    </div>

</body>
</html>