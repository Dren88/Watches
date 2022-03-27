<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 22.07.2021
 * Time: 23:37
 */

namespace app\controllers;
use app\models\User;

class UserController extends AppController
{
    public function signupAction(){
        if(!empty($_POST)){
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || !$user->checkUnique()){
                $user->getErrors();
                $_SESSION['form_data'] = $data;
            }else{
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if($user->save('user')){
                    $_SESSION['success'] = 'Вы успешно зарегистрированны';
                }else{
                    $_SESSION['error'] = 'Ошибка!';
                }
            }
            redirect();
        }
        $this->setMeta('Регистрация');
    }
    public function loginAction(){
        if(!empty($_POST)){
            $user = new User();
            if (!$user->login()){
                $_SESSION['error'] = 'Логин/пароль введены неверно';
            }
            if(User::isAdmin()){
                redirect(ADMIN);
            }else{
                redirect();
            }
        }
        $this->setMeta('Вход');
    }
    public function logoutAction(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            redirect();
        }
    }
}