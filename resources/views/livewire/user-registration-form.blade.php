<div class="card">
    @isset($roles)
        <div class="card-body">
        <div class="row">
            <h5 id="message" style="color:red; float: right;"></h5>
        </div>
            <div class="row">
                <x-adminlte-input maxlength='11' id="code" onkeyup="getSchool(this)" name="school_code"
                    label="School Code *" placeholder="School Code" fgroup-class="col-md-2" enable-old-support />
                <x-adminlte-input readonly id="school_name" name="school_nae" label="School Name" placeholder="School Code"
                    fgroup-class="col-md-10" enable-old-support />
            </div>
            {{-- <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" style="margin-top: -71px;"> --}}

            <div class="row" id="student-form-div">
                {{-- for Student register --}}
                {{-- @livewire('create-user-fields') --}}
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <x-adminlte-input hidden maxlength='11' id="code-inp" name="school_code" placeholder="School Code"
                        enable-old-support />
                    <x-adminlte-input hidden readonly id="school_name-inp" name="school_name" placeholder="School Code"
                        enable-old-support />
                    <x-adminlte-input class="d-none" id="school_id" name="school_id" fgroup-class="col-md-0" />
                    <x-adminlte-select name="role" enable-old-support class="text-capitalize d-none">
                        @foreach ($roles as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </x-adminlte-select>
                    <x-adminlte-select name="school" fgroup-class="d-none" enable-old-support class="text-capitalize">
                        @foreach ($schools as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }} - {{ $item['address'] }}</option>
                        @endforeach
                    </x-adminlte-select>

                    @livewire('create-user-fields', ['role' => 'Student'])
                    @csrf
                    <div class='col-12 my-2'>
                        <x-adminlte-button label="Register" theme="primary" icon="fas fa-key" type="submit" class="col-md-3"/>
                    </div>
                </form>
            </div>
            <div class="row d-none" id="staff-form-div">
                {{-- for staff register --}}
                {{-- @livewire('create-user-fields-staff') --}}
                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    <x-adminlte-input hidden maxlength='11' id="code-inp" name="school_code" placeholder="School Code"
                    enable-old-support />
                <x-adminlte-input hidden readonly id="school_name-inp" name="school_name" placeholder="School Code"
                    enable-old-support />
                <x-adminlte-input class="d-none" id="school_id" name="school_id" fgroup-class="col-md-0" />
                {{-- <x-adminlte-select name="role" enable-old-support class="text-capitalize d-none">
                    @foreach ($roles as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </x-adminlte-select> --}}
                <x-adminlte-select name="school" fgroup-class="d-none" enable-old-support class="text-capitalize">
                    @foreach ($schools as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }} - {{ $item['address'] }}</option>
                    @endforeach
                </x-adminlte-select>
                <x-adminlte-input hidden  name="role" value="{{isset($roles[0])?$roles[0]['id']:1}}"
                    enable-old-support />
                    <x-adminlte-input hidden  name="type" value="Student"
                    enable-old-support />
                    @livewire('create-user-fields-staff', ['role' => 'Student'])
                    @csrf
                    <div class='col-12 my-2'>
                        <x-adminlte-button label="Register" theme="primary" icon="fas fa-key" type="submit" class="col-md-3"/>
                    </div>
                </form>

            </div>
            <div class='col-12 my-2'>
                {{-- <x-adminlte-button label="Register" theme="primary" icon="fas fa-key" type="submit" class="col-md-3" /> --}}
            </div>
            {{-- </form> --}}
        </div>
    @else
        Couldn't create user, Roles not found.
    @endisset
    <hr>


</div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    jQuery(document).ready(function() {
        checkClassUser();
    });
    function checkClassUser() {
        let staffElmss = document.getElementById("select_class"); // for form
            staffElmss.classList.add("d-none");
        document.getElementById("select_class").style.display = "none";
        document.getElementById("select_section").style.display = "none";
    }

    function getClassSections() {
        $.ajax({
            type: 'GET',
            url: '/get_class_sections?class_id=' + $("#select_class").val(),
            data: '_token = <?php echo csrf_token(); ?>',
            success: function(data) {
                var select = document.getElementById("select_section");
                for (var i = 0, n = data.length; i < n; i++) {
                    var option = document.createElement("option");
                    option.text = data[i].name;
                    option.value = data[i].id;
                    select.appendChild(option);
                }
            }
        });
    }

    function getSchool() {
        var w = $("#code").val();
        $("#code-inp").val(w);
        if(w.length < 10){
            document.getElementById("message").innerHTML = "";
        }
        // school_name
        var apiCall = false;
        if (w.length == 10) {
            let studentElm = document.getElementById("student-form-div"); // for form
            studentElm.classList.add("d-block");
            let staffElm = document.getElementById("staff-form-div"); // for form
            staffElm.classList.add("d-none");
            //document.getElementById("select_class").style.visibility="visible";
            // document.getElementById("select_section").style.visibility="visible";

            let staffElmss = document.getElementById("select_class"); // for form
            staffElmss.classList.add("d-block");
            document.getElementById("select_class").style.display = "block";
            document.getElementById("select_section").style.display = "block";
            apiCall = true;
        } else if (w.length == 11) {
            apiCall = true;
            let studentElm = document.getElementById("student-form-div"); // for form
            studentElm.classList.add("d-none");
            let staffElm = document.getElementById("staff-form-div"); // for form
            staffElm.classList.add("d-block");
            let staffElmss = document.getElementById("select_class"); // for form
            staffElmss.classList.add("d-none");
            if (w[w.length - 1] == 'S') {
                //  document.getElementById("select_class").style.visibility="hidden";
                // document.getElementById("select_section").style.visibility="hidden";
                w= w.slice(0, -1);
                document.getElementById("select_class").style.display = "none";
                document.getElementById("select_section").style.display = "none";

            }
        }
        if (apiCall) {
            $.ajax({
                type: 'GET',
                url: '/get_school_name?q=' + w,
                data: '_token = <?php echo csrf_token(); ?>',
                success: function(data) {
                    if (data && data.status == false) {
                        document.getElementById("message").innerHTML = data.message;
                    } else {
                        document.getElementById("message").innerHTML = "";
                    $("#school_name").val("");
                    $("#school_id").val("");
                    $("#school_name").val(data.name);
                    $("#school_name-inp").val(data.name);
                    $("#school_id").val(data.id);

                    var select = document.getElementById("select_class");
                    for (var i = 0, n = data.classes.length; i < n; i++) {
                        var option = document.createElement("option");
                        option.text = data.classes[i].name;
                        option.value = data.classes[i].id;
                        select.appendChild(option);
                    }
                    getClassSections();
                }}
            });
        }
    }
</script>
