@role('super-admin|super-admin1|sub-super-admin|manager|principle|incharge|admin|classteacher|teacher')
<div  class="" >
        <div class="">

        <form class="d-flex flex-column mx-auto mb-2" action="{{route('schools.setSchool')}}" method="POST">
            <div class="row">

                <div class="col-12">

                    <x-adminlte-select name="school_id" onchange="this.form.submit()">
                        @foreach ($schools as $school)
                        <option value="{{ $school->id }}" @selected(auth()->user()->school_id == $school->id)> {{ $school->name }} - {{$school->address}}</option>
                        @endforeach
                    </x-adminlte-select>
                </div>
                <div class="col-4 col-lg-3 align-self-center mt-0">
                    <x-adminlte-button class="d-none" theme="primary" icon="fas fa-key" type="submit" />
                </div>
                @csrf
                </div>
        </form>
        {{-- @livewire('help-button', ['target_id' => 'school-set-help', 'text' => "The selected school is the school that you'll be managing and viewing"])--}}
    </div>
</div>
@endrole