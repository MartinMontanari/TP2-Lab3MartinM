<?php


namespace App\Exceptions;
use Throwable;

class InvalidBodyException extends \Error implements Throwable
{
    private array $messages;

    public function __construct($message = [])
    {
        $this->messages = $message;
        parent::__construct();
    }

    public function getMessages()
    {
        return $this->messages;
    }
}