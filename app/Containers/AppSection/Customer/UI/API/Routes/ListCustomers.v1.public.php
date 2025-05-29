<?php

/**
 * @apiGroup           Customer
 * @apiName            
 *
 * @api                {GET} /v1/customers List
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

use App\Containers\AppSection\Customer\UI\API\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

#Route::get('customers', [CustomerController::class, 'list'])
#    ->middleware(['auth:api']);
Route::get('customers', [CustomerController::class, 'list']);
