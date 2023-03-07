<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Throwable;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     *
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name'           => ['required', 'string', 'max:511'],
            'email'          => ['required', 'string', 'email:rfc,dns', 'max:511', 'unique:users'],
            'photo'          => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'password'       => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'school_id'      => ['required', 'exists:schools,id'],
            'birthday'       => ['required', 'date', 'date_format:Y/m/d', 'before:today'],
            'address'        => ['required', 'string', 'max:500'],
            'blood_group'    => ['required', 'string', 'max:255'],
            'religion'       => ['nullable', 'string', 'max:255'],
            'nationality'    => ['required', 'string', 'max:255'],
            'state'          => ['required', 'string', 'max:255'],
            'city'           => ['required', 'string', 'max:255'],
            'gender'         => ['required', 'string', 'max:255'],
            'phone'          => ['string', 'max:10'],
            'aadhaar_number'       => ['string', 'max:12'],
            'caste'          => ['required', 'string', 'max:255'],
            'fname'          => ['required', 'string', 'max:255'],
            'mname'          => ['required', 'string', 'max:255'],
            'f_occupation'   => ['required', 'string', 'max:255'],
            'm_occupation'   => ['required', 'string', 'max:255'],
            'previous_school'=> ['required', 'string', 'max:255'],
            
            'sub_caste'      => ['required', 'string', 'max:255'],
            'tehsil'         => ['required', 'string', 'max:255'],
            'locality'       => ['required', 'string', 'max:255'],
            
            'bank_name'       => ['required', 'string', 'max:255'],
            'ifsc'            => ['required', 'string', 'max:255'],
            'holder_name'     => ['required', 'string', 'max:255'],
            'acc_no'          => ['required', 'string', 'max:255'],




        ])->validate();

        $user = User::create([
            'name'                 => $input['name'],
            'email'                => $input['email'],
            'birthday'             => $input['birthday'],
            'password'             => Hash::make($input['password']),
            'address'              => $input['address'],
            'school_id'            => $input['school_id'],
            'blood_group'          => $input['blood_group'],
            'religion'             => $input['religion'],
            'nationality'          => $input['nationality'],
            'state'                => $input['state'],
            'city'                 => $input['city'],
            'gender'               => $input['gender'],
            'phone'                => $input['phone'],
            'aadhaar_number'       => $input['aadhaar_number'],
            'caste'                => $input['caste'],
            'fname'                => $input['fname'],
            'mname'                => $input['mname'],
            'f_occupation'         => $input['f_occupation'],
            'm_occupation'         => $input['m_occupation'],
            'previous_school'      => $input['previous_school'],
            'sub_caste'            => $input['sub_caste'],
            'tehsil'               => $input['tehsil'],
            'locality'             => $input['locality'],
            'status'               =>'PENDING',
            'bank_name'             => $input['bank_name'],
            'ifsc'                  => $input['ifsc'],
            'holder_name'           => $input['holder_name'],
            'acc_no'                => $input['acc_no'],
            'role_type'                => $input['role_type'],


        ]);

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        try {
            $user->sendEmailVerificationNotification();
        } catch (Throwable $e) {
            report("Could not verification send email to $user->email. $e");

            return $user;
        }

        return $user;
    }
}
