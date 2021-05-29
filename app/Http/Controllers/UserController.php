<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(UserRequest $userRequest)
    {
        $result = User::getUser($userRequest->username);

        if($result != null) {
            return response($result, 200);
        } else {
            return response('{}', 200);
        }
    }
}
