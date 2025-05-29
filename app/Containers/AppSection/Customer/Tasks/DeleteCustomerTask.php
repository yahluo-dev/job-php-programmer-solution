<?php

namespace App\Containers\AppSection\Customer\Tasks;

use App\Containers\AppSection\Customer\Data\Repositories\CustomerRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteCustomerTask extends ParentTask
{
    public function __construct(
        private readonly CustomerRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
