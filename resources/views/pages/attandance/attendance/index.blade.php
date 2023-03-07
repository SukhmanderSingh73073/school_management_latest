@extends('adminlte::page')

@section('title', __('Attendance'))


@section('content_header')

<h4 >
        {{ __('Attendance') }}
    </h4>
    
</dv>
    
@stop


@section('content')

    <div class="card">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Present</th>
                            <th>Absent</th>
                            <th>Apply Leave</th>
                            <th>Half Day Leave</th>
                            @php
                                $today = today();
                                $dates = [$today];
                            @endphp
                            
       
                           
                        </tr>
                    </thead>

                    <tbody>


                        <form action="{{ route('check_store') }}" method="post">
                           
                            <button type="submit" class="btn btn-success" style="display: flex; margin:10px">submit</button>
                            @csrf
                            @foreach ($users as $user)

                                <input type="hidden" name="user_id" value="{{ $user->id }}">

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>

                                        @php
                                            $date_picker = \Carbon\Carbon::createFromDate($today->year, $today->month, $today->day)->format('Y-m-d');
                                            
                                            $check_attd_p = \App\Models\Attendances::query()
                                                ->where('user_id', $user->id)
                                                ->where('attendance_date', $date_picker)
                                                ->where('att_type' ,"P")
                                                ->first();
                                                $check_attd_a = \App\Models\Attendances::query()
                                                ->where('user_id', $user->id)
                                                ->where('attendance_date', $date_picker)
                                                ->where('att_type' ,"A")
                                                ->first();
                                            
                                            $check_leave_ap = \App\Models\Leaves::query()
                                                ->where('user_id', $user->id)
                                                ->where('leave_date', $date_picker)
                                                ->where('att_type' ,"AP")
                                                ->first();
                                                $check_leave_hdl = \App\Models\Leaves::query()
                                                ->where('user_id', $user->id)
                                                ->where('leave_date', $date_picker)
                                                ->where('att_type' ,"HDL")
                                                ->first();
                                            
                                        @endphp
                                        <td>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="attd[{{ $date_picker }}][{{ $user->id }}][{{'P'}}]" type="checkbox"
                                                    @if (isset($check_attd_p))  checked @endif id="inlineCheckbox1" value="1">

                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="attd[{{ $date_picker }}][{{ $user->id }}]][{{'A'}}]" type="checkbox"
                                                    @if (isset($check_attd_a))  checked @endif id="inlineCheckbox2" value="1">

                                            </div>

                                            <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="leave[{{ $date_picker }}][{{ $user->id }}][{{'AL'}}]]" type="checkbox"
                                                    @if (isset($check_leave_ap))  checked @endif id="inlineCheckbox2" value="1">

                                            </div>

                                            <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="leave[{{ $date_picker }}][{{ $user->id }}][{{'HDL'}}]]" type="checkbox"
                                                    @if (isset($check_leave_hdl))  checked @endif id="inlineCheckbox2" value="1">

                                            </div>

                                        </td>

                                    
                                </tr>
                            @endforeach

                        </form>


                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection


