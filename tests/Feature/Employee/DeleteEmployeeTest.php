<?php

use App\Models\Employee;
use App\Models\User;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

it('should soft delete an employee', function () {
    $employee = Employee::factory()->create();

    deleteJson(route('employees.destroy', compact('employee')))
        ->assertStatus(Response::HTTP_NO_CONTENT);

    getJson(route('employees.show', compact('employee')))
        ->assertStatus(Response::HTTP_NOT_FOUND);

    expect(Employee::withTrashed()->find($employee->id))
        ->deleted_at->not->toBeEmpty();
});
