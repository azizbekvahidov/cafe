@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Новый продукт</h3></a>
        </li>
    </ol>

    <div class="container-fluid">
        <div class="col-lg-12 col-12">
            <div class="card border-info">
                <div class="card-body">
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="select21" class="control-label">
                                    Наименование
                                </label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="select21" class="control-label">
                                    Категория
                                </label>
                                <select id="select21" class="form-control select2" style="width:100%" name="category">
                                    <option value="" selected="selected">Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="container row">
                            <div class="form-group">
                                <label for="select21" class="control-label">
                                    Ед.измерения
                                </label>
                                <select id="measures" class="form-control select2" name="measures" id="measures">
                                    <option value="" selected="selected">Выберите ед.измерения</option>
                                    @foreach($measures as $measure)
                                    <option value="{{$measure->id}}">{{$measure->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <div class="form-group ml-5">
                                    <label for="iradio" class="control-label ml-3">
                                    </label>
                                    <div class="form-group m-2">
                                        {{$productTypes->count() ? ' Тип: ' : ' ' }}
                                        @foreach($productTypes as $productType)
                                        <label class="iradio ml-3">
                                            <input type="radio" id="productTypes" name="productTypes" value="{{$productType->id}}">
                                            {{$productType->name}}
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group m-5">
                                    <input name="image" type="file" accept="image/jpeg, image/png, image/jpg" id="image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select21" class="control-label">
                                    Количество
                                </label>
                                <input type="text" class="form-control" name="cnt" id="cnt">
                            </div>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#large_modal">
                                Поменять структуру
                            </button>
                            <div id="large_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Структура</h4>

                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            This is a large modal.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 pull-right">
                        <button type="submit" class="btn btn-outline-primary rounded">Сохранить</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
