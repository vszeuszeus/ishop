<?php

namespace App\Services;

trait SetBaseIfEmpty
{
    public function setBaseIfEmpty($test_field, $base_field, $str_slug = false)
    {
        $result = $this->has($this->$test_field)?$this->$test_field:$this->$base_field;
        return ($str_slug) ? str_slug($result) : $result;
    }
}