@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Categoria</h1>

    <a href="{{route('categoria.create')}}" class="btn btn-primary">Nova Categoria</a>

    <div class="table-responsive g-mb-40 table-primary">
        <table class="table u-table--v3 g-color-black">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Collections</th>
                    <th>Actions</th>

                </tr>
            </thead>

            <tbody>
                @foreach($listcatg as $catg)

                <td>{{ $catg->name }}</td>
                <td>{{ $catg->collection }}</td>
          
                   
                    <td class="row">
                        <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="{{route('categoria.edit',$catg->categoria_id)}}">
                            <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                            Edit
                        </a>
                        <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14 danger" href="#">
                            <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md "></i>
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