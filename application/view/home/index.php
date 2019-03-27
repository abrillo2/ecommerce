

	<!---->
	<div class="container">
			<div class="shoes-grid">
			<a href="<?php echo $home_url?>single">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper">		 
						 
					 <?php 

foreach($products as $value){

	$productPic = glob(PUB . "user/pic/" . $value->id. "/*.{jpg,gif,png,jpeg}", GLOB_BRACE);

	if($value->status == 0){
		continue;
	}

	if(count($productPic) > 0){
		$pic_url = $base_url.'user/pic/'.$value->id.'/'.basename($productPic[0]);
	 }else{
		$pic_url = $base_url.'img/demo-image.png';
	 }

	echo '<a href="'.$home_url.'single?id='.$value->id.'&name='.$value->name.'&description='.$value->info.'&price='.$value->price.'&owner='.$value->user_email.'"><article style="position: absolute; width: 100%; opacity: 0;">					
					<div class="banner-matter">
					<div class="col-md-5 banner-bag">
						<img  src="'.$pic_url.'" alt=" " />
						</div>
						<div class="col-md-7 banner-off">							
						
							<label>'.$value->name.'</label>
							<p>'.$value->info.'</p>					
							<span class="on-get">GET NOW</span>
						</div>
						
						<div class="clearfix"> </div>
					</div>					
			</article></a>';


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

						 
						if($products[$i]->status == 0){
							continue;
						 }

						if($i==2){
							break;
						}else{
							$productPic = glob(PUB . "user/pic/" . $products[$i]->id. "/*.{jpg,gif,png}", GLOB_BRACE);
							

							if(count($productPic) > 0){
								$pic_url = $base_url.'user/pic/'.$value->id.'/'.basename($productPic[0]);
							}else{
								$pic_url = $base_url.'img/demo-image.png';
							}
							echo '<a href="'.$home_url.'single?id='.$products[$i]->id.'&name='.$products[$i]->name.'&description='.$products[$i]->info.'&price='.$products[$i]->price.'&owner='.$products[$i]->user_email.'">				 
									<div class="col-md-6 con-sed-grid">
								
										<div class=" elit-grid"> 
									
											<h4>SPONSORED</h4>
											<label>'.$products[$i]->name.'</label>
										<p>'.$products[$i]->info.'</p>
										<span class="on-get">GET NOW</span>						
									</div>						
									<img class="img-responsive shoe-left" src="'.$base_url.'user/pic/'.$products[$i]->id.'/'.basename($productPic[0]).'" alt=" " />
								
									<div class="clearfix"> </div>
							
									</div>
								</a>';
						}
					}
			
			
			?>
	   		     </div>
	   		     <div class="products">
	   		     	<h5 class="latest-product">LATEST PRODUCTS</h5>	
	   		     	  <a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
	   		     </div>
	   		     <div class="product-left">
								 <?php 
								 		$pic_url = '';
								 		for($i = 0; $i < $len; $i++){


											 
											 if($products[$i]->status == 0){
												continue;
											 }

											 $productPic = glob(PUB . "user/pic/" . $products[$i]->id. "/*.{jpg,gif,png}", GLOB_BRACE);

											 if(count($productPic) > 0){
												$pic_url = $base_url.'user/pic/'.$products[$i]->id.'/'.basename($productPic[0]);
											 }else{
												$pic_url = $base_url.'img/demo-image.png';
											 }


											 $class = 'col-md-4 chain-grid';
											if(($i+1)%3 == 0){
												$class = 'col-md-4 chain-grid grid-top-chain';
											}

											 echo '<div class="'.$class.'">
											 <a href="'.$home_url.'single?id='.$products[$i]->id.'&name='.$products[$i]->name.'&description='.$products[$i]->info.'&price='.$products[$i]->price.'&owner='.$products[$i]->user_email.'" ><img class="img-responsive chain" src="'.$pic_url.'" style="height: 200px;"/></a>
											 <span class="star"> </span>
											 <div class="grid-chain-bottom">
												 <h6><a href="<?php echo $home_url?>single.php">'.$products[$i]->name.'</a></h6>
												 <div class="star-price">
													 <div class="dolor-grid"> 
														 <span class="actual">'.$products[$i]->price.'$</span>
														 <span class="reducedfrom">400$</span>
														 
														
													 </div>
													 <a class="now-get get-cart" href="'.$logged_in.'chats?owner='.$products[$i]->user_email.'">Chat</a> 
													 </div>
													 </div>
												 </div>';
										 }
								 
								 ?>

	   		     	 
	   		     	
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
					<<?php 

			
			$j = 0;
			
			for($i = 0; $i < $len; $i++){

				 
				if($products[$i]->status == 0){
					continue;
				 }else{
					 $j++;
				 }

				if($j==2){
					break;
				}else{
					$productPic = glob(PUB . "user/pic/" . $products[$i]->id. "/*.{jpg,gif,png,jpeg}", GLOB_BRACE);

						if(count($productPic) > 0){
							$pic_url = $base_url.'user/pic/'.$value->id.'/'.basename($productPic[0]);
						}else{
							$pic_url = $base_url.'img/demo-image.png';
						}
					echo '<div class=" chain-grid menu-chain">
					     <a href="'.$home_url.'single?id='.$products[$i]->id.'&name='.$products[$i]->name.'&description='.$products[$i]->info.'&price='.$products[$i]->price.'&owner='.$products[$i]->user_email.'"><img class="img-responsive chain" src="'.$base_url.'user/pic/'.$products[$i]->id.'/'.basename($productPic[0]).'" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">'.$products[$i]->price.'$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6>'.$products[$i]->name.'</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>';

					
				}
			}
	

?>
	   		     	 <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->