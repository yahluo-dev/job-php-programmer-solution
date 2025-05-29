<?php

namespace App\Containers\AppSection\Customer\Data\Factories;

use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of CustomerGroup
 *
 * @extends ParentFactory<TModel>
 */
final class CustomerGroupFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = CustomerGroup::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
