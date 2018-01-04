@extends('layout.Master')

@section('content')

    <div class="row column text-center">
        <h2>Admin</h2>
        <hr>
    </div>
    <div class="row">
        <div class="medium-6 columns ">
            <label>Name
                <input type="text" placeholder="Name">
            </label>
            <label>Email
                <input type="text" placeholder="Email">
            </label>

            <input type="submit" class="button expanded" value="Submit">
        </div>
    </div>


@endsection