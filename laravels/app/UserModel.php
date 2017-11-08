<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    protected $table = 't_domain';

    public static function queryDomainByPk($id){
        $user = DB::select('select * from t_domain where id = :id', [':id'=>$id]);
        return $user;
    }
    public static function queryDomainByID($id){
        $user = DB::select('select * from t_domain where id = ?', [$id]);
        return $user;
    }
}
