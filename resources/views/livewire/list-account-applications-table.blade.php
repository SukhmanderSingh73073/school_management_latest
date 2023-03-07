<div class="card">
    <div class="card-header">
        <div class='col-6'>
            @livewire('school-set')
        </div>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="applicants-list-table" :heads="[
            'S/N', 
            'Photo' ,
            'Name',
            'Father Name',
            'Type',
            'Qr Code' ,
            'Mobile' ,
            'Joining Date' ,
            'Designation' ,
            'Verification' ,
            'Verification Date' ,
            'Re-Verification Reason' ,
            'Re-Verification Date' ,
            'Edit',
            'View',
            'Save',
            'Delete',
            
            
            ]" class='text-capitalize' bordered striped head-theme="dark" beautify>

           
            @foreach($applicants as $applicant)
          
            <tr>
                <td>{{$loop->iteration}}</td>
                <td> <img id="profile-picture" src="{{ $applicant->profile_photo_url ?? asset('application-images/user-profile-image.png') }}" alt="Profile Picture" class="profile-image justify-center mx-auto d-block" height="50px" width="50px"></td>
                <td>{{$applicant->name}}</td>
                <td>{{$applicant->fname}}</td>
                <td>{{$applicant->accountApplication->applicant_type}}</td>
                

                <td></td>
                <td>{{$applicant->phone}}</td>
                <td>{{$applicant->created_at}}</td>

                <td><x-adminlte-select name="ddd">
                        @php($mRoles = ['--Select--', 'Manager','Principle','Vice-Principle','Office-Incharge','Sub-Office-Incharge','Exam-Incharge','Sport-Incharge','Class Teacher','Teacher','Student','Peon','Driver','Sub-Driver'])
                        @foreach ($mRoles as $rol)
                        <option value="{{$rol}}">{{ $rol }}</option>
                        @endforeach
                    </x-adminlte-select></td>


                <td><x-adminlte-select name="df">
                        @php($mVeris = ['--Select--','APPROVED' , 'REJECTED','SUSPENDED','EDIT','PENDING'])
                        @foreach ($mVeris as $ver)
                        <option value="{{$ver}}">{{ $ver }}</option>
                        @endforeach
                    </x-adminlte-select></td>

                    <td></td>
                    <td></td>
                    <td></td>


                    <td>
                    <button class="btn btn-primary" onclick="actionHandle('/dashboard/account-applications/{{$applicant->id}}/edit')">Edit</button>
                </td>
                <td><button class="btn btn-secondary" onclick="actionHandle('/dashboard/account-applications/{{$applicant->id}}')" data-url="account-applications.edit" data-id="{{$applicant->id}}">View</button>
                </td>
                <td><button class="btn btn-secondary" onclick="actionHandle('/dashboard/account-applications/{{$applicant->id}}')" data-url="account-applications.edit" data-id="{{$applicant->id}}">Lock</button>
                </td>
              
                <td>
                    @livewire('delete-modal', ['modal_id' => $applicant->id ,"action" => route('account-applications.destroy', $applicant->id), 'item_name' => $applicant->name])
                </td>


               
            </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

<script>




        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>