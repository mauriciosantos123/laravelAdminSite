@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Categoria</h1>
    <div class="g-mb-80">
        <form action="{{ route('categoria.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="form-group">
                <label for="inputCollection">Collection</label>
                <input type="text" class="form-control" id="collection" name="collection" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection