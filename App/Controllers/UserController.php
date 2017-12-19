<?php 
Namespace App\Controllers; 

Use App\Views\Components;

class UserController extends Controller{
    public static $form = "App\Views\Components\Form"; 

    public function login(){
        /*Create new form to get data*/
        $user = new self::$form($_POST);
        $input = array(
            'email' => $user->input_text('email'),
            'password' => $user->input_pass('password'),
            'submit' => $user->submit('submit')
        );
        /*Add datas user in an array and pass it in login method for sql request */
        $data = array(
            'email' => $user->getData('email'), 
            'password' => $user->getData('password')
        );
        /*Construct the login view */
        $this->set('input', $input);

        /*Load Model and pass it data user */
        $this->loadModel("User", $data);

        if(isset($_POST['submit'])){
            if($this->user->login($data))
            { echo"toto";
                $group = $this->user->checkGroup();
                switch ($group){
                    case 0: //Normal User
                        $_SESSION['user_id'] = $this->data['id'];
                        $_SESSION['name'] = $this->data['name'];
                        $_SESSION['email'] = $this->data['email'];
                        $_SESSION['group'] = "user";
                    break; 
                    case 1: //writer
                        $_SESSION['user_id'] = $this->data['id'];
                        $_SESSION['name'] = $this->data['name'];
                        $_SESSION['email'] = $this->data['email'];
                        $_SESSION['group'] = "writer";
                        $this->set("writer_admin", "Writer-index");
                    break;  
                    case 2: //Admin
                        $_SESSION['user_id'] = $this->data['id'];
                        $_SESSION['name'] = $this->data['name'];
                        $_SESSION['email'] = $this->data['email'];
                        $_SESSION['group'] = "admin";
                        $this->set("writer_admin", "Admin-index");
                    break;
                }
            }   
        }
        
    }

    public function suscribe(){
       $user = new self::$form($_POST);
       $input = array(
           "name" => $user->input_text('name'),
           "email" => $user->input_text('email'),
           "password" => $user->input_pass('password'),
           "password_conf" => $user->input_pass('password_conf'),
           "submit" => $user->submit('submit')
       );
      
       $data = array(
           'name' => $user->getData('name'),
           'email' => $user->getData('email'), 
           'password' => $user->getData('password'), 
           'password_conf' => $user->getData('password_conf')
        );

        $this->set('input', $input);
        $this->loadModel("User", $data);
       
    }


}