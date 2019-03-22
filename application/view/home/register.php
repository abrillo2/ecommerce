	  
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
						<li><a href="<?php echo $base_url ?>#"><span> </span></a></li>
						<li><a href="<?php echo $base_url ?>#"><span class="facebook-in"> </span></a></li>
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
						<li><a href="<?php echo $base_url ?>#">Curabitur sapien</a></li>
						<li><a href="<?php echo $base_url ?>#">Dignissim purus</a></li>
						<li><a href="<?php echo $base_url ?>#">Tempus pretium</a></li>
						<li ><a href="<?php echo $base_url ?>#">Dignissim neque</a></li>
						<li ><a href="<?php echo $base_url ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $base_url ?>#">Ultrices id du</a></li>
						<li><a href="<?php echo $base_url ?>#">Commodo sit</a></li>
						<li ><a href="<?php echo $base_url ?>#">Urna ac tortor sc</a></li>
						<li><a href="<?php echo $base_url ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $base_url ?>#">Urna ac tortor sc</a></li>
						<li ><a href="<?php echo $base_url ?>#">Eget nisi laoreet</a></li>
						<li ><a href="<?php echo $base_url ?>#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PROJECTS</h6>
					<ul>
						<li><a href="<?php echo $base_url ?>#">Curabitur sapien</a></li>
						<li><a href="<?php echo $base_url ?>#">Dignissim purus</a></li>
						<li><a href="<?php echo $base_url ?>#">Tempus pretium</a></li>
						<li ><a href="<?php echo $base_url ?>#">Dignissim neque</a></li>
						<li ><a href="<?php echo $base_url ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $base_url ?>#">Ultrices id du</a></li>
						<li><a href="<?php echo $base_url ?>#">Commodo sit</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="<?php echo $base_url ?>#">Curabitur sapien</a></li>
						<li><a href="<?php echo $base_url ?>#">Dignissim purus</a></li>
						<li><a href="<?php echo $base_url ?>#">Tempus pretium</a></li>
						<li ><a href="<?php echo $base_url ?>#">Dignissim neque</a></li>
						<li ><a href="<?php echo $base_url ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $base_url ?>#">Ultrices id du</a></li>
						<li><a href="<?php echo $base_url ?>#">Commodo sit</a></li>
						<li ><a href="<?php echo $base_url ?>#">Urna ac tortor sc</a></li>
						<li><a href="<?php echo $base_url ?>#">Ornared id aliquet</a></li>
						<li><a href="<?php echo $base_url ?>#">Urna ac tortor sc</a></li>
						<li ><a href="<?php echo $base_url ?>#">Eget nisi laoreet</a></li>
						<li ><a href="<?php echo $base_url ?>#">Faciisis ornare</a></li>
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
						<li class="temp"> <p class="footer-class">Design by <a href="<?php echo $base_url ?>http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>