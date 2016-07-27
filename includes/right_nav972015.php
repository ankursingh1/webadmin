

<div class="prophetic_right">
            <h1 style="font-family:'CenturyGothicRegular';">Recent News:</h1>
            <?php   $query="select * from tb_recent  ORDER BY id DESC ";
			       $plo=$callConfig->getAllRows($query);
				   
				   
				   foreach($plo as $pop)
			     {
			
			?>
            <div style="margin-top:10px;">
          <!--  <p style="padding-bottom:5px; ">3/14/15</p>-->
            <p style="font-family:'CenturyGothicRegular';"><?php echo $pop->descreption?></p>
            </div>
            
            <?php }?>
            
           
        </div>