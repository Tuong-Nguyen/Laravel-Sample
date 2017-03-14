<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/14/2017
 * Time: 5:21 PM
 */

namespace App\Filter;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class QueryFilters
{
    protected $request;
    protected $builder;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;
        foreach ($this->filters() as $name => $value) {
            if(method_exists($this, $name)) {
//                if(trim($value)) {
//                    $this->$name($value);
//                } else {
//                    $this->$name();
//                }
                call_user_func_array([$this, $name], array_filter([$value]));
            }
        }
        return $this->builder;
    }

    public function filters()
    {
        return $this->request->all();
    }
}