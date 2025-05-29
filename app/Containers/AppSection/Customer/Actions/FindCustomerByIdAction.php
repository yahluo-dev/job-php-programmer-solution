<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Containers\AppSection\Customer\Tasks\FindCustomerByIdTask;
use App\Containers\AppSection\Customer\UI\API\Requests\FindCustomerByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCustomerByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCustomerByIdTask $findCustomerByIdTask,
    ) {
    }

    public function run(FindCustomerByIdRequest $request): Customer
    {
        return $this->findCustomerByIdTask->run($request->id);
    }
}
