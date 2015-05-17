<?php

class topicController extends \BaseController {


protected $layout = "admin.index";	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return "This is topic controller";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($type)
	{
		//

	
	$this->layout->content = View::make('admin.topics.add_topic')->with('type' , $type);

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		//dd($_POST);


	if(Input::hasFile('img_topic')){
			
		//validate
		$validator = Validator::make(Input::all(),
		array(
		/* 
		title_topic
		sub_title_topic
		content_topic
		img_topic
*/
		'title_topic'     => 'required',
		'sub_title_topic' => 'required',
		'content_topic'   => 'required',
		'type_topic'            => 'required',
		'img_topic'       => 'image'

	));
		
	
	
	
	
	}else {
			
			
	//validate
	$validator = Validator::make(Input::all(),
			
	array(
		
		'title_topic'     => 'required',
		'sub_title_topic' => 'required',
		'content_topic'   => 'required',
		'type_topic'            => 'required',
	));
			
	}// end else
		
		
	if($validator->fails()){
	
		
		dd($_POST);
	/*	return Redirect::to('admin/news/create')->withErrors
		($validator)->withInput();
		*/	
	}else {

			$topic = new Topic;			
				
			if(Input::hasFile('img_topic')){
			

			$dest = 'images/';
			$name = str_random(5).'.'. 
			Input::file('img_topic')->getClientOriginalExtension();
				
			Input::file('img_topic')->move($dest,$name);
			
			$topic->img_topic = $dest.$name;
			

			}// end if
				/* 
		title_topic
		sub_title_topic
		content_topic
		img_topic
*/
			$topic->title_topic          = Input::get('title_topic') ;
			$topic->sub_title_topic      = Input::get('sub_title_topic');
			$topic->content_topic   	 = Input::get('content_topic');
			$topic->type_topic           = Input::get('type_topic');
			$topic->comment_status_topic = '0';
			$topic->country_topic        = '0';

			$topic->save();
			return Redirect::back();
				
		}// end else

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function all($type)
	{
		//
		$all_topics = DB::table('topic')->where('type_topic', $type )->get();


		
		/* 
		print_r($all_topics);
		die();
		*/
		$this->layout->content = View::make('admin.topics.all_topics')
		->with('type',$type)
		->with('all_topics',$all_topics)
		;


	}



	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//


		$topic = Topic::find($id)->delete();		
		return Redirect::to(URL::previous());
	}


	}


















