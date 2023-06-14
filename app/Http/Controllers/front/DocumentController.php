<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\DocumentRequest;
use App\Models\document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::id();
        $document=Document::query()->where('user_id',$id)->get();
        return view('front.documents.index',compact('document'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.documents.create');

    }

    public function store(DocumentRequest $request)
    {
        dd($request);
        $inputs=$request->all();
        $inputs['rate'] = 0;
        $inputs['user_id'] =Auth::id();

        if ($request->file('file'))
            $inputs['file'] = $this->uploadFile($request->file('file'), 'uploads/documents');

        $result=Document::create($inputs);

        if ($result){
            return redirect()->route('front.document.list')->with('success','با موفقیت ثبت شد.');
        } else{
            return back()->with('error','با خطا مواجه شد.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document=Document::query()->find($id);
        return view('front.documents.show',compact('document'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=Document::query()->where('id',$id)->first();
        return view('front.documents.edit',compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequest $request, $id)
    {
        $data=$request->only('title','slug','type','start_at','description','file','duration','teacher_id','user_id');
        if ($request->file('file'))
            $data['file'] = $this->uploadMedia($request->file('file'));
        Document::query()->where('id',$id)->update($data);
        return redirect('/documents')->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Document::query()->where('id',$id)->delete();
        return back();
    }

}
