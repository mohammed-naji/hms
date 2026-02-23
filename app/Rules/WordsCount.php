<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class WordsCount implements ValidationRule
{
    public function __construct(public $count) {}
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (str_word_count($value) < $this->count) {
            $fail('The :attribute field must be grater than ' . $this->count . ' words');
        }
    }
}
