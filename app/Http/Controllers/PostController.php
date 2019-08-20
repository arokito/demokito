<?php

namespace demo\Http\Controllers;

use Illuminate\Http\Request;
use demo\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts =Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>'required',
            'body'=>'required',
            'aron_image'=> 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('aron_image')){
            //getting file with extension
            $filenamewithExt=$request->file('aron_image')->getClientOriginalName();

            // get just a file name
            $filename=pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //just get extension
            $extension=$request->file('aron_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            
            $path=$request->file('aron_image')->storeAs('public/aron_images',$fileNameToStore);
            
        }

        else{
            
        }



     //create a post
     $post=new Post;
     $post->title=$request->input('title');
     $post->user_id=auth()->user()->id;
     $post->body=$request->input('body');
     $post->aron_image=$fileNameToStore;
     $post->save();

     return redirect('/posts')->with('success','post created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::where('id',$id)->get();
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =Post::where('id',$id)->get();
        return view('posts.edit')->with('post',$post);
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
            $this->validate($request,[
                'title'=>'required',
                'body'=>'required',
                'aron_image'=> 'image|nullable|max:1999'
            ]);

            //handle file upload
            if($request->hasFile('aron_image')){
                //getting file with extension
                $filenamewithExt=$request->file('aron_image')->getClientOriginalName();

                // get just a file name
                $filename=pathinfo($filenamewithExt,PATHINFO_FILENAME);
                //just get extension
                $extension=$request->file('aron_image')->getClientOriginalExtension();

                //filename to store
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                //upload image
                
                $path=$request->file('aron_image')->storeAs('public/aron_images',$fileNameToStore);
            }

            else{
                
            }



        //create a post
        $post= Post::find($id);
        $post->title=$request->input('title');
        $post->user_id=auth()->user()->id;
        $post->body=$request->input('body');
        if($request->hasFile('aron_image')){
            $post->aron_image=$fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success','post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}