<?php

namespace App\Http\Controllers\Api;
//Post 모델 선언
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//API 리소스 선언
use App\Http\Resources\PostResource;

class PostController extends Controller
{
	/**
	 * 기본화면(리스트)
	 *
	 * @return void
	 */
	public function index()
	{
		//posts 전체 가져오기
		$posts = Post::latest()->paginate(5);

		//API 리소스에 결과값 리턴
		return new PostResource(true, 'List Data Posts', $posts);
	}
}
