<!-- side bar -->
@include('layout/Header4')

<!-- page content -->
<div id="page-content-wrapper" class="toggled">

<div class="row">
    <div class="small-4 columns end">

        <h1><i class='fa fa-key'></i> Add Role</h1>
        <hr>

        {{ Form::open(array('url' => 'roles')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <h5><b>Assign Permissions</b></h5>

        <div class='form-group'>
            @foreach ($permissions as $permission)
                {{ Form::checkbox('permissions[]',  $permission->id ) }}
                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

            @endforeach
        </div>

        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>

<br>

</div>
@include('layout/Footer4')