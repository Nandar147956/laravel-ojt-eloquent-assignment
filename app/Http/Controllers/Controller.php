<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Publisher;
use App\Models\TeamMember;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $team_member=TeamMember::all();
       $service=Service::all();
        return view('welcome')->with([
            'member'=>$team_member,
            'service'=>$service,
        ]);
    }

    public function testing(){
       // $publishers=DB::table('publishers')->get();
      //  return $publishers;
      $publishers=Publisher::where('id','<=',5)->where('name','=','Dr. Boris Ryan')->get();
      return view('testing')->with([
        'publishers'=>$publishers,
      ]);
    }
}
