@extends('app')

@section('content')
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
            <p class="m-auto"><i class="fa-solid fa-plane"></i> Flights</p>
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
                        <div class="flex justify-between">
                            <div class="w-full">
                                <p class="text-center text-3xl">{{ $departure }}</p>
                                <div class="flex">
                                    <div class="flex flex-col">
                                        <p class="text-2xl">{{ $item->departureTime }}</p>
                                        <p class="">{{ $item->departureAirport }}</p>
                                    </div>
                                    <div class="w-full px-12">
                                        <div class="flex items-center py-4">
                                            <div class="flex-grow h-px bg-gray-400"></div> 
                                            <span class="flex-shrink text-2xl px-4"><i class="fa-solid fa-plane"></i></span>
                                            <div class="flex-grow h-px bg-gray-400"></div>
                                        </div>
                                        <div class="text-center">Duration 
                                        @php
                                            $dTime = new DateTime($item->departureTime);
                                            $aTime = new DateTime($item->arrivalTime);
                                            echo $dTime->diff($aTime)->format('%H:%I:%S'); 
                                        @endphp
                                        </div>
                                    </div>
        
                                    <div class="flex flex-col">
                                        <p class="text-2xl">{{ $item->arrivalTime }}</p>
                                        <p class="">{{ $item->arrivalAirport }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col pl-24">
                                <p class="text-c-primary text-3xl font-semibold">zł49.00</p>
                                <button class="bg-c-secondary py-1 mt-1 rounded-full">Select</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-c-primary text-2xl font-semibold">{{ $cityTo }} to {{ $cityFrom }}</h2>
                <div class="shadow-md p-8">
                    <div class="flex flex-col">
                        <p>Flight not available, try choosing a different date</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="pt-8">
            @if($flights2Available)
                <h2 class="text-c-primary text-2xl font-semibold">{{ $cityTo }} to {{ $cityFrom }}</h2>
                
                @foreach ($flights2 as $item)
                    <div class="shadow-md p-8">
                        <div class="flex justify-between">
                            <div class="w-full">
                                <p class="text-center text-3xl">{{ $return }}</p>
                                <div class="flex">
                                    <div class="flex flex-col">
                                        <p class="text-2xl">{{ $item->departureTime }}</p>
                                        <p class="">{{ $item->departureAirport }}</p>
                                    </div>
                                    <div class="w-full px-12">
                                        <div class="flex items-center py-4">
                                            <div class="flex-grow h-px bg-gray-400"></div> 
                                            <span class="flex-shrink text-2xl px-4"><i class="fa-solid fa-plane"></i></span>
                                            <div class="flex-grow h-px bg-gray-400"></div>
                                        </div>
                                        <div class="text-center">Duration 
                                        @php
                                            $dTime = new DateTime($item->departureTime);
                                            $aTime = new DateTime($item->arrivalTime);
                                            echo $dTime->diff($aTime)->format('%H:%I:%S'); 
                                        @endphp
                                        </div>
                                    </div>
        
                                    <div class="flex flex-col">
                                        <p class="text-2xl">{{ $item->arrivalTime }}</p>
                                        <p class="">{{ $item->arrivalAirport }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col pl-24">
                                <p class="text-c-primary text-3xl font-semibold">zł49.00</p>
                                <button class="bg-c-secondary py-1 mt-1 rounded-full">Select</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-c-primary text-2xl font-semibold">{{ $cityTo }} to {{ $cityFrom }}</h2>
                <div class="shadow-md p-8">
                    <div class="flex flex-col">
                        <p>Flight not available, try choosing a different date</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection