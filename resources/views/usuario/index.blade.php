@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Usuario</h1>

    <a href="{{route('usuarios.create')}}" class="btn btn-primary">Novo Usuario</a>

    <div class="table-borderless">
        <table class="table u-table--v3 g-color-black">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Data aniversario</th>
                    <th>Telefone</th>
                
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($listusu as $i => $usuar)
                <tr>

         
                    <td>{{ $usuar->name }}</td>
                    <td>{{ $usuar->email }}</td> 
                    <td>{{ $usuar->gender }}</td>
                    <td>{{ $usuar->birthdate }}</td>
                    <td>{{ $usuar->phone }}</td>                 
                <td>
                        <div class="g-pos-rel g-top-3 d-inline-block">
                            <a id="dropDownInvoker{{$i}}" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#" aria-controls="dropDown{{$i}}" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown{{$i}}">
                                <i class="hs-admin-more-alt"></i>
                            </a>
                            <div id="dropDown{{$i}}" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown" aria-labelledby="dropDownInvoker{{$i}}">
                                <form action="{{route('usuarios.destroy', $usuar->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')                                
                                    <ul class="list-unstyled g-nowrap mb-0">
                                        <li>
                                            <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14 btn-info" href="{{route('usuarios.edit', $usuar->id)}}">
                                                <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <button class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14 btn-danger" type="submit">
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