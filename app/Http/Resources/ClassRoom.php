<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassRoom extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
          'created_at' => date('Y-m-d H:i:s',strtotime($this->created_at)),
          'updated_at' => date('Y-m-d H:i:s',strtotime($this->updated_at)),
          '_id' => $this->id,
          'title' => $this->title,
          'courseTitle' => $this->courseTitle,
          'courseTitle' => $this->courseTitle,
          'description' => $this->description,
          'tags' => new TagCollection($this->Tag),
          'assignments' => new AssignmentCollection($this->Assignment),
          'instructor' => new Instructor($this->Instructor),
        ];
    }
}
