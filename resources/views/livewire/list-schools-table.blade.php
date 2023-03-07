<div class="card">
    <div class='card-header row'>

        <div class='col-6'>
            @livewire('school-set')
        </div>

        <div class='col-2'>
            <form action={{ route("schools.create") }}>
                <x-adminlte-button type="submit" label="Create New College" theme="primary" />
            </form>
        </div>

    </div>
    <div class="my-3 card-body">
        <!-- :heads="['S/N', 'Name','Contact no','Code' , 'address', 'Edit', 'View' ,'Lock' , 'Delete']" class='text-capitalize' bordered striped head-theme="dark" beautify> -->
        <x-adminlte-datatable id="school-list-table" :heads="['S/N', 'Colllege Code','College Name','State' , 'District','Tehsil', 'Owner Name', 'Verification','Edit', 'View' ,'Lock' , 'Delete']" class='text-capitalize' bordered striped head-theme="dark" beautify>
            @foreach($schools as $school)
            <tr>
                <td>{{$loop->iteration}}</td>
                <!--<td>{{ $school->name}}</td>
                    <td>{{ $school->phone}}</td>
                    <td>{{$school->code}}</td>
                    <td>{{$school->address}}</td> -->
                <td>{{$school->code}}</td>
                <td>{{$school->name}}</td>
                <td>{{$school->state}}</td>
                <td>{{$school->district}}</td>
                <td>{{$school->tehsil}}</td>
                <td>{{$school->owner_name}}</td>
                <td>
                    {{$school->status}}
                    <!-- <x-adminlte-select onchange="updateSchoolStatus('{{$school->id}}','{{$school->is_lock}},{{$school->status}}')" name="{{$school->status}}">
                        @php($mVeris = ['--Select--','PENDING','APPROVED' , 'REJECTED'])
                        @foreach ($mVeris as $ver)
                        <option value="{{$ver}}">{{ $ver }}</option>
                        @endforeach
                    </x-adminlte-select> -->
                </td>
                <td>
                    <button class="btn btn-primary" onclick="actionHandle('/dashboard/schools/{{$school->id}}/edit')">Edit</i></button>
                </td>
                <td>
                    <button class="btn btn-primary" onclick="actionHandle('/dashboard/schools/{{$school->id}}')" data-url="schools.edit" data-id="{{$school->id}}">View</button>
                </td>

                <td>
                    <button id="{{$school->id}}" onclick="lockSchool('{{$school->id}}','{{$school->is_lock}}')" class="{{$school->is_lock ==1? 'btn btn-secondary': 'btn btn-primary' }}">Lock</button>
                </td>
                <td>
                    @livewire('delete-modal', ['modal_id' => $school->id ,"action" => route('schools.destroy', $school->id), 'item_name' => $school->name])
                </td>
            </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
<script>
</script>