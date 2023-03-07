<?php

use App\Models\ClassGroup;

function dataFormate($tempData)
{

    try {
        $data = array();
        foreach ($tempData as $key => $value) {
            $data[$value['0']] = $value['1'];
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
}

function saveDataIntoDb($tempData, $isRequestFile = true)
{
    // try {
    $mapArr = [
        "first_name",
        "last_name",
        "other_names",
        "email",
        "fname",
        "f_occupation",
        "mname",
        "m_occupation",
        "birthday",
        "gender",
        "blood_group",
        "phone",
        "aadhaar_number",
        "address",
        "previous_school",
        "nationality",
        "state",
        "city",
        "tehsil",
        "locality",
        "religion",
        "caste",
        "sub_caste",
        "my_class_id",
        "section_id",
        "sr_no",
        "roll_no",
        "admission_number",
        "admission_date",
        "role_type",
        "password",
        "_token",
    ];
    $saveData = array();
    $data = array();
    $Headerdata = $tempData[0];
    if ($isRequestFile) {
        foreach ($tempData[1] as $key => $value) {
            //dd($$value) ;

            if ($key) {
                $sn = $key - 1;
                $saveData[$mapArr[$sn]] = $value;
            }
        }
        $saveData["password_confirmation"] = $saveData["password"];
    } else {
        foreach ($tempData as $key => $value) {
            $data[$value['Field']] = $value['Value'];
        }
    }
    // $pass = $data['firstName'] . strval($data['phoneNumber']);
    // $saveData['first_name'] = $data['firstName'];
    // $saveData['last_name'] = $data['lastName'];
    // $saveData['other_names'] = $data['middleName'];
    // $saveData['email'] = $data['email'];
    // $saveData['password'] = isset($data['password']) ? $data['password'] : $pass;
    // $saveData['password_confirmation'] = isset($data['password']) ? $data['password'] : $pass;
    // $saveData['fname'] = $data['fatherName'];
    // $saveData['f_occupation'] = $data['fatherOccupation'];
    // $saveData['mname'] = $data['motherName'];
    // $saveData['m_occupation'] = $data['motherOccupation'];
    // $saveData['birthday'] = $data['dob'];
    // $saveData['gender'] = $data['gender'];
    // $saveData['blood_group'] = $data['bloodGroup'];
    // $saveData['phone'] = $data['phoneNumber'];
    // $saveData['aadhaar_number'] = $data['adharNumber'];
    // $saveData['address'] = $data['address'];
    // $saveData['previous_school'] = $data['previousSchool'];
    // $saveData['nationality'] = $data['nationality'];
    // $saveData['state'] = $data['state'];
    // $saveData['city'] = $data['city'];
    // $saveData['tehsil'] = $data['tehsil'];
    // $saveData['locality'] = $data['locality'];
    // $saveData['religion'] = $data['religion'];
    // $saveData['caste'] = $data['cast'];
    // $saveData['sub_caste'] = $data['subCast'];
    // $saveData['my_class_id'] = $data['className'];
    // $saveData['section_id'] = $data['section'];
    // $saveData['sr_no'] = $data['srNo'];
    // $saveData['roll_no'] = $data['rollNo'];
    // $saveData['admission_number'] = $data['admissionNumber'];
    // $saveData['admission_date'] = $data['admissionDate'];
    // $saveData['_token'] = $data['_token'];
    // $saveData["role_type"] = $data['roleType'];
    return $saveData;
    // } catch (\Throwable $th) {
    //     //throw $th;
    // }

}

/**
 * Get Classes by Auth user School id
 *
 */
function getClasses()
{
    $temp=[];
    $myClasses= ClassGroup::where("school_id",auth()->user()->school_id)->get();
    foreach ($myClasses as $key => $myClass) {
        $obj=array(
            "id"=>$myClass->id,
            "name"=>$myClass->name,
        );
        array_push($temp,$obj);
    }
    return $temp;
    // dd($temp);
}

function csvToArray($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}

function uploadFile(Request $request)
{


    $file = $request->file('file');

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
            }
            $i++;
        }
        fclose($file);
        // Insert to MySQL database
        return $importData_arr;
        Session::flash('message', 'Import Successful.');
    } else {
        Session::flash('message', 'Invalid File Extension.');
    }
}
