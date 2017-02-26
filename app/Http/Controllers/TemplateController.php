<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Response;
use Session;
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
	public function tambah()
	{
		return view('template.tambah');
	}
	public function prosestambah(Request $r)
	{
		
		$extfile 	= $r->file('gambar')->getClientOriginalExtension();
		
		// dd($extfile);
		$template = new Template;
		$template->nama = $r->nama;
		$template->deskripsi = $r->deskripsi;
		$template->type = $r->type;
		$template->harga = $r->harga;
		if((strpos($r->link, 'http://') !== false) OR (strpos($r->link, 'https://') !== false)){
			$template->link = $r->link;
		}
		else{
			return redirect()->back()->with('error', 'Link anda bukan termasuk link site');
		}

		if(($extfile == 'svg') || ($extfile == 'jpg') || ($extfile == 'jpeg') || ($extfile == 'png') ){
			if ($r->hasFile('gambar') && $r->hasFile('gambar_full') ) {
				$gambar = date('d-m-y').'-'.$r->nama.'.'.$r->file('gambar')->getClientOriginalExtension();
				$gambar_full = date('d-m-y').'-'.$r->nama.'_full.'.$r->file('gambar_full')->getClientOriginalExtension();
				$r->file('gambar')->move(realpath(public_path("img/template/")), $gambar);
				$r->file('gambar_full')->move(realpath(public_path("img/template/")), $gambar_full);
				$template->gambar 		= $gambar;
				$template->gambar_full 	= $gambar_full;
			}			
		}
		else{
			return redirect()->back()->with('error', 'Format yang anda masukan bukan gambar');
		}

		$template->save();
		return redirect()->back();
	}
}
