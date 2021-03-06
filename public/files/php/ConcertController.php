<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Concert;

class ConcertController extends Controller
{ 
    // load all concerts saved in the database
    public function index(){
        $events = Concert::all()->sortByDesc('concert_date');
        return view('concerts.index')->with(compact('events'));
    }

    // get the concert entry form view
    public function create(){
        return view('concerts.create');
    }

    // save concert form request data to database
    public function store(Request $request){

        $carbonDate = Carbon::parse($request->date);
        $concert = new Concert;
        $concert->band_name = $request->band;
        $concert->concert_date = $carbonDate;
        $concert->venue = $request->venue;
        $concert->city_state = $request->location;
        $concert->save();

        return redirect()->route('concerts.index');
    }

    // show details for an individual concert 
    public function show($id){
        $bandSet = Concert::find($id);
        return view('concerts.show')->with(compact('bandSet'));
    }

    // edit details for an individual concert
    public function edit($id){
        return view('concerts.edit');
    }

    // save changes from editing concert details form
    public function update(Request $request, $id){

        $concert = Concert::find($id);
        $concert->band_name = ucwords($request->band);
        $concert->concert_date = $request->date;
        $concert->venue = $request->venue;
        $concert->city_state = $request->location;
        $concert->save();
    }

    // remove a saved concert from the database
    public function destroy($id){
        $concert->delete();
        return view('concerts.index');
    }
}