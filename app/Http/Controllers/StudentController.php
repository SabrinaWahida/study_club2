<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', ["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create([
            "nim" => $request->nim,
            "name" => $request->name,
            "prodi" => $request->prodi,
            "angkatan" => $request->angkatan,
            "asal" => $request->asal,
            "alamat" => $request->alamat
        ]);

        return redirect()->route("student.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view("student.edit", ["student" => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::find($id)->update([
            "nim" => $request->nim,
            "name" => $request->name,
            "prodi" => $request->prodi,
            "angkatan" => $request->angkatan,
            "asal" => $request->asal,
            "alamat" => $request->alamat
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::find($id)->delete();

        return redirect()->route("student.index");
    }
}
