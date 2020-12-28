@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Products</h1>

    <a href="{{route('product.create')}}" class="btn btn-primary">Nova Products</a>

    <div class="table-responsive g-mb-40">
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr> 
                    <th>Nome</th>
                    <th>preço</th>
                    <th>descrição </th>
                    <th>img 1</th>
                    <th>img 2</th>
                    <th>img 3</th>
                    <th>img destaque</th>
                    <th>thumbnail</th>
                    <th>sale</th>
                    <th>status</th>
                    <th>categoria</th>
                    <th>destaque</th>
                    <th>Lançamento</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <!-- 'name','price',desc', 'img_1','img_2','img_3','img_destaque','thumbnail','sale', 'status','categoria', 'destaque'-->
                @foreach($listproduct as $i => $prod)
                <tr>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->desc }}</td>                
                    <td><img src="{{ $prod->img_1 }}" class="w-100" ></td>
                    <td><img src="{{ $prod->img_2 }}" class="w-100" ></td>
                    <td><img src="{{ $prod->img_3 }}" class="w-100" ></td>
                    <td><img src="{{ $prod->img_destaque }}" class="w-100" ></td>
                    <td><img src="{{ $prod->thumbnail  }}" class="w-100" ></td>
                    <td>{{ $prod->sale }}</td>
                    <td>{{ $prod->status }}</td>
                    <td>{{ $prod->categoria }}</td>
                    <td>{{ $prod->destaque }}</td>
                    <td>{{ $prod->lancamento }}</td>
                    <td>
                        <div class="g-pos-rel g-top-3 d-inline-block">
                            <a id="dropDownInvoker{{$i}}" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#" aria-controls="dropDown{{$i}}" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown{{$i}}">
                                <i class="hs-admin-more-alt"></i>
                            </a>
                            <div id="dropDown{{$i}}" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown" aria-labelledby="dropDownInvoker{{$i}}">
                                <form action="{{route('product.destroy', $prod->product_id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')                                
                                    <ul class="list-unstyled g-nowrap mb-0">
                                        <li>
                                            <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="{{route('product.edit', $prod->product_id)}}">
                                                <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <button class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" type="submit">
                                                <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection