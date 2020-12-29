@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Post</h1>

    <div class="g-mb-80">
        <form action="{{route('post.update',$reg->blog_id)}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group">
                <label for="inputTitulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $reg->titulo }}">
            </div>
            <div class="form-group">
                <label for="inputAutor">Autor </label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{ $reg->autor }}">
            </div>
            <div class="form-group">
                <label for="inputDesc">Descrição </label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{ $reg->desc }}">
            </div>
            <div class="form-group">
                <label for="inputDate">Data da publicação </label>
                <input type="date" class="form-control" id="dateblog" name="dateblog" value="{{ $reg->dateblog }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection