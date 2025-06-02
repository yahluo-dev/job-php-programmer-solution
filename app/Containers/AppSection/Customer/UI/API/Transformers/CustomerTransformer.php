<?php

namespace App\Containers\AppSection\Customer\UI\API\Transformers;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;
use Apiato\Http\Resources\Collection;

final class CustomerTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [
        'customer_groups'
    ];

    public function transform(Customer $customer): array
    {
        return [
            'type' => $customer->getResourceKey(),
            'id' => $customer->getHashedKey(),
            'name' => $customer->name,
            'email' => $customer->email,
            'created_at' => $customer->created_at,
            'updated_at' => $customer->updated_at,
            'readable_created_at' => $customer->created_at->diffForHumans(),
            'readable_updated_at' => $customer->updated_at->diffForHumans(),
        ];
    }
    public function includeCustomerGroups(Customer $customer): Collection
    {
        return $this->collection($customer->customer_groups, new CustomerGroupTransformer());
    }

}
