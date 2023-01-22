<?php

namespace App\Helper;

class ResponseHelper
{
    private bool $success;
    private int $code;
    private string $message;
    private array $data;

    public function getResponseStructure(): array
    {
        return [
            'success' => $this->getSuccess(),
            'code' => $this->getCode(),
            'message' =>  $this->getMessage(),
            'data' =>  $this->getData(),
        ];
    }//end setResponseStructure()
    
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function setMessage(string $message = ''): void
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setData(array $data = []): void
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
