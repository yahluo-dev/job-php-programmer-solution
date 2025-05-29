<?php

namespace App\Containers\AppSection\Customer\Data\Repositories;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Customer
 *
 * @extends ParentRepository<TModel>
 */
final class CustomerRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
        'email' => '=',
        'created_at' => '=',
    ];
}
