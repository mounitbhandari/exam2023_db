<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed option
 * @property mixed question_id
 * @property mixed is_answer
 */
class OptionResource extends JsonResource
{
    /**
     * @var mixed
     */


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'optionId' => $this->id,
            'option' => $this->option,
            'questionId' => $this->question_id,
            'isAnswer' => $this->is_answer,
        ];
    }
}
