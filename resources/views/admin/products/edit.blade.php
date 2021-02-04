@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Редактировать продукт</h3>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="col-lg-12 col-12">
            <div class="card border-info">
                <div class="card-body">
                    <form action="{{route('products.update', $products->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="select21" class="control-label">
                                        Наименование
                                    </label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$products->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="select21" class="control-label">
                                        Категория
                                    </label>
                                    <select id="select21" class="form-control select2" style="width:100%" name="category">
                                        <option value="" selected="selected"></option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" <?=($category->id == $products->category_id) ? "selected" : "" ?>>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="container row">
                                    <div class="form-group">
                                        <label for="select21" class="control-label">
                                            Ед.измерения
                                        </label>
                                        <select id="measures" class="form-control select2" name="measures" id="measures">
                                            <option value="" selected="selected"></option>
                                            @foreach($measures as $measure)
                                                <option value="{{$measure->id}}"<?=($measure->id == $products->measure_id) ? "selected" : "" ?>> {{$measure->name}} </option>
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
                                                    <input type="radio" id="productTypes" name="productTypes" value="{{$productType->id}}" <?=($productType->id == $products->prod_type_id) ? "checked" : "" ?>>
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
                                    <input type="text" class="form-control" name="cnt" id="cnt" value="{{$products->cnt}}">
                                </div>
                                <button type="button" class="btn btn-info centerposition" data-toggle="modal"
                                        data-target="#center_modal"> Поменять структуру
                                </button>
                                <div id="center_modal" class="modal fade animated position_modal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Структура</h4>

                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary rounded" data-dismiss="modal">Save
                                                </button>
                                                <button type="button" class="btn btn-danger rounded" data-dismiss="modal">Cancel
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
