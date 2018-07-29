@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-menu">
                        @foreach($menu as $index => $item)
                          @if($item->count() == 0)
                          <li class="{{ active_link($item->url) }}">
                            <a href="{{ $item->menu}}">{{ $item->menu }}</a>
                          </li>
                          @else
                          <li class="tree">
                              <a href="#">{{ $item->menu }} <i class="zmdi zmdi-chevron-down"></i></a>
                              <ul class="sub-menu">
                                @foreach($list->where('parent_id',$item->id) as $subindex => $subitem)
                                  <li>
                                      <a href="{{ $subitem->link }}">{{ $subitem->menu }}</a>
                                  </li>
                                @endforeach
                              </ul>
                          </li>
                          @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
