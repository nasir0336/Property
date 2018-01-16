 @extends('layout.Master')

 @section('content')

    <div class="row column text-center">
        <h2>Our Newest Houses For Sale</h2>
        <hr>
    </div>
    <div class="row small-up-2 large-up-4">
    @foreach($houses as $house)


        <div class="column">
            <img class="thumbnail" src="{{ asset('images'.'/'.$house->imageurl) }}">
            <h5>{{ $house->name }}</h5>
            <textarea rows="2" placeholder="Discription" readonly="true">{{ $house->discription }}</textarea>
            <a href="#" class="button expanded">Buy</a>
        </div>





    @endforeach
    </div>

@endsection