<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Jurusan',
            'majors' => Major::all()
        ];
        return view('major.index', $data);
    }
    public function studentList(Major $major)
    {
        $data = [
            'title' => 'Jurusan',
            'students' => $major->students,
            'major' => $major->name,
            'slug' => $major->slug,
        ];
        return view('major.students', $data);
    }
    public function info(Major $major)
    {
        $data = [
            'title' => 'Jurusan',
            'name' => $major->name,
            'info' => $major->info
        ];
        return view('major.info', $data);
    }
}
