<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $sessioon=null;


    public function __construct()
    {
        $this->session = \Config\Service::sesssion();
    }

    public function index()
    {
        echo "user";
    }
    
    public function create()
    {

        $tbluser = [
            'user' => 'koki',
            'email'    => 'koki@gmail.com',
            'level'=> 'koki' 
        ];

        $this->session->set($tbluser);
    }
   
    public function read()
    {
        echo  $this->session->get('user');
        echo "<br>";
        echo  $this->session->get('email');
        echo "<br>";
        echo  $this->session->get('level');
    }
    
    
    public function delete()
    {
        $this->session->remove('email');
    }
    
    
    public function destroy()
    {
        $this->session->destroy();
    }

}

