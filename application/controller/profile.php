<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

global $updateIssue;

$GLOBALS["updateIssue"] = "Update Your Profile";


class Profile extends Controller
{
    public function index(Type $var = null)
    {
        # code...
    }

    /**
     * first method called when user navigates to edit their profile
     */
    
    public function userProfile(Type $var = null)
    {

        session_start();
        session_write_close();

        if(!isset($_SESSION["userName"])){
            return;
        }

        //information to  fill the user profile form
        $city = $this->model->getAllcities();
        $district = $this->model -> getAlldistricts();
        $division = $this->model -> getAlldivision();
        //peronsla information fetch from database
        
        

        $userInfo = $this->model->getUser($_SESSION['userEmail']);

        $userName = $userInfo->user_name;
        $userEmail  = $userInfo->user_email;
        $nationalId = $userInfo->national_Id;
        $phoneNumber = $userInfo->phone_number;
        $streetNumber = $userInfo->street_number;
        $policeStation = $userInfo->police_station;
        $postalCode = $userInfo->post_code;
        $user_profile_pic = $userInfo->user_profile_pic;

        $userdir = str_replace(' ', '', $_SESSION['userEmail']);

        $profilePicPath = "100.png";

        if($user_profile_pic=="100.png"){
            $profilePicPath == "100.png";
        }else{
            $profilePicPath = $userdir .'/'.$user_profile_pic;
        }

        //dropdown info

      //  print_r($userInfo);

        $user_district = $userInfo->district;
        $user_division = $userInfo->division;
        $user_city = $userInfo->city;


       // print_r($userInfo);
       // echo($streetNumber);
        require APP . 'view/session/sessionHeader.php';  
        require APP . 'view/profile/userProfile.php';
    }

    public function updateProfile()
    {
        

        if(isset($_POST['user_name'])){
            
            
            if($this->model->updateUser()){
                $GLOBALS['updateIssue'] = "Profile Succesfully Updated";
            }else{
                $GLOBALS['updateIssue'] = "Phone number asscoiated with another account";
            }
            $this->userProfile();
        }
            
     
        
    }

    /**
     * upload user profile
     */

     public function uploadProfilePic(Type $var = null)
     {
                session_start();
                session_write_close();

                if(!isset($_SESSION["userEmail"])){
                    return;
                }else{
                    $userdir = str_replace(' ', '', $_SESSION['userName']);
                    $email = $_SESSION['userEmail'];

    
                }

                $target_dir = PUB."user/pic/".$email."/";

                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }


                $pic_name = basename($_FILES["fileToUpload"]["name"]);
                $target_file = $target_dir .$pic_name;

                $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
                $uploadOk = 1;
                $imageFileType = $ext;

                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    $GLOBALS['updateIssue'] = "unsupported file format.";
                    $this->userProfile();
                    $uploadOk = 0;
                    return;
                }


                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                       
                        $GLOBALS['updateIssue'] = "File is not an image.";
                        $this->userProfile();
                        $uploadOk = 0;
                        return;
                    }
                }
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    
                    $GLOBALS['updateIssue'] = "Profile Pic too large.";
                    $this->userProfile();
                    $uploadOk = 0;
                    return;
                }
                
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $GLOBALS['updateIssue'] = "Profile Pic not updated please try again.";
                    $this->userProfile();
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$userdir.".".$ext)) {

                       

                        $this->model->updateUserPic($userdir.".".$ext,$email);
                        $GLOBALS['updateIssue'] = "Profile Pic Updated Successfully.";
                        $this->userProfile();

                    } else {
                        $GLOBALS['updateIssue'] = "Sorry server Issue uploading your profile pic.";
                    }
                }
            }
}




