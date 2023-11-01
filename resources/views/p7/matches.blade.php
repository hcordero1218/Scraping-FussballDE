    <div class="my-4 lg:my-0 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="bg-transparent border-b font-bold py-4">
            <div class="flex items-center">
                <div class="w-full">
                    <h6 class="m-0 ml-4 text-lg text-secondary-dark">Next Matches</h6>
                </div>
            </div>
        </div>


        @php $count = 0 @endphp
        @foreach ($datanextmatch as $row)
        @if ($count >= 4)
        @break
        @endif
        <div class="px-4 py-2">
            <div class="flex items-center ">
                <div class="w-1/5 md:w-1/12 text-center">
                    <img src="{{$row['IMGHome']}}" class="w-12 h-12" alt="{{$row['TeamHome']}}">
                </div>
                <div class="w-1/12 md:w-1/12 text-center ">
                    <p class="font-semibold mb-0">VS</p>
                </div>
                <div class="w-1/5 md:w-1/12 text-center ">
                    <img src="{{$row['IMGAway']}}" class="w-12 h-12" alt="{{$row['TeamAway']}}">
                </div>
                <div class="w-2/4 md:w-11/12 text-center md:text-left mt-3 lg:mt-0">
                    <p class="mb-1 px-3">{{$row['League']}} - <b>{{$row['Date']}} | {{$row['Time']}} </b></p>
                    <p class="mb-1 px-3"><b>{{$row['TeamHome']}}</b> vs <b>{{$row['TeamAway']}}</b></p>
                </div>

            </div>
        </div>



        @php $count++ @endphp
        @endforeach
    </div>