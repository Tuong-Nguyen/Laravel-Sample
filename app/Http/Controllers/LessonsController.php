<?php

namespace App\Http\Controllers;

use App\Model\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    const ITEM_PER_PAGE = 15;
    public function index(Request $request)
    {
        $lessons = (new Lesson)->newQuery();
        if ($request->exists('popular')) {
            $lessons->orderBy('views', 'desc');
        }
        if ($request->has('difficulty')) {
            $lessons->where('difficulty', $request->difficulty);
        }
        
        return view('lesson', ['lessons' => $lessons->paginate(self::ITEM_PER_PAGE)]);
    }
}
