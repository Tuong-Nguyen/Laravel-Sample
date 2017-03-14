<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/14/2017
 * Time: 5:19 PM
 */

namespace App\Filter;


class LessonFilters extends QueryFilters
{
    public function popular($order = 'desc')
    {
        return $this->builder->orderBy('views', $order);
    }

    public function difficulty($level)
    {
        return $this->builder->where('difficulty', $level);
    }
}