<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeachersController extends Controller
{
   public function index()
   {
       $teachers=Teacher::latest()->get();
       return view('teachers.index', ['teachers'=>$teachers]);
   }

   public function create()
   {
       return view('teachers.create');
   }


   public function store(Request $request)
   {
       //$teacher= new Teacher;
       //$teacher->name=$request->name;
       //$teacher->addres=$request->addres;
       //$teacher->phone=$request->phone;
       //$teacher->email=$request->email;
       //$teacher->save();
       //dd($request->all());




       Teacher::create($request->all());
       
       return redirect()->route('teachers.index');
   }


   public function show(Teacher $teacher)
   {
       //$teacher=Teacher::findOrfail($id);
       return view('teachers.show', compact('teacher'));
   }


   public function edit(Teacher $teacher)
   {
       //$teacher=Teacher::findOrfail($id);
       return view('teachers.edit', compact('teacher'));
   }


   public function update(Request $request, Teacher $teacher)
   {
       //$teacher=Teacher::findOrfail($id);
       $teacher->update($request->all());
       return redirect()->route('teachers.index');       
   }

   public function destroy(Teacher $teacher)
   {
       //$teacher=Teacher::findOrfail($id);
       $teacher->delete();

       //Teacher::destroy($id);
       return redirect()->route('teachers.index'); 
   }
}
