<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
	public function index() {

		/*
		$sections = DB::table('sections')->where('active', 1)->orderByRaw('FIELD(name, "home", "services", "process", "cta", "testimonial", "team", "pricing", "counter", "faq", "peoples", "contact")')->get();

		$home = DB::table('sections')->where('name', 'home')->first();
		$service = DB::table('sections')->where('name', 'services')->first();
		$pricing = DB::table('sections')->where('name', 'pricing')->first();
		$cta = DB::table('sections')->where('name', 'cta')->first();
		$process = DB::table('sections')->where(array('name' => 'process', 'active' => 1))->first();
		$team = DB::table('sections')->where('name', 'team')->first();
		$testimonial = DB::table('sections')->where('name', 'testimonial')->first();
		$faq = DB::table('sections')->where('name', 'faq')->first();
		$contact = DB::table('sections')->where('name', 'contact')->first();
		$people = DB::table('sections')->where('name', 'peoples')->first();

		$service_entries = DB::table('services')->where('active', 1)->get();
		$counter_entries = DB::table('counter')->where('active', 1)->get();
		$pricing_entries = DB::table('pricing')->where('active', 1)->take(3)->get();
		$process_entries = DB::table('process')->where('active', 1)->take(3)->get();
		$team_entries = DB::table('team')->where('active', 1)->take(4)->get();
		$testimonail_entries = DB::table('testimonails')->where('active', 1)->get();
		$faq_entries = DB::table('faq')->where('active', 1)->get();

		*/
		$data = array(
			'object' => 'Hallo Welt'
		);
		if(DB::connection()->getDatabaseName())
		{
			echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
		}


		return View::make('index', $data);

	}
}
