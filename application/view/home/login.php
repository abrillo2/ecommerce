  
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
			<ul class="cute">

									'.getSubCategory($value->id,$subcategories,$home_url).'

			</ul>
		</li>';
		}
}

function getSubCategory($id,$subcategories,$home_url)
{
	foreach($subcategories as $value){
		  if($value->category_Id == $id){
			    return '<li class="subitem"><a href="'.$home_url.'index?subCategory='.$value->id.'">'.$value->name.' </a></li>';
			}
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
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
				 
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="<?php echo $home_url; ?>#"><span> </span></a></li>
						<li><a href="<?php echo $home_url; ?>#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="<?php echo $home_url; ?>#">Curabitur sapien</a></li>
						<li><a href="<?php echo $home_url; ?>#">Dignissim purus</a></li>
						<li><a href="<?php echo $home_url; ?>#">Tempus pretium</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Dignissim neque</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $home_url; ?>#">Ultrices id du</a></li>
						<li><a href="<?php echo $home_url; ?>#">Commodo sit</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Urna ac tortor sc</a></li>
						<li><a href="<?php echo $home_url; ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $home_url; ?>#">Urna ac tortor sc</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Eget nisi laoreet</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PROJECTS</h6>
					<ul>
						<li><a href="<?php echo $home_url; ?>#">Curabitur sapien</a></li>
						<li><a href="<?php echo $home_url; ?>#">Dignissim purus</a></li>
						<li><a href="<?php echo $home_url; ?>#">Tempus pretium</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Dignissim neque</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $home_url; ?>#">Ultrices id du</a></li>
						<li><a href="<?php echo $home_url; ?>#">Commodo sit</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="<?php echo $home_url; ?>#">Curabitur sapien</a></li>
						<li><a href="<?php echo $home_url; ?>#">Dignissim purus</a></li>
						<li><a href="<?php echo $home_url; ?>#">Tempus pretium</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Dignissim neque</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $home_url; ?>#">Ultrices id du</a></li>
						<li><a href="<?php echo $home_url; ?>#">Commodo sit</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Urna ac tortor sc</a></li>
						<li><a href="<?php echo $home_url; ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $home_url; ?>#">Urna ac tortor sc</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Eget nisi laoreet</a></li>
						<li ><a href="<?php echo $home_url; ?>#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li >nisi, dignissim</li>
						<li >gravida at.</li>
						<li class="phone">PH : 6985792466</li>
						<li class="temp"> <p class="footer-class">Design by <a href="<?php echo $home_url; ?>http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>