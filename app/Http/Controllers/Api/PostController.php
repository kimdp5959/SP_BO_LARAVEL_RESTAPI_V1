<?php

namespace App\Http\Controllers\Api;
//Post 모델 선언
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//API 리소스 선언
use App\Http\Resources\PostResource;
//Facade 폼검증 선언
use Illuminate\Support\Facades\Validator;

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

	/**
	 * 등록
	 *
	 * @param  mixed $request
	 * @return void
	 */
	public function store(Request $request)
	{
		//폼 검증 유효성 규칙 선언
		$validator = Validator::make($request->all(), [
			'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'title'     => 'required',
			'content'   => 'required',
		]);

		//폼 검증 유효성 오류시 처리
		if ($validator->fails()) {
			return response()->json($validator->errors(), 422);
		}

		//이미지 업로드
		$image = $request->file('image');
		$image->storeAs('public/posts', $image->hashName());

		//글 작성
		$post = Post::create([
			'image'     => $image->hashName(),
			'title'     => $request->title,
			'content'   => $request->content,
		]);

		//처리 응답값 선언
		return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
	}

	/**
	 * 조회
	 *
	 * @param  mixed $post
	 * @return void
	 */
	public function show($id)
	{
		//글ID로 찾기
		$post = Post::find($id);

		//글 단일 조회값 리턴
		return new PostResource(true, 'Detail Data Post!', $post);
	}
}
