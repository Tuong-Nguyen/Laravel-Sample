<?php

namespace App\Model;

use App\Filter\QueryFilters;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Lesson
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson filter(\App\Filter\QueryFilters $filters)
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $views
 * @property int $length
 * @property string $difficulty
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereDifficulty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereLength($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Lesson whereViews($value)
 */
class Lesson extends Model
{
    public function scopeFilter($query, QueryFilters $filters)
    {
        return $filters->apply($query);
    }
}
