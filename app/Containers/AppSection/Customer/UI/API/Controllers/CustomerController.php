<?php

namespace App\Containers\AppSection\Customer\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Customer\Actions\CreateCustomerAction;
use App\Containers\AppSection\Customer\Actions\DeleteCustomerAction;
use App\Containers\AppSection\Customer\Actions\FindCustomerByIdAction;
use App\Containers\AppSection\Customer\Actions\ListCustomersAction;
use App\Containers\AppSection\Customer\Actions\UpdateCustomerAction;
use App\Containers\AppSection\Customer\UI\API\Requests\CreateCustomerRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\DeleteCustomerRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\FindCustomerByIdRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\ListCustomersRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\UpdateCustomerRequest;
use App\Containers\AppSection\Customer\UI\API\Transformers\CustomerTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CustomerController extends ApiController
{
    public function create(CreateCustomerRequest $request, CreateCustomerAction $action): JsonResponse
    {
       $customer = $action->run($request);

       return Response::create($customer, CustomerTransformer::class)->created();
    }

    public function findById(FindCustomerByIdRequest $request, FindCustomerByIdAction $action): JsonResponse
    {
        $customer = $action->run($request);

        return Response::create($customer, CustomerTransformer::class)->ok();
    }

    public function list(ListCustomersRequest $request, ListCustomersAction $action): JsonResponse
    {
        $customers = $action->run($request);

        return Response::create($customers, CustomerTransformer::class)->ok();
    }

    public function update(UpdateCustomerRequest $request, UpdateCustomerAction $action): JsonResponse
    {
        $customer = $action->run($request);

        return Response::create($customer, CustomerTransformer::class)->ok();
    }

    public function delete(DeleteCustomerRequest $request, DeleteCustomerAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
