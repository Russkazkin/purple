<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Feed
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $feedable_id
 * @property string $feedable_type
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $feedable
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed whereFeedableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed whereFeedableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feed whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $authorable_id
 * @property string|null $authorable_type
 * @property-read Model|\Eloquent $authorable
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereAuthorableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereAuthorableType($value)
 */
class Feed extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'feedable_id', 'feedable_type', 'authorable_id', 'authorable_type'
    ];

    public function feedable()
    {
        return $this->morphTo();
    }

    public function authorable()
    {
        return $this->morphTo();
    }
}
