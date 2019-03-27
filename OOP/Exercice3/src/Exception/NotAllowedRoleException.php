<?php
namespace Exception;


use Throwable;

class NotAllowedRoleException extends \RuntimeException
{
    public function __construct(array $roles, string $label, string $message = "", int $code = 0, Throwable $previous = null)
    {
        $messageTmp = 'The role ' . $label . 'is not allowed';
        $messageTmp .= ' only ' . implode(', ', $roles) . ' are allowed';
        $messageTmp .= $message;
        parent::__construct($messageTmp, $code, $previous);
    }
}