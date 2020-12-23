@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Products</h1>

    <a href="{{route('products.create')}}" class="btn btn-primary">Nova Products</a>

    <div class="table-responsive g-mb-40">
        <table class="table u-table--v3 g-color-black">
            <thead>
                <tr> 
                    <th>Nome</th>
                    <th>preço</th>
                    <th>descrição </th>
                    <th>img 1</th>
                    <th>img 2</th>
                    <th>img 3</th>
                    <th>img Destc</th>
                    <th>thumbnail</th>
                    <th>sale</th>
                    <th>status</th>
                    <th>categoria</th>
                    <th>destaque</th>


                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
<!-- 'name','price',desc', 'img_1','img_2','img_3','img_destaque','thumbnail','sale', 'status','categoria', 'destaque'-->
                    @foreach($listproduct as $prod)

                        <td>{{ $prod->name }}</td>
                        <td>{{ $prod->price }}</td>
                        <td>{{ $prod->desc }}</td>
                        <td>{{ $prod->img_1 }}</td>
                        <td>{{ $prod->img_2 }}</td>
                        <td>{{ $prod->img_3 }}</td>
                        <td>{{ $prod->img_destaque }}</td>
                        <td>{{ $prod->thumbnail }}</td>
                        <td>{{ $prod->sale }}</td>
                        <td>{{ $prod->status }}</td>
                        <td>{{ $prod->categoria }}</td>
                        <td>{{ $prod->destaque }}</td>

        <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#">
                            <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                            Edit
                        </a>
                        <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#">
                            <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection