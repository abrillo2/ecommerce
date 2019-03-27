<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="<?php echo $adminUrl?>admin"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $userName; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="<?php echo $adminUrl?>admin"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?php echo $_GET['id'] == 0 ? 'active' : 'none';?>"><a  href="<?php $adminUrl?>approve?id=0">&nbsp;</em> Approve sell Posts</a></li>
			<li class="<?php echo $_GET['id'] == 1 ? 'active' : 'none';?>"><a  href="<?php $adminUrl?>approve?id=1"><em class="fa fa-toggle-off">&nbsp;</em> Approve Buyers Request</a></li>
			<li><a href="<?php $adminUrl?>userconvo">&nbsp;</em> User Conversations </a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Add to Database <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php $adminUrl?>addProductCategorySubCategory?id=0">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Category
					</a></li>
					<li><a class="" href="<?php $adminUrl?>addProductCategorySubCategory?id=1">
						<span class="fa fa-arrow-right">&nbsp;</span> Add sub-Category
					</a></li>
					<li><a class="" href="<?php $adminUrl?>AddPlacesInfo?id=0">
						<span class="fa fa-arrow-right">&nbsp;</span> Add District
					</a></li>
					<li><a class="" href="<?php $adminUrl?>AddPlacesInfo?id=1">
						<span class="fa fa-arrow-right">&nbsp;</span> Add plicy Station
					</a></li>
					<li><a class="" href="<?php $adminUrl?>AddPlacesInfo?id=2">
						<span class="fa fa-arrow-right">&nbsp;</span> Add City
					</a></li>
					<li><a class="" href="<?php $adminUrl?>AddPlacesInfo?id=3">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Division
					</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $adminUrl;?>login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">

		</div>

		
        <div class="row">
			<div class="col-lg-12">
            <button type="button" class="btn btn-md btn-primary" id="all">Approve All</button>
				<h2><?php echo $title; ?></h2>
                
			</div>


            <?php 

                foreach($products as $value){

					if($_GET['id'] == '1'){

						$productPic = glob(PUB . "request/" . $value->id. "/*.{jpg,gif,png,jpeg}", GLOB_BRACE);

						if(count($productPic) > 0){
							$pic_url = $base_url.'request/'.$value->id.'/'.basename($productPic[0]);
						}else{
							$pic_url = $base_url.'img/demo-image.png';
						}

					}else{
						$productPic = glob(PUB . "user/pic/" . $value->id. "/*.{jpg,gif,png,jpeg}", GLOB_BRACE);

						if(count($productPic) > 0){
							$pic_url = $base_url.'user/pic/'.$value->id.'/'.basename($productPic[0]);
						}else{
							$pic_url = $base_url.'img/demo-image.png';
						}

					}

					
					$parentId = $value->id;

                


                    echo '<div class="col-md-4" id="'.$parentId.'">
                        <div class="panel panel-primary">
                                <div class="panel-heading">'.$value->name.'($'.$value->price.')</div>
                                    <div class="panel-body">
                                        <p>'.$value->info.'</p>
                                
                                        <img width=100px height=500px class="img-responsive " src="'.$pic_url.'" alt=" " width="500" height="600"/>
                                    </div>
                                    <button type="button"  class="btn btn-md btn-primary">Approve</button>
                                    <button type="button" class="btn btn-md btn-danger">Decline</button>
                                </div>
                              
					
					</div>';
               }
            ?>
			
			
            
			
		</div><!-- /.row -->
		
		<div class="row">

			
			
		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
				var chart1 = document.getElementById("line-chart").getContext("2d");
				window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
				});
	    };
	</script>

<script>


			$(document).ready(function() {

			
				

				$('#all').click(function(e) {

				

					$.ajax({
									url: '<?php echo URL2.'/ecommerce/administrator/';?>approveAll?type=<?php echo $_GET['id']?>',
									type: 'get',
									dataType: 'JSON',
									success: function(response){

									
									$('.col-md-4').remove();						
															

									}

														
						})

				})

				$('.btn-primary').click(function(e) {  


					


					


					var parent_id = $(this).parent().parent().attr('id');
					
						

					
				
						
					    $.ajax({
									url: '<?php echo URL2.'/ecommerce/administrator/';?>approveProduct?type=<?php echo $_GET['id']?>&id='+parent_id+ '',
									type: 'get',
									dataType: 'JSON',
									success: function(response){

									
										$('#'+parent_id+'').remove();						
															

									}

														
						})

				
					});

					$('.btn-danger').click(function(e) {  


					


					


						var parent_id = $(this).parent().parent().attr('id');

							


							
									
								$.ajax({
											url: '<?php echo URL2.'/ecommerce/administrator/';?>disapproveProduct?type=<?php echo $_GET['id']?>&id='+parent_id+ '',
											type: 'get',
											dataType: 'JSON',
											success: function(response){

											
												$('#'+parent_id+'').remove();						
														

								}

									
				})


});
					

				



			});
			
			
			
  </script>
		
</body>
</html>