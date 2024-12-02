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
    public function setProject(Request $request){
        $project = Projects::create([
            'name' => $request->input('name');
            'members'=>$request->input('members');
        ]);
        return response()->json([
            'message':'successfuly created',
            'project':$project
        ]);
    }
    public function editProject(Request $request,$id){
        $project = Projects::find($id)->update([
            'name' => $request->input('name');
            'members'=>$request->input('members');
        ]);
        return response()->json([
            'message':'successfuly edited',
            'project':$project
        ]);
    }

    public function deleteProject($id) {
        $project = Projects::find($id);
        if(!$project){
            return response()->json([            
                'message':'project not found',
        ]);}
        return response()->json([ 
            'message':'project deleted successfuly',
            'project':$project
        ]);
    }

}
