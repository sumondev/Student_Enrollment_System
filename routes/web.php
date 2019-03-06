<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('student.student_login');
    /*student login part dafault route*/
});

// Route::get('/backend', function () {
//     return view('admin.admin_login');
// });
 

/*AdminController routing start from here*/

/*route for login*/
Route::get ('/backend','AdminController@admin_login'); 

/*route for admin_login_dashboard*/
Route::post ('/adminlogin','AdminController@login_dashbord'); 


/*admin dashboard*/
Route::get ('/admin_dashboard','AdminController@admin_dashboard'); 


/*log out route*/
Route::get ('/Log_out','AdminController@logout'); 

/*view profile route*/
Route::get ('/view_profile','AdminController@profile'); 

/*setting routing here*/
Route::get ('/settings','AdminController@settings'); 

/*AdminController routing over from here*/



/*studentloginContoller part satart here*/


/*route for Student_login_from*/
Route::post ('/studentlogin','StudentloginController@student_login_dashboard');
/*route for Student_login_dashboard*/
Route::get ('/student_dashboard','StudentloginController@student_dashboard'); 




/*view profile route*/



Route::get ('/student_profile','StudentloginController@student_view_profile'); 

/*setting routing here*/
Route::get ('/studentsettings','StudentloginController@studentsettings'); 

/*student setting profile update */
Route::post ('/update_student_profile','StudentloginController@update_student_profile');


/*log out route*/
Route::get ('/studentLogout','StudentloginController@student_logout'); 


/*studentloginContoller part over here*/

/*student part start here*/

/*Add student term */
Route::get ('/add_student','AddstudentsController@addstudent'); 


/*add student form submit*/
Route::post ('/save_Student','AddstudentsController@savestudent'); 


/*All student */
Route::get ('/all_student','AllstudentsController@allstudent'); 



/*delet method*/
Route::get ('/delete_student/{student_id}','AllstudentsController@delete_student');
/*'/delet_contact/{id} here id used for Allstudent controller delet operation with this id */


/*view student profile parts here*/

Route::get ('/view_student/{student_id}','AllstudentsController@student_view');

/*view student part end here*/

/*edit or update student part strat here*/
Route::get ('/edit_student/{student_id}','AllstudentsController@student_edit');

/*edit part end here */

/*update student through edit form start here */
Route::post ('/update_Student/{student_id}','AllstudentsController@student_update');



/*updatre student pasrt end here*/

/*student part end here*/

/*eeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-------------nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn----{student routing part}  -----------dddddddddddddddddddddddddddddddddddddddddddddddddd*/


/*all teacher part rourtes here */

/*add teacher part routing*/

Route::get ('/add_teacher','AddteacherController@addteacher'); 


/*add teacher part routing*/


Route::post ('/save_teacher','AddteacherController@saveteacher'); 


/*all teacher part routing */

Route::get ('/all_teacher','TeacherController@allteacher'); 


/*delete teacher function part are hrer*/
Route::get ('/delete_teacher/{teacher_id}','TeacherController@delete_teacher');

/*View teacher part are hrer*/
Route::get ('/view_teacher/{teacher_id}','TeacherController@view_teacher');

/*Edit teacher part are hrer*/
Route::get ('/edit_teacher/{teacher_id}','TeacherController@edit_teacher');


/*Update teacher part are hrer*/
Route::post ('/update_teacher/{teacher_id}','TeacherController@update_teacher');



/*all teacher part routes end here*/


/*all page routing start here */

/*tution fee */
Route::get ('/tution_fee','TutionController@tutionfee'); 


/*cse*/
Route::get ('/cse','CSEController@cse'); 


/*eee*/
Route::get ('/eee','EEEController@eee'); 


/*ece*/
Route::get ('/ece','ECEController@ece'); 


/*bba*/
Route::get ('/bba','BBAController@bba'); 


/*mba*/
Route::get ('/mba','MBAController@mba'); 





/*tution*/

Route::get ('/tution_fee','TutionController@tution'); 

/*all page routing end here*/