<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 显示指定用户的个人信息
     * 
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return view('welcome');
    }
}
