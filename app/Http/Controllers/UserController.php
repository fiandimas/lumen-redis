<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {

    public function index(){
        if(Redis::get('users')){
            return Redis::get('users');
        }else{
            $users = User::all();
            $this->setRedis($users);
            return $users;
        }
    }

    public function find($id){
        if(Redis::get("user:$id")){
            return Redis::get("user:$id");
        }else{
            $user = User::findOrFail($id);
            Redis::set("user:$id", $user);
            return $user;
        }
    }

    private function setRedis($users){
        Redis::set('users', $users);
        foreach($users as $data){
            Redis::set("user:$data->id", $data);
        }
    }
}
