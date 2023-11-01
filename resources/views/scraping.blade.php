@extends('layouts.app')
<div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">

    <!-- Component Start -->
    <h1 class="text-lg text-gray-400 font-medium">2023-24 Season</h1>
    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full text-sm text-gray-400">
                        <thead class="bg-gray-800 text-xs uppercase font-medium">
                            <tr>
                                <th></th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    Club
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    MP
                                </th>
                                <th scope="col" class="px-6 py-3 text-left hidden tracking-wider">
                                    W
                                </th>
                                <th scope="col" class="px-6 py-3 text-left hidden tracking-wider">
                                    D
                                </th>
                                <th scope="col" class="px-6 py-3 text-left hidden tracking-wider">
                                    L
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    GF
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    GA
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    GD
                                </th>
                                <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                    Pts.
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-800">
                            @foreach($mydata as $match)
                            <tr>
                                @if($match['position'] == "1" || $match['position'] == "2")
                                <td class="pl-4 border-l-8 border-l-green-500">
                                    {{$match['position']}}
                                </td>
                                @elseif ($match['position'] == "11" || $match['position'] == "12" )
                                <td class="pl-4 border-l-8 border-l-red-600">
                                    {{$match['position']}}
                                </td>

                                @else
                                <td class="pl-4">
                                    {{$match['position']}}
                                </td>
                                @endif
                                <td class="flex px-6 py-4 whitespace-nowrap">
                                    <img class="w-5 rounded-full" src="{{$match['img']}}" alt="">
                                    <span class="ml-2 font-medium">{{$match['title']}}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$match['pj']}}
                                </td>
                                <td class="px-6 py-4 hidden whitespace-nowrap">
                                    {{$match['pwon']}}
                                </td>
                                <td class="px-6 py-4 hidden whitespace-nowrap">
                                    {{$match['pdraw']}}
                                </td>
                                <td class="px-6 py-4 hidden whitespace-nowrap">
                                    {{$match['plost']}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$match['goalsAF']}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$match['goalsEN']}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$match['dif']}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="ml-2 font-medium bold"> {{$match['points']}}</span>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>