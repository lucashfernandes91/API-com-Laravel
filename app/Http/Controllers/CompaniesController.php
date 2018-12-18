<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function show($id)
    {
        $company = Company::find($id);

        if(!$company)
        {
            return response()->json([
                'message' => 'Registro não encontrado'
            ], 404);
        }
        return response()->json($comapny);
    }

    public function store(Request $request)
    {
        $company = new Company();
        $company->fill($request->all());
        $company->save();

        return response()->json($company, 201);
    }

    public function update()
    {
        $company = Company::find($id);

        if(!$company){
            return response()->json([
                'message' => 'Registro não encontrado'
            ]);
        }

        $company->fill($request->all());
        
        return response()->json($company);
    }

    public function destroy()
    {
        $company = Company::find($id);
        
        if(!$company){
            return response()->json([
                'message' => 'Registro não encontrado'
            ]);
        }
        
        $company->delete();
        return response()->json(204);
    }
}
