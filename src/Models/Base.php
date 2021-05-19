<?php


namespace SenderNet\Models;


class Base
{
    public function __construct($data = [])
    {
        if (!empty($data)) {
            foreach ($data as $key => $one) {
                $this->$key = $one;
            }
        }
    }

}