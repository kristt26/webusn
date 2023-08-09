<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usermodel;

class Auth extends BaseController
{
    protected $user;
    public function __construct() {
        $this->user = new Usermodel();
    }
    public function index()
    {
        $this->user = new Usermodel();
        if($this->user->countAllResults()==0){
            $this->user->insert(['username'=>'Administrator', 'password'=>password_hash('Administrator#1', PASSWORD_DEFAULT), 'akses'=>'Administrator']);
        }
        return view('login');
    }

    function login() {
        $item = $this->request->getPost();
        $user = $this->user->asObject()->where('username', $item['username'])->first();
        if(password_verify($item['password'], $user->password)){
            $ses = [
                'uid'       => $user->id,
                'akses'     =>$user->akses,
                'is_login'  => true
            ];
            session()->set($ses);
            return redirect()->to(base_url('admin'));
        }else{
            return redirect()->to(base_url('auth'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('auth'));
    }
}
