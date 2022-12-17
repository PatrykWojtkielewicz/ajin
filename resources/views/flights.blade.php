@extends('app')

@section('content')
    @if(count($flights1))
        <p>Lot tam</p>
        <ul>
            @foreach ($flights1 as $item)
                <li>id: {{ $item->id }}</li></li>
                <li>airplaneId: {{ $item->airplaneId }}</li></li>
                <li>departureAirportId: {{ $item->departureAirportId }}</li></li>
                <li>arrivalAirportId: {{ $item->arrivalAirportId }}</li></li>
                <li>departureTime: {{ $item->departureTime }}</li></li>
                <li>arrivalTime: {{ $item->arrivalTime }}</li></li>
                <li>dayOfTheWeek {{ $item->dayOfTheWeek }}</li></li>
            @endforeach
            <li>departure: {{ $departure }}</li></li>
            <li>return: {{ $return }}</li></li>
        </ul>
    @else
        <p>Nie znaleziono lotu tam</p>
    @endif
    @if(count($flights2))
        <p>Lot z powrotem</p>
        <ul>
            @foreach ($flights2 as $item)
                <li>id: {{ $item->id }}</li></li>
                <li>airplaneId: {{ $item->airplaneId }}</li></li>
                <li>departureAirportId: {{ $item->departureAirportId }}</li></li>
                <li>arrivalAirportId: {{ $item->arrivalAirportId }}</li></li>
                <li>departureTime: {{ $item->departureTime }}</li></li>
                <li>arrivalTime: {{ $item->arrivalTime }}</li></li>
                <li>dayOfTheWeek {{ $item->dayOfTheWeek }}</li></li>
            @endforeach
            <li>departure: {{ $departure }}</li></li>
            <li>return: {{ $return }}</li></li>
        </ul>
    @else
        <p>Nie znaleziono lotu z powrotem</p>
    @endif
@endsection