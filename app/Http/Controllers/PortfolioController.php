<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Portfolio;

class PortfolioController extends BaseController
{
	public function loadmore($take = 3, $skip = 0)
	{
		$data=[];
		if($take != null && is_int($take)){
			$take = $take;
		}
		if($skip != null && is_int($skip)){
			$take = $take;
		}

		$portfolio = Portfolio::take($take)->skip($skip)->get();

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
