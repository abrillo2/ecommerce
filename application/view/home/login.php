  
	<?php
	$categories = $this->model->getCategory();
  $subcategories = $this->model->getAllSubCategory();?>
	 <div class="container">
		
      	   <div class="account_grid">
			   <div class=" login-right">
				   <?php echo $GLOBALS["registerIssue"]; ?>
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form name="loginForm" onsubmit="return validateForm()" action="<?php echo $home_url;?>loginuser" method="post">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="email" name="user_email" required> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="user_password" required> 
				  </div>

					<?php echo $error;?>
				  <a class="forgot" href="<?php echo $home_url; ?>#">Forgot Your Password?</a>
				  <input type="submit" value="Login">
			  </form>
			   </div>	
			    <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account, you will be able to post buy and/or sell requests And chat with your client/customer.</p>
				 <a class="acount-btn" href="<?php echo $home_url; ?>register">Create an Account</a>
			   </div>
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
	   		     		<a href="<?php echo $home_url; ?>single"><img class="img-responsive chain" src="<?php echo $base_url; ?>images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6>Lorem ipsum dolor</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="<?php echo $home_url; ?>product">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
			  <div class="clearfix"> </div>
      	 </div>
	<!---->