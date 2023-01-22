<?php

namespace App\Parser;

class PaymentsParser
{
    public static function payments(array $data)
    {
        $response = [];
        foreach ($data as $key => $value) {
            $response[] = [
                'id' => ($value->getId()) ? $value->getId() : '',
                'title' => ($value->getTitle()) ? $value->getTitle(): '',
                'total' => ($value->getTotal()) ? $value->getTotal() : '',
                'created_at' => ($value->getCreatedAt()) ? $value->getCreatedAt() : '',
                'last_modification' => ($value->getLastModification()) ? $value->getLastModification() : '',
                'created_by' => ($value->getCreatedBy()) ? $value->getCreatedBy() : '',
            ];  
        }
        return $response;
    }//end payments()
}
