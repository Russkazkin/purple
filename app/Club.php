<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Club
 *
 * @property int $id
 * @property string $name
 * @property string|null $avatar
 * @property string|null $birth_date
 * @property string $country
 * @property string $city
 * @property string|null $creed Девиз по жизни
 * @property string|null $description Описание
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Posts[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereCreed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Club extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar', 'birth_date', 'country', 'city', 'creed', 'description',
    ];


    /**
     * Get the users who have subscribe to this Club.
     */
    public function users()
    {
        return $this->morphToMany('App\User', 'subscrable');
    }

    /**
     * Get the Club's Posts.
     */
    public function posts()
    {
        return $this->morphToMany('App\Posts', 'postable');
    }
}