
    <!-- side bar -->
@include('layout/Header4')

<!-- page content -->
    <div id="page-content-wrapper" class="toggled">
        <div class="">
            <div class="row">
                <div class="large-12 columns ">


                    <div class="row column">
                        <h2>Add Land </h2>
                        <hr>
                    </div>
                    @if(\Session::has('message'))
                        {{\Session::get('message')}}
                    @endif
                    @php
                        $id= isset($record->id) ? $record->id  : 0;
                        $name= isset($record->name) ? $record->name  : '';
                        $discription= isset($record->discription) ? $record->discription  : '';
                        $imageurl=isset($record->imageurl) ? $record->imageurl  : '';
                        $route= $id > 0 ? route('updateLand', $id ) : route('createLand');
                    @endphp

                    <form method="post" action="{{ $route }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="medium-4 columns end ">
                                <label>Name
                                    <input type="text" name="name" value="{{ $name }}" placeholder="Name">
                                </label>
                                <label>
                                    Discription
                                    <textarea placeholder="Enter Discription" name="discription" >{{$discription}}</textarea>
                                </label>

                                <input type="file" class="button expanded" name="filename" value="Submit">
                                @if($id == 0)
                                    <input type="submit" class="button expanded" value="Submit">
                                @else
                                    <input type="submit"  class="button expanded" value="Update">
                                @endif
                            </div>
                        </div>
                    </form>




                </div>
            </div>
        </div>

    </div>

    @include('layout/Footer4')
