@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Продукты</h3></a>
        </li>
    </ol>
    <div class="raw">
        <div class="container">
            <div class="card card-success">
                <div class="card-header text-white bg-secondary">
                    <a href="{{ route('products.create') }}" class="btn btn-icon btn-primary m-r-50 pull-right rounded">Создать</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Наименование</th>
                                <th>Тип</th>
                                <th>Ед.измерения</th>
                                <th>Количество</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->productTypes['name'] }}</td>
                                    <td>{{ $product->measures['name'] }}</td>
                                    <td>{{ $product->cnt }}</td>
                                    <td class="actions">
                                        <a href="" class="icon"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="icon"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('products.destroy', $product->id) }}" class="icon"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
