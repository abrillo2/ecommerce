<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo URL2.'/ecommerce/public/css/chat.css'?>"/>
	</head>
	<!--Coded With Love By Mutiullah Samim-->
	<body>
<?php

	function cmp($a, $b)
	{

			$aVal = explode(":", $a->id);
			$bVal = explode(":", $b->id);

			$a = intval($aVal[2]);

			$b = intval($bVal[2]);
		 
			return $a > $b;
	}

	$userInfo = $this->model->getuser($_GET['owner']);
	$to = $_GET['owner'];
	$from = $_SESSION['userEmail'];
	$accountInfo = $this->model->getuser($_SESSION['userEmail']);
	$chats =  $this->model->getChat($to,	$from);
	$chatHeadCount = 1;
	$totalChatId;


	if( strcasecmp($from,$to) > 0){
		$totalChatId = $from.':'.$to;
	}else{
			$totalChatId = $to.':'.$from;
	}

	if(count($chats) > 0){

		usort($chats, "cmp");
		$chatHeadId = $chats[count($chats)-1]->id;
		$chatHeadExplode = explode(":", $chatHeadId);
		$chatHeadCount = intval($chatHeadExplode[2]) + 1;

		$totalChatId = $chatHeadExplode[0].':'.$chatHeadExplode[1];

	} 
	//user contacts

	$contact = $this->model->getContacts($_SESSION['userEmail']);
	$contacts = array();

	foreach($contact as $value){
		 $userEmail = explode(":",$value->id);

		 if($userEmail[0] == $_SESSION['userEmail']){

				$userInfo1 = $this->model->getuser($userEmail[1]);
				$user_profile_pic = $userInfo1->user_profile_pic;
				$userdir = str_replace(' ', '', $userEmail[1]);

				$profilePicPath1 = "100.png";

				if($user_profile_pic=="100.png"){
						$profilePicPath1 == "100.png";
				}else{
						$profilePicPath1 = $userdir .'/'.$user_profile_pic;
				}


			  array_push($contacts,array('email'=>$userEmail[1],'profile_pic'=> $profilePicPath1,'name'=>$userInfo1->user_name));
		 }else{

				$userInfo1 = $this->model->getuser($userEmail[0]);
				$user_profile_pic = $userInfo1->user_profile_pic;
				$userdir = str_replace(' ', '', $userEmail[0]);

				$profilePicPath1 = "100.png";

				if($user_profile_pic=="100.png"){
						$profilePicPath1 == "100.png";
				}else{
						$profilePicPath1 = $userdir .'/'.$user_profile_pic;
				}

				array_push($contacts,array('email'=>$userEmail[0],'profile_pic'=> $profilePicPath1,'name'=>$userInfo1->user_name));
		 }
		 
	}

	




  
	$user_profile_pic = $userInfo->user_profile_pic;
	$account_profile_pic = $accountInfo->user_profile_pic;

	$userdir = str_replace(' ', '', $_GET['owner']);
	$accountdir = str_replace(' ','',$_SESSION['userEmail']);



	$profilePicPath = "100.png";

	if($user_profile_pic=="100.png"){
			$profilePicPath == "100.png";
	}else{
			$profilePicPath = $userdir .'/'.$user_profile_pic;
	}


	$acountPicPath = "100.png";

	if($account_profile_pic=="100.png"){
			$acountPicPath == "100.png";
	}else{
			$acountPicPath = $accountdir .'/'.$account_profile_pic;
	}


	//print_r($contacts);
?>

		<div class="container-fluid h-100">
			<div class="cont">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">

						<?php 

								foreach($contacts as $value){

										$backgroundColor = '';
										if($value['email'] == $to){
											$backgroundColor='background-color: rgba(0,0,0,0.3);';
										}

										echo '
										<li style="'.$backgroundColor.'">
											<div class="d-flex bd-highlight">
												<div class="img_cont">
													<img src="'.$base_url.'user/pic/'.$value['profile_pic'].'" class="rounded-circle user_img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
												<a href="'.$logged_in.'chats?owner='.$value['email'].'"><span>'.$value['name'].'</span></a>
													
													<p>Maryam is online</p>
												</div>
											</div>
										</li>';

								}
						
						
						?>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?php echo $base_url;?>user/pic/<?php echo $profilePicPath?>" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span><?php print_r($userInfo->user_name) ?></span>
									<p>1767 Messages</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body" id="msgCont">


							<?php 
								
								for($i=0;$i < count($chats);$i++){

											if($to==$from){
												break;
											}

										 $this->model->markChatAsRead($chats[$i]->id);

										 $class = true;
										 $src =  $base_url.'user/pic/'.$profilePicPath;	
										 $src2 = $base_url.'user/pic/'.$acountPicPath;	
										 
										 if($chats[$i]->user_Id == $_SESSION['userEmail']){
												$class = false;	 
										 }
									
										 if($class){
													echo'<div class="d-flex justify-content-start mb-4">
														<div class="img_cont_msg">
															<img src="'.$src.'" class="rounded-circle user_img_msg">
														</div>
														<div class="msg_cotainer" style="min-width:100px;">
														'.$chats[$i]->chat.'
															<span class="msg_time">8:40 AM, Today</span>
														</div>
													</div>';
										 }else{

											   echo '<div class="d-flex justify-content-end mb-4">
												 <div class="msg_cotainer_send"  style="min-width:100px;">
												 '.$chats[$i]->chat.'
													 <span class="msg_time_send">8:55 AM, Today</span>
												 </div>
												 <div class="img_cont_msg" >
											 <img src="'.$src2.'"  class="rounded-circle user_img_msg">
												 </div>
											 </div>';
										 }
								}
						
							?>

						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>

								<?php 
										if($to!=$from){
											   echo '<textarea id="chat" name="" class="form-control type_msg" placeholder="Type your message..."></textarea>';
										}
								?>
								
								<div class="input-group-append" id="btn">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

  <script>


$(document).ready(function() {


    $('#btn').click(function(e) {  


		


		

			var comment = $.trim($("#chat").val());
			

		

			$.ajax({
												url: '<?php echo $logged_in ?>saveChat?from=<?php echo $from?>&to=<?php echo $to?>&chat='+comment,
                        type: 'get',
                        dataType: 'JSON',
                      	success: function(response){

														$("#msgCont").append(`<div class="d-flex justify-content-end mb-4">
																							<div class="msg_cotainer_send" style="min-width:100px;">
																								`+comment+`
																								<span class="msg_time_send">9:10 AM, Today</span>
																							</div>
																							<div class="img_cont_msg">
																					<img src="<?php echo $base_url;?>user/pic/<?php echo $acountPicPath?>" class="rounded-circle user_img_msg">
																							</div>
																						</div>`);
														$("#chat").val('');
														var psconsole = $('#msgCont');
														if(psconsole.length)
															psconsole.scrollTop(psconsole[0].scrollHeight - psconsole.height());
												

												}

											
			})

     
		});
		

		//fetching new massage
		var count = parseInt(<?php echo $chatHeadCount;?>);
		var id = setInterval(function() {
		//call $.ajax here
		
		
		
		$.ajax({
											
												url: '<?php echo $logged_in ?>updateChat?count='+count+'&id=<?php echo $totalChatId ?>',
                        type: 'get',
                        dataType: 'JSON',
                      	success: function(response){

												

													if(response == String(0)){
												
													}else if(response == String(1)){

														count++;
													}else{

														$("#msgCont").append(`<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="<?php echo $base_url;?>user/pic/<?php echo $profilePicPath?>" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer" style="min-width:100px;">
									`+response+`
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>`)

														count++;
													
													}
													
													var psconsole = $('#msgCont');
														if(psconsole.length)
															psconsole.scrollTop(psconsole[0].scrollHeight - psconsole.height());		
												
												
												}

			})


	
		}, 3000); // 30 seconds


		$(function () {
				
				$("#chat").keypress(function (e) {
					
						var code = (e.keyCode ? e.keyCode : e.which);
						//alert(code);
						if (code == 13) {
							
								$("#btn").trigger('click');

							
								return true;
						}
				});
		});



});
  
 
  
  </script>

</html>
