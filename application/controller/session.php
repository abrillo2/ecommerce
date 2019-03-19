<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Session extends Controller
{
    

      public function logout()
      {
            session_start();
            $_SESSION = array();
            session_destroy();

            header("Location:".URL2."/ecommerce/index.php"); /* Redirect browser */
            exit();
        
      }

      public function markasRead(){

            session_start();
            session_write_close();
    

            if(isset($_SESSION["userName"]) && isset($_SESSION["userEmail"]))
            {
                  if(isset($_GET["id"])){

                        $this->model->markAsRead($_GET["id"]);

                        if(isset($_GET["link"]) & $_GET["link"] != ''){
                              header("Location:".$_GET["link"]); /* Redirect browser */
                               exit();
                        }else{
                              header("Location:".URL2."/ecommerce/index.php"); /* Redirect browser */
                              exit();
                              return;
                        }
                        
                  }else{
                        return;
                  }
                  
            }else{
                 
                   return;
            }

      
      }


      public function requestList(Type $var = null)
      {
            # code...
            session_start();
            session_write_close();
    

            if(isset($_SESSION["userName"]) && isset($_SESSION["userEmail"]))
            {
                  require APP . 'view/session/sessionHeader.php';  
                  require APP . 'view/session/requestList.php';
            }
      }


      public function chats(Type $var = null)
      {
            # code...
             # code...
             session_start();
             session_write_close();
     
 
             if(isset($_SESSION["userName"]) && isset($_SESSION["userEmail"]))
             {
                 
                   require APP . 'view/session/chats.php';
             }
      }
}

