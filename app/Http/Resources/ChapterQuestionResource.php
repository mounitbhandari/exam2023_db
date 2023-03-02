<?php

namespace App\Http\Resources;

use App\Models\Chapter;
use App\Models\Question;
use Illuminate\Http\Resources\Json\JsonResource;

class ChapterQuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'chapterId' => $this->id,
            'subjectId' => $this->subject_id,
            'chapterName' => $this->chapter_name,
            'quetions' => QuestionResource::collection(Chapter::find($this->id)->questions)
        ];
    }
}
