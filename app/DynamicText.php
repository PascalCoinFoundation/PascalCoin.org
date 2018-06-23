<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DynamicText
 *
 * @property int $id
 * @property string $group
 * @property string $key
 * @property string|null $content
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DynamicText whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DynamicText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DynamicText whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DynamicText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DynamicText whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DynamicText whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DynamicText extends Model
{
    //
}
