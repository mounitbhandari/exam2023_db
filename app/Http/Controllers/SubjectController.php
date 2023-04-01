<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChapterQuestionResource;
use App\Http\Resources\SubjectChapterResource;
use App\Http\Resources\SubjectQuestionResource;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_subject()
    {
        $subject = Subject::get();
        return $this->successResponse(SubjectResource::collection($subject));
    }

    public function get_all_subjects_with_chapters()
    {
        $subjects = Subject::get();
        return $this->successResponse(SubjectChapterResource::collection($subjects));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_subject(Request $request)
    {
        $rules = array(
            'subjectCode' => 'required|unique:subjects,subject_code|max:20|min:1',
            'subjectShortName' => 'required|unique:subjects,subject_short_name|min:1'
        );
        $messages = array(
            'subjectCode.required' => 'Please enter a subject Code',
            'subjectShortName.unique' => 'Please enter a unique subject short Name'
        );
        $validator =Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response()->json(['success'=>1,'data'=>$validator->messages()], 200,[],JSON_NUMERIC_CHECK);
        }
        $subject = new Subject();

        $subject->subject_code=$request->input('subjectCode');
        $subject->subject_short_name=$request->input('subjectShortName');
        $subject->subject_full_name=$request->input('subjectFullName');
        $subject->subject_duration=$request->input('subjectDuration');
        $subject->duration_type_id=$request->input('durationTypeId');
        $subject->subject_description=$request->input('subjectDescription');

        $subject -> save();

        return response()->json(['success'=>1,'data'=>$subject], 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update_subject(Request $request)
    {
        $rules = array(
            'subjectCode' => 'required|unique:subjects,subject_code|max:20|min:1',
            'subjectShortName' => 'required|unique:subjects,subject_short_name|min:1'
        );
        $messages = array(
            'subjectCode.required' => 'Please enter a subject Code',
            'subjectShortName.unique' => 'Please enter a unique subject short Name'
        );
        $validator =Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response()->json(['success'=>1,'data'=>$validator->messages()], 200,[],JSON_NUMERIC_CHECK);
        }
        $subject = Subject::findOrFail($request->id);

        $subject->subject_code=$request->input('subjectCode');
        $subject->subject_short_name=$request->input('subjectShortName');
        $subject->subject_full_name=$request->input('subjectFullName');
        $subject->subject_duration=$request->input('subjectDuration');
        $subject->duration_type_id=$request->input('durationTypeId');
        $subject->subject_description=$request->input('subjectDescription');

        $subject -> update();
        return response()->json(['success'=>1,'data'=>$subject], 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubjectRequest  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
