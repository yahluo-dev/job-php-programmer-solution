<?php

namespace App\Containers\AppSection\Customer\Exceptions;

use App\Ship\Parents\Exceptions\HttpException as ParentHttpException;
use Symfony\Component\HttpFoundation\Response;

final class ConflictException extends ParentHttpException
{
    public static function becauseReasons(): self
    {
        return new self(Response::HTTP_CONFLICT, 'message');
    }
}
