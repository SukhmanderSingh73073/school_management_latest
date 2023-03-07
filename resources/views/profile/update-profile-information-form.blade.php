<?php
$myClasses = getClasses();
$sections = [];
$temps = [
    'id' => 1,
    'name' => 'A',
];
array_push($sections, $temps);
$temps = [
    'id' => 2,
    'name' => 'B',
];
array_push($sections, $temps);
$temps = [
    'id' => 3,
    'name' => 'C',
];
array_push($sections, $temps);
$temps = [
    'id' => 4,
    'name' => 'D',
];
array_push($sections, $temps);
$temps = [
    'id' => 5,
    'name' => 'E',
];
array_push($sections, $temps);
$user = $this->user;
$studentRecord = $user->studentRecord;
?>
<div class="row">
    @livewire('display-validation-error')
    <p class="text-secondary col-12">
        {{ __('All fields marked * are required') }}
    </p>
    <div class="col-12">
        <img id="profile-picture" src="{{ $user->profile_photo_url ?? asset('application-images/user-profile-image.png') }}" alt="Profile Picture" class="border profile-image justify-center mx-auto d-block" height="200px" width="200px">
        <x-adminlte-input-file name="profile_photo" placeholder="Select profile photo" accept="image/*" fgroup-class="col-md-3 mx-auto my-4" id="profile-image-input">
        </x-adminlte-input-file>
    </div>
    <x-adminlte-input readonly="true" name="first_name" label="First name" placeholder=" first name" fgroup-class="col-md-3" enable-old-support value="{{ $user->name }}" />
    <x-adminlte-select readonly="true" name="gender" label="Gender *" fgroup-class="col-md-3" enable-old-support>
        @php($genders = ['Male', 'Female'])
        @foreach ($genders as $gender)
        <option value="{{ $gender }}" {{ Str::lower($gender) == str::lower($user->gender) ? 'selected' : '' }}>{{ $gender }}</option>
        @endforeach
    </x-adminlte-select>

    <x-adminlte-input readonly="true" name="fname" value="{{ $user->fname }}" label="Father name *" placeholder=" Father name" fgroup-class="col-md-3" enable-old-support />
    <x-adminlte-select readonly="true" name="f_occupation" label="Father Occupation *" fgroup-class="col-md-3" enable-old-support>
        <option value="">--Select--</option>
        @php($occupations = ['FARMER', 'BUISNESSMAN', 'GOVERNMENT SERVANT', 'LABOUR'])
        @foreach ($occupations as $occupation)
        <option value="{{ $occupation }}" {{ Str::lower($occupation) == str::lower($user->f_occupation) ? 'selected' : '' }}>{{ $occupation }}
        </option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-input readonly="true" name="mname" value="{{ $user->mname }}" label="Mother name *" placeholder=" Mother name" fgroup-class="col-md-3" enable-old-support />
    <x-adminlte-select readonly="true" name="m_occupation" label="Mother Occupation *" fgroup-class="col-md-3" enable-old-support>
        <option value="">--Select--</option>
        @php($occupations = ['FARMER', 'BUISNESSMAN', 'GOVERNMENT SERVANT', 'LABOUR', 'HOUSE WOMAN'])
        @foreach ($occupations as $occupation)
        <option value="{{ $occupation }}" {{ Str::lower($occupation) == str::lower($user->m_occupation) ? 'selected' : '' }}>{{ $occupation }}
        </option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-input-date readonly="true" name="birthday" value="{{ $user->birthday }}" :config="['format' => 'YYYY/MM/DD']" placeholder="Choose  Date of Birth..." label="Date of Birth *" fgroup-class="col-md-3" autocomplete="off" />
    <x-adminlte-input readonly="true" name="phone" value="{{ $user->phone }}" label="Phone number" placeholder=" phone number" fgroup-class="col-md-3" enable-old-support />
    <x-adminlte-input readonly="true" name="address" value="{{ $user->address }}" placeholder="Vill/Mohalla" label="Address *" enable-old-support fgroup-class="col-md-3" />
    <div class="col-md-6">
        @livewire('nationality-and-state-input-fields', ['nationality' => $user->nationality, 'state' => $user->state])
    </div>
    <x-adminlte-input readonly="true" name="city" label="District" placeholder=" District" fgroup-class="col-md-3" enable-old-support value="{{ $user->city }}" />
    <x-adminlte-input readonly="true" name="tehsil" value="{{ $user->tehsil }}" label="Tehsil *" placeholder=" Tehsil" fgroup-class="col-md-3" enable-old-support />
    <x-adminlte-input readonly="true" class="d-none" value="{{ $user->locality }}" name="locality" placeholder=" Locality" fgroup-class="col-md-0" enable-old-support />
    <x-adminlte-input readonly="true" name="aadhaar_number" value="{{ $user->aadhaar_number }}" placeholder=" Aadhaar Number" fgroup-class="col-md-12 no-resize" label="Aadhaar Number *" enable-old-support fgroup-class="col-md-3" />
    <x-adminlte-select readonly="true" name="religion" label="Religion" fgroup-class="col-md-3" enable-old-support>
        @php($religions = ['Christianity', 'Islam', 'Hinduism', 'Buddhism', 'Sikhsm', 'Other'])
        @foreach ($religions as $religion)
        <option value="{{ $religion }}" {{ Str::lower($religion) == str::lower($user->religion) ? 'selected' : '' }}>{{ $religion }}
        </option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-select readonly="true" name="caste" label="Caste *" fgroup-class="col-md-3" enable-old-support>
        @php($castes = ['GENERAL', 'OBC', 'SC', 'ST'])
        @foreach ($castes as $caste)
        <option value="{{ $caste }}" {{ Str::lower($caste) == str::lower($user->caste) ? 'selected' : '' }}>{{ $caste }}</option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-input readonly="true" value="{{ $user->sub_caste }}" name="sub_caste" label="Sub-Caste *" placeholder=" Sub-Caste" fgroup-class="col-md-3" enable-old-support />
    <x-adminlte-input readonly="true" value="{{ $user->email }}" readonly="true" name="email" type="email" label="Email address *" placeholder="Enter  email address" fgroup-class="col-md-3" enable-old-support />
    <x-adminlte-input readonly="true" name="" label=" Password *" placeholder="input a password" readonly="true" fgroup-class="col-md-3" type="password" />
    <x-adminlte-input readonly="true" value="{{ $user->password_confirmation }}" name="" readonly="true" label="Confirm password *" placeholder="input password again" fgroup-class="col-md-3" type="password" />
    <x-adminlte-input readonly="true" class="d-none" name="last_name" placeholder=" last name" fgroup-class="col-md-0" enable-old-support />
    <x-adminlte-input readonly="true" class="d-none" name="other_names" value="test" placeholder=" other names " fgroup-class="col-md-0" enable-old-support />
    <x-adminlte-select readonly="true" class="d-none" name="blood_group" fgroup-class="col-md-0" enable-old-support>
        @php($bloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'Ab-', 'O+', 'O-'])
        @foreach ($bloodGroups as $bloodGroup)
        <option value="{{ $bloodGroup }}" {{ Str::lower($bloodGroup) == str::lower($user->blood_group) ? 'selected' : '' }}>{{ $bloodGroup }}
        </option>
        @endforeach
    </x-adminlte-select>

    @role('student')
    <x-adminlte-input readonly="true" value="{{ $user->previous_school }}" name="previous_school" label="Previos School *" placeholder="Previos School" enable-old-support autocomplete="off" fgroup-class="col-md-3" />
    @endrole
    <x-adminlte-input readonly="true" value="{{ $user->bank_name }}" name="bank_name" label="Bank Name *" placeholder="Bank Name" enable-old-support autocomplete="off" fgroup-class="col-md-3" />
    <x-adminlte-input readonly="true" value="{{ $user->ifsc }}" name="ifsc" label="IFSC Code*" placeholder="IFSC Code" enable-old-support autocomplete="off" fgroup-class="col-md-3" />
    <x-adminlte-input readonly="true" value="{{ $user->holder_name }}" name="holder_name" label="Account Holder Name *" placeholder="Account Holder Name" enable-old-support autocomplete="off" fgroup-class="col-md-3" />
    <x-adminlte-input readonly="true" value="{{ $user->acc_no }}" name="acc_no" label="Account Number *" placeholder="Account Number" enable-old-support autocomplete="off" fgroup-class="col-md-3" />
    @role('student')
    <div class="row">
        <h4 class="text-bold col-12 text-center">Class information</h4>
        <x-adminlte-input readonly="true" name="sr_no" value="{{ $studentRecord->sr_no }}" label="Unique ID*" placeholder="Unique ID" fgroup-class="col-md-3" enable-old-support autocomplete="off" />
        <x-adminlte-input readonly="true" name="roll_no" value="{{ $studentRecord->roll_no }}" label="Roll number *" placeholder="Student's Roll number" fgroup-class="col-md-3" enable-old-support autocomplete="off" />

        <x-adminlte-select readonly="true" name="my_class_id" label="Choose a class *" fgroup-class="col-md-3" wire:model="myClass">
            @foreach ($myClasses as $item)
            <option value="{{ $item['id'] }}" {{ $studentRecord->my_class_id == $item['id'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
            @endforeach
        </x-adminlte-select>
        <x-adminlte-select readonly="true" name="section_id" label="Choose a section " fgroup-class="col-md-3" wire:model="section">
            @if (isset($sections))
            @foreach ($sections as $item)
            <option value="{{ $item['id'] }}" {{ $studentRecord->section_id == $item['id'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
            @endforeach
            @else
            <option value="" disabled>Select a class first</option>
            @endif
        </x-adminlte-select>
        <x-adminlte-input readonly="true" value="{{ $studentRecord->admission_date }}" name="admission_date" label="Admission number *" placeholder="Student's admission number" fgroup-class="col-md-3" enable-old-support autocomplete="off" />
        <x-adminlte-input-date readonly="true" value="{{ $studentRecord->admission_date }}" name="admission_date" id="admission_date" :config="['format' => 'YYYY/MM/DD']" placeholder="Choose student's admission date..." label="Date of admission" fgroup-class="col-md-3" autocomplete="off" />
        @csrf
    </div>
    @endrole
    @section('plugins.BsCustomFileInput', true)

    @section('plugins.TempusDominusBs4', true)
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("profile-image-input").addEventListener("change", function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                    var profilePicture = document.getElementById("profile-picture");
                    profilePicture.src = e.target.result;
                }
                reader.readAsDataURL(file);
            });
        });

        function dataGet(e) {
            if (e.name == "bulkUpload") {
                const date = new Date()
                const result = date.toLocaleDateString("en-CA", { // you can use undefined as first argument
                    year: "numeric",
                    month: "2-digit",
                    day: "2-digit",
                })
                const myArray = result.split("-");
                let dt = myArray[0] + "/" + myArray[1] + "/" + myArray[2];
                let inp = document.getElementById('admission_date');
                if (inp) {
                    inp.value = dt
                }
                let elm = document.getElementById("formSections"); // for form
                elm.classList.add("d-none");
                let elm1 = document.getElementById("formSections1");
                elm1.classList.remove("d-none");
                let btn = document.getElementById("formUpload");
                btn.classList.remove("d-none");
                e.classList.add("d-none")
            }
            if (e.name == "formUpload") {
                let elm1 = document.getElementById("formSections1");
                elm1.classList.add("d-none");
                let elm = document.getElementById("formSections");
                elm.classList.remove("d-none");
                let btn = document.getElementById("bulkUpload");
                btn.classList.remove("d-none");
                e.classList.add("d-none")
            }
        }
    </script>
</div>