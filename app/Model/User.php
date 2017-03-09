<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/9/2017
 * Time: 5:05 PM
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = array('id', 'name', 'email', 'created_at','updated_at');
    protected $hidden = [
        'password'
    ];
}