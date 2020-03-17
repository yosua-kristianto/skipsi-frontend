<?php

namespace App\Entity;

final class ResponseDTO{
    public $status;
    public $code;
    public $message;
    public $data;

    public function __construct($status, $code, $message, $data)
    {
        $this->status = $status;
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }
}
