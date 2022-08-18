<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $dataStudentAll = Students::all();
        $females = Students::where("sexe", "=", "female")->get();
        $males = Students::where("sexe", "=", "male")->get();
        return view("welcome", compact("dataStudentAll", "females", "males"));
    }
    public function store(Request $request){
        $store = new Students;
        $store->name = $request->name;
        $store->sexe = $request->sexe;
        $store->age = $request->age;
        $store->email = $request->email;
        $store->save();
        return redirect("/");
    }
}
