<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Tasks\ListCustomersTask;
use App\Containers\AppSection\Customer\UI\API\Requests\ListCustomersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCustomersAction extends ParentAction
{
    public function __construct(
        private readonly ListCustomersTask $listCustomersTask,
    ) {
    }

    public function run(ListCustomersRequest $request): mixed
    {
        return $this->listCustomersTask->run();
    }
}
