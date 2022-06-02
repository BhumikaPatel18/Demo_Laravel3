<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentValidation;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $student = Student::all();
        // $student = DB::table('students')->select('name','subject','address')->leftJoin()->get();
        $student = DB::table('students')->select('students.id As S_Id','students.name As stud_name','students.subject As stud_subject','teachers.name As tech_name')->leftJoin('teachers','students.subject',"=","teachers.subject")->get();
        //dd($student);
        //$contactgroup= DB::table('people')->select('people.id As people_id','contact_groups.id As group_id','people.user_id','group_id','people.name As people_name','contact_groups.name As group_name','phone_number','cover_photo','formattedName')
        //->leftJoin('contact_groups','people.group_id','=','contact_groups.id')->orderBy('people.name')->get();
        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentValidation $request)
    {
        // $input = $request->validated();


        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'emai' => '',
            'address'=>'',
            'subject'=>'',
            'gender' => '',
            'hobby' => '',
        ]);



        $data = new Student;

        $data->name = $request->name;

        $data->dob= $request->dob;

        $data->email= $request->email;
        $data->address= $request->address;
        $data->subject= $request->subject;
        $data->gender= $request->gender;

        $hobby = implode(',', $request->hobby);

        $data->hobby=$hobby;

        $data->save();





        // Student::create($input);
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tshow = Student::find($id);
        return view('student.show', compact('tshow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($id,$request);
        $input = $request->all();
        $data = Student::find($id);
        $data->name = $request->name;
        $data->dob= $request->dob;
        $data->email= $request->email;
        $data->address= $request->address;
        $data->subject= $request->subject;
        $data->gender= $request->gender;

        $hobby = implode(',', $request->hobby);

        $data->hobby=$hobby;

        $data->update();



        // $student->fill($input)->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student  $student)
    {

        $student->delete();
        return redirect()->route('students.index');
    }
}
