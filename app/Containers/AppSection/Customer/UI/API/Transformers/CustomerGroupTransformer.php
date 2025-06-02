<?php

namespace App\Containers\AppSection\Customer\UI\API\Transformers;

use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;
use Apiato\Http\Resources\Collection;

final class CustomerGroupTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [
        'customers'
    ];

    public function transform(CustomerGroup $customergroup): array
    {
        return [
            'type' => $customergroup->getResourceKey(),
            'id' => $customergroup->getHashedKey(),
            'name' => $customergroup->name,
            'created_at' => $customergroup->created_at,
            'updated_at' => $customergroup->updated_at,
            'readable_created_at' => $customergroup->created_at->diffForHumans(),
            'readable_updated_at' => $customergroup->updated_at->diffForHumans(),
        ];
    }

    public function includeCustomers(CustomerGroup $customer_group): Collection
    {
        return $this->collection($customer_group->customers, new CustomerTransformer());
    }
}
