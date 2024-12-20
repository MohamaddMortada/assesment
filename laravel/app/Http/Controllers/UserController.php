<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function getUsers(){
        $users = Users::all();
        if(!$users){
            return response()->json([
                'could not find any user'
            ]);
        }
        return response()->json([
            'successfuly found all',
            $users
        ]);
    }
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
    public function setUser(Request $request){
        $user = Users::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        if(!$user)   
            return response()->json(['error while creating user']);
        return response()->json([
            'successfuly created',
            $user
        ]);
    }
    public function editUser(Request $request,$id){
        $user = Users::find($id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        if(!$user)
            return response()->json(['error while editing user']);
        return response()->json([
            'successfuly edited',
            $user
        ]);
    }
    public function deleteUser($id) {
        $user = Users::find($id);
        if(!$user){
            return response()->json([            
                'user not found',
        ]);}
        return response()->json([ 
            'usert deleted successfuly',
            $user
        ]);
    }
}
