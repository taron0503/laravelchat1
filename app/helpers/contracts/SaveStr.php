<?php
namespace App\Helpers\Contracts;

use Illuminate\Http\Request;
use App\User;

Interface SaveStr {

    public function save(Request $request, User $user);

    public function checkData($array);
}