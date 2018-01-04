<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
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
@include('layout/Footer1')
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
