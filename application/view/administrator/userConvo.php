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
			<li><a href="<?php $adminUrl?>approve?id=0">&nbsp;</em> Approve sell Post</a></li>
			<li><a href="<?php $adminUrl?>approve?id=1"><em class="fa fa-toggle-off">&nbsp;</em> Approve Buyers Request</a></li>
			<li  class="active"><a href="<?php $adminUrl?>userconvo">&nbsp;</em> User Conversations </a></li>
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
		

		
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default chat">
					<div class="panel-heading">
						Chats
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul>

                            <?php 

                                    


                                if(isset($_GET['id']) & isset($_GET['pic1']) & isset($_GET['pic0']))
                                {

                                    $chats =  $this->model->getAllChat($_GET['id']);

                                    usort($chats, "cmp");
   
                                    $userData = explode(":",$_GET['id']);
   
                                    $name0 = $this->model->getuser($userData[0])->user_name;
                                    $name1 = $this->model->getuser($userData[1])->user_name;
   
   
   
                                    for($i=0;$i < count($chats);$i++){
   
                                           $class = "right clearfix";
                                           $class2 = "chat-img pull-right";
                                           $src =  $base_url.'user/pic/'.$_GET['pic1'];
                                           $name = $name1;
   
   
                                          
   
                                           $name = $name1;	
                                         
   
   
                                           
                                           if($chats[$i]->user_Id == $_GET['from']){
                                                   $class = "left clearfix";
                                                   $class2 = "chat-img pull-left";
                                                   $src =  $base_url.'user/pic/'.$_GET['pic0'];
                                                   $name = $name0;
                                           }
   
   
                                           echo '<li class="'.$class.'"><span class="'.$class2.'">
                                                       <img src="'.$src.'" alt="User Avatar" class="img-circle" width=50px height=50px/>
                                                       </span>
                                                       <div class="chat-body clearfix">
                                                           <div class="header"><strong class="primary-font">'.$name.'</strong> <small class="text-muted">32 mins ago</small></div>
                                                           <p>'.$chats[$i]->chat.'</p>
                                                       </div>
                                                </li>';
                                       
                                   }
   

                                }

                                  function cmp($a, $b)
                                    {

                                            $aVal = explode(":", $a->id);
                                            $bVal = explode(":", $b->id);

                                            $a = intval($aVal[2]);

                                            $b = intval($bVal[2]);
                                        
                                            return $a > $b;
                                    }


                                

                            
                            
                            ?>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
						</span></div>
					</div>
				</div>
				
				
	
			</div><!--/.col-->
			<div class="col-md-6">
				<div class="panel panel-default chat">
					<div class="panel-heading">
						user Pairs
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">

                    <ul>

                        <?php 
                        
                                foreach($contact as $value){
                                        $contactData = explode(":",$value->id);
                        
                                
                                        $userInfo0 = $this->model->getuser($contactData[0]);
                                        $userInfo1 = $this->model->getuser($contactData[1]);

                                        $id = $contactData[0].':'.$contactData[1];
                                        
                                        $chatCount = $value->total_chat;
                    
                                        $user_1_profile_pic = $userInfo1->user_profile_pic;
                                        $user_0_profile_pic = $userInfo0->user_profile_pic;
                    
                                        $user1dir = str_replace(' ', '', $contactData[1]);
                                        $user0dir = str_replace(' ', '', $contactData[0]);
                        
                                        $profilePicPath0 = "100.png";
                        
                                        if($user_0_profile_pic=="100.png"){
                                                $profilePicPath0 == "100.png";
                                        }else{
                                                $profilePicPath0 = $user0dir .'/'.$user_0_profile_pic;
                                        }
                    
                                        $profilePicPath1 = "100.png";
                        
                                        if($user_1_profile_pic=="100.png"){
                                                $profilePicPath1 == "100.png";
                                        }else{
                                                $profilePicPath1 = $user1dir .'/'.$user_1_profile_pic;
                                    }


                                    echo ' <a href="'.$adminUrl.'userconvo?id='.$id.'&from='.$contactData[0].'&pic0='.$profilePicPath0.'&pic1='.$profilePicPath1.'"><li class="left clearfix">
                                                 <p style=" text-align: center;"> '.$chatCount.' messages </p>
                                                 <span class="chat-img pull-left">
                                                
                                                <img src="'.$base_url.'user/pic/'.$profilePicPath0.'" alt="User Avatar" class="rounded-circle img-circle" width=50px height=50px />
                                                <strong class="primary-font">'.$userInfo0->user_name.'</strong>
                                         
                                            </span>
                                            <span class="chat-img pull-right">
                                            <strong class="primary-font">'.$userInfo1->user_name.'</strong>
                                        <img src="'.$base_url.'user/pic/'.$profilePicPath1.'" alt="User Avatar" class="img-circle" width=100px height=100px/>
                                        </span>  
    
                                        
                                      
                                    </li><a/>';
                    
                    
                                
                            
                                 }
                        
                        
                        ?>     
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
						</span></div>
					</div>
				</div>
				
				
	
			</div><!--/.col-->
			
			

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
		
</body>
</html>
</html>