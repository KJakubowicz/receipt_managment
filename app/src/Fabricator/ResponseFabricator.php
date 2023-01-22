<?php

namespace App\Fabricator;

class ResponseFabricator
{
    public function makeResponse(object $helper, bool $success, int $code, string $message, array $data): void
    {
        $helper->setSuccess($success);
        $helper->setCode($code);
        $helper->setMessage($message);
        $helper->setData($data);
    }
}
