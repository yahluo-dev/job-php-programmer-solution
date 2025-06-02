<?php

/**
 * @apiGroup           Customer
 * @apiName            DeleteCustomerGroup
 *
 * @api                {DELETE} /v1/customer-groups/:id Delete
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\Customer\UI\API\Controllers\CustomerGroupController;
use Illuminate\Support\Facades\Route;

Route::delete('customer-groups/{id}', [CustomerGroupController::class, 'delete']);
