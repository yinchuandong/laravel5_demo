<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;
use Illuminate\Support\Facades\DB as DB;

use App\Models\Page;

class AdminHomeComtroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//you can costomize the error message in 'resources/lang/cn/validation.php'
		$validator = Validator::make(
			['name' => 'daye', 'age' => 10],
			['name' => 'required|min:1']
		);

		$validator->sometimes('name', 'required|max:500', function($input)
		{
			//$input is a Fluent Object, which includes the field of $data in function 'make'
		    return $input->age >= 10;
		});


		if($validator->fails()){
			echo $validator->messages();
			exit;
		}

		$list = DB::table('pages')
			->where('slug', '=', 'first-page')
			->where('id', '=', '3')
			->get();

		// var_dump($list);

		// $pages = DB::table('pages')->paginate(4);
		$pages = Page::paginate(1);
		// return view('AdminHome')->withPages(Page::all());
		return view('AdminHome')->withPages($pages);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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
	}

}
