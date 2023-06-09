<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* @property int $id
* @property string $payment_type
* @property string $payment_method_key
* @property int $amount
* @property Carbon $date
* @property string $comment
* @property int $order_id
* @property boolean $is_canceled
* @property Carbon $canceled_at
*/
class Transaction extends Model
{
    use HasFactory;
}
