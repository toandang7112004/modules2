<?php
class User {
    public $name = '';
    public $email = '';
    public $role = '';
    public function getInfo(){
        return $this->name.''. $this->email.''. $this->role;
    }
    public function isAdmin(){
        if($this->role == 1 ){
            echo "admin";
        }elseif($this->role == 2){
            echo "nguoi dung binh thuong";
        }else{
            echo"loi";
        }
    }
    public function setName($ts_name){
        $this->name = $ts_name;
    }
    public function setEmail($ts_email){
        $this->email = $ts_email;
    }
    public function setRole($ts_role){
        $this->role = $ts_role;
    }
}
$user = new User();
$user ->setRole(2);
$user ->setName('toan');
$user ->setEmail('setEmail@gmail.com');
$user ->isAdmin();
echo $user ->getInfo();
