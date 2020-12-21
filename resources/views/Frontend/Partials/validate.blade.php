@if($errors->any())
    @foreach($errors->all() as $error)
        <small>{{$error}}</small>
    @endforeach
@endif
