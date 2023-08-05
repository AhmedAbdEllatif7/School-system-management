<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Section;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getClassrooms($id)
    {
        $list_classes = Classroom::where("grade_id", $id)->pluck("name", "id");
        return $list_classes;
    }

    public function getSections($id){

        $list_sections = Section::where("class_id", $id)->pluck("name", "id");
        return $list_sections;
    }
}
