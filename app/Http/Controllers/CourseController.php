<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CourseController extends Controller
{
    public function all(){
      return new ClassRoomCollection(ClassRoom::all());
      // $courses =  ClassRoom::all();
      // $tags = [];
      // foreach ($courses as $value) {
      //   foreach ($value->Tag as $t) {
      //     array_push($tags,$t->tag);
      //   }
      //   $value->Tag = $tags;
      // }
      // return $courses;
    }
}
