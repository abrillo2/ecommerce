<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Edit profile form</title>
  <!-- base href="https://www.codeply.com/render/bFSGcM6Tqh" -->
  <meta name="description" content="User information form snippet with timezones">
  <meta name="google" value="notranslate">
  <link rel="shortcut icon" href="https://www.codeply.com/images/cp_ico.png">


</head>
<body>
  
  
  <div style="position:fixed;right:8px;top:8px;z-index:2000;border-radius:20px;padding:1px 4px;font-size:11px;background:rgba(255,255,255,0.8);font-family:monospace"><a target="edit" title="Edit code on Codeply" style="color:#192f42;" href="https://www.codeply.com/go/bFSGcM6Tqh"></a></div>
  <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">

        <form method="post" enctype="multipart/form-data"  action="<?php echo $user_profile?>uploadProfilePic" >
          <img src="<?php echo $base_url;?>user/pic/<?php echo $profilePicPath?>" class="avatar img-circle" id="profilePic" style="width:100px;height:100px; alt="avatar">
          <h6>Upload a different photo...</h6>
          <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="upload" name="submit">
        </form>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          <strong><?php echo $GLOBALS['updateIssue']; ?></strong>
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" method="post"  action='<?php echo $user_profile.'updateProfile'?>'>
          <div class="form-group">
            <label class="col-lg-3 control-label">Full name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="user_name" value="<?php echo $userName; ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="user_email" value="<?php echo $userEmail; ?>" type="email" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">National Id:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="national_Id" value="<?php echo $nationalId; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" name="phone_number" value="<?php echo $phoneNumber; ?>" type="tel" <?php if($phoneNumber != ''){echo "readonly";} ?>>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">street #:</label>
            <div class="col-lg-8">
              <input class="form-control" name="street_number" value="<?php echo $streetNumber ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">station #:</label>
            <div class="col-lg-8">
              <input class="form-control" name="police_station" value="<?php echo $policeStation ?>" type="text">
            </div>
          </div>
          <div class="form-group">
             <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" name="city" class="form-control" value ="<?php echo $city ?>">
                    
                    <?php foreach($city as $i)
       				          {
									
								        echo '<option value='.$i->name."".'>'.$i->name.'</option>';
								  
							      }
			 
			             ?>
                </select>
              </div>
            </div>
          </div>
         

          <div class="form-group">
            <label class="col-lg-3 control-label">district:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" name="district" class="form-control" value ="<?php echo $district ?>">
                   
                    <?php foreach($district as $i)
       				          {
									
								        echo '<option value='.$i->name."".'>'.$i->name.'</option>';
								  
							      }
			 
			             ?>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">division:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select name="division" id="user_time_zone" class="form-control">
                    <?php foreach($division as $i)
       				          {
									
								        echo '<option value='.$i->name."".'>'.$i->name.'</option>';
								  
							      }
			 
			             ?>
                </select>
              </div>
            </div>
          </div>


          <div class="form-group">
            <label class="col-lg-3 control-label">Postal Code:</label>
            <div class="col-lg-8">
              <input name="post_code" class="form-control" value="<?php echo $postalCode ?>" type="text">
            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" value="janeuser" type="text">
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="submit">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
  
  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
  <script src="<?php echo $base_url ?>js/jquery.js"></script>
  <script src="<?php echo $base_url ?>js/bootstrap.js"></script>
  
  
  <script>

function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('#profilePic').attr('src', e.target.result);
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#fileToUpload").change(function() {
readURL(this);
});

</script>



</body></html>