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

       return redirect('success')->with('message', 'ADD');
    }

    public function edit($id)
    {
        $book=Report::find($id);
    }

    public function update($id){
      $reportUpdate = Request::all();
      $report = Report::find($id);
      $report->update($reportUpdate);

      return redirect('success')->with('message', 'EDIT');
    
    }

    public function display_report(){
      $reports = DB::table('reports')->get();

    }
    
}
