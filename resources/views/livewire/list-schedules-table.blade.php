<div class="card">
    <div class="card-header">
        <h4 class="card-title mr-5 mt-2">schedules</h4>
        <form action={{ route("schedules.create") }}>
    <x-adminlte-button type="submit" 
    label="Create New schedule"  theme="primary" 
    icon="fas fa-key"  />
    </form>
    
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="schedule-list-table" 
        :heads="['S/N', 'Name','Time IN','Time OUT' 
        ,'Edit']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($schedules as $schedule)
                <tr>
                <td>{{$loop->iteration}}</td>
                    <td>{{ $schedule->slug}}</td>
                    <td>{{ $schedule->time_in}}</td>
                    <td>{{ $schedule->time_out}}</td>
                     
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/schedules/{{$schedule->id}}/edit')"   >Edit</button>
                 
                    </td>
                  
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
