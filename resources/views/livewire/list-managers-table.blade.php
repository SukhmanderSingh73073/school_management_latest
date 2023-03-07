<div class="card">
    <div class='card-header row'>
        <div class='col-6'>
            @livewire('school-set')
        </div>
        <div class='col-2'>
            <form action={{ route('managers.create') }}>
                <x-adminlte-button type="submit" label="Create New Manager" theme="primary" />
            </form>
        </div>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="manager-list-table" :heads="[
            'S/N',
            'Name',
            'email',
            'gender',
            'address',
            'Status',
            'Edit',
            'View',
            'Lock',
            'Approved',
            'Delete',
        ]" class='text-capitalize' bordered striped
            head-theme="dark" beautify>
            @foreach ($managers as $manager)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $manager->name }}</td>
                    <td style="text-transform: none">{{ $manager->email }}</td>
                    <td>{{ $manager->gender }}</td>
                    <td>{{ $manager->address }}</td>
                    <td>{{ $manager->status }}</td>
                    <td>
                        <button class="btn btn-primary"
                            onclick="actionHandle('/dashboard/managers/{{ $manager->id }}/edit')">Edit</button>
                    </td>
                    <td><button class="btn btn-secondary"
                            onclick="actionHandle('/dashboard/managers/{{ $manager->id }}')" data-url="managers.edit"
                            data-id="{{ $manager->id }}">View</button>
                    </td>
                    <td><button class="btn btn-secondary"
                            onclick="actionHandle('/dashboard/managers/{{ $manager->id }}')" data-url="managers.edit"
                            data-id="{{ $manager->id }}">Lock</button>
                    </td>
                    <td>
                        @livewire('approve-model', ['modal_id' => $manager->id, 'action' => route('managers.destroy', $manager->id), 'item_name' => $manager->name])
                    </td>
                    <td>
                        @livewire('delete-modal', ['modal_id' => $manager->id, 'action' => route('managers.destroy', $manager->id), 'item_name' => $manager->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
<style>
    table.dataTable tbody th,
    table.dataTable tbody td {
        padding: 1px 1px;
        height: 5px;
        white-space: nowrap;
        max-width: 100%;
    }
</style>
