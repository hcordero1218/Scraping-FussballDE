<div class="my-4 lg:my-0 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="bg-transparent border-b font-bold py-4">
        <div class="flex items-center">
            <div class="w-full">
                <h6 class="m-0 ml-4 text-lg text-secondary-dark">Last Match</h6>
            </div>
        </div>
    </div>


    @php $count = 0 @endphp
    @foreach ($datalastmatchpfem as $row)
    @if ($count >= 1)
    @break
    @endif
    <div class="p-10">
        <div class="flex justify-center">
            <div class="w-1/4 text-center">
                <img src="{{$row['IMGHome']}}" class="mx-auto my-3 lg:my-0" alt="{{$row['TeamHome']}}">
            </div>
            <div class="w-1/4 text-center align-baseline">
                <p class="text-xl font-bold">{{$row['ScoreHome']}} - {{$row['ScoreAway']}}</p>
            </div>
            <div class="w-1/4 text-center">
                <img src="{{$row['IMGAway']}}" class="mx-auto my-3 lg:my-0" alt="{{$row['TeamAway']}}">
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