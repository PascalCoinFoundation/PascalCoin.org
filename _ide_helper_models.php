<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\CoinMarketCap
 *
 * @property int $id
 * @property string $symbol
 * @property float $price
 * @property float $volume_24h
 * @property float $market_cap
 * @property float $percent_change_1h
 * @property float $percent_change_24h
 * @property float $percent_change_7d
 * @property int $rank
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereMarketCap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap wherePercentChange1h($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap wherePercentChange24h($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap wherePercentChange7d($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereVolume24h($value)
 */
	class CoinMarketCap extends \Eloquent {}
}

