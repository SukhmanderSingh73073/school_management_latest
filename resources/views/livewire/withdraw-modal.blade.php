<div>
    <x-adminlte-button label="{{$button_label}}" 
    data-toggle="modal" 
    data-target="#modal-{{$modal_id}}" 
    theme="danger" class="{{$button_class}}"/>
    <x-adminlte-modal id="modal-{{$modal_id}}" 
    title="Confirm delete" size="lg"
     theme="danger"
    icon="fa fa-user-times" v-centered>
        <div class="d-flex justify-content-center align-items-center flex-column ">
            <div>
                <i class="fas fa-trash text-danger fa-6x py-3"></i>
            </div>
            @isset($delete_message) 
                {{$delete_message}}
            @else
                <p>Are you sure want to Withdraw this Student?</p>
            @endisset
        </div>
        <x-slot name="footerSlot">
            <x-adminlte-button label="Close" 
            data-dismiss="modal" 
            theme="secondary" 
            class="mr-auto"/>
            <form action="{{$action}}" method="post">
                @csrf
                @method('delete')
                <x-adminlte-button 
                :label='"Continue With $button_label"'
                 type="submit" theme="danger"/>
            </form>
        </x-slot>
    </x-adminlte-modal>
</div>