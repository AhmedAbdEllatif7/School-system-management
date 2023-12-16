<?php

namespace App\Repositories\Interefaces;

interface TeacherRepositoryInterface{

    // get all Teachers
    public function index();

    public function create();

    public function edit($teacher);

    public function store($request);

    public function update( $request);

    public function destroy($request);

    public function show($id);


    public function deleteTeacherPhoto($request);

    public function downloadTeacherPhoto($teacher_name , $file_name);

}


