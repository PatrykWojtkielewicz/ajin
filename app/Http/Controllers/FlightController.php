<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlightRequest;
use App\Models\Connection;
use App\Models\Airport;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FlightRequest $request)
    {
        $cityFromId = trim(explode(' ', $request->cityFrom)[1], '()');
        $cityToId =  trim(explode(' ', $request->cityTo)[1], '()');
        $cityFrom = trim(explode(' ', $request->cityFrom)[0], '()');
        $cityTo =  trim(explode(' ', $request->cityTo)[0], '()');
        $departure = $request->departure;
        $return = $request->return;
        $passengers = $request->passengers;

        $departureDay = date('l', strtotime($departure));
        $returnDay = date('l', strtotime($return));

        $departureAirportId = Airport::select('id')->where('code', '=', $cityFromId)->value('id');
        $arrivalAirportId = Airport::select('id')->where('code', '=', $cityToId)->value('id');
        
        $flights1 = Connection::select('connections.departureTime', 'connections.arrivalTime', 'connections.dayOfTheWeek', 'departureAirport.code as departureAirport', 'arrivalAirport.code as arrivalAirport')
                            ->where('departureAirportId', '=', $departureAirportId)
                            ->where('arrivalAirportId', '=', $arrivalAirportId)
                            ->where('dayOfTheWeek', '=', $departureDay)
                            ->join('airports as departureAirport', 'departureAirport.id', '=', 'connections.departureAirportId')
                            ->join('airports as arrivalAirport', 'arrivalAirport.id', '=', 'connections.arrivalAirportId')
                            ->get();
        $flights2 = Connection::select('connections.departureTime', 'connections.arrivalTime', 'connections.dayOfTheWeek', 'departureAirport.code as departureAirport', 'arrivalAirport.code as arrivalAirport')
                            ->where('departureAirportId', '=', $arrivalAirportId)
                            ->where('arrivalAirportId', '=', $departureAirportId)
                            ->where('dayOfTheWeek', '=', $returnDay)
                            ->join('airports as departureAirport', 'departureAirport.id', '=', 'connections.departureAirportId')
                            ->join('airports as arrivalAirport', 'arrivalAirport.id', '=', 'connections.arrivalAirportId')
                            ->get();

        $flights1Available = count($flights1);
        $flights2Available = count($flights2);

        return view('flights', compact('flights1', 'flights2', 'departure', 'return', 'cityFrom', 'cityTo', 'passengers', 'flights1Available', 'flights2Available'));
    }
}
