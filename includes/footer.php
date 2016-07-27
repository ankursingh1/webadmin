<?php 
	$query="select * from tb_sitesettings where id='1'";
    $site = $callConfig->getRow($query);
	
?>
<div class="header_wrap footer">

  <div class="mid_wrap">

    <div class="mainfootem footer_part">

      <ul class="footercustomerlis">

       <li>

        <a href="#" style="text-transform:uppercase; text-decoration:underline;">Customer Service</a>

       <ul class="footercustomerlis_sub">

        <li><a class="fancybox" href="#inline5"  title="Contact Us" >Contact Us</a></li>

        <!-- <li><a href="<?php echo $site->policy_link; ?>">Returns Policy</a></li>-->
        <li><a href="content.php?id=5">Returns Policy</a></li>
         <li><a href="#">Delivery Information</a></li>

         </ul>

        </li>

      </ul>

          <ul class="footercustomerlis">

            <li>

            <a href="#" style="text-transform:uppercase; text-decoration:underline;">Your account</a>

              <ul class="footercustomerlis_sub">

              	<?php if($_SESSION['username']==""){?>

       <li><a class="fancybox" href="psignup.php" title="Sign In">Sign Up/Sign In</a></li>

               <!-- <li><a href="signin.php">Log In</a></li>-->

      <!--  <span><a class="fancybox" href="#inline1" title="Sign In" >SIGN UP / SIGN IN</a></span>-->



		<?php } else {?>

                  <li>  <a href="logout.php"> <span>&nbsp;Logout </span></a></li>

                  

                  <?php }?>

                

              </ul>

            </li>

          </ul>

          <ul class="footercustomerlis">

            <li>

            <a href="#" style="text-transform:uppercase; text-decoration:underline;">Here to help</a>

              <ul class="footercustomerlis_sub">

                <li><a href="content.php?id=6">Site Map</a></li>

                <li><a href="faq.php">FAQ</a></li>

              </ul>

            </li>

          </ul>

          <ul class="footercustomerlis">

            <li>

            <a href="#" style="text-transform:uppercase; text-decoration:underline;">About us</a>

              <ul class="footercustomerlis_sub">

                <li><a href="content.php?id=3">Security & Privacy</a></li>

                <li><a href="content.php?id=4">Terms & Conditions</a></li>

                <li><a href="content.php?id=7">Trade Enquiries</a></li>

              </ul>

            </li>

          </ul>

          <div class="visacardblogs">

            

            <div class="shoponline_wrap">

              <div style="float:left; margin-right:10px; width:35%;"><img src="images/secured_09.png" /></div>

              <div style="float:left; width:59%;"> Shop online with us Safely & securely</div>

              <div class="clear_fix"></div>

            </div><!--shoponline_wrap-->

            

            <div class="payment_wrap">

            <div style="margin-bottom:5px;">Payment Methods</div>

            <img src="images/card_05.png" alt="" />

            <img src="images/card_07.png" alt="" />

            <img src="images/card_09.png" alt="" />

            <img src="images/card_11.png" alt="" />

            </div><!--payment_wrap-->

          <div class="clear_fix"></div>

          </div>

          <div class="clear_fix"></div>



          

          <div class="secumb">

            <ul class="mofooter">

             <li><a href="content.php?id=1">Security & Privacy </a></li>

             <li><a href="content.php?id=1">Terms & Conditions</a></li>

             <li><a href="content.php?id=1">Trade Enquiries</a></li>

            </ul>

           <div class="clear_fix"></div>

            <div class="secondmcad">

                <img src="images/visasecuregurds_200.png" alt="" class="res_images" />

                <img src="images/visasecuregurds_202.png" alt=""  class="res_images"/>

                <img src="images/visasecuregurds_204.png" alt=""  class="res_images"/>

                <img src="images/visasecuregurds_206.png" alt=""  class="res_images"/>

                <img src="images/visasecuregurds_208.png" alt="" class="res_images" />

            </div>

            <div style="margin-top:10px;">

             <img src="images/visasecuregurds_197.png" alt="" />

            </div>

          </div>

          

          <div class="copywrite"> 

           <a href="#">2015 &copy; Prophetic Creations.</a>

           <div style="margin-top:10px;">

           <a href="http://facebook.com" target="_blank"><img src="images/social-icons_05.png"></a>&nbsp;&nbsp;

           <a href="https://twitter.com/"  target="_blank"><img src="images/social-icons_07.png"></a>&nbsp;&nbsp;

           <a href="https://plus.google.com/"  target="_blank"><img src="images/social-icons_09.png"></a>
           <a href="https://instagram.com/" target="_blank"><img src="images/instagram.jpg" style="height:29px; width:29px;"></a>
           <a href="https://www.pinterest.com/" target="_blank"><img src="images/printrest.jpg" style="height:29px; width:29px;"></a>

           </div>

           

          </div>

    </div><!--footer_part-->

  </div>

</div>

     <div class="clear_fix"></div>

   <!--ENd footer-->  





</body>

</html>

