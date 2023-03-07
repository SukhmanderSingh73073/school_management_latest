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
        <div class="card-header bg-success text-white">
            TimeTable
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm" id="printTable">
                    <thead>
                        <tr >

                            <th>user Name</th>
                            <th>user ID</th>
                            @php
                                $today = today();
                                $dates = [];
                                
                                for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
                                    $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                }
                                
                            @endphp
                            @foreach ($dates as $date)
                            <th style="">
                            
                                
                                    {{ $date }}
                            
                        </th>
                      

                            @endforeach

                        </tr>
                    </thead>

                    <tbody>





                        @foreach ($users as $user)

                            <input type="hidden" name="user_id" value="{{ $user->id }}">

                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->id }}</td>






                                @for ($i = 1; $i < $today->daysInMonth + 1; ++$i)


                                    @php
                                        
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

                                    @if ($page_type=="attendance")
                                        <div class="form-check form-check-inline ">

                                        
                                            @if (isset($check_attd))
                                             <H4>{{$check_attd->att_type}}</H4>
                                                {{-- @if ($check_attd->status==1)
                                                 <i class="fa fa-check text-success"></i>
                                                 @else
                                                 <i class="fa fa-check text-danger"></i>
                                                 @endif--}}
                                               
                                            @else
                                            <H4>--</H4>
                                            <!-- <i class="fas fa-times text-danger"></i> -->
                                            @endif
                                        </div>
                                        @else
                                        
                                        <div class="form-check form-check-inline">
                                          
                                            @if (isset($check_leave))
                                            <H4>{{$check_leave->att_type}}</H4>
                                            {{--@if ($check_leave->status==1)
                                            <i class="fa fa-check text-success"></i>
                                            @else
                                            <i class="fa fa-check text-danger"></i>
                                            @endif
                                          --}}
                                       @else
                                       <H4>--</H4>
                                       <!-- <i class="fas fa-times text-danger"></i> -->
                                       @endif
                                        

                                        </div>
                                        @endif

                                    </td>

                                @endfor
                            </tr>
                        @endforeach





                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection
