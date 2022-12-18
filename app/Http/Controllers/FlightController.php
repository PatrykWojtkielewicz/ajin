<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlightRequest;
use App\Models\Connection;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FlightRequest $request)
    {
        $cityFrom = $request->cityFrom;
        $cityTo = $request->cityTo;
        $departure = $request->departure;
        $return = $request->return;
        $passengers = $request->passengers;

        $departureDay = date('l', strtotime($departure));
        $returnDay = date('l', strtotime($return));
        
        $flights1 = Connection::select('connections.departureTime', 'connections.arrivalTime', 'connections.dayOfTheWeek', 'departureAirport.code', 'arrivalAirport.code')
                            ->where('departureAirportId', '=', '2')
                            ->where('arrivalAirportId', '=', '1')
                            ->where('dayOfTheWeek', '=', $departureDay)
                            ->join('airports as departureAirport', 'airports.id', '=', 'connections.departureAirportId')
                            ->join('airports as arrivalAirport', 'airports.id', '=', 'connections.arrivalAirportId')
                            ->get();
        $flights2 = Connection::where('departureAirportId', '=', '2')
                            ->where('arrivalAirportId', '=', '1')
                            ->where('dayOfTheWeek', '=', $returnDay)
                            ->get();
                        
        print($flights1."<br/><br/>");
        print($flights2."<br/><br/>");

        return view('flights', compact('flights1', 'flights2', 'departure', 'return'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
