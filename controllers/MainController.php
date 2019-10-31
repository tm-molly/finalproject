<?php
   namespace controllers;
   use core\Controller;
   use models\User;
   use models\UserFunctions;

   class MainController extends Controller{
      private $useradding;
      public function __construct(){
         $this->useradding = new UserFunctions();
      }
      function index(){
         return "index";
      }
      
      function register_newuser(){
         return "register_newuser";
      }
      
      function log_in(){
         $email = $_POST['email'];
         $password = $_POST['password'];
         $log_in = $this->useradding->logIn($email, $password);
        // $_SESSION['id'] = $log_in;

         if(empty($log_in)){
            header('Location:index');
         }
         else{
         $_SESSION['id'] = $log_in->id;         
         header("Location:user_page");}
      }

      function user_page(){
        // var_dump($_SESSION['id']);
         return "user_page";
      }

      function logout(){
      $log_out = $this->useradding->logOut();
        return "index";
      }

      function profile(){
         return "profile";
      }

      function adduser(){
         $user = new User();
         $user->email = $_POST['email'];
         $user->password = $_POST['password'];
         $user->password2 = $_POST['password2']; 
         $this->useradding->addUser($user);
        // die;
         header("Location:profile");
      }

      function addUserData(){
         $user_profile = new User();
         $user_profile->name = $_POST['name'];
         $user_profile->surname = $_POST['surname'];
         $user_profile->gender = $_POST['gender']; 
         $user_profile->country = $_POST['country'];
         $user_profile->city = $_POST['city'];
         $this->useradding->userProfile($user_profile);
        // die;
         header("Location:user_page");
      }


      function update_data(){ //функция просто для возрата страницы update_data.php
      $_REQUEST['UserInfo']=$this->useradding->getUserInfo();
      return "update_data";
      }

      function updateUserData(){
          $update = $this->useradding->updateData();
          return 'user_page';
      }

      function add_tweet(){
        $tweet = new User();
        $tweet->tweet_post = $_POST['tweet_post'];
        $this->useradding->addTweet();
         return 'user_page';
      }  





   }
?>