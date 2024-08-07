<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = Student::all();
        return view('students.index',$data);

        //return Student::all();
        //return Student::where('province', 'Texas')->get();

        // return Student::where('province', 'New Jersey')
        //    ->where('fname', 'Karlie')
        //    ->get();

        // return Student::where('province', 'New Jersey')
        //     ->orwhere('province', 'New Jersey')
        //     ->orwhere('lname', 'Kunde')
        //     ->get();
        
        //return Student::where('fname', 'like', '%t%')->get();

        //return Student::orderBy('fname')->get();
        //return Student::orderBy('city', 'desc')->get();

        // return Student::limit(7)->get();

        // return Student::whereIn('id', [1,3,5,7,9,11])->get();
        // return Student::whereNotIn('id', [1,3,5,7,9,11])->get();

        // return Student::where('province', (New Jersey)->first();

        // return Student::with('grades')->get();

        return Student::with(['grades' > function($query){
            return $query->where('grades', '>=', 90);
    
        }])-get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::find($id);
        $student->fname     =$request['fname'];
        $student->lname     =$request['lname'];
        $student->email     =$request['email'];
        $student->phone     =$request['phone'];
        $student->address   =$request['address'];
        $student->city      =$request['city'];
        $student->province  =$request['province'];
        $student->zip       =$request['zip'];
        $student->birthdate =$request['birthday'];
        $student->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return Student::find($id);

        $student = Student::find($id);
        // return $student->fname . ' ' . $this->lname;

        return $student->fullname;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->fname     =$request['fname'];
        $student->lname     =$request['lname'];
        $student->email     =$request['email'];
        $student->phone     =$request['phone'];
        $student->address   =$request['address'];
        $student->city      =$request['city'];
        $student->province  =$request['province'];
        $student->zip       =$request['zip'];
        $student->birthdate =$request['birthdate'];
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
    }
}
