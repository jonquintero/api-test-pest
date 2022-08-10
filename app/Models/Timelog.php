<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Timelog
 *
 * @property int $id
 * @property string $uuid
 * @property int $employee_id
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon $stopped_at
 * @property int $minutes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 * @method static \Database\Factories\TimelogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereStoppedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timelog whereUuid($value)
 * @mixin \Eloquent
 */
class Timelog extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'uuid',
        'employee_id',
        'started_at',
        'stopped_at',
        'minutes',
    ];

    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'integer',
        'started_at' => 'datetime',
        'stopped_at' => 'datetime',
    ];


    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
