<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Tasks\DeleteCustomerGroupTask;
use App\Containers\AppSection\Customer\UI\API\Requests\DeleteCustomerGroupRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteCustomerGroupAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCustomerGroupTask $deleteCustomerGroupTask,
    ) {
    }

    public function run(DeleteCustomerGroupRequest $request): bool
    {
        return $this->deleteCustomerGroupTask->run($request->id);
    }
}
