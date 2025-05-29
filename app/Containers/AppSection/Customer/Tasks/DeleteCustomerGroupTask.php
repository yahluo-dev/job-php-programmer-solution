<?php

namespace App\Containers\AppSection\Customer\Tasks;

use App\Containers\AppSection\Customer\Data\Repositories\CustomerGroupRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteCustomerGroupTask extends ParentTask
{
    public function __construct(
        private readonly CustomerGroupRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
