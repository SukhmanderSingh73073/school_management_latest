<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit {{$school->name}}</h4>
    </div>
    <div class="card-body">
        <form action="{{route('schools.update', $school->id )}}" method="POST">
            @method('PUT')
            @livewire('display-validation-error')
            <p class="text-secondary">
                {{__('All fields marked * are required')}}
            </p>
            <x-adminlte-input name="name" placeholder="Enter name of school" label="School Name *" value="{{$school->name}}" enable-old-support fgroup-class="col-md-6" />
            @if(Auth::user()->email =='super@admin.com')
            <x-adminlte-input name="code" placeholder="Enter school code" label="School Code" value="{{$school->code}}" enable-old-support fgroup-class="col-md-6" />
            @endif

            <x-adminlte-textarea name="address" placeholder="Enter school branch address" label="School Address *" enable-old-support fgroup-class="col-md-6">
                {{$school->address}}
            </x-adminlte-textarea>
            <x-adminlte-input name="initials" placeholder="Enter school initials" label="School Initials" value="{{$school->initials}}" enable-old-support fgroup-class="col-md-6" />
            <x-adminlte-input name="phone" type="tel" placeholder="Enter school phone number" label="School Phone Number" value="{{ $school->phone}}" enable-old-support fgroup-class="col-md-6" />
            <x-adminlte-input name="email" type="email" placeholder="Enter school email" label="School Email" value="{{ $school->email}}" enable-old-support fgroup-class="col-md-6" />
            <x-adminlte-input name="owner_name" placeholder="Enter school Owner Name" label="School Owner Name" value="{{ $school->owner_name}}" enable-old-support fgroup-class="col-md-6 my-3" />
            <x-adminlte-input name="state" placeholder="Enter school state" label="School State" value="{{ $school->state}}" enable-old-support fgroup-class="col-md-6 my-3" />
            <x-adminlte-input name="district" placeholder="Enter school district" label="School District" value="{{ $school->district}}" enable-old-support fgroup-class="col-md-6 my-3" />
            <x-adminlte-input name="tehsil" placeholder="Enter school tehsil" label="School Tehsil" value="{{ $school->tehsil}}" enable-old-support fgroup-class="col-md-6 my-3" />
            <x-adminlte-select name="status" placeholder="Enter school Status" label="School Status" value="{{ $school->status}}" enable-old-support fgroup-class="col-md-6 my-3">
                @php($mVeris = ['PENDING','APPROVED' , 'REJECTED'])
                @foreach ($mVeris as $item)
                <option value="{{$item}}" {{ $item == $school->status ? 'selected' : '' }}>{{$item}}</option>
                @endforeach
u            </x-adminlte-select>
            @csrf
            @if($school->is_lock==0)
            <x-adminlte-button label="Submit" theme="primary" icon="fas fa-paper-plane" type="submit" class="col-md-3" />
            @else
            <h6 style="color:red !important;">School is Lock.Update School plz Un-Lock School</h6>
            @endif
        </form>
    </div>
</div>