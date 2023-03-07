<div class="card">
<div class='card-header row'>

<div class='col-6'>
        @livewire('academic-year-set')
    </div>
    <div class='col-2'>
        <form action={{ route("academic-years.create") }}>
            <x-adminlte-button type="submit" label="Create Academic-years" theme="primary"  />
            <x-adminlte-input fgroup-class="col-md-0" type="hidden" name="type_data" value="1" />

        </form>
    </div>
    
</div>

    <div class="card-body">
        <x-adminlte-datatable id="school-list-table" :heads="['S/N','duration', 'action', '', ]" class='text-capitalize' bordered striped head-theme="dark" beautify>
            @foreach($academicYears as $academicYear)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $academicYear->name()}}</td>
                    <td>
                        @livewire('dropdown-links', [
                            'links' => [
                                ['href' => route("academic-years.edit", $academicYear->id), 'text' => 'edit', 'icon' => 'fas fa-cog'],
                                ['href' => route("academic-years.show", $academicYear->id), 'text' => 'View', 'icon' => 'fas fa-eye'],
                            ],
                        ],)
                    </td>
                    <td>
                        @livewire('delete-modal', ['modal_id' => $academicYear->id ,"action" => route('academic-years.destroy', $academicYear->id), 'item_name' => $academicYear->start - $academicYear->stop])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>