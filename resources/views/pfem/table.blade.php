<div
    class="relative overflow-x-auto shadow-md sm:rounded-lg lg:my-0 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="bg-transparent border-b font-bold py-4">
        <div class="w-full">
            <h6 class="m-0 ml-4 text-lg text-secondary-dark">Season 2023/24</h6>
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <label for="checkbox-all-search">Pos.</label>
                </th>
                <th scope="col" class="px-6 py-3">
                    Club
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Played
                </th>
                <th scope="col" class="px-6 py-3 hidden text-center md:table-cell">
                    Won
                </th>
                <th scope="col" class="px-6 py-3 hidden text-center md:table-cell">
                    Drawn
                </th>
                <th scope="col" class="px-6 py-3 hidden text-center md:table-cell">
                    Lost
                </th>
                <th scope="col" class="px-6 py-3 hidden md:table-cell">
                    GF
                </th>
                <th scope="col" class="px-6 py-3 hidden md:table-cell">
                    GA
                </th>
                <th scope="col" class="px-6 py-3">
                    GD
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Points
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($mydatafem as $match)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                @if($match['position'] == "1")
                <td class="w-4 p-4 border-l-8 border-l-green-500">
                    <div class="flex items-center ">
                        {{$match['position']}}
                    </div>
                </td>
                @elseif ($match['position'] == "2")
                <td class="w-4 p-4 border-l-8 border-l-yellow-300">
                    <div class="flex items-center ">
                        {{$match['position']}}
                    </div>
                </td>
                @else
                <td class="w-4 p-4">
                    {{$match['position']}}
                </td>
                @endif
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10 rounded-full" src="/{{$match['img']}}" alt="{{$match['title']}}">
                    <div class="pl-3">
                        <div class="text-base font-semibold">{{$match['title']}}</div>
                    </div>
                </th>
                <td class="px-6 py-4 text-center">
                    {{$match['pj']}}
                </td>
                <td class="px-6 py-4 hidden text-center md:table-cell">
                    {{$match['pwon']}}
                </td>
                <td class="px-6 py-4 hidden text-center md:table-cell">
                    {{$match['pdraw']}}
                </td>
                <td class="px-6 py-4 hidden text-center md:table-cell">
                    {{$match['plost']}}
                </td>
                <td class="px-6 py-4 hidden md:table-cell">
                    {{$match['goalsAF']}}
                </td>
                <td class="px-6 py-4 hidden md:table-cell">
                    {{$match['goalsEN']}}
                </td>
                <td class="px-6 py-4">
                    {{$match['dif']}}
                </td>
                <td class="px-6 py-4 text-center">
                    <b>{{$match['points']}}</b>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>