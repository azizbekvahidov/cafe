@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Меню</h3></a>
        </li>
    </ol>
    <div class="raw">
        <div class="container-fluid">
            <div class="card border-secondary">
                <div class="card-header text-white bg-secondary">

                    <a href="{{route('menu.create')}}" class="btn btn-icon btn-primary m-r-50 pull-right rounded">Создать</a>
                </div>

                <div class="card-body">
                    <div class="table table-bordered table-striped">
                        <table class="table text-center" id="table1">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>#</th>
                                <th>Наименование</th>
                                <th>Приоритет</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menu as $val)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $val->id }}</td>
                                    <td>{{ $val->name }}</td>
                                    <td>{{ $val->priority }}</td>
                                    <td class="actions">
                                        <a href="{{ route('menu.edit', $val->id) }}" class="icon"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('menu.destroy', $val->id) }}" class="icon"><i class="fa fa-trash"></i></a>
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
