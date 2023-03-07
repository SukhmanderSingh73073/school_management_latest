<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Manager</h3>
    </div>
    <div class="card-body">
        <form action="{{route('managers.store')}}" method="POST" enctype="multipart/form-data">
    
            @livewire('create-user-fields', ['role' => 'manager']) 
            @csrf
            <div class='col-12 my-2'>
                <x-adminlte-button label="Create" theme="primary" icon="fas fa-key" type="submit" class="col-md-3"/>
            </div>  
        </form>
    </div>
</div>