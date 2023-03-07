<div class="card">
    <div class="card-header">
        <div class='row'>
            <div class='col-12 '>
                <h3 class="card-title">Create Student account</h3>
            </div>
        </div>
    </div>
    <div class="card-body">


        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        
            <div class="" id="formSections">

                @livewire('create-user-fields', ['role' => 'Student'])
                @livewire('create-student-record-fields')
                @csrf
            </div>
            <div  id="formSections1">
                <x-adminlte-input-file name="csv" placeholder="Select profile photo" accept=".csv" fgroup-class="col-md-4 mx-auto my-4" id="csv-image-input">
                </x-adminlte-input-file>
                @csrf
            </div>
         
            <div class='col-12 my-2'>
                <x-adminlte-button label="Create" theme="primary" icon="fas fa-key" type="submit" class="col-md-3" />
            </div>
        </form>
    </div>
</div>