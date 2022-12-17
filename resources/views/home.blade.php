@extends('app')

@section('content')
    <form action="{{ url('flight/select') }}" method="POST" class="w-full bg-c-primary pb-8">
        @csrf
        <div class="w-3/5 container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="flex flex-col gap-2 gap-y-8 pb-4 w-8/12">
                <div class="grid grid-cols-2 gap-2">
                    <div class="h-8 bg-c-gray">
                        <label for="cityFromInput" class="block pl-1 text-gray-500">From</label>
                        <input list="cityFrom" name="cityFrom" id="cityFromInput" value="{{ old('cityFrom') }}" class="focus:outline-none pl-1 text-black w-full h-full bg-c-gray">
                    </div>
                    <datalist id="cityFrom">
                        @foreach($airports as $airport)
                            <option value="{{ $airport->city }} ({{ $airport->code }})">
                        @endforeach
                    </datalist>

                    <div class="h-8 bg-c-gray">
                        <label for="cityToInput" class="block pl-1 text-gray-500">To</label>
                        <input list="cityTo" name="cityTo" id="cityToInput" value="{{ old('cityTo') }}" class="focus:outline-none pl-1 text-black w-full h-full bg-c-gray">
                    </div>
                    <datalist id="cityTo">
                        @foreach($airports as $airport)
                            <option value="{{ $airport->city }} ({{ $airport->code }})">
                        @endforeach
                    </datalist>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <div class="h-8 bg-c-gray">
                        <label for="departureInput" class="block pl-1 text-gray-500">Departure</label>
                        <input type="text" name="departure" id="departureInput" value="{{ old('departure') }}" onfocus="(this.type='date')" class="focus:outline-none pl-1 w-full h-full bg-c-gray text-black">
                    </div>

                    <div class="h-8 bg-c-gray">
                        <label for="returnInput" class="block pl-1 text-gray-500">Return</label>
                        <input type="text" name="return" id="returnInput" value="{{ old('return') }}" onfocus="(this.type='date')" class="focus:outline-none pl-1 w-full h-full bg-c-gray text-black">
                    </div>
                
                    <div class="h-8 bg-c-gray">
                        <label for="passengerInput" class="block pl-1 text-gray-500">Passengers</label>
                        <input type="number" min="1" name="passengers" id="passengerInput" value="{{ old('passengers') }}" class="focus:outline-none pl-1 w-full h-full bg-c-gray text-black">
                    </div>
                </div>
            </div>
            <div class="flex flex-col px-4 w-4/12">
                <div class="grid grid-cols-1 gap-2">
                    <p class="text-xs text-white">By clicking search you agree to the Website Terms of Use</p>
                    <input type="submit" value="Szukaj" class="bg-c-secondary h-8 hover:bg-blue-400">
                    @if ($errors->any())
                        <div class="text-red-600">{{ $errors->all()[0]}}</div>
                    @endif
                </div>
            </div>
        </div>
    </form>
    </nav>
    <div class="bg-fixed bg-center bg-cover custom-img h-96">
    </div>
    <div class="w-3/5 container mx-auto flex flex-wrap items-center justify-between mt-0 pt-4 pb-12">
        <div class="text-2xl w-full pb-8">Explore Europe</div>
        <div class="grid grid-cols-4 gap-6 w-full">
            <div class="bg-c-primary h-48 w-full flex justify-center items-center text-2xl text-white">Route Map</div>
            <div class="bg-c-primary h-48 w-full flex justify-center items-center text-2xl text-white">Travel Updates</div>
            <div class="bg-c-primary h-48 w-full flex justify-center items-center text-2xl text-white">Flight Timetable</div>
            <div class="bg-c-primary h-48 w-full flex justify-center items-center text-2xl text-white">My Bookings</div>
        </div>

        <div class="text-2xl w-full py-8">Explore Europe</div>
        <div class="grid grid-cols-4 gap-6 w-full">
            <div class="bg-c-primary h-72 w-full flex justify-center items-center">
                <div>
                    <p class="text-2xl text-white text-center">Excess <br/> Baggage</p>
                    <i class="fa-solid fa-cart-flatbed-suitcase flex justify-center align-center text-7xl pt-6"></i>
                </div>
            </div>
            <div class="bg-c-primary h-72 w-full flex justify-center items-center">
                <div>
                    <p class="text-2xl text-white text-center">Favourite Seat</p>
                    <i class="fa-solid fa-chair flex justify-center align-center text-7xl pt-6"></i>
                </div>
            </div>
            <div class="bg-c-primary h-72 w-full flex justify-center items-center">
                <div>
                    <p class="text-2xl text-white text-center">Travelling with children</p>
                    <i class="fa-solid fa-children flex justify-center align-center text-7xl pt-6"></i>
                </div>
            </div>
            <div class="bg-c-primary h-72 w-full flex justify-center items-center">
                <div>
                    <p class="text-2xl text-white text-center">Travelling <br/> with animals</p>
                    <i class="fa-solid fa-dog flex justify-center align-center text-7xl pt-6"></i>
                </div>
            </div>
        </div>
    </div>
@endsection