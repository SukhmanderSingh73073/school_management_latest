<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => env('APP_NAME'),
    'title_prefix'  => '',
    'title_postfix' => 'School Club',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only'     => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo'              => env('APP_NAME'),
    'logo_img'          => env('LOGO_PATH'),
    'logo_img_class'    => 'brand-image img-circle elevation-3',
    'logo_img_xl'       => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt'      => env('APP_NAME'),

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled'      => true,
    'usermenu_header'       => true,
    'usermenu_header_class' => 'bg-indigo',
    'usermenu_image'        => true,
    'usermenu_desc'         => true,
    'usermenu_profile_url'  => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav'        => null,
    'layout_boxed'         => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar'  => null,
    'layout_fixed_footer'  => null,
    'layout_dark_mode'     => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card'   => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body'   => '',
    'classes_auth_footer' => '',
    'classes_auth_icon'   => '',
    'classes_auth_btn'    => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body'             => '',
    'classes_brand'            => '',
    'classes_brand_text'       => '',
    'classes_content_wrapper'  => '',
    'classes_content_header'   => '',
    'classes_content'          => '',
    'classes_sidebar'          => env('ADMINLTE_CLASSES_SIDEBAR', 'sidebar-dark-primary elevation-4'),
    'classes_sidebar_nav'      => '',
    'classes_topnav'           => env('ADMINLTE_CLASSES_TOPNAV', 'navbar-white navbar-light'),
    'classes_topnav_nav'       => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini'                            => 'lg',
    'sidebar_collapse'                        => false,
    'sidebar_collapse_auto_size'              => false,
    'sidebar_collapse_remember'               => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme'                 => 'os-theme-light',
    'sidebar_scrollbar_auto_hide'             => 'l',
    'sidebar_nav_accordion'                   => true,
    'sidebar_nav_animation_speed'             => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar'                     => false,
    'right_sidebar_icon'                => 'fas fa-cogs',
    'right_sidebar_theme'               => 'dark',
    'right_sidebar_slide'               => true,
    'right_sidebar_push'                => true,
    'right_sidebar_scrollbar_theme'     => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url'      => false,
    'dashboard_url'      => 'home',
    'logout_url'         => 'logout',
    'login_url'          => 'login',
    'register_url'       => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url'        => false,

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => false,
        'img'     => [
            'path'   => env('LOGO_PATH', 'vendor/adminlte/dist/img/AdminLTELogo.png'),
            'alt'    => env('APP_NAME'),
            'effect' => 'animation__shake',
            'width'  => 60,
            'height' => 60,
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix'  => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path'  => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],
        [
            'type'         => 'darkmode-widget',
            'topnav_right' => true,
        ],

        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'type'  => 'sidebar-menu-item',
            'icon'  => 'fas fa-tachometer-alt',
            'text'  => 'Dashboard',
            'route' => 'dashboard',
        ],
        [
            'type'  => 'sidebar-menu-item',
            'icon'  => 'fas fa-user',
            'text'  => 'Profile',
            'route' => 'profile.show',
            'can'   => 'read-self-profile'
        ],
        [
            'type'  => 'sidebar-menu-item',
            'icon'  => 'fas fa-user',
            'text'  => 'Create Profile',
            'route' => 'admins.admin_create_profile',
            'can'   => 'create all-profile'
        ],
        [
            'type'  => 'sidebar-menu-item',
            'icon'  => 'fas fa-user',
            'text'  => 'Attendance',
            'route' => 'self_attendance',
            'can'   => 'read self-attendance',
            // 'submenu' => [
            //      [
            //         'type'  => 'sidebar-menu-item',
            //         'text'  => 'View Student Attendance',
            //         'route' => 'view_check_student',
            //         'can'   => 'read self-student-attendance',
            //             ],
            // ]
        ],

        ///ADMIN MANAGMENT
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Admin Managment',
            'icon'    => 'fas fa-user',
            'can'     => 'menu-admin',
            'route' => 'admins.index',
        ],

        ///Collage MANAGMENT
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Collage Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-school',
            'route' => 'schools.index',
        ],

        ///STAFF MANAGMENT
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Staff Managment',
            'icon'    => 'fas fa-user',
            'route' => 'managers.index',
            'can'   => 'menu-staff-manager'
        ],

        ///STUDENT MANAGMENT
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Student Managment',
            'icon'    => 'fas fa-user',
            'route' => 'students.index',
            'can'     => 'menu-student',
        ],

        ///CLASS MANAGMENT
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Class Managment',
            'icon'    => 'fas fa-chalkboard',
            'route' => 'classes.index',
            'can'     => 'menu-class',
        ],
        ///SUBJECT MANAGMENT

        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Subject Managment',
            'icon'    => 'fas fa-chalkboard',
            'route' => 'subjects.index',
            'can'     => 'menu-subjects',
        ],
        ///DOCUMENT MANAGMENT
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Document Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-documents',
            'route' => 'routes.doc_college',
        ],
        ///TIMETABLE MANAGMENT

        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Time Table Managment',
            'icon'    => 'fas fa-tasks',
            'route' => 'timetables.index',
            'can'     => 'menu-timetable',
        ],
        ///ATTANDANCE MANAGMENT
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Attandance Managment',
            'icon'    => 'fas fa-tasks',
            'can'     => 'menu-attendance',
            'route' => 'check_staff',
        ],

        ///FEES MANAGMENT OK
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Fees Managment',
            'icon'    => 'fas fa-tasks',
            'route' => 'routes.fees_chart',
            'can'     => 'menu-fees',
        ],
        ///TRANSPORT MANAGMENT ok
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Transport Managment',
            'icon'    => 'fas fa-tasks',
            'can'     => 'menu-transport',
            'route' => 'routes.transport_root',
        ],

        ///FINANCE MANAGMENT ok
        [
            'type'    => 'sidebar-menu-item',
            'text'    => 'Finance Managment',
            'icon'    => 'fas fa-plus',
            'route' => 'routes.expences',
            'can'     => 'menu-finance',
        ],
        ///CLASSWORK MANAGMENT ok
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Class Work Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-class-work',
            'route' => 'routes.class_work',
        ],

        ///HOME WORK MANAGMENT ok
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Home Work Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-home-work',
            'route' => 'routes.home_work',
        ],
        ///SALARY MANAGMENT ok
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Salary Managment',
            'icon' => 'fas fa-school',
            'route' => 'routes.salary',
            'can'  => 'menu-salary',
        ],

        ///EXAM MANAGMENT
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Exam Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-exam',
            'route' => 'routes.exam_type',
        ],
        ///LIBRARY MANAGMENT
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Library Managment',
            'icon' => 'fas fa-school',
            'route' => 'routes.library',
            'can'  => 'menu-library',
        ],

        ///SOFTWARE PLAN MANAGMENT ok
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Software Plan Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-software-plan',
            'route' => 'routes.software_plan',
        ],
        ///PAYMENT PLAN MANAGMENT ok
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Payment Plan Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-payment-plan',
            'route' => 'routes.payment_plan',
        ],

        ///Leave MANAGMENT ok
        [
            'type' => 'sidebar-menu-item',
            'text' => 'Leave Managment',
            'icon' => 'fas fa-school',
            'can'  => 'menu-leave',
            'route' => 'self_leave',
        ],


        // [
        //     'type'  => 'sidebar-menu-item',
        //     'icon'  => 'fas fa-user',
        //     'text'  => 'PROFILE SElf',
        //     'route' => 'profile.show',
        // ],

        // [
        //     'type'  => 'sidebar-menu-item',
        //     'icon'  => 'fas fa-user',
        //     'text'  => 'PROFILE NEW',
        //     'route' => 'create.profiles',
        // ],


        /////////////////STARTT HERE



        // ///ADMIN MANAGMENT
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Admin Managment',
        //     'icon'    => 'fas fa-user',
        //     'can'     => 'menu-admin',
        //     'route' => 'admins.index',
        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Admin',
        //             'route' => 'admins.index',
        //             'can'   => 'read admin',
        //         ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Create Admin',
        //         //     'route' => 'admins.create',
        //         //     'can'   => 'create admin',
        //         // ],

        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Edit Admin',
        //         //     'route' => 'admins.edit_admin',
        //         //     'can'   => 'edit admin',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Remove Admin',
        //         //     'route' => 'admins.delete_admin',
        //         //     'can'   => 'delete admin',
        //         // ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Permissions',
        //             'route' => 'admins.admin_permission',
        //             'can'   => 'permission admin',
        //         ],




        //     ],
        // ],

        // ///COLLAGE MANAGMENT
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Collage Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-school',
        //     'route' => 'schools.index',
        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Collage',
        //             'route' => 'schools.index',
        //             'can'   => 'read school',
        //         ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Create Collage',
        //         //     'route' => 'schools.create',
        //         //     'can'   => 'create school',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Edit Collage Profile',
        //         //     'route' => 'schools.edit_schools',
        //         //     'can'   => 'update school',
        //         // ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Permissions',
        //             'route' => 'schools.schools_permission',
        //             'can'   => 'read permission-school',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View academic years',
        //             'route' => 'academic-years.index',
        //             'can'   => 'read academic year',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Create academic year',
        //             'route' => 'academic-years.create',
        //             'can'   => 'create academic year',
        //         ],


        //     ],
        // ],
        ///STAFF MANAGMENT
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Staff Managment',
        //     'icon'    => 'fas fa-user',
        //     'route' => 'managers.index',
        //     'can'   => 'menu-staff-manager'
        // ],
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Staff Managment',
        //     'icon'    => 'fas fa-user',
        //     'can'     => 'menu-staff',
        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Own Admin',
        //             'route' => 'routes.own_admin',
        //             'can'   => 'read staff-own-admin',
        //         ],

        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Own Manager',
        //             'route' => 'routes.own_manager',
        //             'can'   => 'read staff-own-manager',
        //         ],

        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Own Principle',
        //             'route' => 'routes.own_principle',
        //             'can'   => 'read staff-own-principle',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Own Office Incharge',
        //             'route' => 'routes.own_incharge',
        //             'can'   => 'read staff-own-incharge',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Own Class Teacher',
        //             'route' => 'routes.own_class_teacher',
        //             'can'   => 'read staff-own-class-teacher',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Own Teacher',
        //             'route' => 'routes.own_teacher',
        //             'can'   => 'read staff-own-teacher',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Own Student',
        //             'route' => 'routes.own_student',
        //             'can'   => 'read staff-own-student',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Managers',
        //             'route' => 'managers.index',
        //             'can'   => 'read staff-manager',
        //         ],

        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Principals',
        //             'route' => 'principles.index',
        //             'can'   => 'read staff-principle',
        //         ],

        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Office Incharge',
        //             'route' => 'incharges.index',
        //             'can'   => 'read staff-incharge',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Class Teachers',
        //             'route' => 'classteachers.index',
        //             'can'   => 'read staff-class-teacher',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Teachers',
        //             'route' => 'teachers.index',
        //             'can'   => 'read staff-teacher',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Driver',
        //             'route' => 'routes.staff_driver',
        //             'can'   => 'read staff-driver',
        //         ],

        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Verify Users',
        //             'route' => 'account-applications.index',
        //             'can'   => 'read applicant',
        //         ],




        //     ],
        // ],
        ///STUDENT MANAGMENT
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Student Managment',
        //     'icon'    => 'fas fa-user',
        //     'route' => 'students.index',
        //     'can'     => 'menu-student',
        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Students',
        //     //         'route' => 'students.index',
        //     //         'can'   => 'read student',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Withdraw Students',
        //     //         'route' => 'students.index',
        //     //         'can'   => 'update student',
        //     //     ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'ADD STUDENT',
        //         //     'route' => 'students.create',
        //         //     'can'   => 'create student',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Promote students',
        //         //     'route' => 'students.promote',
        //         //     'can'   => 'promote student',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Manage promotions',
        //         //     'route' => 'students.promotions',
        //         //     'can'   => 'read promotion',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Graduate students',
        //         //     'route' => 'students.graduate',
        //         //     'can'   => 'graduate student',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Manage graduations',
        //         //     'route' => 'students.graduations',
        //         //     'can'   => 'view graduations',
        //         // ],
        //     // ],
        // ],
        // ///CLASS MANAGMENT
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Class Managment',
        //     'icon'    => 'fas fa-chalkboard',
        //     'route' => 'classes.index',
        //     'can'     => 'menu-class',
        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Create Class Group',
        //     //         'route' => 'class-groups.create',
        //     //         'can'   => 'create class group',
        //     //     ],
        //     //     [

        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Make New Section',
        //     //         'route' => 'sections.create',
        //     //         'can'   => 'create section',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Class',
        //     //         'route' => 'classes.index',
        //     //         'can'   => 'read class',
        //     //     ],

        //     // ],
        // ],
        //  ///CLASS SUBJECTS
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Subject Managment',
        //     'icon'    => 'fas fa-chalkboard',
        //     'route' => 'subjects.index',
        //     'can'     => 'menu-subjects',
        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View subjects',
        //     //         'route' => 'subjects.index',
        //     //         'can'   => 'read subjects',
        //     //     ],
        //     // ],
        // ],
        // ///DOCUMENT MANAGMENT
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Document Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-documents',
        //     'route' => 'routes.doc_college',
        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Collage Document',
        //             'route' => 'routes.doc_college',
        //             'can'   => 'read collage-documents',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Print Document',
        //             'route' => 'routes.doc_print',
        //             'can'   => 'read print-documents',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Collage Logo',
        //             'route' => 'routes.doc_logo',
        //             'can'   => 'read document-collage-logo',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Sign',
        //             'route' => 'routes.doc_sign',
        //             'can'   => 'read document-sign',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'I Card',
        //             'route' => 'routes.doc_id_card',
        //             'can'   => 'read document-id-card',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Fees Card',
        //             'route' => 'routes.doc_fees_card',
        //             'can'   => 'read document-fees-card',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Scheam',
        //             'route' => 'routes.doc_scheam',
        //             'can'   => 'read document-scheam',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Admit Card',
        //             'route' => 'routes.doc_admit_card',
        //             'can'   => 'read document-admit-card',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Number Sheet',
        //             'route' => 'routes.doc_number_sheet',
        //             'can'   => 'read document-number-sheet',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Mark Sheet',
        //             'route' => 'routes.doc_mark_sheet',
        //             'can'   => 'read document-mark-sheet',
        //         ],

        //     ],
        // ],
        ///TIME TABLE MANAGMENT
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Time Table Managment',
        //     'icon'    => 'fas fa-tasks',
        //     'route' => 'timetables.index',
        //     'can'     => 'menu-timetable',
        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Time Table',
        //     //         'route' => 'timetables.index',
        //     //         'can'   => 'read timetable',
        //     //     ],

        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'View custom items',
        //         //     'route' => 'custom-timetable-items.index',
        //         //     'can'   => 'read custom timetable items',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'Create Custom Items',
        //         //     'route' => 'custom-timetable-items.create',
        //         //     'can'   => 'create custom timetable items',
        //         // ],
        //     // ],
        // ],
        // ///ATTANDANCE MANAGMENT
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Attandance Managment',
        //     'icon'    => 'fas fa-tasks',
        //     'can'     => 'menu-attendance',
        //     'route' => 'check_staff',
        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Schedules',
        //             'route' => 'schedules.index',
        //             'can'   => 'read attendance-schedules',
        //         ],

        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Staff Attendance',
        //             'route' => 'check_staff',
        //             'can'   => 'read staff-attendance',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Staff Attendance Register',
        //             'route' => 'routes.staff_attendance_register',
        //             'can'   => 'read staff-attendance-register',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Student Attendance',
        //             'route' => 'check',
        //             'can'   => 'read student-attendance',
        //         ],
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Student Attendance',
        //             'route' => 'view_check_student',
        //             'can'   => 'read self-student-attendance',
        //         ],

        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Student Attendance Register',
        //             'route' => 'routes.student_attendance_register',
        //             'can'   => 'read student-attendance-register',
        //         ],
        //     ],
        // ],
        // ///FEES MANAGMENT OK
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Fees Managment',
        //     'icon'    => 'fas fa-tasks',
        //     'route' => 'routes.fees_chart',
        //     'can'     => 'menu-fees',
        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Fees Chart',
        //     //         'route' => 'routes.fees_chart',
        //     //         'can'   => 'read fees',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Fee Consession',
        //     //         'route' => 'routes.fees_consrssion',
        //     //         'can'   => 'read fees-consession',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Fee Collection',
        //     //         'route' => 'routes.fees_collection',
        //     //         'can'   => 'read fees-collection',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Fees Status',
        //     //         'route' => 'routes.fees_status',
        //     //         'can'   => 'read fees-status',
        //     //     ],

        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Fees Slips',
        //     //         'route' => 'routes.fees_slips',
        //     //         'can'   => 'read fees-slips',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Fees Card',
        //     //         'route' => 'routes.fees_card',
        //     //         'can'   => 'read fees-card',
        //     //     ],
        //     // ],
        // ],
        // ///TRANSPORT MANAGMENT ok
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Transport Managment',
        //     'icon'    => 'fas fa-tasks',
        //     'can'     => 'menu-transport',
        //     'route' => 'routes.transport_root',
        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Root',
        //     //         'route' => 'routes.transport_root',
        //     //         'can'   => 'read transport',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Root Fees',
        //     //         'route' => 'routes.transport_root_fees',
        //     //         'can'   => 'read transport-fees',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Assign Driver',
        //     //         'route' => 'routes.transport_assign_driver',
        //     //         'can'   => 'read transport-assign-driver',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Student',
        //     //         'route' => 'routes.transport_student',
        //     //         'can'   => 'read transport-student',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Driver',
        //     //         'route' => 'routes.transport_view_driver',
        //     //         'can'   => 'read transport-root-driver',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Vehicle Number',
        //     //         'route' => 'routes.transport_vehicle_number',
        //     //         'can'   => 'read transport-vehicle-number',
        //     //     ],
        //     // ],
        // ],
        // ///FINANCE MANAGMENT ok
        // [
        //     'type'    => 'sidebar-menu-item',
        //     'text'    => 'Finance Managment',
        //     'icon'    => 'fas fa-plus',
        //     'route' => 'routes.expences',
        //     'can'     => 'menu-finance',
        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Incoming',
        //     //         'route' => 'routes.incoming',
        //     //         'can'   => 'read finance-incoming',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'Expences',
        //     //         'route' => 'routes.expences',
        //     //         'can'   => 'read finance-expences',
        //     //     ],


        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'View account applications',
        //         //     'route' => 'account-applications.index',
        //         //     'can'   => 'read applicant',
        //         // ],
        //         // [
        //         //     'type'  => 'sidebar-menu-item',
        //         //     'text'  => 'View rejected applications',
        //         //     'route' => 'account-applications.rejected-applications',
        //         //     'can'   => 'read applicant',
        //         // ],
        //     // ],
        // ],
        // ///CLASSWORK MANAGMENT ok
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Class Work Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-class-work',
        //     'route' => 'routes.class_work',

        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Class Work',
        //             'route' => 'routes.class_work',
        //             'can'   => 'read class-work',
        //         ],

        //     ],
        // ],
        // ///HOME WORK MANAGMENT ok
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Home Work Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-home-work',
        //     'route' => 'routes.home_work',
        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Home Work',
        //             'route' => 'routes.home_work',
        //             'can'   => 'read home-work',
        //         ],

        //     ],
        // ],
        // ///SALARY MANAGMENT ok
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Salary Managment',
        //     'icon' => 'fas fa-school',
        //     'route' => 'routes.salary',
        //     'can'  => 'menu-salary',

        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Salary',
        //     //         'route' => 'routes.salary',
        //     //         'can'   => 'read salary',
        //     //     ],
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Salary Distribute',
        //     //         'route' => 'routes.salary_distribute',
        //     //         'can'   => 'read salary-distribute',
        //     //     ],

        //     // ],
        // ],
        ///EXAM MANAGMENT
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Exam Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-exam',
        //     'route' => 'routes.exam_type',

        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Exam Type',
        //             'route' => 'routes.exam_type',
        //             'can'   => 'read exam-exam-type',
        //         ],

        //     ],
        // ],
        // ///LIBRARY MANAGMENT
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Library Managment',
        //     'icon' => 'fas fa-school',
        //     'route' => 'routes.library',
        //     'can'  => 'menu-library',

        //     // 'submenu' => [
        //     //     [
        //     //         'type'  => 'sidebar-menu-item',
        //     //         'text'  => 'View Library',
        //     //         'route' => 'routes.library',
        //     //         'can'   => 'read library',
        //     //     ],

        //     // ],
        // ],
        // ///COLUMN MANAGMENT
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Column Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-column',

        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Add Column',
        //             'route' => 'schools.index',
        //             'can'   => 'read column-school',
        //         ],

        //     ],
        // ],

        // ///SOFTWARE PLAN MANAGMENT ok
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Software Plan Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-software-plan',
        //     'route' => 'routes.software_plan',
        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Software Plan',
        //             'route' => 'routes.software_plan',
        //             'can'   => 'menu-software-plan',
        //         ],




        //     ],
        // ],
        // ///PAYMENT PLAN MANAGMENT ok
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Payment Plan Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-payment-plan',
        //     'route' => 'routes.payment_plan',

        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'Payment Plan',
        //             'route' => 'routes.payment_plan',
        //             'can'   => 'menu-payment-plan',
        //         ],




        //     ],
        // ],

        // ///Leave MANAGMENT ok
        // [
        //     'type' => 'sidebar-menu-item',
        //     'text' => 'Leave Managment',
        //     'icon' => 'fas fa-school',
        //     'can'  => 'menu-leave',
        //     'route' => 'self_leave',

        //     'submenu' => [
        //         [
        //             'type'  => 'sidebar-menu-item',
        //             'text'  => 'View Leave',
        //             'route' => 'self_leave',
        //             'can'   => 'read leave',
        //         ],




        //     ],
        // ],

        [
            'type'  => 'sidebar-menu-item',
            'text'  => 'View Logs',
            'url'   => '/logs',
            'icon'  => 'fa fa-sticky-note',
            //it checks with roles for now so this is to prevent other users from viewing menu item
            'can'   => 'view logs',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'DateRangePicker' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/moment/moment.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.js',
                ],
                [
                    'type'     => 'css',
                    'asset'    => true,
                    'location' => 'vendor/daterangepicker/daterangepicker.css',
                ],
            ],
        ],
        'Datatables' => [
            'active' => true,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type'     => 'css',
                    'asset'    => true,
                    'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'DatatablesPlugins' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/dataTables.buttons.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.bootstrap4.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.html5.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.print.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/jszip/jszip.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/pdfmake.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/vfs_fonts.js',
                ],
                [
                    'type'     => 'css',
                    'asset'    => true,
                    'location' => 'vendor/datatables-plugins/buttons/css/buttons.bootstrap4.min.css',
                ],
            ],
        ],
        'TempusDominusBs4' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/moment/moment.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
                ],
                [
                    'type'     => 'css',
                    'asset'    => true,
                    'location' => 'vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
                ],
            ],
        ],

        'Select2' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/select2/js/select2.full.min.js',
                ],
                [
                    'type'     => 'css',
                    'asset'    => true,
                    'location' => 'vendor/select2/css/select2.min.css',
                ],
                [
                    'type'     => 'css',
                    'asset'    => true,
                    'location' => 'vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'css',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'BsCustomFileInput' => [
            'active' => false,
            'files'  => [
                [
                    'type'     => 'js',
                    'asset'    => true,
                    'location' => 'vendor/bs-custom-file-input/bs-custom-file-input.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url'   => null,
            'title' => null,
        ],
        'buttons' => [
            'close'           => true,
            'close_all'       => true,
            'close_all_other' => true,
            'scroll_left'     => true,
            'scroll_right'    => true,
            'fullscreen'      => true,
        ],
        'options' => [
            'loading_screen'    => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items'  => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => true,
];
