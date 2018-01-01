 @extends('layout.Master')

 @section('content')

     <div class="row column text-center">
        <h2>Contact Us</h2>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 columns">
            <h4>Address</h4>
            <p>street No 1,gohar town Lahore Pakistan.</p>
            <h4>Phone No</h4>
            <p>061-534346</p>
            <h4>Email</h4>
            <p>abc@abc.com</p>

        </div>

        <div class="medium-6 columns">
            <label>Name
                <input type="text" placeholder="Name">
            </label>
            <label>Email
                <input type="text" placeholder="Email">
            </label>
            <label>
                Message
                <textarea placeholder="holla at a designerd"></textarea>
            </label>
            <input type="submit" class="button expanded" value="Submit">
        </div>
    </div>

@endsection