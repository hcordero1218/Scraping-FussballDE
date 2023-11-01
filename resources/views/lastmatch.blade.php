    <div class="bg-white shadow-md home box-shadow">
        <div class="bg-transparent border-b font-bold py-4">
            <div class="flex items-center h-16">
                <div class="w-full">
                    <h6 class="m-0 text-lg text-secondary-dark">Last Match</h6>
                </div>
            </div>
        </div>

        @php $count = 0 @endphp
        @foreach ($datalastmatch as $row)
        @if ($count >= 1)
        @break
        @endif
        <div class="p-4">
            <div class="flex justify-center">
                <div class="w-1/4 text-center">
                    <img src="{{$row['IMGHome']}}" class="mx-auto my-3 lg:my-0" alt="Coquimbo Unido">
                </div>
                <div class="w-1/4 text-center align-baseline">
                    <p class="text-xl font-bold">3 - 1</p>
                </div>
                <div class="w-1/4 text-center">
                    <img src="{{$row['IMGAway']}}" class="mx-auto my-3 lg:my-0" alt="U. Española">
                </div>
            </div>
            <div class="mt-3 text-center">
                <p class="font-semibold">{{$row['League']}}</p>
                <p class="font-semibold">{{$row['Date']}} | {{$row['Time']}}</p>
                <p class="font-semibold">{{$row['TeamHome']}} vs {{$row['TeamAway']}}</p>
            </div>
        </div>

        @php $count++ @endphp
        @endforeach
    </div>