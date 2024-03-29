<?php

namespace App\Http\Controllers\admin;

use App\Filters\QuestionFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question=Question::query()->filter(new QuestionFilter())->orderBy('id','desc')->paginate(10);
        return view('admin.questions.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $inputs=$request->only(['question','answer','file']);

        if ($request->file('file')){
            $inputs['file'] = $this->uploadFile($request->file('file'),'uploads/question');
        }
        $d=Question::create($inputs);

        return redirect('/admin/questions')->with('success','با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question=Question::query()->find($id);
        return view('admin.questions.show',compact('question'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=Question::query()->where('id',$id)->first();
        return view('admin.questions.edit',compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id)
    {
        $data=$request->only('question','answer','file');
        if ($request->file('file')){
            $data['file'] = $this->uploadFile($request->file('file'),'uploads/question');
        }
        Question::query()->where('id',$id)->update($data);
        return redirect('/admin/questions')->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::query()->where('id',$id)->delete();
        return back()->with('success','با موفقیت حذف شد.');
    }
}
