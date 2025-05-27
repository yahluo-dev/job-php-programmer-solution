<?php

namespace App\Containers\AppSection\Customer\Data\Repositories;

use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of CustomerGroup
 *
 * @extends ParentRepository<TModel>
 */
final class CustomerGroupRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
