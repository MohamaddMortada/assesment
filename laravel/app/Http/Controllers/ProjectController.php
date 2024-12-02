<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getProject($id){
        $project = Projects::find($id);
        if(!$project){
            return response()->json([
                'message':'could not find project with such id'
            ]);
        }
        return response()->json([
            'message':'successfuly found',
            'project':$project
        ]);
    }
}
