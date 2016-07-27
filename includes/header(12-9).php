<?php
ob_start();
session_start();
error_reporting(0);

$url=basename($_SERVER['REQUEST_URI']);
//echo $url;
include('dbconfig.php');

include_once("includes/session.php");

include('administrator/includes/dbconnection.php');

include('model/front.class.php');

include('model/artworks.class.php');

	$front_obj = new FrontendClass();

	$art_obj=new ArtWorksClass();
?>




<!doctype html>

<html>

<head>

<meta charset="utf-8">

<?php if($url=="index.php") { ?>
<title>Prophetic Creations</title>
<?php } else if($url=="paintings.php") { ?>
<title>Prophetic Creations | All Artwork</title>
<?php }else if($url=="art_type2.php"){?>
<title>Prophetic Creations | Acrylic</title>
<?php }else if($url=="art_type3.php"){?>
<title>Prophetic Creations | Oil</title>
<?php }else if($url=="art_type4.php"){?>
<title>Prophetic Creations | Water Color</title>

<?php }else if($url=="Artsignup.php"){?>
<title>Prophetic Creations | Aritst Registration</title>

<?php }else if($url=="art_type5.php"){?>
<title>Prophetic Creations | Photography</title>
<?php }else if($url=="events.php"){?>
<title>Prophetic Creations | Events</title>
<?php }else if($url=="resources.php"){?>
<title>Prophetic Creations | Resource</title>
<?php }else if($url=="return_policy.php"){?>
<title>Prophetic Creations | Return Policy</title>
<?php }else if($url=="delivery_info.php"){?>
<title>Prophetic Creations | Delivery Info</title>
<?php }else if($url=="sitemap.php"){?>
<title>Prophetic Creations | Sitemap</title>
<?php }else if($url=="faq.php"){?>
<title>Prophetic Creations | FAQ</title>
<?php }else if($url=="security_privacy.php"){?>
<title>Prophetic Creations | Security Privacy</title>
<?php }else if($url=="terms_cond.php"){?>
<title>Prophetic Creations | Terms and Conditions</title>
<?php }else if($url=="trade_enq.php"){?>
<title>Prophetic Creations | Trade Enquiries</title>

<?php }else if($url=="cart.php"){?>
<title>Prophetic Creations | Shopping Cart</title>

<?php }else if($url=="art_detail.php"){?>
<title>Prophetic Creations | Art Details </title>

<?php }else if($url=="cart.php"){?>
<title>Prophetic Creations | Shopping Cart</title>

<?php }else if($url=="checkout.php"){?>
<title>Prophetic Creations | Checkout</title>



<?php }else if($url=="psignup.php"){?>
<title>Prophetic Creations | Artist and Buyer Login</title>

<?php }else if($url=="own_artworks.php"){?>
<title>Prophetic Creations | Artist Own Artwork</title>

<?php }else if($url=="add_artwork.php"){?>
<title>Prophetic Creations | Artist add Artwork</title>

<?php }else if($url=="own_profile.php"){?>
<title>Prophetic Creations | Artist Profile</title>

<?php }   ?>

<?php if($_GET['id']!=''){  $query=$callConfig->selectQuery(TPREFIX.TBL_CONTENT,'*',"id='".$_GET['id']."'",'','','');
	 $resitems=$callConfig->getRow($query);	?> <title>Prophetic Creations | <?php echo $resitems->page_title;?> Profile</title><?php } ?>
<?php /*?><?php if($_GET['id']!=''){  echo $query_tit="select * from tb_content where id='".$_GET['id']."'";
	 $resitems_tit=mysql_query($query_tit); $resfetch=mysql_fetch_array($resitems_tit);print_r($resfetch);?> <title>Prophetic Creations | <?php echo $resfetch['page_title'];?> Profile</title><?php } ?><?php */?>


<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="shortcut icon" type="image/png" href="<?=SITEURL?>/images/favicon.ico"/>


<link href="css/prophetic.css" rel="stylesheet" type="text/css">

<link href="stylesheets/style.css" rel="stylesheet" type="text/css">

<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

	$('.mobile_menuicon').click(function(){

		$('.nav').slideToggle();	

	});	
	
	$('.submenu1').click(function(){
		$('.submenu1>ul').slideToggle();	
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

//alert("R u user");
window.jQuery(document).ready(function() {
    $.fancybox.open('#inline3');
});

}

else {
	
window.location="<?=SITEURL?>content.php?id=4";
document.getElementById("sl").className = "bordertoimg";

document.getElementById("by").className = "";

document.getElementById("sell").style.display="block";

document.getElementById("buy").style.display="none";
//window.location="http://propheticcreations.com/Artsignup.php";
}

document.getElementById('fvalue').value=val;

}

</script>



<script type="text/javascript">
shortcut = {
    all_shortcuts: {},
      add: function (e, t, n) {
        var r = {
          type: "keydown",
          propagate: !1,
          disable_in_input: !1,
          target: document,
          keycode: !1
        };
        if (n) for (var i in r) "undefined" == typeof n[i] && (n[i] = r[i]);
        else n = r;
        r = n.target, "string" == typeof n.target && (r = document.getElementById(n.target)), e = e.toLowerCase(), i = function (r) {
          r = r || window.event;
          if (n.disable_in_input) {
            var i;
            r.target ? i = r.target : r.srcElement && (i = r.srcElement), 3 == i.nodeType && (i = i.parentNode);
            if ("INPUT" == i.tagName || "TEXTAREA" == i.tagName) return
          }
          r.keyCode ? code = r.keyCode : r.which && (code = r.which), i = String.fromCharCode(code).toLowerCase(), 188 == code && (i = ","), 190 == code && (i = ".");
          var s = e.split("+"),
            o = 0,
            u = {
              "`": "~",
              1: "!",
              2: "@",
              3: "#",
              4: "$",
              5: "%",
              6: "^",
              7: "&",
              8: "*",
              9: "(",
              0: ")",
              "-": "_",
              "=": "+",
              ";": ":",
              "'": '"',
              ",": "<",
              ".": ">",
              "/": "?",
              "\\": "|"
            }, f = {
              esc: 27,
              escape: 27,
              tab: 9,
              space: 32,
              "return": 13,
              enter: 13,
              backspace: 8,
              scrolllock: 145,
              scroll_lock: 145,
              scroll: 145,
              capslock: 20,
              caps_lock: 20,
              caps: 20,
              numlock: 144,
              num_lock: 144,
              num: 144,
              pause: 19,
              "break": 19,
              insert: 45,
              home: 36,
              "delete": 46,
              end: 35,
              pageup: 33,
              page_up: 33,
              pu: 33,
              pagedown: 34,
              page_down: 34,
              pd: 34,
              left: 37,
              up: 38,
              right: 39,
              down: 40,
              f1: 112,
              f2: 113,
              f3: 114,
              f4: 115,
              f5: 116,
              f6: 117,
              f7: 118,
              f8: 119,
              f9: 120,
              f10: 121,
              f11: 122,
              f12: 123
            }, l = !1,
            c = !1,
            h = !1,
            p = !1,
            d = !1,
            v = !1,
            m = !1,
            y = !1;
          r.ctrlKey && (p = !0), r.shiftKey && (c = !0), r.altKey && (v = !0), r.metaKey && (y = !0);
          for (var b = 0; k = s[b], b < s.length; b++) "ctrl" == k || "control" == k ? (o++, h = !0) : "shift" == k ? (o++, l = !0) : "alt" == k ? (o++, d = !0) : "meta" == k ? (o++, m = !0) : 1 < k.length ? f[k] == code && o++ : n.keycode ? n.keycode == code && o++ : i == k ? o++ : u[i] && r.shiftKey && (i = u[i], i == k && o++);
          if (o == s.length && p == h && c == l && v == d && y == m && (t(r), !n.propagate)) return r.cancelBubble = !0, r.returnValue = !1, r.stopPropagation && (r.stopPropagation(), r.preventDefault()), !1
        }, this.all_shortcuts[e] = {
          callback: i,
          target: r,
          event: n.type
        }, r.addEventListener ? r.addEventListener(n.type, i, !1) : r.attachEvent ? r.attachEvent("on" + n.type, i) : r["on" + n.type] = i
      },
      remove: function (e) {
        var e = e.toLowerCase(),
          t = this.all_shortcuts[e];
        delete this.all_shortcuts[e];
        if (t) {
          var e = t.event,
            n = t.target,
            t = t.callback;
          n.detachEvent ? n.detachEvent("on" + e, t) : n.removeEventListener ? n.removeEventListener(e, t, !1) : n["on" + e] = !1
        }

      }
    },
     shortcut.add("Ctrl+U",function(){
     //alert('Sorry\nNo CTRL+U is allowed. Be creative!')
    }),
     shortcut.add("Meta+Alt+U",function(){
     //alert('Sorry\nNo Command+Option+U is allowed. Be creative!')
    }),
    shortcut.add("Ctrl+C",function(){
    // alert('Sorry\nNever duplicate this article...')
    }),
    shortcut.add("Meta+C",function(){
   //  alert('Sorry\nNever duplicate this article...')
    });
</script>



<script language="JavaScript">


var message = "";

function clickIE() {
    if (document.all) {
        (message);
        return false;
    }
}

function clickNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3) {
            (message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS;
} else {
    document.onmouseup = clickNS;
    document.oncontextmenu = clickIE;
}

document.oncontextmenu = new Function("return false")

</script>












</head>





<?php 




if($_POST['Submit']=='CREATE ACCOUNT')

{

  //print_r($_POST); exit;

  $front_obj->insert_users($_POST);

}	

if($_POST['guestsubmit']=='Submit')
{
	$front_obj->insert_guest($_POST);
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





if($_POST['Save']=='Next')

{



$art_obj->insert_applicants($_POST);

}	



if($_POST['update']=='Submit')

{

//print_r($_POST); exit;

$art_obj->update_applicant_des($_POST);

}	

 $cart=$front_obj->getcart($_SESSION['CART_TEMP_RANDOM']);
 //print_r($cart);
 
      //echo $_SESSION['CART_TEMP_RANDOM'];

	  $queryc="select * from tb_cart where temprandid='".$_SESSION['CART_TEMP_RANDOM']."'";
      $res=mysql_query($queryc);
	  $cou = $callConfig->getCount($queryc);
	
?> 

<script>

function c_passw(cpassw)

{





if(cpassw != document.myfrom.password.value)


   {
	alert('Password and Confirm Password Mis Match');

		

		

		

		return false;



    } 





}

</script>
<script>

function getemail(str){
				//alert(str);
				var xmlhttp;
				if (window.XMLHttpRequest)
				{
				xmlhttp = new XMLHttpRequest();
				}
				else
				{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("gemail").innerHTML=xmlhttp.responseText;
					
				//alert(xmlhttp.responseText);
				//document.getElementById("statediv").style.display="";
				//$("#test1").append(xmlhttp.responseText);
				}
				}
                xmlhttp.open("POST","getemail.php?eml="+str,true);
				xmlhttp.send();
				//alert(str);
				} 

</script>

<style>

#msg {
    color: red;
	margin-left:145px;
	margin-bottom:2px;
	margin-top:8px;
	font-family:'Conv_centuryGothic_bold'
	
}
</style> 




<!--<script>
window.setTimeout(function() {
    $(".isa_success").fadeTo(500, 0).slideUp(500, function(){
       $(this).remove(); 
    });
}, 5000) 
</script>-->

<!--<script>
window.setTimeout(function() {
    $(".isa_error").fadeTo(500, 0).slideUp(500, function(){
       $(this).remove(); 
    });
}, 5000) 
</script>-->





     

<!--<body onLoad="MM_preloadImages('file:///C|/Users/acer/Desktop/prophetic home/home_page/images/card_05.png','images/cart_orange_09.png')">-->
<body>
<header class="full_wrapper">

	<div class="site_container">

        	<div class="logo" style="bor">

            	<a href="index.php"><img src="images/logo_03.png" alt="logo" style="margin-left:-40px; height:70px;"></a>

            </div><!--logo-->
            
            
            
         <?php 
       if(isset($_GET['err']) && $_GET['err']!=""){
        ?>
        <div class="isa_success">
        <i class="fa fa-check"></i>
        <strong></strong><?=$_GET['err']?>!
        </div>
        <?php } ?>
        
        
        <?php if(isset($_GET['ferr']) && $_GET['ferr']!=""){?>

        <div class="isa_error">
        <i class="fa fa-times-circle"></i>
        <strong></strong><?=$_GET['ferr']?>!
        </div>
        <?php }?>
        
        
        
        


            <div class="search">

            	<input type="text" placeholder="I am looking for..">

                <!--<select name="art" id="art">

                	<option>Artwork</option>

					<option>Artist</option>                       

                </select>-->

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

        	<ul id="menu">

            	<li><a href="index.php">HOME</a></li>

                <li><a href="paintings.php">ALL ARTWORK</a></li>

                <li><a href="art_type2.php">ACRYLIC</a></li>

                <li><a href="art_type3.php">OIL</a></li>

                <li><a href="art_type4.php">WATER COLOR</a></li>
				
				 <!--<li><a href="#">COLOURED PENCIL</a></li>-->
                <!-- <li><a href="art_type5.php">PHOTOGRAPHY</a></li>-->
                
                <li><a href="events.php">EVENTS</a></li>

                <?php $resources=$front_obj->getresources();
				//print_r()
				 ?>

                <li class="submenu1"><a href="resources.php">RESOURCES &#9662;</a>
				
				<ul>
				<?php foreach($resources as $allres) { ?>
                <li><a href="resources.php?id=<?php echo $allres->id; ?>"><?php echo $allres->title;?></a></li>
				<?php } ?>
				 </ul>
				</li>
                <li><a class="fancybox" href="#inline5"  title="Sign In" >CONTACT US</a></li>

            </ul>

        </div><!--nav-->
        
        

	<?php

    $query=mysql_query("select * from tb_app_users where username='".$_SESSION['username']."'");

	$res=mysql_fetch_array($query);?>

        <div class="sign_in">

		<?php if($_SESSION['username']==""){?>

     <span><a class="fancybox" href="psignup.php" title="Sign In" >SIGN UP / SIGN IN</a>&nbsp;&nbsp;</span>

		<?php } else {?>

		  <?php  $query=mysql_query("select * from tb_app_users where id='".$_SESSION['user_id']."'");
                 $ares=mysql_fetch_array($query);
				 $fvalue=$ares['fvalue'];
				 $gflag=$ares['g_flag'];
				 ?>
                 <?php if($_SESSION['user_id']!="" && $fvalue=='buy'){
				 		if($gflag=='1'){?>
							<span>
								<a href="profile.php"><?php echo ucfirst($res['username']);?></a>
							</span>
			<?php }else{?>
		  <span>
          <a href="profile.php"><?php echo ucfirst($res['first_name']);?> <?php echo ucfirst($res['last_name']);?></a>
            </span>
            
             <?php }} else {?>
             
              <span>
          <a href="own_artworks.php"><?php echo ucfirst($res['first_name']);?> <?php echo ucfirst($res['last_name']);?></a>
            </span>
                <?php } ?>

		 <a href="messages.php"><img src="images/chat.jpg" style="margin-top:-4px;"></a>

	 	
		  <?php } ?>

    <span>

      <?php if($_SESSION['user_id']!="" && $cou!=''){ ?>
      
       <a href="cart.php" style="position:relative;">
       
       <img src="images/cart_orange_09.jpg" style="margin-top:-4px;" alt="">
	  <span style="position:absolute; left:18px; top:-9px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; width:15px; height:15px; text-align:center; background-color:#fff;font-size:12px; color:#000;"><?php echo $cou; ?></span>
       
       </a>

      <?php }else{?>
      <a href="cart.php" style="position:relative;">
      <img src="images/cart_orange_09.jpg" style="margin-top:-4px; margin-left:9px;" alt="">
             <span style="position:absolute; left:25px; top:-9px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; width:15px; height:15px; text-align:center; background-color:#fff; font-size:12px; color:#000;"><?php echo $cou; ?></span>

      </a>
      
      <?php } ?>

	   </span>

		

		<?php  if($_SESSION['username']!=""){?>

		  <a href="logout.php"> <span>&nbsp;Logout </span></a>

		<?php } ?>

        </div><!--sign_in-->

    </div><!--mid_wrap-->

</div><!--navigation_bar-->

<div class="clear_fix"></div>







<!--<div id="inline1" style="display: none;">



<div class="cntctlogo_blg">

            	<div class="cntctlogo_blg_left">

                	<img src="images/logo_03.png" alt="">

                </div>
            </div>

 <div class="signin_blg">

            	<div class="signin_blg_left">

                	<h2>Sign Up</h2>

                    <h1>Welcome!</h1>

                    <p>To buy and sell art, you must first have an account.</p>

                   <a class="fancybox" href="#inline2" title="Sign Up" > <input name="submit" type="submit" value="Sign up"></a>

				   

				  

                    <span>(or)</span>

                    <a  href="<?php echo SITEURL; ?>/facebook/hybridauth/login-with.php?provider=Facebook" target="new">       <input type="submit" value="Connect Via Facebook"  class="facebook"></a>



            

                </div>

                <div class="signin_blg_right">

                	<h1>Sign IN</h1>

                    <p>Already have an account?</p>

					 <form name="log_frm" id="log_frm" method="post" >

                    <div><input type="text" name="log_email" id="log_email" pattern="[^ @]*@[^ @]*" placeholder="Enter your email" required></div>

                    <div><input type="password" name="log_passw" id="log_passw" placeholder="Password" required></div>

                    <div class="rememberme"><input type="checkbox"> Remember Me</div>

                    <div style="text-align:left; margin-top:0px;">

                        <a href="featured_art.php">

						<input type="image" src="images/btnimgs_03.png"  name="submit" value="save"></a>

                        <a href="#"><img src="images/btnimgs_05.png"></a>

                    </div>

                    <div class="forgotpwd"> <a class="fancybox" href="#inline4" title="Sign Up" >Forgot your password?</a></div>

                </div>

            </div> 

    </div>

</form>-->

<?php $count=0; ?>

<div id="inline2" style="display: none;">



<div class="site_container2">

    	<div class="contact_popup">

        

        	<div class="cntctlogo_blg">

            	<div class="cntctlogo_blg_left">

                	<img src="images/logo_03.png" alt="" style="margin-left:55px;">

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

						</div>
						</a>

                    </div><!--are_you_blg_left-->

                    <div class="are_you_blg_right">

                    <a href="javascript:void(0);"  onClick="selection('sell');">	

					 <div id="sl">

					<img src="images/2a_img2_03.png" alt="">

                        </div>

						<span>SELLING ART</span>

						

                    </div></a><!--are_you_blg_right-->

                </div><!--are_you_blg-->

            	<div class="clear_fix"></div>

            <div class="frmbtn_blg">

            	<!--<a href="#inline1" class="fancybox">Back</a>-->

	<!--	<form name="s_frm" id="s_frm" method="post">

		<input type="text" name="fvalue" id="fvalue">

		<a class="fancybox" href="#inline3" title="Send Quote" >

		<input type="submit" value="Next"></a>

		</form>-->

	<div id="buy" style="display:none">	

	<!--<a href="#inline3" class="fancybox" onClick="changevalue();"><input type="submit" name="next" value="Next"></a>-->

	</div>

	

	<!--<div id="sell" >	

	<a href="#inline6" class="fancybox" onClick="changevalue();"><input type="submit" name="next" value="Next"></a>

	</div>-->
    
    <div id="sell" >	

	<!--<a href="Artsignup.php" class="fancybox" onClick="changevalue();"><input type="submit" name="next" value="Next"></a>-->

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

            <div class="or"></br>

            	<span>(or)</span>

            </div><!--or-->  

            

            <div class="form_blg">

            	<div class="name">

                	<input type="text" placeholder="First Name" name="first_name" required >

                    <input type="text" placeholder="Last Name" name="last_name" required>

                </div><!--name-->

                

               
                

                <div class="name">
               
               
                <input type="email" placeholder="Email Address" name="email" required>    

                <input type="text" placeholder="Username" name="username" required>

                    

                </div><!--name-->

                

                <div class="name">

   <input type="password" placeholder="Password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onChange="form.cpassword.pattern = this.value;" required>

         <input type="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  name="cpassword"  onBlur="return c_passw(this.value);" required>

                </div><!--name-->

            </div><!--form_blg-->

            <div class="frmbtn_blg" > 

			<div class="clear_fix"></div>

            <!--	<a href="#inline2" class="fancybox">Back</a> &nbsp;&nbsp;-->

             <!-- <a href="signin.php">  </a>-->
              <input type="hidden"  name="fvalue" value="buy" required>
              
			  <input type="submit" value="CREATE ACCOUNT"  name="Submit" style="width:24%;">

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

						<!--<img src="images/btnimgs_03.png" style="float: right;">-->

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

            

            

			<?php /*?><div id="inline6" style="display: none;"> 

		<form action="" method="post" id="postp" name="myfrom" enctype="multipart/form-data" >



	<div class="contact_popup">

        

        	<div class="cntctlogo_blg">

            	<div class="cntctlogo_blg_left">

                	<img src="images/logo_03.png" alt="">

                </div><!--cntctlogo_blg_left-->

               <!-- <div class="cntctlogo_blg_rgt">

                	<a href="selection.php"><img src="images/6A_cross_03.png" alt=""></a>

                </div>--><!--cntctlogo_blg_rgt-->

            </div><!--cntctlogo_blg-->           

            	



            <div class="facebook_blg" style="font-family: 'CenturyGothicRegular'; color: #908f8f;">

            	<h3>Artist Profile Sign Up</h3>
                <div style="float:right;">All fields with(<b>*</b>) are mandatory </p></div>

            </div><!--facebook_blg-->

           <!-- <div class="or">

            	<span>(or)</span>

            </div>--><!--or-->  

            

            <div class="form_blg">

            	<div class="name">

                	<input type="text" placeholder="Name*" name="name" id="name" required >

					

				

	<input type="email" placeholder="Email Address*" value="" name="email" id="email" onchange ='getemail(this.value)' required> 

                 

                </div><!--name-->
                
  <div id="gemail" style="float:right; margin-right:12px;margin-right: 82px;margin-top: -14px;"></div>

                

               

                

                <div class="name">

     				<textarea name="address" id="address" placeholder="Address*" required ></textarea>   

                	<input type="text" placeholder="Year started painting*" name="paint_date" id="paint_date" required class="toptextbox">

                    <input type="text" placeholder="Church Name*" required name="church_name" id="church_name" style="margin-top:0px;">

					<input type="text" placeholder="url"   name="church_website" id="church_website" style="margin-top:0px;">

				
      
                
           <div class="name">

            <input type="text" placeholder="Medium*" required name="medium" id="medium" style="margin-top:0px;">         

                </div>     
                
                
                
                
                
                	<div class="clear_fix"></div>

                </div><!--name-->

				<div class="name" id='dvFile'>

               <textarea name="artist_biodata" id="artist_biodata" required placeholder="Artist Biodata*" style="width:97%;" ></textarea> 
			   
			   <input type="hidden" name="fvalue" id="fvalue">

				 </div></br></br>

                 	

                <div class="input_fields_wrap" style="color:#908f8f;font-family: 'CenturyGothicRegular';">

				

				&nbsp;&nbsp;Artist Photo&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;

				<input name="artist_image" type="file" id="file" class="upload" required/></div><br>

            <!--    <button id="add_more" class="add_field_button upload">Add More Fields</button>   -->

			

			    <div style="color: #908f8f; margin-left: 9px;font-family:'Conv_centuryGothic_bold';"><h4>Please upload 5 examples of your art.</h4></div><br>

				

				<?php for($i=1;$i<=5;$i++)

				{?>

			 <div  class="input_fields_wrap" style="color: #908f8f;font-family: 'CenturyGothicRegular';">

	
				&nbsp;&nbsp;Art Image <?php echo $i?>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;

				<input name="art<?php echo $i;?>" type="file" id="file" required/>&nbsp;&nbsp;&nbsp;
          <input name="size<?php echo $i;?>" type="text" id="" placeholder="Size of Painting" style="width:15%; height:20px;" required/></div><br>

				

				<?php } ?>

				
				

				<div class="clear_fix"></div>

            </div><!--form_blg-->

				<div class="clear_fix"></div>

            <div class="frmbtn_blg" >

            	<a href="#inline2" class="fancybox">Back</a>&nbsp;&nbsp;

             <!-- <a href="signin.php">  </a>-->

			  <input type="submit" value="Next"  name="Save">

            </div><!--frmbtn_blg-->     

            

        </div>

		</form>

	     </div><?php */?>

  

  

     

<!--venkat Next dont remove from here-->	     

         

			

			<div id="popup_box" style="display: none;">

			

			<?php

			

			

			 $qq=mysql_query("select * from tb_app_images where app_id=".$_GET['id']);

			      // $arts=mysql_fetch_array($qq);  ?>

           

         <form method="post" action="" enctype="multipart/form-data">

		 

		 <input type="hidden" name="app_id" id="app_id" value="<?php echo $_GET['id']?>">

         <ul class="churchslist">

		 <li style="font-family: 'CenturyGothicRegular'; color: #908f8f;">Please write a brief description of your art pieces.</li>

		 

		   <?php

		   $i=1;

		    while($arts=mysql_fetch_array($qq)){?>

         <li>

         <div class="propheticspopupimg">

           <img src="uploads/artists/<?php echo $arts['art_image']?>" alt="" class="res_images">

          </div>

         <div class="propheticspopupdisc">

		 

		 <input type="hidden" name="img_id<?php echo $i;?>" id="img_id"  value="<?php echo $arts['id']?>"> 

        

         <textarea name='art_desc<?php echo $i;?>'  wrap=physical cols=20 rows=2 

         onKeyDown='textCounter(this.form.art_desc<?php echo $i;?>,this.form.remLen<?php echo $i;?>,250);' 

         onKeyUp='textCounter(this.form.art_desc<?php echo $i;?>,this.form.remLen<?php echo $i;?>,250);'></textarea>

         <input readonly type=text name=remLen<?php echo $i;?> size='6px' maxlength=2 value='250' style="margin-left:-113px;"> 

		 

		 

         

         <span style="color:#105DAF;font-family: 'CenturyGothicRegular';">characters left</span></font><br />

         

          </div>

          <div class="clear_fix"></div>

          </li>

		

		     <?php 

			 $i++;

			 } ?>

		  

        <!-- <li>

         <div class="propheticspopupimg">

           <img src="uploads/artists/<?php // echo $arts['art_image']?>" alt="" class="res_images">

          </div>

         <div class="propheticspopupdisc">

		 

           <textarea placeholder="Discription" name="art_desc<?php // echo $i;?>" id="art_desc"></textarea>

          </div>

          <div class="clear_fix"></div>

          </li>-->

		  

		 



         <!--<li>

         <div class="propheticspopupimg">

           <img src="uploads/artists/<?php echo $arts['art3']?>" alt="" class="res_images">

          </div>

         <div class="propheticspopupdisc">

           <textarea placeholder="Discription" name="art3_desc" id="art3_desc"></textarea>

          </div>

          <div class="clear_fix"></div>

          </li>



         <li>

         <div class="propheticspopupimg">

           <img src="uploads/artists/<?php echo $arts['art4']?>" alt="" class="res_images">

          </div>

         <div class="propheticspopupdisc">

           <textarea placeholder="Discription" name="art4_desc" id="art4_desc"></textarea>

          </div>

          <div class="clear_fix"></div>

          </li>

		  

		   <li>

         <div class="propheticspopupimg">

           <img src="uploads/artists/<?php echo $arts['art5']?>" alt="" class="res_images">

          </div>

         <div class="propheticspopupdisc">

           <textarea placeholder="Discription" name="art5_desc" id="art5_desc"></textarea>

          </div>

          <div class="clear_fix"></div>

          </li>-->

           <input type="submit" name="update" value="Submit">

           </ul> 

           

           </form>                   

	  </div>

	  

	  

	  <div id="final_popup" style="display: none;">

	    <ul class="churchslist">

		 <li style="color: #908f8f;">

	 <p style="font-family:Conv_centuryGothic_bold;font-size:16px;">Your application has been submitted, and is pending review!  We will send you an e-mail soon letting you know the status of your application. <br> Thanks,</br><p>

<b style="color:#0B55A6;font-family:Conv_centuryGothic_bold">The Prophetic Creations Team.</b>

</li>

</ul>

	  </div>

	  

	  

	  <div id="user_popup" style="display: none;">

	    <ul class="churchslist">

		 <li style="color: #908f8f;">

	 Your account created successfully.

	 <br> Thanks,</br>

<b style="color:#0B55A6;">The Prophetic Creations Team.</b>

</li>

</ul>

	  </div>

			

 <!--venkat script here dont remove from here-->		           

    

   <!--character count in comment start -->  

  

  

   

<script language="JavaScript">

function textCounter(field, countfield, maxlimit) {

if (field.value.length > maxlimit) 

field.value = field.value.substring(0, maxlimit);

// otherwise, update 'characters left' counter

else 

countfield.value = maxlimit - field.value.length;

}



</script>

  

    

            

            

    </div>

	

	

<!-- Add jQuery library -->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>



$(document).ready(function() {

    var max_fields      = 10; //maximum input boxes allowed

	 var min_fields      = 5; //maximum input boxes allowed

	

    var wrapper         = $(".input_fields_wrap"); //Fields wrapper

    var add_button      = $(".add_field_button"); //Add button ID

    

    var x = 1; //initlal text box count

    $(add_button).click(function(e){ //on add input button click

        e.preventDefault();

        if(x < max_fields){ //max input box allowed

            x++; //text box increment

            $(wrapper).append('<br><div><input name="file[]" type="file" id="file"/><a href="#" class="remove_field"><img src="./images/remove.png" style="margin-top:-8px;margin-left:-8px;"></a></div>'); //add input box

        }

    });

    

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

        e.preventDefault(); $(this).parent('div').remove(); x--;

    })

});



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

