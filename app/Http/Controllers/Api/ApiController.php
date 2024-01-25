<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test()
    {
        $data = Student::get();

        return response()->json($data, 200);

    }
    public function addStudent(Request $request)
    {

      $data = Student::create([
           "fullname" => $request->fullname,
           "age" => $request->age,
           "address" => $request->address,

        ]);

        return response()->json($data, 200);

    }
    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update([
            "fullname" => $request->fullname,
            "age" => $request->age,
            "address" => $request->address,

         ]);

         return response()->json(null, 200);
    }
    public function deleteStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->delete([
            "fullname" => $request->fullname,
            "age" => $request->age,
            "address" => $request->address,

         ]);

         return response()->json(null, 200);
    }
}
