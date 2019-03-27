	  
	<?php
	$categories = $this->model->getCategory();
  $subcategories = $this->model->getAllSubCategory();?>
	<div class="container"> 
			         
		<div class="register">
		  	  <form action='<?php echo $home_url.'registerUser'?>' method="post"> 
				 <div class="register-top-grid">
				     <?php echo $GLOBALS['registerIssue'] ;?>
					<h3>PERSONAL INFORMATION</h3>
					<div class="mation">
						<span>Full Name<label>*</label></span>
						<input type="text" name="user_name" id="user_name" pattern="[a-z,A-Z, ' ']{3,15}" required> 

						 <span>Email Address<label>*</label></span>
						 <input type="email" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> 

	
					</div>
					 <div class="clearfix"> </div>
					  
					 </div>
				     <div class="  register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							<div class="mation">
								<span>Password<label>*</label></span>
								<input type="password" name="user_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required >
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="user_password" required>
							</div>
						   
							
					   
					 </div>

					 <div class="register-but">
				   
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   
				</div>
				</form>

				<div class="clearfix"> </div>
				
				
				
				 
				
		   </div>
		   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">

		 <?php 

foreach ($categories as $value){
		if($this->model->haveSubCategory($value->id)){
			echo '<li class="item1"><a href="#">'.$value->name.'<img class="arrow-img" style="float:right; margin-top:20px" src="'.$base_url.'images/arrow1.png" alt=""/> </a>
			<ul class="cute">';

			foreach($subcategories as $val){
				if($val->category_Id == $value->id){
					  echo '<li class="subitem"><a href="'.$home_url.'index?subCategory='.$val->id.'">'.$val->name.' </a></li>';
				  }
		   }

			echo '</ul></li>';
		}
}

?>


		
		
			<ul class="kid-menu">
					 
					<?php 
				foreach ($categories as $value){
					if($this->model->haveSubCategory($value->id)){
					
					}else{
						echo '<li><a href="'.$home_url.'index?category='.$value->id.'">'.$value->name.'</a></li>';
					}
			}
					?>
			
			</ul>
		
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<div class=" chain-grid menu-chain">
	   		     		<a href="<?php echo $base_url ?>single.html"><img class="img-responsive chain" src="<?php echo $base_url ?>images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6>Lorem ipsum dolor</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="<?php echo $base_url ?>product.html">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>      
	</div>
	<!---->