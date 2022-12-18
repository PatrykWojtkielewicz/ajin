@extends('app')

@section('content')
    @if(count($flights1))
        <p>Lot tam</p>
        <ul>
            @foreach ($flights1 as $item)
                <li>airportCode: {{ $item->code }}</li>
                <li>dayOfTheWeek: {{ $item->dayOfTheWeek }}</li></li>
                <li>departureTime: {{ $item->departureTime }}</li></li>
                <li>arrivalTime: {{ $item->arrivalTime }}</li></li>
            @endforeach
            <li>departure: {{ $departure }}</li></li>
            <li>return: {{ $return }}</li></li>
        </ul>
    @else
        <p>Nie znaleziono lotu tam</p>
    @endif
@endsection