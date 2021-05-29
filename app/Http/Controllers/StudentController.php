<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Student, Recordbook};

class StudentController extends Controller
{   

    private $recordbook;

    private function createRecordbook()
    {
        $recordbook = Recordbook::create([
            'number' => '111',
        ]);

        $this->recordbook = $recordbook;
    }

    public function createStudent(Request $request)
    {
        $this->createRecordbook();

        $student = Student::create([
            'first_name' => 'test first name',
            'last_name' => 'test last name',
            'recordbook_id' => $this->recordbook->id
        ]);

        $this->recordbook->student_id = $student->id;

        $this->recordbook->save();
        // $student->recordbook()->save($this->recordbook);
    }

    public function getStudents(Request $request)
    {
        // $recordbook = Student::with('recordbook')->get();

        // echo $recordbook;

        $student = Student::where('first_name', 'test first name')->get();

        echo count($student);
    }
}
