<?php
/**
 * Final Year Project: Assessment Database
 * Created by: Michael Leah (L1048345)
 * Created on: 19/11/2014
 */

class Login extends Controller
{
    public function index()
    {
        $error = '';

        /* Load the user model in preparation for login attempt */
        $model = $this->model('User');

        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && isset($_POST['password'])){

                $username = $_POST['username'];
                $password = $_POST['password'];

                $user = $model->getByCredentials($username, $password);

                if ($user != null) {

                    // Need to create cookie to handle login.
                    header('Location: /AssessmentDatabase/public/home/');
                } else {
                    $error = 'Username or Password were entered incorrectly.';
                }




            }
        }

        $this->view('login/index', [
            'error' => $error
        ]);
    }
}