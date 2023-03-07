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
                            
                            @php
                                $today = today();
                                $dates = [$today];
                                
                               
                                
                            @endphp
                            {{$today}}
                            @foreach ($dates as $date)
                                <th>
                                    {{ $date }}
                                </th>

                            @endforeach

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
                                        $i =0;
                                            $date_picker = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                            
                                            $check_attd = \App\Models\Attendances::query()
                                                ->where('user_id', $user->id)
                                                ->where('attendance_date', $date_picker)
                                                ->first();
                                            
                                            $check_leave = \App\Models\Leaves::query()
                                                ->where('user_id', $user->id)
                                                ->where('leave_date', $date_picker)
                                                ->first();
                                            
                                        @endphp
                                        <td>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="attd[{{ $date_picker }}][{{ $user->id }}]" type="checkbox"
                                                    @if (isset($check_attd))  checked @endif id="inlineCheckbox1" value="1">

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="leave[{{ $date_picker }}][{{ $user->id }}]]" type="checkbox"
                                                    @if (isset($check_leave))  checked @endif id="inlineCheckbox2" value="1">

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


