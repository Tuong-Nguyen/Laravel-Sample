<?php

namespace App\Http\Controllers;

use App\Filter\LessonFilters;
use App\Model\Lesson;

class LessonsController extends Controller
{
    const ITEM_PER_PAGE = 15;

    public function index(LessonFilters $filters)
    {
        return view('lesson', ['lessons' => Lesson::filter($filters)->paginate(self::ITEM_PER_PAGE)]);
    }
}
