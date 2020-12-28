@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">User</h1>

    <div class="g-mb-80">
        <form action="{{ route('.update')}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="name" class="form-control" id="name" name="name" value="{{ $reg->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection