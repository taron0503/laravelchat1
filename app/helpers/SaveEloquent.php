<?php
namespace App\Helpers;

use App\Helpers\Contracts\SaveStr;
use Illuminate\Http\Request;
use App\User;

class SaveEloquent implements SaveStr{

    public function save(Request $request, User $user){
        echo "saved";

//        $obj = new self;
//        $date = $obj->checkData($request->only('description', 'text'));
//        $user->posts()->create($date);
    }

    public function checkData($array){
        //тут проверка данных
        return $array;
    }
}