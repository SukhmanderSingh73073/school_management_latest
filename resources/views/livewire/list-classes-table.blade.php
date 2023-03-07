<div class="card">
<div class='card-header row'>

<div class='col-6'>
        @livewire('school-set')
    </div>

    <div class='col-2'>
        <form action={{ route("classes.create") }}>
            <x-adminlte-button type="submit" label="Create New Class" theme="primary"  />
        </form>
    </div>
   
</div>
    <div class="card-body">
        <x-adminlte-datatable id="class-list-table" :heads="['S/N', 'Name', 'Group', 'Action', '']" Class='text-capitalize' bordered striped head-theme="dark" beautify>
            @foreach($myClasses as $myClass)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $myClass->name}}</td>
                    <td>{{$myClass->classGroup->name}}</td>
                    <td>@livewire('dropdown-links', [
                        'links' => [
                        ['href' => route("classes.edit", $myClass->id), 'text' => 'edit', 'icon' => 'fas fa-cog'],
                        ['href' => route("classes.show", $myClass->id), 'text' => 'View', 'icon' => 'fas fa-eye'],
                        ],
                    ],)</td>
                    <td>
                        @livewire('delete-modal', ['modal_id' => $myClass->id ,"action" => route('classes.destroy', $myClass->id), 'item_name' => $myClass->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    
    </div>
</div>
<style>
    table.dataTable tbody th, table.dataTable tbody td {
        padding: 1px 1px; 
        height: 5px;
      
}
</style>