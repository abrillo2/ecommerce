
	<!---->
	<?php 
	
			$products = $this->model->getAllProduct();
			$categories = $this->model->getCategory();
			$subcategories = $this->model->getAllSubCategory();
			$productDetails = $this->model->getProductDescription($_GET['id']);

	
	
	?>

	<?php $productPic = glob(PUB . "user/pic/" . $_GET['id']. "/*.{jpg,gif,png}", GLOB_BRACE); ?>
	
	 <div class="container"> 
	 	
	 	<div class="single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<?php
							    foreach($productPic as $value){
									echo '<li>
											  <img  class="etalage_thumb_image" src="'.$base_url.'user/pic/'.$_GET['id'].'/'.basename($value).'" class="img-responsive" width=1000px/>
											  <img  Class="etalage_source_image" src="'.$base_url.'user/pic/'.$_GET['id'].'/'.basename($value).'" class="img-responsive" />
										 </li>';
								}
							
							?>

						</ul>
						 <div class="clearfix"> </div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  
					
					<h4><?php echo $_GET['name']; ?></h4>
				<div class="cart-b">
					<div class="left-n ">$<?php echo $_GET['price']; ?></div>
					<a class="now-get get-cart-in" href="<?php echo $home_url;?>favorite?id=<?php echo $_GET['id']; ?>">Add To Favorite</a> 
					<div class="clearfix"></div>
					<br>
					<a class="now-get get-cart-in" href="<?php echo $logged_in.'chats?owner='.$_GET['owner']?>">Chat</a> 
				    <div class="clearfix"></div>
				 </div>
			   	<p><?php echo $_GET['description']; ?></p>
			   	<div class="share">
							<h5>Share Product :</h5>
							<ul class="share_nav">
								<li><a href="https://www.facebook.com"><img src="<?php echo $base_url ?>images/facebook.png" title="facebook"></a></li>
								<li><a href="https://www.twitter.com"><img src="<?php echo $base_url ?>images/twitter.png" title="Twiiter"></a></li>
								<li><a href=""><img src="<?php echo $base_url ?>images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="<?php echo $base_url ?>images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
			   
				
				</div>
          	    <div class="clearfix"> </div>
          	   </div>
          	   <ul id="flexiselDemo1">
			<li><img src="images/pi.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pi1.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="images/pi2.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="images/pi3.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pi4.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

          	    	<div class="toogle">
				     	<h3 class="m_3">Product Details</h3>
				     	<div class="list-group">


  <?php 
		for($i=0;$i<count($productDetails);$i++)
		{

			$active = ($i % 2) == 0 ? 'active' : '';
			
			echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start '.$active.'">
						<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">'.$productDetails[$i]->description.'</h5>
						</div>
						<small>'.$productDetails[$i]->description_value.'</small>
		  		</a>';
		}
  ?>
</div>
				     </div>	
          	   </div>
          	   
          	   <!---->
<div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
					<ul class="menu">

<?php 

foreach ($categories as $value){
if($this->model->haveSubCategory($value->id)){
   echo '<li class="item1"><a href="#">'.$value->name.'<img class="arrow-img" style="float:right; margin-top:20px" src="'.$base_url.'images/arrow1.png" alt=""/> </a>
   <ul class="cute">

						   '.getSubCategory($value->id,$subcategories).'

   </ul>
</li>';
}
}

function getSubCategory($id,$subcategories)
{
foreach($subcategories as $value){
 if($value->category_Id == $id){
	   return '<li class="subitem"><a href="product.html">'.$value->name.' </a></li>';
   }
}
}

?>



   <ul class="kid-menu">
			
		   <?php 
	   foreach ($categories as $value){
		   if($this->model->haveSubCategory($value->id)){
		   
		   }else{
			   echo '<li><a href="product.html">'.$value->name.'</a></li>';
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
	   		     		<a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6>Lorem ipsum dolor</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
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
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
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
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PROJECTS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
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
						<li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>