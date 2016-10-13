<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class demo extends Controller
{
	public function mainPage()
	{
		$json = file_get_contents('https://jsonplaceholder.typicode.com/posts');

		$data = json_decode($json,true);
		
		return view('demo', compact('data'));
	}
	
	public function viewComments($postid)
	{
		//$json_a = file_get_contents('https://jsonplaceholder.typicode.com/posts/'.$postid);
		$json_a = file_get_contents('https://jsonplaceholder.typicode.com/posts');
		
		$post_data = json_decode($json_a,true);
		
		$json_b = file_get_contents('https://jsonplaceholder.typicode.com/comments');

		$data = json_decode($json_b,true);
		
		return view('comments', compact('data','post_data','postid'));
	}
    
}
