<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Models\Customer;
use App\Containers\AppSection\Customer\Tasks\CreateCustomerTask;
use App\Containers\AppSection\Customer\UI\API\Requests\CreateCustomerRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateCustomerAction extends ParentAction
{
    public function __construct(
        private readonly CreateCustomerTask $createCustomerTask,
    ) {
    }

    public function run(CreateCustomerRequest $request): Customer
    {
        $data = $request->sanitize([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255'
        ]);

        return $this->createCustomerTask->run($data);
    }
}
