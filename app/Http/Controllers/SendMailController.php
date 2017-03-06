<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Mail;

class SendMailController extends BaseController
{
	public function contactmail(Request $r)
	{
		$content 	= $r->pesan;
		$pengirim 	= $r->email;
		$nama 		= $r->nama;

		Mail::send('index.send', ['content' => $content, 'pengirim' => $pengirim , 'nama' => $nama], function ($message)
		{
			// $message->from($r->);
			$message->to('itcreativeg@gmail.com', 'Information Technology Creative Generation');

		});
		return redirect()->back()->with('success', 'Terimakasih atas partisipasi dan informasinya...pesan yang anda sampaikan sudah masuk di email kami');
	}
}
