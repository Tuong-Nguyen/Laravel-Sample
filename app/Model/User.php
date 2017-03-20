<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/9/2017
 * Time: 5:05 PM
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\User
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User whereUpdatedAt($value)
 */
class User extends Model
{
    protected $fillable = array('id', 'name', 'email', 'created_at','updated_at');
    protected $hidden = [
        'password'
    ];
}