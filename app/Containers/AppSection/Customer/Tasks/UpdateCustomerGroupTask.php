<?php

namespace App\Containers\AppSection\Customer\Tasks;

use App\Containers\AppSection\Customer\Data\Repositories\CustomerGroupRepository;
use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class UpdateCustomerGroupTask extends ParentTask
{
    public function __construct(
        private readonly CustomerGroupRepository $repository,
    ) {
    }

    public function run(array $data, $id): CustomerGroup
    {
        return $this->repository->update($data, $id);
    }
}
