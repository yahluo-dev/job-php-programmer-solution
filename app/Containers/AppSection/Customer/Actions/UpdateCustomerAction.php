<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Containers\AppSection\Customer\Tasks\UpdateCustomerTask;
use App\Containers\AppSection\Customer\UI\API\Requests\UpdateCustomerRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateCustomerAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCustomerTask $updateCustomerTask,
    ) {
    }

    public function run(UpdateCustomerRequest $request): Customer
    {
        $data = $request->sanitize([
            'name',
            'email'
        ]);

        return $this->updateCustomerTask->run($data, $request->id);
    }
}
