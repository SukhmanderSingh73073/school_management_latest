<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create School</h3>
    </div>
    <div class="card-body">
        <form action="{{route('schools.store')}}" method="POST">
            @livewire('display-validation-error')
            <p class="text-secondary">
                {{__('All fields marked * are required')}}
            </p>
            <div>
                <x-adminlte-input name="name" placeholder="Enter name of school" label="School Name *" enable-old-support fgroup-class="col-md-6 mb-3" />
                <x-adminlte-textarea name="address" placeholder="Enter school branch address" label="School Address *" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-input name="initials" placeholder="Enter school initials" label="School initials" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-input name="phone" placeholder="Enter school contact number" label="School contact number" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-input name="email" placeholder="Enter school email" label="School Email Address" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-input name="owner_name" placeholder="Enter school Owner Name" label="School Owner Name" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-input name="state" placeholder="Enter school state" label="School State" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-input name="district" placeholder="Enter school district" label="School District" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-input name="tehsil" placeholder="Enter school tehsil" label="School Tehsil" enable-old-support fgroup-class="col-md-6 my-3" />
                <x-adminlte-select name="status" placeholder="Enter school Status" label="School Status" enable-old-support fgroup-class="col-md-6 my-3">
                    @php($mVeris = ['PENDING','APPROVED' , 'REJECTED'])
                    @foreach ($mVeris as $ver)
                    <option value="{{$ver}}">{{ $ver }}</option>
                    @endforeach
                </x-adminlte-select>
            </div>

            @csrf
            <x-adminlte-button label="  Create" theme="primary" icon="fas fa-key" type="submit" class="col-md-3" />
        </form>
    </div>
</div>