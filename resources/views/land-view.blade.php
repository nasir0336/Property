
    <!-- side bar -->
@include('layout/Header4')

<!-- page content -->
    <div id="page-content-wrapper" class="toggled">


        <div class="large-12 columns ">


            <div class="row column ">
                <h2>Lands For Sale</h2>
                <hr>
            </div>

            @php $a=1; @endphp
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

                                <textarea rows="2" placeholder="Discription" readonly="true">{{ $land->discription }}</textarea>
                                <a href=" {{  route('addland') }}">Add</a>
                                <a href=" /update/{{ $land->id }} ">Update</a>
                                <a href="/delete/{{ $land->id }}">Delete</a>
                            </div>
                        </div>
                        @php $a++; @endphp
                    </div>
                @endforeach

            </div>

            {{ $lands->links() }}




</div>

    </div>
    @include('layout/Footer4')