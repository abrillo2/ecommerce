
	<!---->
	<?php 
	

			if(isset($_GET['category'])){
				$products = $this->model->getRequestByCategory($_GET['category']);
			}elseif(isset($_GET['subCategory'])){
				$products = $this->model->getRequestBySubCatergory($_GET['subCategory']);
			}else{
				$products = $this->model->getAllRequest();
			}

			$len = count($products);

			$categories = $this->model->getCategory();
    	    $subcategories = $this->model->getAllSubCategory();
	
	
	?>
	<div class="container">
			<div class="shoes-grid">
			<a href="<?php echo $home_url?>single.php">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper">		 
						 
					 <?php 

foreach($products as $value){

	$productPic = glob(PUB . "request/" . $value->id. "/*.{jpg,gif,png}", GLOB_BRACE);

	echo '<article style="position: absolute; width: 100%; opacity: 0;">					
					<div class="banner-matter">
					<div class="col-md-5 banner-bag">
						<img class="img-responsive " src="'.$base_url.'request/'.$value->id.'/'.basename($productPic[0]).'" alt=" " />
						</div>
						<div class="col-md-7 banner-off">							
						
							<label>'.$value->name.'</label>
							<p>'.$value->info.'</p>					
							<span class="on-get">talk to buyer</span>
						</div>
						
						<div class="clearfix"> </div>
					</div>					
			</article>';


}

?>





						
					 </div>
					 </a>
	                <ul class="wmuSliderPagination">
	                	<li><a href="#" class="">0</a></li>
	                	<li><a href="#" class="">1</a></li>
	                	<li><a href="#" class="">2</a></li>
	                </ul>
					 <script src="js/jquery.wmuSlider.js"></script> 
				  <script>
	       			$('.example1').wmuSlider();         	
	   		     </script> 
	            </div>
	          </div>
	           	</a>
	   		      <!---->
	   		     <div class="shoes-grid-left">

			<?php 
			
					for($i = 0; $i < $len; $i++){
						
							$productPic = glob(PUB . "request/" . $products[$i]->id. "/*.{jpg,gif,png}", GLOB_BRACE);
							echo '<a href="'.$home_url.'single.php">				 
									<div class="col-md-6 con-sed-grid">
								
										<div class=" elit-grid"> 
									
											<h4>Looking for :</h4>
											<label>'.$products[$i]->name.'</label>
										<p>'.$products[$i]->info.'</p>
										<span class="on-get">talk to buyer</span>						
									</div>						
									<img class="img-responsive shoe-left" src="'.$base_url.'request/'.$products[$i]->id.'/'.basename($productPic[0]).'" alt=" " />
								
									<div class="clearfix"> </div>
							
									</div>
								</a>';
						
					}
			
			
			?>
	   		     </div>
	   		     <div class="products">
	   		     </div>
	   		     <div class="product-left">
								

	   		     	 
	   		     	
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

									'.getSubCategory($value->id,$subcategories,$logged_in).'

			</ul>
		</li>';
		}
}

function getSubCategory($id,$subcategories,$logged_in)
{
	foreach($subcategories as $value){
		  if($value->category_Id == $id){
			    return '<li class="subitem"><a href="'.$logged_in.'requestList?subCategory='.$value->id.'">'.$value->name.' </a></li>';
			}
	}
}

?>

		
		
			<ul class="kid-menu">
					 
					<?php 
				foreach ($categories as $value){
					if($this->model->haveSubCategory($value->id)){
					
					}else{
						echo '<li><a href="'.$logged_in.'requestList?category='.$value->id.'">'.$value->name.'</a></li>';
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
	   		     		<a href="<?php echo $home_url?>single.php"><img class="img-responsive chain" src="<?php echo $base_url ?>images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6><a href="<?php echo $home_url?>single.php">Lorem ipsum dolor</a></h6>  		     			   		     										
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
					<ul>s
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
	<?php // <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>