<?php

use Illuminate\Support\Facades\Route;





Route::get('/', 'frontEnd\HomeController@index')->name('front');


Auth::routes();
Route::get('notifications', 'Admin\UsersController@notifications')->name('notifications');
Route::post('login', 'frontEnd\Auth\LoginController@login')->name('auth.login');

//Route::get('/home', 'HomeController@index')->name('home');
Route::any('logout', 'Auth\LoginController@logout')->name('auth.logout');
Route::get('change_password_', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth/change_password');
Route::any('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password_');
Route::any("/teacher-register","frontEnd\UsersController@teacherRegister")->name("teacher-register");
Route::any("/student-register","frontEnd\UsersController@studentRegister")->name("student-register");
Route::any("/about","frontEnd\UsersController@about")->name("about");
Route::get("/contact-me","frontEnd\HomeController@contactme")->name("contact-me");
Route::post("/contact-me/post","frontEnd\HomeController@postcontactme")->name("post-contact-me");
//Route::get("/courses","frontEnd\HomeController@courses")->name("courses");
Route::any("/subscribe",'frontEnd\HomeController@StoreEmail')->name("email");
Route::get('/blogs', 'frontEnd\HomeController@blogs')->name("show_blogs");
Route::get('/single-blog/{id}', 'frontEnd\HomeController@single_blog')->name("single_blog");
Route::get('/search', 'frontEnd\HomeController@course_search')->name("course-search");
Route::get('/courses', 'frontEnd\HomeController@coursess')->name("coursess");
Route::get('/single-course/{id}', 'frontEnd\HomeController@single_course')->name("single_course");
Route::get('/lesson/{id}', 'frontEnd\HomeController@lesson')->name("lesson");
Route::post('/course/join', 'frontEnd\HomeController@join')->name("join");

Route::prefix("admin")->namespace("Admin")->middleware(["admin"])->group(function () {
    Route::get('/home', 'DashboardController@index')->name('home.dashboard');
    Route::resource('permissions', 'PermissionsController');
    Route::get('user/profile/{id}', 'UsersController@profile')->name('user_profile');
    Route::get("/lessons/{id}/delete","lessonsController@destroy")->name('delete-lesson');
    Route::get("/email/{id}/delete","SettingController@destroyEmail")->name('delete-email');
    Route::get("settings",'SettingController@setting')->name('settings');
    Route::post("settings",'SettingController@postsetting')->name('post-settings');
    Route::get("about",'AboutController@about')->name('about');
    Route::post("about",'AboutController@postabout')->name('post-about');
    Route::resource("contact_me",'ContactMeController');
    Route::any("/emails",'SettingController@viewEmail')->name("email-all");
    Route::any("/emails-send-create",'SettingController@sendEmailcreate')->name("email.send.create");
    Route::any("/emails-send",'SettingController@sendEmail')->name("email.send");
    Route::any("/subscribeShow",'SettingController@subscribeShow')->name("subscribe.show");
    Route::post('permissions_mass_destroy', 'PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', 'RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', 'UsersController@massDestroy')->name('users.mass_destroy');
    Route::resource('courses', 'CoursesController');
    Route::post('courses_mass_destroy', 'CoursesController@massDestroy')->name('courses.mass_destroy');
    Route::any('courses_restore/{id}', 'CoursesController@restore')->name('courses.restore');
    Route::delete('courses_full_del/{id}', 'CoursesController@full_del')->name('delete_full_cource');
    Route::resource('lessons', 'LessonsController');

//    Route::get("/rooms/{id}/delete","RoomController@destroy")->name('delete-rooms');

    Route::post('lessons_mass_destroy', 'LessonsController@massDestroy')->name('lessons.mass_destroy');
    Route::post('lessons_restore/{id}', 'LessonsController@restore')->name('lessons.restore');
    Route::delete('lessons_full_del/{id}', 'LessonsController@full_del')->name('delete_full_lessons');
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', 'QuestionsController@massDestroy')->name('questions.mass_destroy');
    Route::post('questions_restore/{id}', 'QuestionsController@restore')->name('questions.restore');
    Route::delete('questions_perma_del/{id}', 'QuestionsController@perma_del')->name('questions.perma_del');
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', 'QuestionsOptionsController@massDestroy')->name('questions_options.mass_destroy');
    Route::post('questions_options_restore/{id}', 'QuestionsOptionsController@restore')->name('questions_options.restore');
    Route::delete('questions_options_perma_del/{id}', 'QuestionsOptionsController@perma_del')->name('questions_options.perma_del');
    Route::resource('tests', 'TestsController');
    Route::post('tests_mass_destroy', 'TestsController@massDestroy')->name('tests.mass_destroy');
    Route::post('tests_restore/{id}', 'TestsController@restore')->name('tests.restore');
    Route::delete('tests_perma_del/{id}', 'TestsController@perma_del')->name('tests.perma_del');
    Route::resource("categories", 'CategoryController');
    Route::get("category/{id}", 'CategoryController@status')->name("category.status");
    Route::get("course/{id}", 'CoursesController@status')->name("course.status");
    Route::get("permissions/{id}/status", 'PermissionsController@status')->name("permissions.status");
    Route::get("lessons/{id}/st", 'LessonsController@status')->name("lesson.status");
    Route::get("test/{id}/st", 'TestsController@status')->name("test.status");
    // Change Password Routes...
    Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
    Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');
    //===== Teachers Routes =====//
    Route::resource('teachers', 'TeachersController');
    Route::get('get-teachers-data', 'TeachersController@getData')->name('teachers.get_data');
    Route::post('teachers_mass_destroy', 'TeachersController@massDestroy')->name('teachers.mass_destroy');
    Route::post('teachers_restore/{id}', 'TeachersController@restore')->name('teachers.restore');
    Route::delete('delete_full_teacher/{id}', 'TeachersController@delete_full_teacher')->name('delete_full_teacher');
    Route::get('teacher/{id}/st', 'TeachersController@status')->name('teacher.status');
    Route::resource('blogs', 'BlogsController');
    Route::get('blogs/{id}/st', 'blogsController@status')->name('blogs.status');
    Route::get('blogs/{id}/sts', 'blogsController@statuss')->name('blogs.statuss');
    Route::get("/blogs/{id}/delete","blogsController@destroy")->name('delete-blogs');

    Route::get("/change-password",'UserController@changePassword')->name("change-password");
    Route::put("/change-password",'UserController@postChangePassword')->name("post-change-password");






//    Route::get("/","HomeController@index")->name("admin.home");
});

Route::get("/test",'HomeController@index');

