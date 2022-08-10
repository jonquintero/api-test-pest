<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $uuid
 * @property string $full_name
 * @property string $email
 * @property int $department_id
 * @property string $job_title
 * @property string $payment_type
 * @property int|null $salary
 * @property int|null $hourly_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Department $department
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Paycheck[] $paychecks
 * @property-read int|null $paychecks_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Timelog[] $timelogs
 * @property-read int|null $timelogs_count
 * @method static \Database\Factories\EmployeeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Query\Builder|Employee onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereHourlyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUuid($value)
 * @method static \Illuminate\Database\Query\Builder|Employee withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Employee withoutTrashed()
 */
	class Employee extends \Eloquent {}
}

