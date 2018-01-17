<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">

        <!-- Styles -->


    </head>
    <body>

    @include('layout/Header1')

<div class="row">
                <div class="small-3 columns">
                    <h4>Property Markeeting</h4>
                </div>
                <div class="small-6 columns">
                    <input type="search" placeholder="Search" id="search-term" >
                </div>
                  <div class="small-3 columns">
                        <button type="button" class="button postfix" onclick="getRecord()">Search</button>
                    </div>
</div>

     @if(isset($cities))

    <div class="row column text-center">
        <h2>Lands for sale</h2>
        <hr>
    </div>

    @php $a=1; @endphp
<div class="container">
    <div class="row">

        @foreach($cities as $city)
            <div class="medium-4 columns end">
                @if ($a==1 || $a==2||$a==3)
                    <h4>Top Products</h4>
                @endif
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="{{ asset('images'.'/'.$city->imageurl) }}">
                    </div>
                    <div class="media-object-section">
                        <h5>{{ $city->name }}</h5>
                        <h7>{{ "city: ".$city->city }}</h7>
                        <textarea rows="2" placeholder="Discription" readonly="true">{{ $city->discription }}</textarea>


                    </div>
                </div>
                @php $a++; @endphp
            </div>
        @endforeach

    </div>
    {{ $cities->links() }}
</div>
     @else
         <div class="row column text-center">
             <h2>Lands for sale</h2>
             <hr>
         </div>

         @php $a=1; @endphp

<div class="container">
         <div class="row">

             @foreach($lands as $land)
                 <div class="medium-4 columns end">
                     @if ($a==1 || $a==2||$a==3)
                         <h4>Top Products</h4>
                     @endif
                     <div class="media-object">
                         <div class="media-object-section">
                             <img class="thumbnail" src="{{ asset('images'.'/'.$land->imageurl) }}">
                         </div>
                         <div class="media-object-section">
                             <h5>{{ $land->name }}</h5>
                             <h7>{{ "city: ".$land->city }}</h7>
                             <textarea rows="2" placeholder="Discription" readonly="true">{{ $land->discription }}</textarea>


                         </div>
                     </div>
                     @php $a++; @endphp
                 </div>
             @endforeach

         </div>

         {{ $lands->links() }}
</div>
     @endif

                @include('layout/Footer1')

                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
                <script>
                    $(document).foundation();
                </script>
    <script>
var autocomplete;
var input;
        function activatePlacesSearch() {

              input= document.getElementById('search-term');
              autocomplete = new google.maps.places.Autocomplete(input);

        }
        function getRecord() {

            var input= document.getElementById('search-term');
            var a = input.value.split(",")
            var city  = (a[0])
            var url = '{{ route("search_city", ":city") }}';
            url = url.replace(':city', city);
            window.location.href=url;
        }
    </script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3tMTa4Kpf9qlune4xQ8WIfAeRMr0ElRU&libraries=places&callback=activatePlacesSearch"></script>

    </body>
</html>
