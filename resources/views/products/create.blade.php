@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Products</h1>
    <div class="g-mb-80">
        <form action="{{ route('product.store')}}" method="POST">
        {{ csrf_field() }}
<!-- 'name','price',desc', 'img_1','img_2','img_3','img_destaque','thumbnail','sale', 'status','categoria', 'destaque'-->
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>

            <div class="form-group">
                <label for="inputPrice">Preço</label>
                <input type="text" class="form-control" id="price" name="price" >
            </div>

            <div class="form-group">
                <label for="inputDesc">Descrição do Produto </label>
                <input type="text" class="form-control" id="desc" name="desc" >
            </div>

            <div class="form-group">
                <label for="inputImg_1">Primeira Imagem </label>
                <input type="text" class="form-control" id="img_1" name="img_1" >
            </div>

            <div class="form-group">
                <label for="inputImg_2">Segunda Imagem </label>
                <input type="text" class="form-control" id="img_2" name="img_2" >
            </div>

            <div class="form-group">
                <label for="inputImg_3">Terceira Imagem </label>
                <input type="text" class="form-control" id="img_3" name="img_3" >
            </div>

            <div class="form-group">
                <label for="inputImg_destaque">Imagem para destaque </label>
                <input type="text" class="form-control" id="img_destaque" name="img_destaque" >
            </div>

            <div class="form-group">
                <label for="inputThumbnail">Thumbnail</label>
                <input type="text" class="form-control" id="thumbnail" name="thumbnail" >
            </div>

                

            <div class="form-group">
                <label for="inputSale">Promoção</label>
                <input type="text" class="form-control" id="sale" name="sale" >
            </div>


            <div class="form-group">
                <label for="inputStatus">Status</label>
                <input type="text" class="form-control" id="status" name="status" >
            </div>
    
    
            <select id='categoria_id' name='categoria' class='form-control'>

            <option value=''>selecione um categoria </option>    
            @foreach($catglist as $prod)

            <option value='{{ $prod->categoria_id }}'>{{ $prod->collection }} </option> 


            @endforeach
            </select>

            <div class="form-check">
                
                <input type="checkbox" class="form-check-input" id="destaque" name="destaque" ><label for="destaque" class="form-check-label">destaque</label>
            </div>
            <div class="form-check">
                
                <input type="checkbox" class="form-check-input" id="lancamento" name="lancamento" ><label for="lancamento" class="form-check-label">Lançamento</label>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection