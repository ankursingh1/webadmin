<?php include "includes/header.php";
?>



<div  style="margin-top:15px;"> 

		<form action="" method="post" id="postp" name="myfrom" enctype="multipart/form-data" >



	<div class="contact_popup">

        


 <div class="facebook_blg" style="font-family: 'CenturyGothicRegular';color:#333 ;margin-top:15px;">

            	<h3 style="font-family:'Conv_centuryGothic_bold'">Artist Profile Sign Up</h3>
                
                
                <div style="float:right; margin-top:30px;">All fields with(<b>*</b>) are mandatory </p></div>

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
          <input name="size<?php echo $i;?>" type="text" id="" maxlength="15" placeholder="Size of Painting" style="width:15%; height:20px;" required/></div><br>

				

				<?php } ?>

				<!-- <div class="input_fields_wrap" style="color: #908f8f;">

				

				&nbsp;&nbsp;Art Image 2&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;

				<input name="art2" type="file" id="file" required/></div><br>

				 <div class="input_fields_wrap" style="color: #908f8f;">

				

				&nbsp;&nbsp;Art Image 3&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;

				<input name="art3" type="file" id="file" required/></div><br>

				 <div class="input_fields_wrap" style="color: #908f8f;">

				

				&nbsp;&nbsp;Art Image 4&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;

				<input name="art4" type="file" id="file" required/></div><br>

				 <div  class="input_fields_wrap" style="color: #908f8f;">

				

				&nbsp;&nbsp;Art Image 5&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;

				<input name="art5" type="file" id="file" required/></div><br>

			-->

			

                

				

				<div class="clear_fix"></div>

            </div><!--form_blg-->

				<div class="clear_fix"></div>

            <div class="frmbtn_blg" >

            	<!--<a href="#inline2" class="fancybox">Back</a>&nbsp;&nbsp;-->

             <!-- <a href="signin.php">  </a>-->
              <input type="hidden" value="sell"  name="fvalue">
			  <input type="submit" value="Next"  name="Save">

            </div><!--frmbtn_blg-->     

            

        </div>

		</form>

	     </div>
         <div style="margin-bottom:10px;"></div>
            

<div class="clear_fix"></div>

<div class="header_wrap">
 <div class="site_container1">
 <div style="margin-bottom:25px; margin-top:10px;"><img src="images/shadow_border_09.png" alt="" class="res_border"> </div>
 </div>   
</div>
<div class="clear_fix"></div>            
            
 <?php include("includes/footer.php"); ?>
           