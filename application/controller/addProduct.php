<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

global $registerIssue;
global $currentProductId;


class AddProduct extends Controller
{
    
   
  public function index(Type $var = null)
  {
      # code...
  }

  public function getDescriptions(Type $var = null)
  {
    # code...

    $ProductDescription = array();

    if(isset($_GET['id'])){
      

       $subCategoryDescription = $this->model->getSubCategoryDescription($_GET['id']);

       foreach($subCategoryDescription as $value){
           
           array_push($ProductDescription,$value->description);
      
       }

       echo(json_encode($ProductDescription));


    }

  }

  public function getSubCategories(Type $var = null)
  {
    # code...

    $data = ($this->model->getSubCategory($_GET['id']));



    $descriptionData = array();
    $descriptionId  = array();

    for($i = 0; $i < count($data); $i++){
     

         array_push($descriptionData,$data[$i]->name);
         array_push($descriptionId,$data[$i]->id);

     
    }

    $allData = array();
    array_push($allData,$descriptionData);
    array_push($allData,$descriptionId);
    
    print_r(json_encode($allData));

    
    return;

  }

  public function add(Type $var = null)
  {

    session_start();
    session_write_close();

    if(!isset($_SESSION["userName"])){
        return;
    }

    $categories = $this->model->getCategory();

    $subcategories = $this->model->getSubCategory($categories[1]->id);

    $subCategoryDescription = $this->model->getSubCategoryDescription(3);

   // print_r($subCategoryDescription);
    //foreach($subCategoryDescription as $key){
    //    print_r($key->description);
    //}


    



    


    require APP . 'view/session/sessionHeader.php';
    require APP . 'view/addProduct/add.php';      
  }


  //sell

  public function sell(Type $var = null)
  {
      # code...
      session_start();
    session_write_close();

    if(!isset($_SESSION["userName"])){
        return;
    }

    $categories = $this->model->getCategory();

    $subcategories = $this->model->getSubCategory($categories[1]->id);

    $subCategoryDescription = $this->model->getSubCategoryDescription(3);

   // print_r($subCategoryDescription);
    //foreach($subCategoryDescription as $key){
    //    print_r($key->description);
    //}


    



    


    require APP . 'view/session/sessionHeader.php';
    require APP . 'view/addProduct/sell.php';      
  }


  //get product post and add to database

  public function uploadItem(Type $var = null)
  {
    # code...

    session_start();
    session_write_close();

    if(!isset($_SESSION["userName"])){
        return;
    }else{
        $email = $_SESSION['userEmail'];


    }

    $target_dir = PUB."user/pic/". $_SESSION['pid']."/";

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

   
    $pic_name = basename($_FILES["file_data"]["name"]);
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
    }else {
        if (move_uploaded_file($_FILES["file_data"]["tmp_name"],  $target_file)) {

            
          
            $this->model->addProductPic($pic_name,intval( $_SESSION['pid']));

        

        } else {
            $GLOBALS['updateIssue'] = "Sorry server Issue uploading your profile pic.";
        }
    }
     


	   $uploadImage1 = array();

    array_push($uploadImage1,"hey");

    echo(json_encode($uploadImage1));

 

    
  }

  //uploadImage page

  public function uploadImage(Type $var = null)
  {

    //upload product information




    if(isset($_POST['name']) && isset($_POST['category_Id']) && isset($_POST['price']) && isset($_POST['Info'])){

        
        $productId = $this->model->addProduct();
        session_start();
        $_SESSION['pid'] = $productId;
        session_write_close();

        foreach ($_POST as $key => $value){


            if($key != 'name' && $key != 'category_Id' && $key != 'sub_category_Id' && $key != 'price' && $key != 'Info'){
                $this->model->addProductDescriptionValue($key,$value);
            }
        }



        

        

    }else{
        return;
    }
    

   
    # code...
    session_start();
    session_write_close();

    if(!isset($_SESSION["userName"])){
        return;
    }
    
    require APP . 'view/session/sessionHeader.php';
    require APP . 'view/addProduct/uploadImage.php';    
  }

  //upload post request

  public function uploadRequest(Type $var = null)
  {
      # code...

      //upload product information
        if(isset($_POST['name']) && isset($_POST['category_Id']) && isset($_POST['price']) && isset($_POST['Info'])){

            $productId = $this->model->addRequest();

            session_start();
            $_SESSION['pid'] = $productId;
            session_write_close();

        }else{
            return;
        }
        

    
        # code...
        session_start();
        session_write_close();

        if(!isset($_SESSION["userName"])){
            return;
        }
        
        require APP . 'view/session/sessionHeader.php';
        require APP . 'view/addProduct/uploadRequestImage.php';    
    }
    

    //upload request pic

    public function uploadRequestPic(Type $var = null)
    {
        # code...
        session_start();
        session_write_close();
    
        if(!isset($_SESSION["userName"])){
            return;
        }else{
            $email = $_SESSION['userEmail'];
    
    
        }
    
        $target_dir = PUB."request/". $_SESSION['pid']."/";
    
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
    
       
        $pic_name = basename($_FILES["file_data"]["name"]);
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
        }else {
            if (move_uploaded_file($_FILES["file_data"]["tmp_name"],  $target_file)) {
    
                
              
                $this->model->addRequestPic($pic_name,intval( $_SESSION['pid']));
    
            
    
            } else {
                $GLOBALS['updateIssue'] = "Sorry server Issue uploading your profile pic.";
            }
        }
         
    
    
           $uploadImage1 = array();
    
        array_push($uploadImage1,"hey");
    
        echo(json_encode($uploadImage1));
    }

}

