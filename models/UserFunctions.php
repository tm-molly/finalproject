<?php
   namespace models;
   use models\User;
   use core\DBManager;
   use PDO;
   
   class UserFunctions{
      private $dbManager;
      public function __construct(){
         $this->dbManager = new DBManager("localhost", "twitter", "root", "");
      }      
      
      

      public function addUser(User $user){
        try{
        if($user->password!=$user->password2){
        header('Location:register_newuser');            
        }
        else if(empty($user->email)||empty($user->password)||empty($user->password2)){
        header('Location:register_newuser');              
        }
        else{
            $query = $this->dbManager->getConnection()->prepare("
             INSERT INTO users (email, password)
             VALUES ( :email, :password)
            ");
            $query->execute(array("email"=>$user->email, "password"=>$user->password));

            $_SESSION['id'] = $this->dbManager->getConnection()->lastInsertId();        
        }}catch(Exception $e){
          echo $e->getMessage();
         }
        }
      
      public function logIn($email, $password){
        $result = array();
        try{
        if(empty($email)||empty($password)){
        header('Location:index');              
        }else{
          $query = $this->dbManager->getConnection()->prepare("SELECT * FROM users
          WHERE email = :email AND password = :password
          ");
          $query->execute(['email'=>$email, 'password'=>$password]);     
          $forchecking = $query->fetchAll(PDO::FETCH_CLASS, "models\User");
          if(count($forchecking)!=0){
            $result = $forchecking[0];
            }            
        }}catch(Exception $e){
          echo $e->getMessage();
         }
         return $result;
        }

      public function logOut(){
        $result = array();
        try{
          $query = $this->dbManager->getConnection()->prepare("SELECT * FROM users
          WHERE id = :u_id
          ");
          $query->execute(array('u_id' => $_SESSION['id']));
          unset($_SESSION['id']); //сброс сессии (также добавь при log out)
          }catch (PDOException $e){
          echo "Error!: " . $e->getMessage() . "<br/>";
        }
      }


      public function userProfile(User $user_profile){
        try {     
          $query = $this->dbManager->getConnection()->prepare("
          INSERT INTO user_data (user_id, name, surname, gender, country,city)
          VALUES (:u_user_id, :u_name, :u_surname, :u_gender, :u_country, :u_city)
          ");
          $query->execute(array('u_user_id'=>$_SESSION['id'],'u_name'=>$user_profile->name, 'u_surname'=>$user_profile->surname, 'u_gender'=>$user_profile->gender, 'u_country'=>$user_profile->country, 'u_city'=>$user_profile->city));                     
        }catch(Exception $e){
          echo $e->getMessage();
        }}


      public function updateData(){
        try {
          $query = $this->dbManager->getConnection()->prepare("
            UPDATE user_data SET name = :u_name, surname = :u_surname, gender = :u_gender, country = :u_country, city = :u_city
            WHERE id = :user_id          
        ");
        $query->execute(array('user_id' => $_SESSION['id'],'u_name'=> $_POST['name'], 'u_surname'=> $_POST['surname'], 'u_gender'=>$_POST['gender'], 'u_country'=>$_POST['country'], 'u_city'=>$_POST['city']));
        //$result = $query->fetch();
        }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
      }}

      
      public function getUserInfo(){
        try{          
          $query = $this->dbManager->getConnection()->prepare("SELECT id,user_id,name,surname,gender, country,city 
            FROM user_data 
            WHERE user_id = :id
            ");
          $query->execute(['id'=>$_SESSION['id']]);
          $result = $query->fetch();
          }catch (PDOException $e){
          echo "Error!: " . $e->getMessage() . "<br/>";
          }
          return $result;
          }}


      public function addTweet(){
          try{
          $query = $this->dbManager->getConnection()->prepare("
            INSERT INTO tweets (user_id, tweet)
            VALUES (:u_user_id, :u_tweet_post)
          ");
          $query->execute(array('u_user_id'=>$_SESSION['id'], 'u_tweet_post'=> $tweet_post));
          }catch (PDOException $e){
          echo "Error!: " . $e->getMessage() . "<br/>";
        }}

      }

