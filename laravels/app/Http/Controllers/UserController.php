<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class UserController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function queryAll(){
        return UserModel::all();
    }
    public function queryDomainByPk($id=1){
        return UserModel::queryDomainByPk($id);
    }
    public function queryDomainById($id=1){
        return UserModel::queryDomainByID($id);
    }

}
