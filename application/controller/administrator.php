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


class administrator extends Controller
{
    
   
    /**
     * show product discription
     */

     public function admin()
     {  

        session_start();
        session_write_close();
        $userName = "Guest";

        if(isset($_SESSION["adminName"]) && isset($_SESSION["adminEmail"]))
        {
            $userName = $_SESSION["adminName"];

            require APP . 'view/administrator/head.php';  
            require APP . 'view/administrator/index.php';
        }else{
            require APP . 'view/administrator/head.php';  
            require APP . 'view/administrator/login.php';
        }
     
     
        
        
        
       
     }
    
   
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function login()
    {

        if(isset($_POST['adminEmail']) && isset($_POST['adminPassword']) && $_POST['adminEmail'] != '' && $_POST['adminPassword'] != ''){

          
            $this->model-> loginAdmin($_POST['adminEmail'],$_POST['adminPassword']);
                    
            $this->admin();
           
        }else{

            require APP . 'view/administrator/head.php';  
            require APP . 'view/administrator/login.php';

        }

        
       
           
    }

    public function logout()
    {
          session_start();
          $_SESSION = array();
          session_destroy();

          $this->login();
          exit();
      
    }

    //approve page

    public function approve(Type $var = null)
    {
        # code...
        session_start();
        session_write_close();
        $userName = "Guest";

        if(isset($_SESSION["adminName"]) && isset($_SESSION["adminEmail"]) && isset($_GET['id']))
        {

            $id = $_GET['id'];

            if($id == '1' || $id == '0'){

                $userName = $_SESSION["adminName"];

                if($id == '0'){
                    $title = "UnApproved Sell Posts";
                    $products = $this->model->getUnApprovedProducts();
                }else{
                    $title = "UnApproved Buyers Request";
                    $products = $this->model->getUnApprovedRequest();
                }

                require APP . 'view/administrator/head.php';  
                require APP . 'view/administrator/approve.php';
                    
            }else{
                return;
            }

            

           
        }else{
            require APP . 'view/administrator/head.php';  
            require APP . 'view/administrator/login.php';
        }
    }

    //user convo

    public function userconvo()
    {
        # code...
         

        $contact = $this->model->getAllContacts();
       
    
       


         session_start();
         session_write_close();
         $userName = "Guest";
 
         if(isset($_SESSION["adminName"]) && isset($_SESSION["adminEmail"]))
         {
            $userName = $_SESSION["adminName"];
            require APP . 'view/administrator/head.php';  
            require APP . 'view/administrator/userConvo.php';
         }else{
            require APP . 'view/administrator/head.php';  
            require APP . 'view/administrator/login.php';
         }

    }

    //add category and sub category

    public function addProductCategorySubCategory(Type $var = null)
    {
        # code...
    }

    //add place info

    public function AddPlacesInfo(Type $var = null)
    {
        # code...


    }


    //approve post product

    public function approveProduct()
    {
        # code...

        if(isset($_GET['id']) && $_GET['id'] != ''){

            
            if($_GET['type'] == "0")
            {
                $this->model->approveProduct($_GET['id']);
            }elseif($_GET['type'] == "1"){
                $this->model->approveRequest($_GET['id']); 
            }else{

            }
            $success = array(1,2,3);
            echo(json_encode($success));
        }
    }

    //dissapprove post product

    public function disapproveProduct(Type $var = null)
    {
        # code...
        
        if(isset($_GET['id']) && $_GET['id'] != '' && isset($_GET['type']) && $_GET['type'] != ''){

            if($_GET['type'] == 0)
            {
                $this->model->disapproveProduct($_GET['id']);
            }elseif($_GET['type'] == "1"){
                $this->model->disapproveRequest($_GET['id']); 
            }
            
            $success = array(1,2,3);
            echo(json_encode($success));
        }
    }

    public function approveAll()
    {
        # code...
      
            if(isset($_GET['type']) && $_GET['type'] != ''){
               
            }else{
                return;
            }
            
            if($_GET['type'] == "0")
            {
                $this->model->approveAllProduct();
            }elseif($_GET['type'] == "1"){
                $this->model->approveAllRequest(); 
            }else{

            }
            $success = array(1,2,3);
            echo(json_encode($success));
       
    }

      
}

