<?php

namespace App\Exceptions;

use Exception;

class AuthException extends Exception
{
    //
    public function render() {
        return '你没有权限';
    }
}
