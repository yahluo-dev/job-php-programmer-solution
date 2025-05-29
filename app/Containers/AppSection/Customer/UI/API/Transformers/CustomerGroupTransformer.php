<?php

namespace App\Containers\AppSection\Customer\UI\API\Transformers;

use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class CustomerGroupTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(CustomerGroup $customergroup): array
    {
        return [
            'type' => $customergroup->getResourceKey(),
            'id' => $customergroup->getHashedKey(),
            'name' => $customergroup->name,
            'created_at' => $customergroup->created_at,
            'updated_at' => $customergroup->updated_at,
            'created_at' => $customergroup->created_at,
            'updated_at' => $customergroup->updated_at,
            'readable_created_at' => $customergroup->created_at->diffForHumans(),
            'readable_updated_at' => $customergroup->updated_at->diffForHumans(),
        ];
    }
}
