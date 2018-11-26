<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassRoom;
use App\Http\Resources\ClassRoomCollection;
use App\Http\Resources\ClassRoom as ClassRoomResource;
use App\Tag;
use App\Instructor;
use App\Attachment;
use Storage;
use File;
class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ClassRoomCollection(ClassRoom::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $class_room = new ClassRoom();
        // $class_room->title = $request->title;
        // $class_room->courseTitle = $request->courseTitle;
        // $class_room->description = $request->description;
        // $class_room->save();
        // $instructor = new Instructor();
        // $instructor->email = $request->instructor_email;
        // $instructor->name = $request->instructor_name;
        // $class_room->Instructor()->save($instructor);
        // foreach ($request->tags as $tag) {
        //   $new_tag = new Tag();
        //   $new_tag->tag = $tag;
        //   $class_room->Tag()->save($new_tag);
        // }

        $file_names = [];
        $file_types = [];
        $file_tmp_name = [];
        // return count($_FILES['assignment']['name']);
        for($j = 0 ; $j < count($_FILES['assignment']['name']);$j++) {
          $file_names = [];
          $file_types = [];
          $file_tmp_name = [];
          foreach ($_FILES['assignment']['name'][$j] as $name) {
            array_push($file_names,$name);
          }
          foreach ($_FILES['assignment']['type'][$j] as $type) {
            array_push($file_types,$type);
          }
          foreach ($_FILES['assignment']['tmp_name'][$j] as $tmp_name) {
            array_push($file_tmp_name,$tmp_name);
          }

          for($i = 0;$i < count($file_names) ;$i++){
            $attachment = new Attachment();
            $attachment->title = $file_names[$i];
            $attachment->url = Storage::disk('local')->putFile('public/uploads/', new File($file_tmp_name[$i]));
            $attachment->mimeType = $file_types[$i];
            $attachment->save();
          }
        }
        // foreach ($request->$assignments as $assignment) {
        //   $new_assigment = new Assignment();
        //   $new_assigment->title = $assignment->title;
        //   $new_assigment->body = $assignment->body;
        //   $new_assigment->description = $assignment->description;
        //   $new_assigment->deadline = date('Y-m-d H:i:s',strtotime($assignment->deadline));
        //   if(isset($assignment->notification_schedule))
        //     $new_assigment->notification_schedule = date('Y-m-d H:i:s',strtotime($assignment->notification_schedule));
        //   $class_room->Assignment()->save($new_assigment);
        // }
        // return $class_room;
        return ['success'=> 'ok'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class_room = ClassRoom::find($id);
        if($class_room)
          return new ClassRoomResource($class_room);
        else {
          return ['success' => 'false'];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class_room = ClassRoom::find($id);
        if($class_room){
          if(isset($request->title)){
            $class_room->title = $request->title;
          }
          if(isset($request->courseTitle)){
            $class_room->courseTitle = $request->courseTitle;
          }
          if(isset($request->description)){
            $class_room->description = $request->description;
          }
        }
        else{
          return ['success' => 'false'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return ClassRoom::destroy($id);
    }
}
