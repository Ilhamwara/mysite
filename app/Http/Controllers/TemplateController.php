<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Template;

class TemplateController extends BaseController
{
	public function index()
	{
		$template = Template::where('type','Template')->limit(6)->get();
		return view('template.index',compact('template'));
	}
	public function detail($id)
	{
		$data = Template::findOrFail($id);
		return view('template.detail',compact('data'));
	}
	public function loadmore($take = 3, $skip = 0)
	{
		$data=[];
		if($take != null && is_int($take)){
			$take = $take;
		}
		if($skip != null && is_int($skip)){
			$take = $take;
		}

		$template = Template::where('type','Template')->take($take)->skip($skip)->get();

		if($template){
			foreach ($template as $k => $v) {
				$data['post'][$k]['id'] = $v->id;
				$data['post'][$k]['gambar'] = $v->gambar;
				$data['post'][$k]['nama'] = $v->nama;
				$data['post'][$k]['link'] = $v->link;
			}
		}
		return response()->json(['status' => true, 'data' => $data, 'message' => ''], 200);
	}

		public function loadmoreportfolio($take = 3, $skip = 0)
	{
		$data=[];
		if($take != null && is_int($take)){
			$take = $take;
		}
		if($skip != null && is_int($skip)){
			$take = $take;
		}

		$portfolio = Template::where('type','Portfolio')->take($take)->skip($skip)->get();

		if($portfolio){
			foreach ($portfolio as $k => $v) {
				$data['post'][$k]['id'] = $v->id;
				$data['post'][$k]['gambar'] = $v->gambar;
				$data['post'][$k]['nama'] = $v->nama;
				$data['post'][$k]['link'] = $v->link;
			}
		}
		return response()->json(['status' => true, 'data' => $data, 'message' => ''], 200);
	}
}
