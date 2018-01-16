@extends('layout.Master')

@section('content')

    <div class="row column text-center">
        <h2>Lands for sale</h2>
        <hr>
    </div>

    @php $a=1; @endphp
    <div class="row">

    @foreach($name as $land)
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

                        <textarea rows="2" placeholder="Discription" readonly="true">{{ $land->discription }}</textarea>


                    </div>
            </div>
        @php $a++; @endphp
        </div>
    @endforeach

    </div>

    {{ $name->links() }}


@endsection