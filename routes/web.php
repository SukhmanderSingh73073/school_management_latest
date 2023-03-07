<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!.
|
*/


Route::get('get_state_district', [App\Http\Controllers\SchoolController::class, "getStateDistrict"]);
Route::get('get_class_sections', [App\Http\Controllers\SchoolController::class, "getClassSections"]);
Route::get('get_school_name', [App\Http\Controllers\SchoolController::class, "getSchoolName"]);
Route::get('test', [App\Http\Controllers\TestController::class, "testing"]);
Route::get('/', [App\Http\Controllers\SchoolController::class, "homes"]);
Route::get('/home', [App\Http\Controllers\SchoolController::class, "homes"]);

// Route::get('/', function () {
//     return redirect()->route('dashboard');
// })->name('home');

// Route::get('/home', function () {
//     return redirect()->route('dashboard');
// });

Route::middleware(['guest'])->group(function () {
    Route::post('/register', ['App\Http\Controllers\RegistrationController', 'register'])->name('register');
    Route::get('/register', ['App\Http\Controllers\RegistrationController', 'registerView']);
});

//user must be authenticated
Route::middleware('auth:sanctum', 'verified', 'App\Http\Middleware\EnsureDefaultPasswordIsChanged', 'App\Http\Middleware\PreventGraduatedStudent')->prefix('dashboard')->namespace('App\Http\Controllers')->group(function () {

    //manage school settings
    Route::get('schools/settings', ['App\Http\Controllers\SchoolController', 'settings'])->name('schools.settings')->middleware('App\Http\Middleware\EnsureSuperAdminHasSchoolId');

    //School routes
    Route::get('schools/schools_permission', [App\Http\Controllers\SchoolController::class, "permissionSchools"])->name("schools.schools_permission");
        Route::get('schools/edit_schools', [App\Http\Controllers\SchoolController::class, "editSchools"])->name("schools.edit_schools");

    Route::resource('schools', SchoolController::class);
    
    Route::post('schools/set-school', ['App\Http\Controllers\SchoolController', 'setSchool'])->name('schools.setSchool');
    Route::post('schools/lockSchool', ['App\Http\Controllers\SchoolController', 'lockSchool']);
    Route::post('schools/updateSchoolStatus', ['App\Http\Controllers\SchoolController', 'updateSchoolStatus']);

    //super admin must have school id set
    Route::middleware(['App\Http\Middleware\EnsureSuperAdminHasSchoolId'])->group(function () {

        //dashboard route
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard')->withoutMiddleware(['App\Http\Middleware\PreventGraduatedStudent']);

        //class routes
        Route::resource('classes', MyClassController::class);

        //class groups routes
        Route::resource('class-groups', ClassGroupController::class);

        //sections routes
        Route::resource('sections', SectionController::class);

        Route::middleware(['App\Http\Middleware\EnsureAcademicYearIsSet'])->group(function () {
            Route::get('account-applications/rejected-applications', ['App\Http\Controllers\AccountApplicationController', 'rejectedApplicationsView'])->name('account-applications.rejected-applications');

            //account application routes. We need the applicant instead of the record
            Route::resource('account-applications', AccountApplicationController::class)->parameters([
                'account-applications' => 'applicant',
            ]);

            Route::get('account-applications/change-status/{applicant}', ['App\Http\Controllers\AccountApplicationController', 'changeStatusView'])->name('account-applications.change-status');

            Route::post('account-applications/change-status/{applicant}', ['App\Http\Controllers\AccountApplicationController', 'changeStatus']);

            //promotion routes
            Route::get('students/promotions', ['App\Http\Controllers\PromotionController', 'index'])->name('students.promotions');
            Route::get('students/promote', ['App\Http\Controllers\PromotionController', 'promoteView'])->name('students.promote');
            Route::post('students/promote', ['App\Http\Controllers\PromotionController', 'promote']);
            Route::get('students/promotions/{promotion}', ['App\Http\Controllers\PromotionController', 'show'])->name('students.promotions.show');
            Route::delete('students/promotions/{promotion}/reset', ['App\Http\Controllers\PromotionController', 'resetPromotion'])->name('students.promotions.reset');

            //graduation routes
            Route::get('students/graduations', ['App\Http\Controllers\GraduationController', 'index'])->name('students.graduations');
            Route::get('students/graduate', ['App\Http\Controllers\GraduationController', 'graduateView'])->name('students.graduate');
            Route::post('students/graduate', ['App\Http\Controllers\GraduationController', 'graduate']);
            Route::delete('students/graduations/{student}/reset', ['App\Http\Controllers\GraduationController', 'resetGraduation'])->name('students.graduations.reset');

            //semester routes
            Route::resource('semesters', SemesterController::class);
            Route::post('semesters/set', ['App\Http\Controllers\SemesterController', 'setSemester'])->name('semesters.set-semester');
        });

        Route::middleware(['App\Http\Middleware\EnsureSemesterIsSet'])->group(function () {
            //syllabi route
            Route::resource('syllabi', SyllabusController::class);

            //timetable route
            Route::resource('timetables', TimetableController::class);
            Route::resource('custom-timetable-items', CustomTimetableItemController::class);

            //manage timetable
            Route::get('timetables/{timetable}/manage', ['App\Http\Controllers\TimetableController', 'manage'])->name('timetables.manage');
            Route::get('timetables/{timetable}/print', ['App\Http\Controllers\TimetableController', 'print'])->name('timetables.print');

            //timetable-timeslot route
            Route::resource('timetables/{timetable}/manage/time-slots', TimetableTimeSlotController::class);
            Route::post('timetables/{timetable}/manage/time-slots/{time_slot}/record/create', ['App\Http\Controllers\TimetableTimeSlotController', 'addTimetableRecord'])->name('timetables.records.create')->scopeBindings();

            //set exam status
            Route::post('exams/{exam}/set--active-status', ['App\Http\Controllers\ExamController', 'setExamActiveStatus'])->name('exams.set-active-status');

            // set publish result status
            Route::post('exams/{exam}/set-publish-result-status', ['App\Http\Controllers\ExamController', 'setPublishResultStatus'])->name('exams.set-publish-result-status');
            //manage exam record
            Route::resource('exams/exam-records', ExamRecordController::class);

            //exam tabulation sheet
            Route::get('exams/tabulation-sheet', ['App\Http\Controllers\ExamController', 'examTabulation'])->name('exams.tabulation');

            //result tabulation sheet
            Route::get('exams/result-tabulation-sheet', ['App\Http\Controllers\ExamController', 'resultTabulation'])->name('exams.result-tabulation');

            //result checker
            Route::get('exams/result-checker', ['App\Http\Controllers\ExamController', 'resultChecker'])->name('exams.result-checker');

            //exam routes
            Route::resource('exams', ExamController::class);

            //exam slot routes
            Route::scopeBindings()->group(function () {
                Route::resource('exams/{exam}/manage/exam-slots', ExamSlotController::class);
            });

            //grade system routes
            Route::resource('grade-systems', GradeSystemController::class);
        });

        //student routes
        Route::get('students/withdraw', [App\Http\Controllers\StudentController::class, "withdraw"])->name("students.withdraw");
        Route::get('students/withdraw_user', [App\Http\Controllers\StudentController::class, "withdrawUser"])->name("students.withdraw_user");
        Route::resource('students', StudentController::class);
        Route::get('students/{student}/print', ['App\Http\Controllers\StudentController', 'printProfile'])->name('students.print-profile')->withoutMiddleware(['App\Http\Middleware\PreventGraduatedStudent']);

        //admin routes
        Route::get('admins/admin_create_profile', [App\Http\Controllers\AdminController::class, "adminCreateProfile"])->name("admins.admin_create_profile");
        Route::get('admins/admin_permission', [App\Http\Controllers\AdminController::class, "permissionAdmins"])->name("admins.admin_permission");
        Route::get('admins/edit_admin', [App\Http\Controllers\AdminController::class, "editAdmins"])->name("admins.edit_admin");
        Route::get('admins/delete_admin', [App\Http\Controllers\AdminController::class, "deleteAdmins"])->name("admins.delete_admin");
        Route::resource('admins', AdminController::class);

        //all others routes
        Route::get('routes/view_self_attendance', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.view_self_attendance");
        Route::get('routes/staff_attendance', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.staff_attendance");
        Route::get('routes/staff_attendance_register', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.staff_attendance_register");
        Route::get('routes/student_attendance_register', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.student_attendance_register");
        Route::get('routes/fees_chart', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.fees_chart");
        Route::get('routes/fees_consrssion', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.fees_consrssion");
        Route::get('routes/fees_collection', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.fees_collection");
        Route::get('routes/fees_status', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.fees_status");
        Route::get('routes/transport_root', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.transport_root");
        Route::get('routes/transport_root_fees', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.transport_root_fees");
        Route::get('routes/transport_assign_driver', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.transport_assign_driver");
        Route::get('routes/transport_student', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.transport_student");
        Route::get('routes/incoming', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.incoming");
        Route::get('routes/expences', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.expences");
        Route::get('routes/class_work', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.class_work");
        Route::get('routes/home_work', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.home_work");
        Route::get('routes/salary', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.salary");
        Route::get('routes/salary_distribute', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.salary_distribute");
        Route::get('routes/doc_college', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_college");
        Route::get('routes/doc_print', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_print");
        Route::get('routes/doc_logo', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_logo");
        Route::get('routes/doc_sign', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_sign");
        Route::get('routes/doc_id_card', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_id_card");
        Route::get('routes/doc_fees_card', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_fees_card");
        Route::get('routes/doc_scheam', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_scheam");
        Route::get('routes/doc_admit_card', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_admit_card");
        Route::get('routes/doc_number_sheet', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_number_sheet");
        Route::get('routes/doc_mark_sheet', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.doc_mark_sheet");
        Route::get('routes/exam_type', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.exam_type");
        Route::get('routes/library', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.library");
        Route::get('routes/software_plan', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.software_plan");
        Route::get('routes/payment_plan', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.payment_plan");
        Route::get('routes/staff_driver', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.staff_driver");
        Route::get('routes/transport_view_driver', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.transport_view_driver");
        Route::get('routes/fees_slips', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.fees_slips");
        Route::get('routes/fees_card', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.fees_card");
        Route::get('routes/transport_vehicle_number', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.transport_vehicle_number");
        Route::get('routes/leave', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.leave");
        Route::get('routes/own_manager', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.own_manager");
        Route::get('routes/own_principle', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.own_principle");
        Route::get('routes/own_admin', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.own_admin");
        Route::get('routes/own_incharge', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.own_incharge");
        Route::get('routes/own_class_teacher', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.own_class_teacher");
        Route::get('routes/own_teacher', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.own_teacher");
        Route::get('routes/own_student', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.own_student");
        Route::get('routes/student_attendance', [App\Http\Controllers\AllRouteController::class, "commingSoon"])->name("routes.student_attendance");




         //attendance routes
         Route::get('/self_attendance', '\App\Http\Controllers\CheckController@selfAttendance')->name('self_attendance');
         Route::get('/self_leave', '\App\Http\Controllers\CheckController@selfLeave')->name('self_leave');
         Route::get('/check', '\App\Http\Controllers\CheckController@index')->name('check');

         Route::get('/view_check_student', '\App\Http\Controllers\CheckController@viewCheckStudent')->name('view_check_student');
         Route::get('/check_staff', '\App\Http\Controllers\CheckController@checkStaff')->name('check_staff');
         Route::post('check-store','\App\Http\Controllers\CheckController@CheckStore')->name('check_store');







         Route::get('student_attendance', [App\Http\Controllers\AttendanceController::class, "studentAttendance"])->name("student_attendance");
         Route::resource('schedules', AttendanceController::class);

        //managers routes
        Route::resource('managers', ManagerController::class);
        // Route::post('managers', ManagerController::class);

        //principles routes
        Route::resource('principles', PrincipleController::class);

        //incharge routes
        Route::resource('incharges', InchargeController::class);

        //classteachers routes
        Route::resource('classteachers', ClassTeacherController::class);

        //teacher routes
        Route::resource('teachers', TeacherController::class);

        //parent routes
        Route::resource('parents', ParentController::class);
        Route::get('parents/{parent}/assign-students-to-parent', ['App\Http\Controllers\ParentController', 'assignStudentsView'])->name('parents.assign-students');
        Route::post('parents/{parent}/assign-students-to-parent', ['App\Http\Controllers\ParentController', 'assignStudent']);

        //academic year routes
        Route::resource('academic-years', AcademicYearController::class);
        Route::post('academic-years/set', ['App\Http\Controllers\AcademicYearController', 'setAcademicYear'])->name('academic-years.set-academic-year');

        //assign teachers to subject in class
        Route::get('subjects/assign-teacher', ['App\Http\Controllers\SubjectController', 'assignTeacherVIew'])->name('subjects.assign-teacher');
        Route::post('subjects/assign-teacher/{teacher}', ['App\Http\Controllers\SubjectController', 'assignTeacher'])->name('subjects.assign-teacher-to-subject');

        //subject routes
        Route::resource('subjects', SubjectController::class);

        //notice routes
        Route::resource('notices', NoticeController::class);
    });
});
