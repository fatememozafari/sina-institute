<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher=Teacher::query()->get();
        return view('admin.teachers.index',compact('teacher'));
    }

    public function show($id)
    {
        $teacher=Teacher::query()->find($id);
        return view('admin.teachers.show',compact('teacher'));

    }


}