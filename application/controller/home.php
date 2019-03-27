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


class Home extends Controller
{
    
   
    /**
     * show product discription
     */

     public function single()
     {  
        session_start();
        session_write_close();


        if(isset($_GET['name']) && isset($_GET['description']) && isset($_GET['price']) && isset($_GET['owner']) && isset($_GET)){
            
        }else{return;}


        if(isset($_SESSION["userName"]) && isset($_SESSION["userEmail"]))
        {
            require APP . 'view/session/sessionHeader.php';
            require APP . 'view/home/single.php';
            require APP . 'view/home/footer.php';
        }else
        {
            require APP . 'view/home/header.php';
            require APP . 'view/home/single.php';
            require APP . 'view/home/footer.php';
        }

       
     }
    
   
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {

        session_start();
        session_write_close();

        if(isset($_SESSION["userName"]) && isset($_SESSION["userEmail"]))
        {
            require APP . 'view/session/sessionHeader.php';  
            require APP . 'view/home/index.php';
            require APP . 'view/home/footer.php';
        }else{
           require APP . 'view/home/header.php'; 
           require APP . 'view/home/index.php';
           require APP . 'view/home/footer.php';
       }
        
    }

    /**
     * PAGE: login
     * This method handles user login
     */
    
    public function login(){

        

        session_start();
        session_write_close();

        if(isset($_SESSION["userName"]) && $_SESSION["userEmail"])
        {
            header("Location:".URL2."/ecommerce/index.php"); /* Redirect browser */
            exit();
        }else{

            $error ='';
            require APP . 'view/home/header.php';
            require APP . 'view/home/login.php';
            require APP . 'view/home/footer.php';

        }

       
    }

    public function loginUser(){
        
        $result = $this->model->loginUser();
        if($result)
        {
            header("Location:".URL2."/ecommerce/index.php"); /* Redirect browser */
            exit();
        }else
        {   
            $error = "<p style="."color:red;"."> wrong userName/password</p>";
            require APP . 'view/home/header.php'; 
            require APP . 'view/home/login.php';
            require APP . 'view/home/footer.php';
        }
        
    }

    /**
     * This module handles loading the register page
     */

     public function register()
     {

       //display issues when user is registering

    
       require APP . 'view/home/header.php'; 
       require APP . 'view/home/register.php';
       require APP . 'view/home/footer.php';
         
     }

     /**
      * This module handles register request
      */

      public function registerUser()
      {

        if(!isset($_POST['user_email']) && !isset($_POST['user_name']) && !isset($_POST['user_password'])){

            return;
        }

        $result = $this->model->addUserForm();

        

        if($result == 1)
        {    
            $GLOBALS['registerIssue'] = "Missing Input";
            $this->register();
        }elseif($result == 0){
            
            

            //$city = $this->model->getAllcities();
           // $district = $this->model -> getAlldistricts();
           // $division = $this->model -> getAlldivision();
            $GLOBALS['registerIssue'] ="There is Already An Account Asociated with this email";
            $this->register();
        }elseif($result == 2){
            $GLOBALS['registerIssue'] = "<h3 style='color:green'>You've Successfully Registered, please login<h3>";
            $this->login();
        }elseif($result == 3){
            $GLOBALS['registerIssue'] = "<h3 style='color:green'>Password miss-match<h3>";
            $this->register();
        }
        
        else{
            

            foreach($result as $value){
                $GLOBALS['registerIssue'] = $GLOBALS['registerIssue']."<p style='color:red'>".$value."</p><br>";
                

            }
           
            $this->register();

        }

        
      }

      public function favorite(Type $var = null)
      {
          # code...

          session_start();
          session_write_close();
  
          if(isset($_SESSION["userName"]) && isset($_SESSION["userEmail"]) && isset($_GET['id']))
          {
              $this->model->addToFavorite($_GET['id'],$_SESSION['userEmail']);
              $this->showFavorite();
          }else{
              $this->login();
          }
          
      }

      public function showFavorite(Type $var = null)
      {
          # code...
          
          session_start();
          session_write_close();
        
            if(isset($_SESSION["userName"]) && isset($_SESSION["userEmail"]))
            {
                require APP . 'view/session/sessionHeader.php';  
                require APP . 'view/home/favorite.php';
            }else{
               //require APP . 'view/home/header.php'; 
               //require APP . 'view/home/index.php';
           } 
    }
      
}

