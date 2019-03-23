<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all songs from database
     */
    public function getAllSongs()
    {
        $sql = "SELECT id, artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addSong($artist, $track, $link)
    {
        $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     */
    public function getSong($song_id)
    {
        $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }

    /**
     * User model
     * This model function handles adding records to the database
     */

     public function addUserForm()
     {

         
      
            $user_name=$_POST['user_name'];
            // $national_Id=$_POST['national_Id'];
             $user_email=$_POST['user_email'];
           //  $phone_number=$_POST['phone_number'];
           //  $street_number=$_POST['street_number'];
          //   $police_station=$_POST['police_station'];
           //  $city=$_POST['city'];
           //  $district=$_POST['district'];
           //  $division=$_POST['division'];
          //   $post_code=$_POST['post_code'];
             $user_password=$_POST['user_password'];
             $user_pass = $_POST['user_pass'];
             
            
             
             if(isset($user_name) && isset($user_email) && isset($user_password))
             {
                     
                     $userExists = $this->checkUserExist($user_email);
     
                     if($userExists)
                     {
                        return 0;
                     }else
                     {
     
                         if($user_password != $user_pass){
                             return 3;
                         }
     
                         $isValidInput = $this->validateUserInput($user_name,$user_email);
     
                         
                         if($isValidInput[0])
                         {
                             $data = array(
                                 ':user_name' => $user_name,
                                 //':national_Id' => $national_Id,
                                 ':user_email' => $user_email,
                                 //':phone_number' => $phone_number,
                                 //':street_number'=>$street_number,
                                 //':police_station' => $police_station,
                                 //':city' => $city,
                                 //':district' => $district,
                                 //':division' => $division,
                                 //':post_code' => $post_code,
                                 ':user_password' => $user_password,
                             );
         
                     
         
                             $sql = "INSERT INTO user (user_name,user_email,user_password) 
                                             VALUES (:user_name, :user_email,:user_password)";
                             $query = $this->db->prepare($sql);
                 
                             $query->execute($data);

                             
                             $this->sendNotification($user_email,"Please Complete Your Profile",URL2."/ecommerce/profile/userProfile");
                             session_start();
                             $_SESSION["userName"] = $user_name;
                             $_SESSION["userEmail"] = $user_email;
                             session_write_close();

                             
         
                             return 2;
                         }else{
                             return $isValidInput;
                         }
       
                        
     
                     }
                   
             }else{
                 return 1;
             }
     

        
        
        

       
        
       
     }


     /**
      * This User model fucntion handles checking user input for validation
      */

      public function validateUserInput($name,$email)
      {
          
          $isValidInput = array(true);
          if (!preg_match('/^[a-zA-Z, ]{3,15}$/', $name)){
            $isValidInput[0] = false;
            array_push($isValidInput,"FULL NAME: Only letters and white space allowed");

          }
          
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $isValidInput[0] = false;
            array_push($isValidInput,"EMAIL: Invalid email format");
          }

          return $isValidInput;
      }

     /**
      * This model function handles deleteing user
      */

      public function dellUser()
      {

      }
      /**
       * This model function handles updating user info
       */

    public function updateUser()
    {
         
      

            $user_name=$_POST['user_name'];
            $national_Id=$_POST['national_Id'];
            $user_email=$_POST['user_email'];
            $phone_number=$_POST['phone_number'];
            $street_number=$_POST['street_number'];
            $police_station=$_POST['police_station'];
            $city=$_POST['city'];
            $district=$_POST['district'];
            $division=$_POST['division'];
            $post_code=$_POST['post_code'];
           // $user_profile_pic=$_post['user_profile_pic'];
   
            
           /**
            * check if PHONE# is unique
            */

            //check if phone number is empty string

            if(($_POST['phone_number']) == ''){
               $phone_number = NULL;
            }else{
                if($this->checkPhoneExists($phone_number)){
                    return false;
                }
            }


   
            $data = array(
               ':user_name' => $user_name,
               ':national_Id' => $national_Id,
               ':user_email' => $user_email,
               ':phone_number' => $phone_number,
               ':street_number'=>$street_number,
               ':police_station' => $police_station,
               ':city' =>$city,
               ':district'=> $district,
               ':division'=> $division,
               ':post_code'=> $post_code,
              // ':user_profile_pic'=>$user_profile_pic
              // ':user_password' => $user_password,
           );
   
           $sql = "UPDATE user  SET user_name = :user_name,street_number=:street_number,national_Id=:national_Id,user_email=:user_email,phone_number=:phone_number,police_station=:police_station,city=:city,district=:district,division=:division,post_code=:post_code WHERE user_email=:user_email";   
           
           $query = $this->db->prepare($sql);
   
           $query->execute($data);

           return true;

        

        

    }

    /**
     * Thid model function handles updating user profile pic
     */

     public function updateUserPic($picName,$email)
     {
        $data = array(':user_profile_pic' => $picName,':user_email' => $email);

        $sql = "UPDATE user  SET user_profile_pic = :user_profile_pic WHERE user_email=:user_email";   
           
        $query = $this->db->prepare($sql);
    
        $query->execute($data);
     }

    /**
     * This model function handles getting all users from database
     */

    public function getUser($email)
    {
        $sql = "SELECT *  FROM user WHERE user_email='".$email."'";

        $query = $this->db->prepare($sql);
        $query->execute();
        
        $result = $query->fetch();

        return $result;
        
    }

    /**
     * This model function handles checking duplicate phone
     */

    public function checkPhoneExists($phone)
    {
       $sql = "SELECT user_Id as id FROM user WHERE phone_number='".$phone."'";

       
      
       $query = $this->db->prepare($sql);
       $query->execute();
           
       

       $result = $query->fetch();

       if($result == ''){
                   
           return false;
          
           
       }else{
           return true;
          
           
       }

       
    }

    /**
     * This model function handles getting specific user from database
     */

     public function checkUserExist($email)
     {
        $sql = "SELECT user_Id as id FROM user WHERE user_email='".$email."'";

        
       
        $query = $this->db->prepare($sql);
        $query->execute();
            
        

        $result = $query->fetch();

        if($result == ''){
                    
            return false;
           
            
        }else{
            return true;
           
            
        }

        
     }

     /**
      * Check if phone exists
      */

      public function checkPhone($phone)
     {
        $sql = "SELECT user_Id as id FROM user WHERE phone_number='".$phone."'";

        
       
        $query = $this->db->prepare($sql);
        $query->execute();
            
        

        $result = $query->fetch();

       
        if($result == ''){
                    
            return false;
           
            
        }else{
            return true;
           
            
        }

        
     }

     /**
      * check user exists when login
      */

      public function loginUser()
      {
          
          if( isset($_POST['user_email']) && isset($_POST['user_password'])){
             
            $email = $_POST['user_email'];
            $password = $_POST['user_password'];

            $sql = "SELECT user_Id,user_name  FROM user WHERE user_email='".$email."' AND user_password='".$password."'";

            $query = $this->db->prepare($sql);
            $query->execute();
            
            $result = $query->fetch();

            if(is_object($result)){

                if($result->user_Id == ''){
                    return false;
                }else{

                    session_start();
                    $_SESSION["userName"] = $result->user_name;
                    $_SESSION["userEmail"] = $email;
                    session_write_close();
                    return true;
                }

            }else{

                return false;
            }

            
            
            


          }
      }


     /**
      * city model
      */

      public function getAllcities()
      {
         $sql = "SELECT *  FROM city";
         $query = $this->db->prepare($sql);
         $query->execute();

         // fetch() is the PDO method that get exactly one result
         return $query->fetchAll();    
      }

      /**
      * district model
      */

      public function getAlldistricts()
      {
         $sql = "SELECT *  FROM district";
         $query = $this->db->prepare($sql);
         $query->execute();

         // fetch() is the PDO method that get exactly one result
         return $query->fetchAll();    
      }



      /**
      * division model
      */

      public function getAlldivision()
      {
         $sql = "SELECT *  FROM division";
         $query = $this->db->prepare($sql);
         $query->execute();

         // fetch() is the PDO method that get exactly one result
         return $query->fetchAll();    
      }

      

      /**
       * used for sending notification to the user
       */

       public function sendNotification($email,$text,$link)
       {
            $sql = "INSERT INTO notification (user_email, notification, link) VALUES (:user_email, :notification,:link)";
            $query = $this->db->prepare($sql);
            $parameters = array(':user_email' => $email, ':notification' => $text,":link"=>$link);

            // useful for debugging: you can see the SQL behind above construction by using:
            // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

            $query->execute($parameters);   
       }


       /**
        * used for getting notification for specific user
        */

        public function getNotification($email)
        {
            $sql = "SELECT notification ,status,link,Id  FROM notification WHERE user_email='".$email."'";

            $query = $this->db->prepare($sql);
            $query->execute();
            
            $result = $query->fetchAll();

            return $result;
        }

        /**
         * change notification status
         */

         public function markAsRead($id)
         {
            
            $status = 1;

            $sql = "UPDATE notification SET status = :status WHERE Id = :id";
            $query = $this->db->prepare($sql);
            $parameters = array(':status' => $status, ':id' => $id);
    
            // useful for debugging: you can see the SQL behind above construction by using:
            // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    
            $query->execute($parameters);
         }

         // product model


         /**
          * add product detail
          */

          public function addProductDescriptionValue($key,$value)
          {
              # code...

              session_start();
              session_write_close();
              

              $data = array(
                  ':description' => $key,
                  ':description_value' => $value,
                  ':product_Id' => $_SESSION['pid'],
              );



              $sql = "INSERT INTO prodcut_description_value(description,description_value,product_Id) 
                                           VALUES (:description, :description_value,:product_Id)";
              $query = $this->db->prepare($sql);
              $query->execute($data);
             
          }
         /**
          * get product detail
          */

          public function getProductDescription($id)
          {
                $sql = "SELECT * FROM prodcut_description_value WHERE product_Id= '".$id."'";

                $query = $this->db->prepare($sql);
                $query->execute();
                
                $result = $query->fetchAll();
        
                return $result;
          }

         /**
          * get all subcategories for viwing on home page
          */
         public function getAllSubCategory(Type $var = null)
         {
             # code...
             $sql = "SELECT *  FROM product_sub_category";

             $query = $this->db->prepare($sql);
             $query->execute();
               
             $result = $query->fetchAll();
   
            return $result;
         }

         /**
          * get if categories have sub category
          */

          public function haveSubCategory($id)
          {
            $sql = "SELECT id FROM product_sub_category WHERE category_Id='".$id."'";

        
       
            $query = $this->db->prepare($sql);
            $query->execute();
                
            
    
            $result = $query->fetch();
    
            if($result == ''){
                        
                return false;
               
                
            }else{
                return true;
               
                
            }
    
          }

         /**
          * get product categories
          */

          public function getAllProduct(Type $var = null)
          {
              # code...
              $sql = "SELECT *  FROM product";

              $query = $this->db->prepare($sql);
              $query->execute();
                
              $result = $query->fetchAll();
    
            return $result;
          }

          public function getCategory()
          {
            $sql = "SELECT *  FROM product_category";

            $query = $this->db->prepare($sql);
            $query->execute();
            
            $result = $query->fetchAll();
    
            return $result;
          }

          /**
           *  get product sub-categories
           *
           */

           public function getSubCategory($categoryId)
           {
                $sql = "SELECT * FROM product_sub_category WHERE category_Id= '".$categoryId."'";

                $query = $this->db->prepare($sql);
                $query->execute();
                
                $result = $query->fetchAll();
        
                return $result;
                
           }

           /**
            * get product sub-category description
            */

            public function getSubCategoryDescription($subCategoryId)
            {
                $sql = "SELECT description FROM sub_category_product_description WHERE sub_category_ID= '".$subCategoryId."'";

                $query = $this->db->prepare($sql);
                $query->execute();
                
                $result = $query->fetchAll();
        
                return $result;
            }



            /**
             * add product
             */


             public function addProduct(Type $var = null)
             {


                session_start();
                session_write_close();

                $name=$_POST['name'];
                $category_Id=$_POST['category_Id'];
                $sub_category_Id=$_POST['sub_category_Id'];
                $user_email=$_SESSION["userEmail"];
                $price =$_POST['price'];
                $info = $_POST['Info'];

                $data = array(
                    ':name' => $name,
                    ':category_Id' => $category_Id,
                    ':sub_category_Id' => $sub_category_Id,
                    ':user_email' => $user_email,
                    ':price'=>$price,
                    ':info' => $info,
                );



                $sql = "INSERT INTO product(name,category_Id,sub_category_Id,user_email,price,info) 
                                             VALUES (:name, :category_Id,:sub_category_Id,:user_email,:price,:info)";
                $query = $this->db->prepare($sql);
                $query->execute($data);
                $lastid =$this->db->lastInsertId();

                return($lastid);

                
             }


             /**
              * add product pics
              */

              public function addProductPic($name,$id)
              {
                $data = array(
                    ':name' => $name,
                    ':product_Id' => $id,
                );

                $sql = "INSERT INTO product_pics(name,product_Id) 
                                             VALUES (:name,:product_Id)";
                $query = $this->db->prepare($sql);
                $query->execute($data);

                  


              }

              /**
               * get product by category
               */

               public function getProductByCategory($id)
               {
                   # code...

                   # code...
                   $sql = "SELECT * FROM product WHERE category_Id= '".$id."'";

                   $query = $this->db->prepare($sql);
                   $query->execute();
                   
                   $result = $query->fetchAll();
           
                   return $result;
               }

               /**
                * get product by subCategory
                */

                public function getProductBySubCatergory($id)
                {
                    # code...
                    $sql = "SELECT * FROM product WHERE sub_category_Id= '".$id."'";

                    $query = $this->db->prepare($sql);
                    $query->execute();
                    
                    $result = $query->fetchAll();
            
                    return $result;
                }


                //buyers request model

                public function addRequest(Type $var = null)
                {
                    # code...
                    session_start();
                    session_write_close();
    
                    $name=$_POST['name'];
                    $category_Id=$_POST['category_Id'];
                    $sub_category_Id=$_POST['sub_category_Id'];
                    $user_email=$_SESSION["userEmail"];
                    $price =$_POST['price'];
                    $info = $_POST['Info'];
    
                    $data = array(
                        ':name' => $name,
                        ':category_Id' => $category_Id,
                        ':sub_category_Id' => $sub_category_Id,
                        ':user_email' => $user_email,
                        ':price'=>$price,
                        ':info' => $info,
                    );
    
    
    
                    $sql = "INSERT INTO buy_request(name,category_Id,sub_category_Id,user_email,price,info) 
                                                 VALUES (:name, :category_Id,:sub_category_Id,:user_email,:price,:info)";
                    $query = $this->db->prepare($sql);
                    $query->execute($data);
                    $lastid =$this->db->lastInsertId();
    
                    return($lastid);
                }

                /**
                 * add request pic
                 */

                 public function addRequestPic($name,$id)
                 {
                     # code...
                     $data = array(
                        ':name' => $name,
                        ':request_id' => $id,
                    );
    
                    $sql = "INSERT INTO request_pic(name,request_id) 
                                                 VALUES (:name,:request_id)";
                    $query = $this->db->prepare($sql);
                    $query->execute($data);
                 }


                 /**
                  * more request method
                  */

                  public function getRequestByCategory($id)
                  {
                      # code...
   
                      # code...
                      $sql = "SELECT * FROM buy_request WHERE category_Id= '".$id."'";
   
                      $query = $this->db->prepare($sql);
                      $query->execute();
                      
                      $result = $query->fetchAll();
              
                      return $result;
                  }
   
                  /**
                   * get request by subCategory
                   */
   
                   public function getRequestBySubCatergory($id)
                   {
                       # code...
                       $sql = "SELECT * FROM buy_request WHERE sub_category_Id= '".$id."'";
   
                       $query = $this->db->prepare($sql);
                       $query->execute();
                       
                       $result = $query->fetchAll();
               
                       return $result;
                   }

                   public function getAllRequest(Type $var = null)
                    {
                        # code...
                        $sql = "SELECT *  FROM buy_request";

                        $query = $this->db->prepare($sql);
                        $query->execute();
                            
                        $result = $query->fetchAll();
                
                        return $result;
                    }


                    // handling user favorite picks

                    public function addToFavorite($productId,$userId)
                    {
                        # code...

                        if($this->checkFavorite($productId,$userId)){
                            echo('<p>already added</p>');
                            return;
                        }

                        $data = array(
                            ':product_id' => $productId,
                            ':user_id' => $userId,
                        );
        
                        $sql = "INSERT INTO favorite(product_id,user_id) 
                                                     VALUES (:product_id,:user_id)";
                        $query = $this->db->prepare($sql);
                        $query->execute($data);
                    }
                    
                    
                    public function checkFavorite($productId,$userId)
                    {
                        # code...
                             $sql = "SELECT user_id as id FROM favorite WHERE user_id='".$userId."'  AND product_id='".$productId."'";

        
                        
                            $query = $this->db->prepare($sql);
                            $query->execute();
                                
                            

                            $result = $query->fetch();

                            if($result == ''){
                                        
                                return false;
                            
                                
                            }else{
                                return true;
                            
                                
                            }
                    }

                    public function getFavorite($userId)
                    {
                       # code...
                       $sql = "SELECT p.* FROM product as p, favorite as f WHERE p.id = f.product_id And f.user_id= '".$userId."'";
                       $query = $this->db->prepare($sql);
                       $query->execute();
                       
                       $result = $query->fetchAll();
               
                       return $result;



                    }


                    //chat model

                    /**
                     * save chat
                     */

                    public function sendChat($from,$to,$chat)
                    {
                        
                        if( strcasecmp($from,$to) > 0){
                            $totalMesageIndentifier = $from.':'.$to;
                        }else{
                            $totalMesageIndentifier = $to.':'.$from;
                        }

                         $sql = "INSERT INTO total_chat (id, total_chat) VALUES (:id, :totalChat)  ON DUPLICATE KEY UPDATE total_chat = total_chat + 1";
                         $query = $this->db->prepare($sql);
                         $parameters = array(':id' => $totalMesageIndentifier, ':totalChat' => 1);
             
                         // useful for debugging: you can see the SQL behind above construction by using:
                         // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
                         $query->execute($parameters);
                         
                         
                         $chatCount = $this->getMessageCount($totalMesageIndentifier)->total_chat;

                         $chatId = $totalMesageIndentifier.':'.strval($chatCount);

                         $sql = "INSERT INTO chat (id, chat, user_id) VALUES (:id, :chat, :from)";
                         $query = $this->db->prepare($sql);
                         $parameters = array(':id' => $chatId, ':chat' => $chat,':from' => $from);

                         $query->execute($parameters);


                    }

                    /**
                     * get message count
                     */

                     public function getMessageCount($id)
                     {
                         # code...
                         $sql = "SELECT total_chat FROM total_chat WHERE id='".$id."'";

       
      
                         $query = $this->db->prepare($sql);
                         $query->execute();
                             
                         
                  
                         $result = $query->fetch();
                  
                        
                        return $result;
                            
                             
                         
                    }


                    /**
                     * get chats
                     */

                    public function getChat($user1, $user2)
                    {
                        # code...
                        if( strcasecmp($user1,$user2) > 0){
                            $totalMesageIndentifier = $user1.':'.$user2;
                        }else{
                            $totalMesageIndentifier = $user2.':'.$user1;
                        }


                        $sql = "SELECT * FROM chat WHERE id LIKE '%".$totalMesageIndentifier."%'";

       
      
                        $query = $this->db->prepare($sql);
                        $query->execute();
                            
                        
                 
                        $result = $query->fetchAll();
                 
                       
                       return $result;


                    }

                    /**
                     * get latest chat
                     */

                     public function newChat($count,$id,$to)
                     {
                         # code...
                        
                       /*  $current = $count + 1;

                         $sql = "SELECT total_chat  FROM total_chat WHERE total_chat='".$current."'";

        
       
                         $query = $this->db->prepare($sql);
                         $query->execute();
                             
                         
                 
                         $result = $query->fetch();
                         
                 
                         if($result == ''){
                                     
                             return null;
                            
                             
                         }else{

                            $current = $id.':'.strval($count);

                            $sql = "SELECT chat  FROM chat WHERE id='".$current."'";

        
       
                            $query = $this->db->prepare($sql);
                            $query->execute();
                                
                            
                    
                            $result = $query->fetch();
                            
                            return $result;
                            
                             
                         }*/

                         $current = $id.':'.strval($count);

                         $sql = "SELECT chat,user_Id  FROM chat WHERE id='".$current."'";

     
    
                         $query = $this->db->prepare($sql);
                         $query->execute();
                             
                         
                 
                         $result = $query->fetch();

                         if($result == ''){

                            return 0;
                        }else if($result->user_Id == $to){
                            return 1;
                        }
                         
                         return $result;




                     }


                    /**
                     * get user contacts
                     *
                     */

                     public function getContacts($id)
                     {
                         # code...
                         $sql = "SELECT * FROM total_chat WHERE id LIKE '%".$id."%'";

       
      
                         $query = $this->db->prepare($sql);
                         $query->execute();
                             
                         
                  
                         $result = $query->fetchAll();
                  
                        
                         return $result;
                     }


                     /**
                      * get unread messages
                      */

                      public function getUnreadMessage($id)
                      {
                          # code...

                          $sql = "SELECT * FROM chat WHERE id LIKE '%".$id."%' and user_id !='".$id."' and status= 0";

       
      
                          $query = $this->db->prepare($sql);
                          $query->execute();
                              
                          
                   
                          $result = $query->fetchAll();
                   
                         
                          return $result;

                      }

                      /**
                       * mark message as read
                       */

                       public function markChatAsRead($id)
                       {
                           # code...
                           $data = array(':id' => $id,':status' => 1);

                           $sql = "UPDATE chat  SET status = :status WHERE id=:id";   
                              
                           $query = $this->db->prepare($sql);
                       
                           $query->execute($data);
                       }


}
