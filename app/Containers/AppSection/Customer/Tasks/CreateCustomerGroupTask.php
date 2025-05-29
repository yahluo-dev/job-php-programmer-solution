<?php

namespace App\Containers\AppSection\Customer\Tasks;

use App\Containers\AppSection\Customer\Data\Repositories\CustomerGroupRepository;
use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateCustomerGroupTask extends ParentTask
{
    public function __construct(
        private readonly CustomerGroupRepository $repository,
    ) {
    }

    public function run(array $data): CustomerGroup
    {
        return $this->repository->create($data);
    }
}
