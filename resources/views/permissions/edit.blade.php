<!-- side bar -->
@include('layout/Header4')

<!-- page content -->
<div id="page-content-wrapper" class="toggled">
<div class="row">
    <div class="small-5 columns end ">

        <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
        <br>
        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

        <div class="form-group">
            {{ Form::label('name', 'Permission Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        <br>
        {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>
<br>


</div>
@include('layout/Footer4')