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
                  require APP . 'view/session/sessionHeader.php';  
                  require APP . 'view/session/chats.php';
             }else{
                  header("Location:".URL2."/ecommerce/home/login"); /* Redirect browser */
                  exit();
                  return;
             }
      }


      //save chat

      public function saveChat(Type $var = null)
      {
            # code...

            if(isset($_GET['from']) && isset($_GET['to']) && isset($_GET['chat'])){

                  $this->model->sendChat($_GET['from'],$_GET['to'],$_GET['chat']);

                  $ProductDescription = array(1,2,3);
                  echo(json_encode($ProductDescription));
            }else{
                  return;
            }
      }

      //get chat

      public function getChat(Type $var = null)
      {
            # code...

            session_start();
            session_write_close();

            if(isset($_GET['from']) && isset($_GET['to']))
            {
                $result =  $this->model->getChat($_GET['from'],$_GET['to']);

                
                
                return $result;
               
                 
            }else{
                return '';
            }

      }

      //udate user with new chat

      public function updateChat()
      {
            # code...
            session_start();
            session_write_close();

            if(isset($_GET['count'])){
                 $chat = $this->model->newChat(intval($_GET['count']),$_GET['id'],$_SESSION['userEmail']);
                 
                  if($chat== strval(0)){

                        $ProductDescription = array(0);
                        echo(json_encode( $ProductDescription ));

                  }else{
                        $ProductDescription = array($chat->chat);
                        echo(json_encode( $ProductDescription ));

                  }

               
            }
           
      }
}

