<?php

namespace App\Rules;

use App\Models\UserAuth;
use Illuminate\Contracts\Validation\Rule;

class UniqueEmail implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Check if the email is unique in the users table
        return UserAuth::where('email', $value)->count() === 0;
    }

    public function message()
    {
        return 'The email has already been taken.';
    }
}
