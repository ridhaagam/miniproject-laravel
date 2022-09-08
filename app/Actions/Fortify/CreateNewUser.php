<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string','max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'agama' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],   
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'nim' => $input['nim'],
            'alamat' => $input['alamat'],
            'jenis_kelamin' => $input['jenis_kelamin'],
            'agama' => $input['agama'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'tempat_lahir' => $input['tempat_lahir'],    
            'email' => $input['email'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
