<?php
ob_start();
session_start();
include 'library.php';
/*
CREATE TABLE `demo`.`fblogin` (
`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`fb_id` INT( 20 ) NOT NULL ,
`name` VARCHAR( 300 ) NOT NULL ,
`email` VARCHAR( 300 ) NOT NULL ,
`image` VARCHAR( 600 ) NOT NULL,
`postdate` DATETIME NOT NULL
) ENGINE = InnoDB;
*/
$action = $_REQUEST["action"];
switch($action){
	case "fblogin":
	include 'facebook.php';
	$appid 		= "745184778885460";
	$appsecret  = "31272ffcbf692f042b099fb9827f03c2";
	$facebook   = new Facebook(array(
  		'appId' => $appid,
  		'secret' => $appsecret,
  		'cookie' => TRUE,
	));
	$fbuser = $facebook->getUser();
	if ($fbuser) {
		try {
		    $user_profile = $facebook->api('/me');
		}
		catch (Exception $e) {
			echo $e->getMessage();
			exit();
		}
		$user_fbid	= $fbuser;
			//print_r($user_profile); exit;
		$user_email = $user_profile["email"];
		$_SESSION['useremail']=$user_email;
		$user_fnmae = $user_profile["first_name"];		
		$_SESSION['username']=$user_fnmae;
		$user_lname = $user_profile["last_name"]; 
		
		$user_image = "https://graph.facebook.com/".$user_fbid."/picture?type=large";
		//echo  $oko="<img src='".$user_image ."'/>";
		
		$selqs = mysql_query("SELECT * FROM `tb_campaginusers` WHERE email = '$user_email'");
		$check_select = mysql_num_rows($selqs);
		if($check_select == 0){
			  
			  $regmax = "SELECT MAX(id) as ids FROM tb_campaginusers";
 	 		  $rsm = mysql_query($regmax);

			  while($row = mysql_fetch_array($rsm))
			  {
				$newid = $row['id']+1; 
				/*$memid = "AUSPET00".$newid;*/
				$_SESSION['memberid'] = $memid;
		 	  }		
			  
			 mysql_query("INSERT INTO `tb_campaginusers` (firstname,lastname, email,fb_image) VALUES ('$user_fnmae','$user_lname','$user_email','$user_image')"); 
			 $_SESSION['far_email'] = $user_email;
		}
		if($check_select > 0)
		{
			  while($rows = mysql_fetch_array($selqs))
			  {
				$memids = $rows['memberid']; 
				$faceid = $rows['id'];
				$emails = $rows['email']; 
				$_SESSION['memberid'] = $memids;
				$_SESSION['user_id'] = $faceid;
				$_SESSION['far_email'] = $emails;
		 	  }		
		}?>
		
	
      <script>
		window.location = "http://192.254.233.173/~rajeshch/farofunding/index.php";
		</script>
		
		<?php	
		//header('location:Amazing_Pet_Mydashboard.php');	
	}	
	break;
	

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asif18 tutorial about facebook login for mywebsite using php sdk</title>
<script type="text/javascript">
window.fbAsyncInit = function() {
	FB.init({
	appId      : '684719654930387', // replace your app id here
	channelUrl : '//http://localhost/faro', 
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

function FBLogout(){
	FB.logout(function(response) {
		window.location.href = "index.php";
	});
}
</script>
<style>
body{
	font-family:Arial;
	color:#333;
	font-size:14px;
}
.mytable{
	margin:0 auto;
	width:600px;
	border:2px dashed #17A3F7;
}
a{
	color:#0C92BE;
	cursor:pointer;
}
</style>
</head>
<body>
<h1>Asif18 tutorial for facebook ling using php, javascript sdk dymaically</h1>
<h3>here is the user details, for more details </h3>
<table class="mytable">
<tr>
	<td colspan="2" align="left"><h2>Hi <?php echo $user_fnmae; ?>,</h2><a href="logout.php" onClick="FBLogout();">Logout</a></td>
</tr>
<tr>
	<td><b>Fb id:<?php echo $user_fbid; ?></b></td>
    <td valign="top" rowspan="2"><img src="<?php echo $user_image; ?>" height="100"/></td>
</tr>
<tr>
	<td><b>Email:<?php echo $user_email; ?></b></td>
</tr>
</table>
</body>
</html>