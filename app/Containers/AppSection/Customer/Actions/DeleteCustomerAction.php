<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Tasks\DeleteCustomerTask;
use App\Containers\AppSection\Customer\UI\API\Requests\DeleteCustomerRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteCustomerAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCustomerTask $deleteCustomerTask,
    ) {
    }

    public function run(DeleteCustomerRequest $request): bool
    {
        return $this->deleteCustomerTask->run($request->id);
    }
}
