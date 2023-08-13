<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class csvStructureRule implements Rule
{
    public function passes($attribute, $value)
    {
        return substr_count(file_get_contents($value), '|') === 32;
    }

    public function message()
    {
        return 'The file does not have proper structure.';
    }
}
