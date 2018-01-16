<!doctype html>
        <html lang="en" id="top">
        <head>
            <meta charset="UTF-8">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="/css/app.css">
            <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
            <link href="css/index.css" rel="stylesheet">
            <link href="css/one.css" rel="stylesheet">
            <link href="css/foundation-icons.css" rel="stylesheet">

            <title>Foundation-admin-dashboard-template by sidnan</title>
        </head>

        <body>
        <nav class="tab-bar">
            <section class="left-small">
                <a class="menu-icon" id="menu-toggle"><span></span></a>
            </section>

            <section class="middle tab-bar-section">
                Foundation-admin-dashboard-template
            </section>
        </nav>

        <div id="wrapper" class="toggled">
            <!-- side bar -->
        @include('layout/Header4')

        <!-- page content -->
            <div id="page-content-wrapper" class="toggled">
        <div class="">
            <div class="row">
                <div class="large-12 columns">
                    <div class="row column text-center">
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
                            <div class="medium-4 small-centered columns   ">
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
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/index.js"></script>
<script>
    $(document).foundation;
</script>

</body>
</html>
