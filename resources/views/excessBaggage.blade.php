@extends('app')

@section('content')
    <div class="bg-fixed bg-center bg-cover custom-baggage h-96">
    </div>
    <div class="w-3/5 container mx-auto py-4">
        <h2 class="text-4xl py-4 font-semibold text-center">Baggage on short-haul flights</h2>
        <div class="flex justify-evenly pt-4">
            <div class="bg-c-primary w-2/5 p-4">
                <p class="text-2xl text-white text-center py-4">Carry-on baggage</p>
                <ul class="text-white p-4 list-disc">
                    <li>Carry-on luggage should fit in the overhead locker on board or under the passenger seat in front.</li>
                    <li>Dimensions of each item of baggage should not exceed 55 cm of height, 40 cm of width, and 23 cm of depth.</li>
                    <li>If your carry-on baggage exceeds the allowed limit, an additional charge will apply. Check out the charges excess carry-on baggage.</li>
                </ul>
            </div>
            <div class="bg-c-primary w-2/5 p-4">
                <p class="text-2xl text-white text-center py-4">Checked baggage</p>
                <ul class="text-white p-4 list-disc">
                    <li>Dimensions of one baggage item must not exceed 158 cm (height + width + depth).</li>
                    <li>If your baggage exceeds the allowed free-of-charge limit (in terms of weight, quantity or dimensions), an additional charge will apply. Read the charges for excess baggage</li>
                </ul>
            </div>
        </div>
        <h2 class="text-4xl py-4 font-semibold text-center">Baggage on long-haul flights</h2>
        <div class="flex justify-evenly pt-4">
            <div class="bg-c-primary w-2/5 p-4">
                <p class="text-2xl text-white text-center py-4">Carry-on baggage</p>
                <ul class="text-white p-4 list-disc">
                    <li>In addition, included in the price of your ticket, you may take one of the following items as your carry-on baggage:</li>
                    <li>a handbag/men's bag or a small backpack or a sachet/fanny pack (max. 2kg, dimensions 40 cm x 35 cm x 12 cm),</li>
                    <li>a laptop,</li>
                    <li>an umbrella,</li>
                    <li>a small photo camera or a pair of binoculars.</li>
                </ul>
            </div>
            <div class="bg-c-primary w-2/5 p-4">
                <p class="text-2xl text-white text-center py-4">Checked baggage</p>
                <ul class="text-white p-4 list-disc">
                    <li>See what checked baggage limits you are entitled to depending on your travel class and destination:</li>
                    <li>3 x 32 kg</li>
                    <li>2 x 23 kg</li>
                    <li>1 x 23 kg</li>
                    <li>Remember: Dimensions of one baggage item must not exceed 158 cm [height + width + depth].</li>
                </ul>
            </div>
        </div>
    </div>
@endsection