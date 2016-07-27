<?php error_reporting(0);?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prophetic Creations</title>
<link href="css/prophetic.css" rel="stylesheet" type="text/css">
<link href="stylesheets/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">



<script src="js/dynapagin.js"></script>
<script>
      $(function () { 
        $('#dynapagin').dynapagin({
          total: 10,
        }, function (page) {
          $('#content').html('<em>jQuery Plugins Page '+page+'</em>!');
        }).on('page', function (event, page) {
          console.log('another way to provide content to page '+page+'.');
        });
      });
    </script>
<script type="text/javascript">
$(document).ready(function(){
	$('.mobile_menuicon').click(function(){
		$('.nav').slideToggle();	
	});	
})
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>


<?php 
session_start();
include('dbconfig.php');
include_once("includes/session.php");
include('administrator/includes/dbconnection.php');
    include('model/front.class.php');
	
	 $front_obj=new FrontendClass();
	 
?>

<body onLoad="MM_preloadImages('file:///C|/Users/acer/Desktop/prophetic home/home_page/images/card_05.png','images/cart_orange_09.png')">
<header class="full_wrapper">
	<div class="site_container">
        	<div class="logo">
            	<a href="index.php"><img src="images/logo_03.png" alt="logo" id="Image1"></a>
            </div><!--logo-->
            <div class="search">
            	<input type="text" placeholder="I am looking for..">
                <select>
                	<option>Artwork</option>
					<option>Artist</option>                     
                </select>
                <input type="submit" onMouseOver="MM_swapImage('Image1','','file:///C|/Users/acer/Desktop/prophetic home/home_page/images/card_05.png',1)" value="">
                <div class="clear_fix"></div>
            </div><!--search-->
            <div class="clear_fix"></div>
    </div><!--mid_wrap-->
<div class="clear_fix"></div>
</header><!--header_wrap-->
<div class="clear_fix"></div>

<div class="navigation_bar">
	<div class="mid_wrap">
     <div class="mobile_menuicon"><img src="images/mobile_menu.png"></div>
    	<div class="nav">
        	<ul>
            	<li><a href="index.php">HOME</a></li>
                <li><a href="paintings.php">PAINTINGS</a></li>
               <li><a href="art_type2.php">ART TYPE 2</a></li>
                <li><a href="art_type3.php">ART TYPE 3</a></li>
                <li><a href="art_type4.php">ART TYPE 4</a></li>
                <li><a href="events.php">EVENTS</a></li>
                <li><a href="resources.php">RESOURCES</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
        </div><!--nav-->
        <div class="sign_in">
         <span><a href="profile.php">My Profile </a></span>
		 <a href="messages.php"><img src="images/4A_msg_03.png"></a>
        <img src="images/cart_03.png" alt="">
        </div><!--sign_in-->
    </div><!--mid_wrap-->
</div><!--navigation_bar-->
<div class="clear_fix"></div>