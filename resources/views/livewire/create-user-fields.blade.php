<div class="row">
    @livewire('display-validation-error')
    <p class="text-secondary col-12">
        {{__('All fields marked * are required')}}
    </p>
    <div class="col-12">
        <img id="profile-picture" src="{{asset('application-images/user-profile-image.png')}}" alt="Profile Picture" class="rounded-circle profile-image justify-center mx-auto d-block" height="200px" width="200px" >
        <x-adminlte-input-file name="profile_photo" placeholder="Select profile photo" accept="image/*" fgroup-class="col-md-4 mx-auto my-4"  id="profile-image-input">
        </x-adminlte-input-file>
    </div>


    <x-adminlte-input  name="first_name" label="Name *" placeholder="{{$role}}'s Name" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-select name="gender" label="Gender *" fgroup-class="col-md-3" enable-old-support>
        @php ($genders = ['Male', 'Female'])
        @foreach ($genders as $gender)
            <option value="{{$gender}}" >{{$gender}}</option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-input name="fname" label="Father name *" placeholder="{{$role}}'s Father name" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-select
     name="f_occupation"
     label="Father Occupation *"
      fgroup-class="col-md-3"
       enable-old-support>
       <option value="">--Select--</option>
        @php ($occupations = ['FARMER', 'BUISNESSMAN','GOVERNMENT SERVANT' ,'LABOUR'])
        @foreach ($occupations as $occupation)
            <option value="{{$occupation}}" >{{$occupation}}</option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-input name="mname" label="Mother name *" placeholder="{{$role}}'s Mother name" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-select name="m_occupation" label="Mother Occupation *" fgroup-class="col-md-3" enable-old-support>
    <option value="">--Select--</option>
    @php ($occupations = ['FARMER', 'BUISNESSMAN','GOVERNMENT SERVANT' ,'LABOUR','HOUSE WOMAN'])
        @foreach ($occupations as $occupation)
            <option value="{{$occupation}}" >{{$occupation}}</option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-input-date name="birthday" :config="['format' => 'YYYY/MM/DD']" placeholder="Choose {{$role}}'s Date of Birth..." label="Date of Birth *"  fgroup-class="col-md-3" value="{{old('birthday')}}" autocomplete="off"/>
    <x-adminlte-input name="phone" label="Phone number" placeholder="{{$role}}'s phone number" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-input name="address" placeholder="Vill/Mohalla" label="Address *" enable-old-support fgroup-class="col-md-3"/>
    <div class="col-md-6">
        @livewire('nationality-and-state-input-fields', ['nationality' => old('nationality'), 'state' => old('state')])
    </div>
    <x-adminlte-input name="city" label="District *" placeholder="{{$role}}'s city" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-input name="tehsil" label="Tehsil *" placeholder="{{$role}}'s Tehsil" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-input  class="d-none" value="test" name="locality"  placeholder="{{$role}}'s Locality" fgroup-class="col-md-0" enable-old-support/>
    <x-adminlte-input name="aadhaar_number" placeholder="{{$role}}'s Aadhaar Number" fgroup-class="col-md-12 no-resize" label="Aadhaar Number *" enable-old-support fgroup-class="col-md-3"/>
    <x-adminlte-select name="religion" label="Religion *" fgroup-class="col-md-3" enable-old-support>
        @php ($religions = ['Hinduism','Christianity', 'Islam',  'Buddhism','Sikhsm', 'Other'])
        @foreach ($religions as $religion)
            <option value="{{$religion}}"  >{{$religion}}</option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-select name="caste" label="Caste *" fgroup-class="col-md-3" enable-old-support>
        @php ($castes = ['GENERAL', 'OBC', 'SC','ST'])
        @foreach ($castes as $caste)
            <option value="{{$caste}}"  >{{$caste}}</option>
        @endforeach
    </x-adminlte-select>
    <x-adminlte-input name="sub_caste" label="Sub-Caste *" placeholder="{{$role}}'s Sub-Caste" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-input name="email" type="email" label="Email address *" placeholder="Enter {{$role}}'s email address" fgroup-class="col-md-3" enable-old-support/>
    <x-adminlte-input name="password" label=" Password *" placeholder="input a password" fgroup-class="col-md-3" type="password"/>
    <x-adminlte-input name="password_confirmation" label="Confirm password *" placeholder="input password again" fgroup-class="col-md-3" type="password"/>

    <x-adminlte-input class="d-none" name="last_name"  placeholder="{{$role}}'s last name" fgroup-class="col-md-0" enable-old-support/>
    <x-adminlte-input class="d-none" name="other_names"  value="test" placeholder="{{$role}}'s other names " fgroup-class="col-md-0" enable-old-support/>
     <x-adminlte-select class="d-none" name="blood_group"  fgroup-class="col-md-0" enable-old-support>
        @php ($bloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'Ab-', 'O+', 'O-'])
        @foreach ($bloodGroups as $bloodGroup)
            <option value="{{$bloodGroup}}" >{{$bloodGroup}}</option>
        @endforeach
    </x-adminlte-select>

    <x-adminlte-input  name="previous_school" label="Previos School *" placeholder="Previos School"  enable-old-support autocomplete="off" fgroup-class="col-md-3"/>

    <x-adminlte-input  name="bank_name" label="Bank Name *" placeholder="Bank Name"  enable-old-support autocomplete="off" fgroup-class="col-md-3"/>
    <x-adminlte-input  name="ifsc" label="IFSC Code*" placeholder="IFSC Code"  enable-old-support autocomplete="off" fgroup-class="col-md-3"/>
    <x-adminlte-input  name="holder_name" label="Account Holder Name *" placeholder="Account Holder Name"  enable-old-support autocomplete="off" fgroup-class="col-md-3"/>
    <x-adminlte-input  name="acc_no" label="Account Number *" placeholder="Account Number"  enable-old-support autocomplete="off" fgroup-class="col-md-3"/>

    <x-adminlte-select  onchange="getClassSections(this)" id="select_class" label="Select Class *" fgroup-class="col-md-3" name="casss_id" enable-old-support class="text-capitalize">
    </x-adminlte-select>
    <x-adminlte-select   label="Select Section *" id="select_section" fgroup-class="col-md-3" name="section_id" enable-old-support class="text-capitalize">
    </x-adminlte-select>
    @section('plugins.BsCustomFileInput', true)
    <!-- <x-adminlte-select name="sub_caste" label="Sub-Caste *" fgroup-class="col-md-3" enable-old-support>
        @php ($castes = ['ABC', 'DEF', 'GHI'])
        @foreach ($castes as $caste)
            <option value="{{$caste}}"  >{{$caste}}</option>
        @endforeach
    </x-adminlte-select> -->

    @section('plugins.TempusDominusBs4', true)
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            get_state_district();
            $("#state").change(function() {
                // get_state_district();
            });
        });

        function get_state_district() {
            $.ajax({
                type: 'GET',
                url: '/get_state_district?state=' + $("#state").val(),
                data: '_token = <?php echo csrf_token(); ?>',
                success: function(data) {
                    var select = document.getElementById("select_city");
                    for (var i = 0, n = data.length; i < n; i++) {
                        var option = document.createElement("option");
                        option.text = data[i].name;
                        option.value = data[i].id;
                        select.appendChild(option);
                    }
                }
            });
        }
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
            let dt=myArray[0]+"/"+myArray[1]+"/"+myArray[2];
            let inp=document.getElementById('admission_date');
            if(inp){
                inp.value=dt
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
