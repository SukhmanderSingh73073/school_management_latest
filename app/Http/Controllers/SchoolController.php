<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolSetRequest;
use App\Http\Requests\SchoolStoreRequest;
use App\Http\Requests\SchoolUpdateRequest;
use App\Models\ClassGroup;
use App\Models\MyClass;
use App\Models\School;
use App\Models\Section;
use App\Models\User;
use App\Services\School\SchoolService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nnjeim\World\Models\City;
use Nnjeim\World\Models\State;
use Spatie\Permission\Models\Role;

class SchoolController extends Controller
{
    /**
     * @var SchoolService
     */
    public $school;

    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getClassSections(Request $request)
    {
      
     return Section::whereIn('my_class_id' , [$request->class_id])->get() ; 
      
    }
    public function getStateDistrict(Request $request)
    {
        $state= State::where('name' , [$request->state])->pluck('id')->first() ; 
     return City::where('state_id' , [$state])->get() ; 
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSchoolName(Request $request)
    {
        $school =  School::where('code' , $request->q)->first() ;
        if($school){
            $groups = ClassGroup::where('school_id' , $school->id)->pluck('id')->toArray() ;
            $classes = MyClass::whereIn('class_group_id' , $groups)->get() ;      
            $school['classes'] = $classes ;
            return $school ; 
        }else{
          $message='School Not found!';
          $status=false;
          return compact('message','status');
        }
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testing(Request $request)
    {

    $file = $request['file'] ;
    // File Details
    $filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $tempPath = $file->getRealPath();
    $fileSize = $file->getSize();
    $mimeType = $file->getMimeType();

    // Valid File Extensions
    $valid_extension = array("csv");

    // 2MB in Bytes
    $maxFileSize = 2097152;

    // Check file extension
    if (in_array(strtolower($extension), $valid_extension)) {

        // Check file size

        // File upload location
        $location = 'uploads';

        // Upload file
        $file->move($location, $filename);

        // Import CSV to Database
        $filepath = public_path($location . "/" . $filename);

        // Reading file
        $file = fopen($filepath, "r");

        $importData_arr = array();
        $i = 0;

        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            $num = count($filedata);

            // Skip first row (Remove below comment if you want to skip the first row)
            /*if($i == 0){
                $i++;
                continue;
             }*/
            for ($c = 0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata[$c];
                dd($filedata[$c]) ; 
            }
            $i++;
        }
        fclose($file);
        // Insert to MySQL database
        return $importData_arr;
        dd("Import Successful") ;
       // Session::flash('message', 'Import Successful.');
    } else {
        dd("Invalid File Extension.") ;
        // Session::flash('message', 'Invalid File Extension.');
    }
    }


    public function homes()
    {
        # code...
        return view('welcome');
    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editSchools()
    {
        return view('pages.school.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionSchools()
    {
        return view('pages.school.index');
    }

    /**
     * SchoolController constructor.
     *
     * @param SchoolService $school
     */
    public function __construct(SchoolService $school)
    {
        $this->school = $school;
        $this->authorizeResource(School::class, 'school');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('pages.school.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionSchool()
    {
        return view('pages.school.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SchoolStoreRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolStoreRequest $request)
    {
        $data = $request->except('_token');
        $this->school->createSchool($data);

        return back()->with('success', __('School created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        $data['school'] = $school;

        return view('pages.school.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $data['school'] = $school;
        return view('pages.school.edit', $data);
    }

 
/**
 * It locks the school
 * 
 * @param Request request The request object.
 */
    public function lockSchool(Request $request)
    {
        $data = $request->all();
        $this->school->lockSchool($data);
        return back()->with('success', __('School Locked succsfully'));
    }
    public function updateSchoolStatus(Request $request)
    {
        $school_info =School::where('id',(int) $$request->id)->first();
        dd( $school_info);
        if($school_info->is_lock==0){
            $school_info->is_lock=true;
            $school_info->save();
        }
        return $school_info;
        return back()->with('success', __('School Locked succsfully'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param SchoolUpdateRequest $request
     * @param School              $school
     *
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolUpdateRequest $request, School $school)
    {
        $data = $request->except('_token', '_method');
        $this->school->updateSchool($school, $data);

        return back()->with('success', __('School updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param School $school
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $this->school->deleteSchool($school);

        return back()->with('success', __('School deleted successfully'));
    }

    /**
     * Get settings for authenticated user's school.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function settings()
    {
        return redirect()->route('schools.edit', ['school' => auth()->user()->school_id]);
    }

    /**
     * Set the school.
     *
     * @param SchoolSetRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setSchool(SchoolSetRequest $request)
    {
        $this->authorize('setSchool', School::class);

        $schoolId = $request->input('school_id');
        $school = School::findOrFail($schoolId);

        $this->school->setSchool($school);

        return back()->with('success', __('School set successfully'));
    }
}
