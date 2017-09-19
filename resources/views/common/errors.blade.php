@if(sizeof($errors) > 0)
    <div class="alert alert-danger">
        <b>Uh oh!</b> There were some errors:

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif