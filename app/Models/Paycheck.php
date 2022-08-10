<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Paycheck
 *
 * @property int $id
 * @property string $uuid
 * @property int $employee_id
 * @property int $net_amount
 * @property \Illuminate\Support\Carbon $payed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 *
 * @method static \Database\Factories\PaycheckFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck query()
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck whereNetAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck wherePayedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paycheck whereUuid($value)
 * @mixin \Eloquent
 */
class Paycheck extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'uuid',
        'employee_id',
        'net_amount',
        'payed_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'integer',
        'net_amount' => 'integer',
        'payed_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
