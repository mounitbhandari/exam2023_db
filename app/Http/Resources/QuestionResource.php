<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'questionId' => $this->id,
            'questionLevelId' => $this->question_level_id,
            'chapterId' => $this->chapter_id,
            'questionTypeId' => $this->question_type_id,
            'question' => $this->question,
        ];
    }
}