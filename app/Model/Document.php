<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Model\Document
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\User[] $adjustments
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Document whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Document whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Document whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Document whereUpdatedAt($value)
 */
class Document extends Model
{
    public static function boot()
    {
        parent::boot();

        static::updating(function($document) {
            $document->adjust();
        });
    }

    public function adjustments()
    {
        return $this->belongsToMany(User::class, 'adjustments')
            ->withTimestamps()
            ->withPivot(['before', 'after'])
            ->latest('pivot_updated_at');
    }

    public function adjust($userId = null, $diff = null)
    {
        $userId = $userId ?: Auth::id();
        $diff = $diff ?: $this->getDiff();
        $this->adjustments()->attach($userId, $diff);
    }

    public function getDiff()
    {
        $changed = $this->getDirty();
        $before = json_encode(array_intersect_key($this->fresh()->toArray(), $changed));
        $after = json_encode($changed);
        return compact('before', 'after');
    }
}
