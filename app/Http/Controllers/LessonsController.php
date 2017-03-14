<?php

namespace App\Http\Controllers;

use App\Model\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index(Request $request)
    {
        $lessons = Lesson::paginate(15);
        return view('lesson', ['lessons' => $lessons]);
    }
}
