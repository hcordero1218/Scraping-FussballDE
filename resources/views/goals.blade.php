<style>
  @font-face {
	font-family: font-h24voskl;
	src: 
		url('https://www.fussball.de/export.fontface/-/format/woff/id/h24voskl/type/font') format('woff'),
		url('https://www.fussball.de/export.fontface/-/format/ttf/id/h24voskl/type/font') format('truetype');
}

.results-c-h24voskl {
	font-family: font-h24voskl !important;
}
</style>
<div class="flex justify-center">
  @foreach($mydata as $match)
  <div class="block rounded-lg shadow-lg max-w-sm text-center bg-gray-900">
    <div class="flex-initial w-64 py-3 px-6 border-b border-gray-300 text-gray-400">
      {{$match['type']}}
    </div>
    <div class="p-6">
      <h5 class="text-gray-400 text-xl font-medium mb-2">{{$match['teamhome']}}</h5>
      <p class="text-gray-400 text-base mb-4">
        VS <span class="results-c-h24voskl">{{$match['score']}}</span>
      <h5 class="text-gray-400 text-xl font-medium mb-2">{{$match['teamaway']}}</h5>
    </div>
    <div class="py-3 px-6 border-t border-gray-300 text-gray-500">
      {{$match['date']}}, {{$match['time']}} UHR.
    </div>
  </div>
  <br>
  @endforeach
</div>

</body>
</html>