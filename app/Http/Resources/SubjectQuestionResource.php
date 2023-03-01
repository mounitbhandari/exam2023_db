<?php

namespace App\Http\Resources;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed subject_description
 * @property mixed duration_type_id
 * @property mixed subject_duration
 * @property mixed subject_short_name
 * @property mixed subject_code
 */
class SubjectQuestionResource extends JsonResource
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
            'subjectId' => $this->id,
            'subject_code' => $this->subject_code,
            'subjectShortName' => $this->subject_short_name,
            'subjectShortName' => $this->subject_short_name,
            'subjectDuration' => $this->subject_duration,
            'durationTypeId' => $this->duration_type_id,
            'subjectDescription' => $this->subject_description,
            'questions' => QuestionOptionsResource::collection(Subject::find($this->id)->questions)
//            'questions' => QuestionResource::collection(Subject::find($this->id)->questions)
        ];;
    }
}
