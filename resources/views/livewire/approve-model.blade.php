<div>
    <x-adminlte-button label="{{$button_label}}" data-toggle="modal" data-target="#modal-{{$modal_id}}" theme="primary" class="{{$button_class}}"/>
    <x-adminlte-modal id="modal-{{$modal_id}}" title="Confirm Approve" size="lg" theme="primary"
    icon="fas fa-trash" v-centered>
        <div class="d-flex justify-content-center align-items-center flex-column ">
            <div>
                <i class="fas fa-trash text-primary fa-6x py-3"></i>
            </div>
            @isset($delete_message) 
                {{$delete_message}}
            @else
                <p>This item "{{$item_name ?? ''}}" and all related records would be approve</p>
            @endisset
        </div>
        <x-slot name="footerSlot">
            <x-adminlte-button label="Close" data-dismiss="modal" theme="primary" class="mr-auto"/>
            <form action="{{$action}}" method="post">
                @csrf
                @method('delete')
                <x-adminlte-button :label='"Continue With $button_label"' type="submit" theme="primary"/>
            </form>
        </x-slot>
    </x-adminlte-modal>
</div>