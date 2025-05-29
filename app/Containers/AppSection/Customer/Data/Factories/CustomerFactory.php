<?php

namespace App\Containers\AppSection\Customer\Data\Factories;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Ship\Parents\Factories\Factory as ParentFactory;
use Illuminate\Support\Str;

/**
 * @template TModel of Customer
 *
 * @extends ParentFactory<TModel>
 */
final class CustomerFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
