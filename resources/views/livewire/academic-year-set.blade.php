@can('set academic year')
<div class="card">
    <div class="my-2 card-body">
        <form action="{{route('academic-years.set-academic-year')}}" method="POST" class="d-flex flex-column">
            @livewire('display-validation-error')
            <x-adminlte-select name="academic_year_id" onchange="this.form.submit()" label="Set current academic-year">
                @foreach ($academicYears as $academicYear)
                    <option value="{{ $academicYear->id }}" {{$academicYear->id == auth()->user()->school->academic_year_id ? 'selected' : ''}}> {{ $academicYear->name()}}</option>
                @endforeach
            </x-adminlte-select>
            @csrf
            {{-- <x-adminlte-button label="Set academic-year" theme="primary" icon="fas fa-key" class="col-lg-3 align-self-center" type="submit"/>--}}
        </form>
    </div>
</div>
@endif

