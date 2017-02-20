<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Portfolio;

class HomeController extends BaseController
{
	public function index()
	{
		$portfolio = Portfolio::limit(6)->get();
		return view('index.index',compact('portfolio'));
	}
}
