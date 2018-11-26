<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Assignment extends JsonResource
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
          'description' => $this->description,
          'body' => $this->body,
          'deadline' => date('Y-m-d H:i:s',strtotime($this->deadline)),
          'notification_schedule' => date('Y-m-d H:i:s',strtotime($this->notification_schedule)),
          'attachments' => new AttachmentCollection($this->Attachment),
        ];
    }
}
