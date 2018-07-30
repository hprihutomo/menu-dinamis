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
                    {{ $tarif }}
                    {{-- <table class="table table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Parent</th>
                            <th>Nama</th>
                            <th>Link</th>
                        </thead>
                        <tbody>
                            @if($menu->count() > 0)
                                @foreach ($menu as $key => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->parent_id }}</td>
                                        <td>{{ $value->menu }}</td>
                                        <td>{{ $value->link }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5"> Data Tidak ada</td>
                                </tr>
                            @endif
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
