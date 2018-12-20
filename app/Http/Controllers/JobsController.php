<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;


class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::With('company')->get();        
        return response()->json($jobs);
    }

    public function show($id)
    {
        $job = Job::with('company')->find($id);

        if(!$job) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($job);
    }

    public function store(Request $request)
    {
         $job = new Job();
         $job->fill($request->all);
         $company->save();

         return response()->json($job, 201);
    }

    public function update()
    {
        $job = Job::find($id);

        if(!$job){
            return response()->json([
                'message' => 'Registro não encontrado'], 404);
        }

        $job->fill($request->all);
        
        return response()->json($job);
    }    

    public function destroy()
    {
        $job = Job::find($id);

        if(!$job){
            return response()->json([
                'message' => 'Registro não encontrado', 404
            ]);
        }

        $job->delete();
        return response()->json(204);
    }
}

