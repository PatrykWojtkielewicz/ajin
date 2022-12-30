@extends('app')

@section('content')

    {{-- @if(count($flights1))
        <p>Lot tam</p>
        <ul>
            @foreach ($flights1 as $item)
                <li>departureAirport: {{ $item->departureAirport }}</li>
                <li>arrivalAirport: {{ $item->arrivalAirport }}</li>
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
    @if(count($flights2))
        <p>Lot z powrotem</p>
        <ul>
            @foreach ($flights2 as $item)
                <li>departureAirport: {{ $item->departureAirport }}</li>
                <li>arrivalAirport: {{ $item->arrivalAirport }}</li>
                <li>dayOfTheWeek: {{ $item->dayOfTheWeek }}</li></li>
                <li>departureTime: {{ $item->departureTime }}</li></li>
                <li>arrivalTime: {{ $item->arrivalTime }}</li></li>
            @endforeach
            <li>departure: {{ $departure }}</li></li>
            <li>return: {{ $return }}</li></li>
        </ul>
    @else
        <p>Nie znaleziono lotu z powrotem</p>
    @endif --}}
    <div class="shadow-lg">
        <div class="w-3/5 container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
            <div class="flex flex-col">
                <p class="text-lg text-c-primary font-semibold">{{ $cityFrom }} <-> {{ $cityTo }} <i class="fa-solid fa-user"></i> {{ $passengers }}</p>
                <p>Departure: @if($flights1Available){{ $departure }}@else N/A @endif</p>
                <p>Return:  @if($flights2Available){{ $return }}@else N/A @endif</p>
            </div>
        </div>
    </div>
    <div class="w-3/5 container mx-auto mt-0 py-4">
        <div class="flex justify-between w-full bg-c-gray p-5 rounded-full">
            <p class="m-auto"><i class="fa-sharp fa-solid fa-plane-departure"></i> Flights</p>
            <p>></p>
            <p class="m-auto"><i class="fa-solid fa-chair"></i> Seats</p>
            <p>></p>
            <p class="m-auto"><i class="fa-solid fa-suitcase"></i> Bags</p>
            <p>></p>
            <p class="m-auto"><i class="fa-solid fa-bus"></i> Extras</p>
            <p>></p>
            <p class="m-auto"><i class="fa-solid fa-credit-card"></i> Review & Pay</p>
        </div>
        <div class="pt-8">
            @if($flights1Available)
                <h2 class="text-c-primary text-2xl font-semibold">{{ $cityFrom }} to {{ $cityTo }}</h2>
                
                @foreach ($flights1 as $item)
                    <div class="shadow-md p-8">
                        <p class="text-center text-3xl">{{ $departure }}</p>
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="text-2xl">{{ $item->departureTime }}</p>
                                <p class="">{{ $item->departureAirport }}</p>
                            </div>
                            <div class="w-full">
                                flight time
                            </div>

                            <div class="flex flex-col">
                                <p class="text-2xl">{{ $item->arrivalTime }}</p>
                                <p class="">{{ $item->arrivalAirport }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <li>departureAirport: {{ $item->departureAirport }}</li>
                    <li>arrivalAirport: {{ $item->arrivalAirport }}</li>
                    <li>dayOfTheWeek: {{ $item->dayOfTheWeek }}</li></li>
                    <li>departureTime: {{ $item->departureTime }}</li></li>
                    <li>arrivalTime: {{ $item->arrivalTime }}</li></li> --}}
                @endforeach
                {{-- <li>departure: {{ $departure }}</li></li>
                <li>return: {{ $return }}</li></li> --}}
            @else
                <p>Nie znaleziono lotu tam</p>
            @endif
        </div>
    </div>
@endsection