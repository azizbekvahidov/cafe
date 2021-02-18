@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Категории</h3></a>
        </li>
    </ol>
    <div class="raw">
        <div class="container-fluid">
            <div class="card border-secondary">
                <div class="card-header text-white bg-secondary">
                    <a href="{{route('categories.create')}}" class="btn btn-icon btn-primary m-r-50 pull-right rounded">Создать</a>
                </div>

                <div class="card-body">
                    <div class="table table-striped table-bordered">
                        <table class="table text-center" id="table1">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>#</th>
                                <th>Наименование</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="actions">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="icon"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('categories.destroy', $category->id) }}" class="icon"><i class="fa fa-trash"></i></a>
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
