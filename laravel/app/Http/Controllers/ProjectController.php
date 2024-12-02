<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getProjects(){
        $projects = Projects::all();
        if(!$projects){
            return response()->json([
                'could not find any projects'
            ]);
        }
        return response()->json([
            'successfuly found all',
            $projects
        ]);
    }

    public function getProject($id){
        $project = Projects::find($id);
        if(!$project){
            return response()->json([
                'could not find project with such id'
            ]);
        }
        return response()->json([
            'successfuly found',
            $project
        ]);
    }
    public function setProject(Request $request){
        $project = Projects::create([
            'name' => $request->input('name'),
            'members'=>$request->input('members'),
        ]);
        return response()->json([
            'successfuly created',
            $project
        ]);
    }
    public function editProject(Request $request,$id){
        $project = Projects::find($id)->update([
            'name' => $request->input('name'),
            'members'=>$request->input('members'),
        ]);
        return response()->json([
            'successfuly edited',
            $project
        ]);
    }

    public function deleteProject($id) {
        $project = Projects::find($id);
        if(!$project){
            return response()->json([            
                'project not found',
        ]);}
        return response()->json([ 
            'project deleted successfuly',
            $project
        ]);
    }

}
