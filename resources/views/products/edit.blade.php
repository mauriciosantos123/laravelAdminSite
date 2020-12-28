@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Products</h1>

    <div class="g-mb-80">
        <form action="{{route('product.update',$registro->product_id)}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
           

            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{ $registro->name }}">
            </div>

            <div class="form-group">
                <label for="inputPrice">Preço</label>
                <input type="text" class="form-control" id="price" name="price"  value="{{ $registro->price }}">
            </div>

            <div class="form-group">
                <label for="inputDesc">Descrição do Produto </label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{ $registro->desc }}">
            </div>

            <div class="form-group">
                <label for="inputImg_1">Primeira Imagem </label>
                <input type="text" class="form-control" id="img_1" name="img_1" value="{{ $registro->img_1 }}">
            </div>

            <div class="form-group">
                <label for="inputImg_2">Segunda Imagem </label>
                <input type="text" class="form-control" id="img_2" name="img_2" value="{{ $registro->img_2 }}">
            </div>

            <div class="form-group">
                <label for="inputImg_3">Terceira Imagem </label>
                <input type="text" class="form-control" id="img_3" name="img_3" value="{{ $registro->img_3 }}">
            </div>

            <div class="form-group">
                <label for="inputImg_destaque">Imagem para destaque </label>
                <input type="text" class="form-control" id="img_destaque" name="img_destaque" value="{{ $registro->img_destaque }}">
            </div>

            <div class="form-group">
                <label for="inputThumbnail">Thumbnail</label>
                <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="{{ $registro->thumbnail }}">
            </div>

                

            <div class="form-group">
                <label for="inputSale">Promoção</label>
                <input type="text" class="form-control" id="sale" name="sale" value="{{ $registro->sale }}">
            </div>


            <div class="form-group">
                <label for="inputStatus">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $registro->status }}">
            </div>
    
    
            <select id='categoria_id' name='categoria' class='form-control'>

            <option value=''>selecione um categoria </option>    
            @foreach($catglist as $prod)

            <option value='{{ $prod->categoria_id }}'>{{ $prod->collection }} </option> 


            @endforeach
            </select>

            <div class="form-check">
                
                <input type="checkbox" class="form-check-input" id="destaque" name="destaque"value="{{ $registro->destaque}}" ><label for="destaque" class="form-check-label">destaque</label>
            </div>
            <div class="form-check">
                
                <input type="checkbox" class="form-check-input" id="lancamento" name="lancamento" value="{{ $registro->lancamento}}"><label for="lancamento" class="form-check-label">Lançamento</label>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection