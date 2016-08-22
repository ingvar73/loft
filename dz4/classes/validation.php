<?php

/**
 * Created by PhpStorm.
 * User: ingvar73
 * Date: 21.08.2016
 * Time: 22:32
 */
// Класс для валидации формы
class Validation
{
private $login;
private $name;
private $age;
private $about;
private $pass;
private $pass1;
    public $result;

    public function __construct ($login, $name, $age, $about, $pass, $pass1)
    {
        $result_login = $this->ver_login($login);
        $result_name = $this->ver_name($name);
        $result_age = $this->ver_age($age);
        $result_about = $this->ver_about($about);
        $result_pass = $this->ver_pass($pass);
        $result_pass1 = $this->ver_pass1($pass1);
        if($result_login and $result_name and $result_age and $result_about and $result_pass and $result_pass1){
            return true;
        } else{
            return false;
        }
    }
        public function ver_login($login){
            $this->login = strip_tags(trim($login));
            if(strlen(htmlspecialchars($this->login)) < 6 || strlen(htmlspecialchars($this->login)) > 15){
                echo "ОШИБКА! Длина логина должна быть не менее 6 и не более 15 символов!";
                return false;
            }
            return true;
        }

        public function ver_name($name){
            $this->name = strip_tags(trim($name));
            if(strlen(htmlspecialchars($this->name)) < 6 || strlen(htmlspecialchars($this->name)) > 15){
                echo "ОШИБКА! Длина логина должна быть не менее 6 и не более 15 символов!";
                return false;
            }
            return true;
        }

        public function ver_age($age){
            $this->age = (int)$age;
            if (is_numeric($this->age) && $this->age === 0){
                echo "В поле ввода возраста введено не числовое значение!";
                return false;
            } else
            return true;
        }

        public function ver_about($about){
            $this->about = strip_tags($about);
            if(strlen(nl2br(htmlspecialchars($this->about))) == ''){
                echo "ОШИБКА! Вы не ввели описание!";
                return false;
            } elseif (strlen(nl2br(htmlspecialchars($this->about))) > 300){
                echo "ОШИБКА! Превышено максимальное количество символов для описания!";
                return false;
            }
            return true;
        }

        public function ver_pass($pass){
            $this->pass = $pass;
            if($this->pass === 0) "Не ввели пароль!";
            return true;
        }

        function ver_pass1($pass1){
            $this->pass1 = $pass1;
            if($this->pass1 == '') "Не ввели пароль!";
            return true;
        }

        function comparing (){
            if($this->pass != $this->pass1){
                echo "Повторный пароль не совпадает!";
                return $result = false;
            } else
                return $result = true;
        }
}