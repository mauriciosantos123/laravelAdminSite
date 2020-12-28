@extends('comum.index')
@section('content')
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Post</h1>

    <a href="{{route('post.create')}}" class="btn btn-primary">Nova Post</a>

    <div class="table-responsive g-mb-40 table-primary">
        <table class="table u-table--v3 g-color-black">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Descrição </th>
                    <th>Data</th>
                    <th>Ações</th>

                </tr>
            </thead>

            <tbody>
                @foreach($listblog as $blogs)

                <td>{{ $blogs->titulo }}</td>
                <td>{{ $blogs->autor }}</td>
                <td>{{ $blogs->desc }}</td>
                <td>{{ $blogs->dateblog }}</td>
          
<td>
                      <div class="g-pos-rel g-top-3 d-inline-block">
                        <a id="dropDown1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#" aria-controls="dropDown1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown1">
                          <i class="hs-admin-more-alt"></i>
                        </a>

                        <div id="dropDown1" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown" aria-labelledby="dropDown1Invoker">
                          <ul class="list-unstyled g-nowrap mb-0">
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#">
                                <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Edit
                              </a>
                            </li>
                            <li>
                              <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#">
                                <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                Delete
                              </a>
                            </li>
                          </ul>
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