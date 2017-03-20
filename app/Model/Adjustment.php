<?php
/**
 * Created by PhpStorm.
 * User: lnthao
 * Date: 3/14/2017
 * Time: 11:06 AM
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Adjustment
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $document_id
 * @property string $before
 * @property string $after
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Adjustment whereAfter($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Adjustment whereBefore($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Adjustment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Adjustment whereDocumentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Adjustment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Adjustment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Adjustment whereUserId($value)
 */
class Adjustment extends Model
{

}