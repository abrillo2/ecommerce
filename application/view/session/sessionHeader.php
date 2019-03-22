<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<?php 
		$base_url = URL2.'/ecommerce/public/';
		$home_url = URL2.'/ecommerce/home/';
		$logged_in = URL2.'/ecommerce/session/';
		$user_profile = URL2.'/ecommerce/profile/';
		$add_product_url = URL2."/ecommerce/addProduct/";

		global $notifications;
		$GLOBALS["notifications"] = $this->model->getNotification($_SESSION["userEmail"]);


?>
<html>
<head>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href= "<?php echo $base_url ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="<?php echo $base_url ?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="<?php echo $base_url ?>js/jquery.min.js"></script>
<!--script-->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" href="<?php echo $base_url ?>css/etalage.css" type="text/css" media="all" />

<link href= "<?php echo $base_url ?>css/font-awesome.css" rel="stylesheet"/>
<link href= "<?php echo $base_url ?>css/drop.css" rel="stylesheet"/>

<script src="<?php echo $base_url ?>js/jquery.etalage.min.js"></script>
<script>
		

				jQuery(document).ready(function($){

$('#etalage').etalage({
	thumb_image_width: 300,
	thumb_image_height: 200,
	source_image_width: 750,
	source_image_height: 900,
	show_hint: true,
	click_callback: function(image_anchor, instance_id){
		alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
	}
});

});
		</script>



</head>




<body> 


	<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">


				<ul class="support">
						
						<li><a href="<?php echo $add_product_url;?>sell"><button class="btn btn-light">Want To Buy?</button></a></li>
					</ul>
					<ul class="support">
						
						<li><a href="<?php echo $add_product_url;?>add"><button class="btn btn-light">Sell Something</button></a></li>
					</ul>

				 <div class="down-top">		
						  <select class="in-drop">
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
					 </div>
					<div class="down-top top-down">
						  <select class="in-drop">
						  
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div>
					 <!---->
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="<?php echo $base_url ?>index.php"><img src="<?php echo $base_url ?>images/logo.png" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">	

				<div class="account"><a><span> </span>
				
						<div class="dropdown">
								<button class="dropbtn"><?php echo $_SESSION['userName'] ;?></button>
								<div class="dropdown-content">
								<a href="<?php echo $logged_in?>requestList">buyer's request</a>
								<a href="<?php echo $home_url?>showfavorite">Saved Items</a>
									<a href="<?php echo $user_profile?>userProfile">profile</a>
									<a href="<?php echo $logged_in?>logout">logOut</a>
								</div>
						</div>
				
				</a>

				
				</div>


				
				<div class="navbar">
					

					<div class="dropdown">
							<button class="dropbtn">
								<div class="button">
									<i class="fa fa-envelope"></i>
								
								</div>
							</button>
							<div class="dropdown-content">
								
							</div>
					</div>

					<div class="dropdown">
							<button class="dropbtn">
								<div class="button">
									<i class="fa fa-bell"></i>
									<?php 
												$notifi = $GLOBALS["notifications"];
												$notificationCount = 0;
												foreach($notifi as $value){
													if($value->status == 0){
														$notificationCount++;
													}
												}

												if($notificationCount > 0){
												    echo '<span class="button__badge">'.$notificationCount.'</span>';
												}
									?>
								</div>
							</button>
							<div class="dropdown-content">

									<?php 
												$notifi = $GLOBALS["notifications"];
												foreach($notifi as $value){
												     echo "<a href=".$logged_in."markasRead/?link=".$value->link."&id=".$value->Id.">".$value->notification."</a>";
												}
									?>
							</div>
					</div>

				</div>




	

				</div>
					
					<div class="clearfix"> </div>

					

				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>