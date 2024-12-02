<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function getUser($id){
        $user = Users::find($id);
        if(!$user){
            return response()->json([
                'could not find user with such id'
            ]);
        }
        return response()->json([
            'successfuly found',
            $user
        ]);
    }
}
