<?php

namespace Fortytwo\SDK\Core\Mocks;

class TfaRequestMock
{
    public function toJson()
    {
        $json = '{
           "client_ref" : "reference1",
           "phone_number": "35600000000"
       }';

        return $json;
    }
}
