<?php

namespace App\Containers\AppSection\Customer\Tasks;

use App\Containers\AppSection\Customer\Data\Repositories\CustomerRepository;
use App\Containers\AppSection\Customer\Models\Customer;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateCustomerTask extends ParentTask
{
    public function __construct(
        private readonly CustomerRepository $repository,
    ) {
    }

    public function run(array $data): Customer
    {
        return $this->repository->create($data);
    }
}
