@extends('adminlte::page')

@section('title', __('Manage Schools'))

@section('content_header')
<h4 class="">
    {{ __('Manage Schools') }}
</h4>


@endsection

@section('content')

@livewire('list-schools-table')

@livewire('display-status')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    function actionHandle(url) {
        window.open(window.location.origin + url, "_self")
    }

    function lockSchool(school_id, is_lock) {
        if (is_lock == 0) {
            let change_class = document.getElementById(school_id);
            change_class.classList.add("btn-secondary");

            let obj = {
                id: school_id,
                is_lock: is_lock,
            };
            var saveData = $.ajax({
                type: 'POST',
                url: "/dashboard/schools/lockSchool",
                data: obj,
                dataType: "text",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(resultData) {
                }
            });
        }
    }
    function updateSchoolStatus(school_id, is_lock,status) {
        if (is_lock == 0) {

            let obj = {
                id: school_id,
                is_lock: is_lock,
                status: status,
            };
            var saveData = $.ajax({
                type: 'POST',
                url: "/dashboard/schools/updateSchoolStatus",
                data: obj,
                dataType: "text",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(resultData) {
                }
            });
        }
    }
</script>
@endsection