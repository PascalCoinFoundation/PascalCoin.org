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
 * App\Newsletter
 *
 * @property int $id
 * @property string $email
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereUpdatedAt($value)
 */
	class Newsletter extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property string $password
 * @property string|null $remember_token
 * @property array $settings
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property mixed $locale
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \TCG\Voyager\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Projects
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $url
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Projects whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Projects whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Projects whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Projects whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Projects whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Projects whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Projects whereUrl($value)
 */
	class Projects extends \Eloquent {}
}

namespace App{
/**
 * App\Contact
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string $message
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $answer
 * @property int $responded
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereResponded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App{
/**
 * App\Roadmap
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $announcement_id
 * @property string $acc_date
 * @property int $show_month
 * @property int $show_day
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereAccDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereAnnouncementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereShowDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereShowMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Roadmap whereUpdatedAt($value)
 */
	class Roadmap extends \Eloquent {}
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
 * @property int $supply
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereSupply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CoinMarketCap whereVolume24h($value)
 */
	class CoinMarketCap extends \Eloquent {}
}

namespace App{
/**
 * App\MediumArticles
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $posted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MediumArticles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MediumArticles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MediumArticles whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MediumArticles wherePostedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MediumArticles whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MediumArticles whereUpdatedAt($value)
 */
	class MediumArticles extends \Eloquent {}
}

namespace App{
/**
 * App\FaqGroup
 *
 * @property int $id
 * @property string $title
 * @property string $icon
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $position
 * @property int $published
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FaqEntry[] $faq_entries
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqGroup whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqGroup wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqGroup wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqGroup whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqGroup whereUpdatedAt($value)
 */
	class FaqGroup extends \Eloquent {}
}

namespace App{
/**
 * App\Announcement
 *
 * @property int $id
 * @property string $pub_date
 * @property string $title
 * @property string $teaser
 * @property string $content
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News wherePubDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereTeaser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUpdatedAt($value)
 */
	class Announcement extends \Eloquent {}
}

namespace App{
/**
 * App\Cron
 *
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cron whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cron whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cron whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cron whereUpdatedAt($value)
 */
	class Cron extends \Eloquent {}
}

namespace App{
/**
 * App\FaqEntry
 *
 * @property int $id
 * @property int $faq_group_id
 * @property string $question
 * @property string $answer
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $position
 * @property-read \App\FaqGroup $faqGroup
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry whereFaqGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FaqEntry whereUpdatedAt($value)
 */
	class FaqEntry extends \Eloquent {}
}

