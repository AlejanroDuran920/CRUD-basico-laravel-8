<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    //GET
    public function index(){
        $companies=Company::all();
       return view('company.index',compact('companies'));
    }
    //GET
    public function create(){
       return view('company.create');
    }

    public function store(Request $request){

        Company::create($request->all());
        return redirect()->route('company.index');
    }

    public function destroy($id){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Company::find($id)->delete();
        return redirect()->route('company.index');
    }
}
