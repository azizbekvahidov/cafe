@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Ед.измерения</h3></a>
        </li>
    </ol>
    <div class="raw">
    <div class="container-fluid">
        <div class="card border-secondary">
            <div class="card-header text-white bg-secondary">

                <a href="{{route('measures.create')}}" class="btn btn-icon btn-primary m-r-50 pull-right rounded">Создать</a>
            </div>

            <div class="card-body">
                <div class="table table-bordered table-striped">
                    <table class="table text-center" id="table1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Наименование</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($measures as $measure)
                        <tr>
                            <td>{{ $measure->id }}</td>
                            <td>{{ $measure->name }}</td>
                            <td class="actions">
                                <a href="{{ route('measures.edit', $measure->id) }}" class="icon"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('measures.destroy', $measure->id) }}" class="icon"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
