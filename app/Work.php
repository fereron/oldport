<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Work
 *
 * @property int $id
 * @property string $description
 * @property string $url
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereUrl($value)
 * @mixin \Eloquent
 */
class Work extends Model
{
    //
}
