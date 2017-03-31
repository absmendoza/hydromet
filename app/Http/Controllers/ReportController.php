<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
      $reports=Report::all();
      return view('view_report',compact('reports'));
    }

    public function store()
    {
       $report=Request::all();
       Report::create($report);
       return redirect('maintenanceReps');
    }

    public function displayRep(){

      
    }
   /* public function show($id)
    {
      //
      
      $report=Report::find($id);
      return view('maintenance_reps',compact('report'));

   }*/

   public function addStat(){
    
   }
}
