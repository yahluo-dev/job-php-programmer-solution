<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Containers\AppSection\Customer\Tasks\FindCustomerGroupByIdTask;
use App\Containers\AppSection\Customer\UI\API\Requests\FindCustomerGroupByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCustomerGroupByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCustomerGroupByIdTask $findCustomerGroupByIdTask,
    ) {
    }

    public function run(FindCustomerGroupByIdRequest $request): CustomerGroup
    {
        return $this->findCustomerGroupByIdTask->run($request->id);
    }
}
