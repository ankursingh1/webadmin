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



<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.mobile_menuicon').click(function(){
		$('.nav').slideToggle();	
	});	
})
</script>
<script src="js/dynapagin.js"></script>
<script>
function changevalue(){
document.getElementById('fvalue1').value=document.getElementById('fvalue').value;

}
</script>
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
		$('.nav>ul').slideToggle();	
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

<script>
function selection(val)
{
//alert(val);
if(val=='buy')
{
document.getElementById("by").className = "bordertoimg";
document.getElementById("sl").className = "";
document.getElementById("buy").style.display="block";
document.getElementById("sell").style.display="none";

}
else {

document.getElementById("sl").className = "bordertoimg";
document.getElementById("by").className = "";
document.getElementById("sell").style.display="block";
document.getElementById("buy").style.display="none";




}
document.getElementById('fvalue').value=val;


}
</script>

</head>


<?php 
session_start();
include('dbconfig.php');
include_once("includes/session.php");
include('administrator/includes/dbconnection.php');
include('model/front.class.php');
include('model/artworks.class.php');
	
	$front_obj = new FrontendClass();
	$art_obj=new ArtWorksClass();
if($_POST['Submit']=='CREATE ACCOUNT')
{
  //print_r($_POST); exit;
  $front_obj->insert_users($_POST);
}	

if($_POST['submit']=='save')
{
  //print_r($_POST); exit;
  $front_obj->login_check($_POST);
}	

if($_POST['send']=='send')
{
  //print_r($_POST); exit;
  $front_obj->forgot_password($_POST);
}	 
	 
	 if($_POST['submit']=='send')
{
 $front_obj->contact_us($_POST);
}
if($_POST['Save']=='Save')
{
//print_r($_POST); exit;
$art_obj->insert_applicants($_POST);?>


<?php

}	 
?>

<script>
function c_passw(cpassw)
{


if(cpassw != document.myfrom.password.value)

   {

		alert('Confirm Password Not Match');
		
		document.myfrom.cpassword.focus();     
		
		return false;

    } 


}
</script>



<!--<script type="text/javascript">
window.fbAsyncInit = function() {
	FB.init({
	appId      : '115237592148831', // replace your app id here
	channelUrl : 'http://swathik/Artist/index.php', 
	status     : true, 
	cookie     : true, 
	xfbml      : true  
	});
};
(function(d){
	var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement('script'); js.id = id; js.async = true;
	js.src = "//connect.facebook.net/en_US/all.js";
	ref.parentNode.insertBefore(js, ref);
}(document));

function FBLogin(){
	alert('login Through the facebook');
	FB.login(function(response){
		if(response.authResponse){
			window.location.href = "actions.php?action=fblogin";
		}
	}, {scope: 'email,user_likes'});
}
 </script>-->






<body onLoad="MM_preloadImages('file:///C|/Users/acer/Desktop/prophetic home/home_page/images/card_05.png','images/cart_orange_09.png')">
<header class="full_wrapper">
	<div class="site_container">
        	<div class="logo">
            	<a href="index.php"><img src="images/logo_03.png" alt="logo" id="Image1"></a>
            </div><!--logo-->
            <div class="search">
            	<input type="text" placeholder="I am looking for..">
                <select name="art" id="art">
                	<option>Artwork</option>
					<option>Artist</option>                       
                </select>
               <a href="featured_artwork.php"> <input type="submit" onMouseOver="MM_swapImage('Image1','','file:///C|/Users/acer/Desktop/prophetic home/home_page/images/card_05.png',1)" value=""></a>
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
                <li><a class="fancybox" href="#inline5" title="Sign In" >CONTACT US</a></li>
            </ul>
        </div><!--nav-->
		<?php
		
		 $query=mysql_query("select * from tb_regusers where username='".$_SESSION['username']."'");
		       $res=mysql_fetch_array($query);?>
        <div class="sign_in">
		<?php if($_SESSION['username']==""){?>
        <span><a class="fancybox" href="#inline1" title="Sign In" >SIGN UP / SIGN IN</a></span>
		<?php } else {?>
		
		  <span><a href="profile.php"><?php echo ucfirst($res['first_name'])." ". ucfirst($res['last_name']);?></a></span>
		  <a href="messages.php"><img src="images/4A_msg_03.png" style="margin-top:-4px;"></a>
		 
		  <?php } ?>
        <img src="images/cart_03.png" alt="">
		
		<?php  if($_SESSION['username']!=""){?>
		  <a href="logout.php"> <span>&nbsp;Logout </span></a>
		<?php } ?>
        </div><!--sign_in-->
    </div><!--mid_wrap-->
</div><!--navigation_bar-->
<div class="clear_fix"></div>



<div id="inline1" style="display: none;">

<div class="cntctlogo_blg">
            	<div class="cntctlogo_blg_left">
                	<img src="images/logo_03.png" alt="">
                </div><!--cntctlogo_blg_left-->
                <!--<div class="cntctlogo_blg_rgt">
                	<a href="index.php"><img src="images/6A_cross_03.png" alt=""></a>
                </div>--><!--cntctlogo_blg_rgt-->
            </div>
<div class="signin_blg">
            	<div class="signin_blg_left">
                	<h2>Sign Up</h2>
                    <h1>Welcome!</h1>
                    <p>To buy and sell art, you must first have an account.</p>
                   <a class="fancybox" href="#inline2" title="Sign Up" > <input name="submit" type="submit" value="Sign up"></a>
				   
				  
                    <span>(or)</span>
                    <a  href="<?php echo SITEURL; ?>/facebook/hybridauth/login-with.php?provider=Facebook" target="new">       <input type="submit" value="Connect Via Facebook"  class="facebook"></a>

            
                </div><!--signin_blg_left-->
                <div class="signin_blg_right">
                	<h1>Sign IN</h1>
                    <p>Already have an account?</p>
					 <form name="log_frm" id="log_frm" method="post" >
                    <div><input type="text" name="log_email" id="log_email" placeholder="Email" required></div>
                    <div><input type="password" name="log_passw" id="log_passw" placeholder="Password" required></div>
                    <div class="rememberme"><input type="checkbox"> Remember Me</div>
                    <div style="text-align:left; margin-top:0px;">
                        <a href="featured_art.php">
						<input type="image" src="images/btnimgs_03.png"  name="submit" value="save">
						<!--<img src="images/btnimgs_03.png">--></a>
                        <a href="#"><img src="images/btnimgs_05.png"></a>
                    </div>
                    <div class="forgotpwd"> <a class="fancybox" href="#inline4" title="Sign Up" >Forgot your password?</a></div>
                </div><!--signin_blg_right-->
            </div> 
    </div>
</form>
<?php $count=0; ?>
<div id="inline2" style="display: none;">

<div class="site_container2">
    	<div class="contact_popup">
        
        	<div class="cntctlogo_blg">
            	<div class="cntctlogo_blg_left">
                	<img src="images/logo_03.png" alt="">
                </div><!--cntctlogo_blg_left-->
                <div class="cntctlogo_blg_rgt">
                	<!--<a href="signin.php"><img src="images/6A_cross_03.png" alt=""></a>-->
                </div><!--cntctlogo_blg_rgt-->
            </div><!--cntctlogo_blg-->           
            
            	<div class="are_you_blg">
                	<p>Are you..</p>
                    <div class="are_you_blg_left">
                    	<a  href="javascript:void(0);" onClick="selection('buy');">
						<div id="by">
						<img src="images/2a_img1_03.png" alt="">
                        <span>BUYING ART</span>
						</div></a>
                    </div><!--are_you_blg_left-->
                    <div class="are_you_blg_right">
                    <a href="javascript:void(0);" onClick="selection('sell');">	
					 <div id="sl">
					<img src="images/2a_img2_03.png" alt="">
                        </div>
						<span>SELLING ART</span>
						
                    </div></a><!--are_you_blg_right-->
                </div><!--are_you_blg-->
            	<div class="clear_fix"></div>
            <div class="frmbtn_blg">
            	<a href="#inline1" class="fancybox">Back</a>
	<!--	<form name="s_frm" id="s_frm" method="post">
		<input type="text" name="fvalue" id="fvalue">
		<a class="fancybox" href="#inline3" title="Send Quote" >
		<input type="submit" value="Next"></a>
		</form>-->
	<div id="buy" style="display:none">	
	<a href="#inline3" class="fancybox" onClick="changevalue();"><input type="submit" name="next" value="Next"></a>
	</div>
	
	<div id="sell" >	
	<a href="#inline6" class="fancybox" onClick="changevalue();"><input type="submit" name="next" value="Next"></a>
	</div>
	<input type="hidden"  name="fvalue" id="fvalue" />
	
			   
            </div><!--frmbtn_blg-->     
            
        </div><!--contact_popup-->
    </div>
    </div>
	
	<div id="inline3" style="display: none;">
		<form action="" method="post" id="postp" name="myfrom" >

	<div class="contact_popup">
        
        	<div class="cntctlogo_blg">
            	<div class="cntctlogo_blg_left">
                	<img src="images/logo_03.png" alt="">
                </div><!--cntctlogo_blg_left-->
               <!-- <div class="cntctlogo_blg_rgt">
                	<a href="selection.php"><img src="images/6A_cross_03.png" alt=""></a>
                </div>--><!--cntctlogo_blg_rgt-->
            </div><!--cntctlogo_blg-->           
            	<input type="hidden" name="fvalue1" id="fvalue1">

            <div class="facebook_blg">
            	<input type="submit" value="Connect Via Facebook">
            </div><!--facebook_blg-->
            <div class="or">
            	<span>(or)</span>
            </div><!--or-->  
            
            <div class="form_blg">
            	<div class="name">
                	<input type="text" placeholder="First Name" name="first_name" required >
                    <input type="text" placeholder="Last Name" name="last_name" required>
                </div><!--name-->
                
                <div class="email">
                	<input type="email" placeholder="Email Address" name="email" required>                    
                </div><!--email-->
                
                <div class="name">
                	<input type="text" placeholder="Username" name="username" required>
                    <input type="text" placeholder="www.url.com" name="url">
                </div><!--name-->
                
                <div class="name">
                	<input type="password" placeholder="Password" name="password" required>
                    <input type="password" placeholder="Confirm Password"  name="cpassword"  onBlur="return c_passw(this.value);" required>
                </div><!--name-->
            </div><!--form_blg-->
            <div class="frmbtn_blg" > 
			<div class="clear_fix"></div>
            	<a href="#inline2" class="fancybox">Back</a> &nbsp;&nbsp;
             <!-- <a href="signin.php">  </a>-->
			  <input type="submit" value="CREATE ACCOUNT"  name="Submit" style="width:21%;">
            </div><!--frmbtn_blg-->     
            
        </div>
		</form>
	</div>
	
	
	<div id="inline4" style="display: none;">

<div class="cntctlogo_blg">
            	<div class="cntctlogo_blg_left">
                	<img src="images/logo_03.png" alt="">
                </div><!--cntctlogo_blg_left-->
                <!--<div class="cntctlogo_blg_rgt">
                	<a href="index.php"><img src="images/6A_cross_03.png" alt=""></a>
                </div>--><!--cntctlogo_blg_rgt-->
            </div>
<div class="signin_blg">
            	
                <div class="signin_blg_right" style="width:96%; border-left:none;">
                	<h1>Forgot Password</h1>
                  <form name="forget_frm" method="post">
                    <div><input type="text" name="fgt_email" id="fgt_email" placeholder="Email" required></div>
                   
                   
                    <div style="text-align:left; margin-top:0px;">
					
					<a href="" >
					<input type="image" src="images/submit.png" name="send" value="send">
						<!--<img src="images/submit.png">-->
						</a>
					
                        <a href="#inline1" class="fancybox">
						<img src="images/btnimgs_03.png" style="float: right;">
						</a>
                      </form> 
                    </div>
                    <div class="forgotpwd"> </div>
                </div><!--signin_blg_right-->
            </div> 
			
			
		<div id="inline5" style="display: none;">


<div class="contact_popup">
        
        	<div class="cntctlogo_blg">
            	<div class="cntctlogo_blg_left">
                	<img src="images/logo_03.png" alt="">
                </div><!--cntctlogo_blg_left-->
               
            </div><!--cntctlogo_blg-->
            
            <div class="popup_contact">
            	<h1>Contact Us</h1>
                <p>Type your message below and we will get back you shortly.</p>
				<form name="c_frm" id="c_frm" method="post">
                <input type="text" name="email_addr" id="email_addr" placeholder="Email Address" required>
                <input type="text"  name="subject" id="subject" placeholder="Subject" required>
                <textarea name="message" id="message" required> Type Here</textarea>
                <input type="submit" name="submit" value="Send">
				</form>
				
            </div><!--popup_contact-->
        </div>
            </div>	
			
            
            
	<!--venkat script here dont remove from here-->		
            
            
			<div id="inline6" style="display: none;">
		<form action="" method="post" id="postp" name="myfrom" >

	<div class="contact_popup">
        
        	<div class="cntctlogo_blg">
            	<div class="cntctlogo_blg_left">
                	<img src="images/logo_03.png" alt="">
                </div><!--cntctlogo_blg_left-->
               <!-- <div class="cntctlogo_blg_rgt">
                	<a href="selection.php"><img src="images/6A_cross_03.png" alt=""></a>
                </div>--><!--cntctlogo_blg_rgt-->
            </div><!--cntctlogo_blg-->           
            	<input type="hidden" name="fvalue1" id="fvalue1">

            <div class="facebook_blg">
            	<input type="submit" value="Connect Via Facebook">
            </div><!--facebook_blg-->
            <div class="or">
            	<span>(or)</span>
            </div><!--or-->  
            
            <div class="form_blg">
            	<div class="name">
                	<input type="text" placeholder="Name" name="name" id="name" required >
					 <input type="email" placeholder="Email Address" name="email" id="email" required> 
                 
                </div><!--name-->
                
               
                
                <div class="name">
     				<textarea name="address" id="address" placeholder="Address" ></textarea>   
                	<input type="text" placeholder="Year started painting" name="paint_date" id="paint_date" required class="toptextbox">
                    <input type="text" placeholder="Church Name" name="church_name" id="church_name" style="margin-top:0px;">
					<input type="text" placeholder="Church Website" name="church_website" id="church_website" style="margin-top:0px;">
					<div class="clear_fix"></div>
                </div><!--name-->
				<div class="name" id='dvFile'>
               <textarea name="artist_biodata" id="artist_biodata" placeholder="Artist Biodata" style="width:95%;" ></textarea> 
						
                    <div class="clear_fix"></div>
                    <div id="filediv" style="font-family: 'CenturyGothicRegular'; color: #908f8f;">&nbsp;&nbsp;Artist Photo&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;<input name="artist_image" type="file" id="artist_image"/ required></div><br/>
                    <input type="button" id="add_more" class="upload" value="Add Images" onclick='Addinput()'/>
                   <!-- <input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>  -->
                   
                </div><br>
                
        
                
				
				<div class="clear_fix"></div>
            </div><!--form_blg-->
				<div class="clear_fix"></div>
            <div class="frmbtn_blg" >
            	<a href="#inline2" class="fancybox">Back</a>&nbsp;&nbsp;
             <!-- <a href="signin.php">  </a>-->
			 <div id="save">
			  <input type="submit" value="Save"  name="Save" ></div>
			   <div id="next" style="display:none;">
			  <input type="submit" value="Next"  name="Next" ></div>
            </div><!--frmbtn_blg-->     
            
        </div>
		</form>
	</div>
			
			
 <!--venkat script here dont remove from here-->		           
            
            
    </div>
	
	
<!-- Add jQuery library -->


 <script>

function Addinput() {
	
  var txt = "<br> <div style='margin-left:-1px;'><input type='file'  name='arts[]' id='arts[]'/></div>";
 
  document.getElementById("dvFile").innerHTML += txt;
  
  //double=document.getElementById('coun').value=double=document.getElementById('coun').value+1;
  if(double<=5)
  {
  alert('Reached limit')	  
  }else{
  alert('upload here')  
  }
 
}
</script>



<link rel="stylesheet" type="text/css" href="./css/addmore.css" media="screen" />

 <!--venkat script here dont remove from here-->	

<script type="text/javascript" src="fancyb/lib/jquery-1.10.1.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="fancyb/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="fancyb/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
$(document).ready(function() {
	$('.fancybox').fancybox();
});
</script>