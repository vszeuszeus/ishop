<?php

namespace App\Services;

trait SetBaseIfEmpty
{
    public function setBaseIfEmpty($test_field, $base_field, $str_slug = false)
    {
        if(!$this->has($test_field)) return $this->$base_field;
        if(empty($this->$test_field)) return $this->$base_field;
        return $this->$test_field;
    }
}