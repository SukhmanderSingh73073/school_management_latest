<div class="row">

<x-adminlte-select name="nationality" label="Nationality *"
 fgroup-class="col-md-6"  wire:model="nationality"
  enable-old-support>
@php ($nationalities = ["Indian"]);   
@foreach ($nationalities as $item)
        <option value="{{$item}}">{{$item}}</option>
    @endforeach
</x-adminlte-select>
<x-adminlte-select name="state" label="State *" fgroup-class="col-md-6" enable-old-support wire:init="loadInitialStates" wire:model="state">
@php ($states = ["Uttar Pradesh","Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh","Chhattisgarh","Dadra and Nagar Haveli and Daman and Diu","Delhi","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Ladakh","Lakshadweep","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Puducherry","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttarakhand","West Bengal"]);
@if (isset($states))
        @foreach ($states as $item)
            <option value="{{$item}}"  wire:key="{{ $item }}">{{$item}}</option>
        @endforeach
    @else 
        <option value="" disabled>Select a country first</option>
    @endif
</x-adminlte-select>
</div>
