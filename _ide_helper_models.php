<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $lob
 * @property string $cause
 * @property string $total_customer
 * @property float $total_claim
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereCause($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereLob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereTotalClaim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereTotalCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereUpdatedAt($value)
 */
	class ActivityLog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $lob
 * @property string $cause
 * @property string $total_customer
 * @property float $total_claim
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Integration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Integration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Integration query()
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereCause($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereLob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereTotalClaim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereTotalCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Integration whereUpdatedAt($value)
 */
	class Integration extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $lob
 * @property string $cause
 * @property int $total_customer
 * @property float $total_claim
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Lob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lob query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lob whereCause($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lob whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lob whereLob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lob whereTotalClaim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lob whereTotalCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lob whereUpdatedAt($value)
 */
	class Lob extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

