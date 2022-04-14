<?php

namespace App\Http\Resources;


use Illuminate\Http\Request;
use JetBrains\PhpStorm\ArrayShape;
use TiMacDonald\JsonApi\JsonApiResource;

class DepartmentResource extends JsonApiResource
{
    #[ArrayShape(['name' => "mixed", 'description' => "mixed"])]
    public function toAttributes(Request $request): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
        ];
    }

    public function toRelationships(Request $request): array
    {
        return [
            'employees' => fn () => EmployeeResource::collection($this->employees),
        ];
    }

    public function toLinks(Request $request): array
    {
        return [
        'self' => route('departments.show', ['department' => $this->uuid]),
        ];
    }
}
