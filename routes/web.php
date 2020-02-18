<?php


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//schoolclass because class only is the name of  keyboard

Route::get('createclass','ClassController@create')->name('class.create');
Route::get('posticlass','ClassController@store')->name('class.store');
Route::post('editclass','ClassController@edit')->name('edit.schoolclass');
Route::get('deleteclass/{id}','ClassController@delete')->name('delete.schoolclass');
Route::get('allschoolcalss/data','ClassController@viewAll')->name('class.view');

//sections of classes
Route::get('createsection','SectionController@create')->name('section.create');
Route::get('posticlasssection','SectionController@store')->name('section.store');
Route::post('edit/section/class','SectionController@edit')->name('edit.sectionclass');
Route::get('deleteclass/section/{id}','SectionController@delete')->name('delete.section');
Route::get('allschoolcalss/section/data','SectionController@viewAll')->name('section.view');
//fall routes ..sessions/
Route::get('createsession','SessionController@create')->name('session.create');
Route::get('postisession','SessionController@store')->name('session.store');
Route::post('editsession','SessionController@edit')->name('edit.session');
Route::get('deletesession/{id}','SessionController@delete')->name('delete.session');
Route::get('allschoolsession/data','SessionController@viewAll')->name('session.view');

//subjects
Route::get('createsubject','SubjectController@create')->name('subject.create');
Route::get('postisubject','SubjectController@store')->name('subject.store');
Route::post('editsubject','SubjectController@edit')->name('edit.subject');
Route::get('deletesubject/{id}','SubjectController@delete')->name('delete.subject');
Route::get('allsubject/data','SubjectController@viewAll')->name('subject.view');

//students accounts

Route::get('student/create','StudentController@create')->name('student.create');
Route::post('student/store','StudentController@store')->name('student.store');
Route::get('student/view','StudentController@view')->name('student.view');
Route::get('student/del{id}','StudentController@delete')->name('student.delete');
//test type
Route::get('createexam','TestController@create')->name('exam.create');
Route::get('postiexam','TestController@store')->name('exam.store');
Route::post('edit/exam/class','TestController@edit')->name('edit.exam');
Route::get('deleteexam/exam/{id}','TestController@delete')->name('delete.exam');
Route::get('allschoolexam/exam/data','TestController@viewAll')->name('exam.view');
//teacher
Route::get('enrol/teacher','TeacherController@create')->name('add.teacher');
Route::post('post/teacher','TeacherController@store')->name('store.teacher');
Route::get('all/enrol/teacher','TeacherController@viewAll')->name('view.teacher');

Route::get('delete/enrol/teacher/{id}','TeacherController@delete')->name('delete.teacher');
//assign course to teachers
Route::get('assigne/course','AssignCourseController@create')->name('assign.create');
Route::post('assigne/course/post','AssignCourseController@store')->name('assign.store');
Route::post('assigne/course/del/{id}','AssignCourseController@delete')->name('assign.delete');

//marks uploading through marks account

Route::get('manage/marks','MarksController@getSession')->name('get.session');
Route::post('post/manage/marks','MarksController@getEnroledClasses')->name('get.enroled.classes');
Route::get('all/subjects/manage/marks/{id}/{sessionid}','MarksController@allSubjects')->name('all.teacher.subjects');
Route::get('allstudents/manage/marks/{sectionid}/{sessionid}/{classid}/{subjectid}','MarksController@allStudents')->name('all.students');

Route::post('student/store/marks','MarksController@storeMarks')->name('marks.store');

//reports generation
Route::get('report/gen','ReportController@allStudents')->name('report.allstudents');
