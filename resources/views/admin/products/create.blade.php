@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Новая запись</h3>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="col-lg-12 col-12">
            <div class="card border-info">
                <div class="card-body">
                    <form action="{{ route("products.store") }}" method="post" enctype="multipart/form-data" id="productForm">
                        @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" style="width: 50%">
                                <label for="select21" class="control-label">
                                    Наименование
                                </label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-5 pull-right">
                                <input type="file" class="dropify" accept="image/jpeg, image/png, image/jpg" name="image">
                            </div>
                            <div class="form-group" style="width: 50%">
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
                            <div class="row">
                            <div class="form-group" style="width: 50%">
                                <label for="measures" class="control-label">
                                    Ед.измерения
                                </label>
                                <select id="measures" class="form-control select2" name="measures" id="measures">
                                    @foreach($measures as $measure)
                                    <option value="{{$measure->id}}">{{$measure->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <div class="form-group" style="width: 30%; margin-left: 40px">
                                    <label for="cnt" class="control-label">
                                        Количество
                                    </label>
                                    <input type="text" class="form-control" name="cnt" id="cnt">
                                </div>
                            </div>
                            <div class="form-group ml-5">
                                <label for="iradio" class="control-label ml-3">
                                </label>
                                <div class="form-group m-2">
                                    {{$productTypes->count() ? ' Тип: ' : ' ' }}
                                    @foreach($productTypes as $productType)
                                        <label class="iradio ml-3">
                                            <input type="radio" class="radio-btn" id="productTypes" name="productTypes" value="{{$productType->id}}"> {{$productType->name}}
                                        </label>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="status" placeholder="Статус" required name="status" value="1" hidden>
                                </div>
                            </div>
                            <a hidden href="javascript:;" onclick="sendAjax('GET', '{{ route('products.show')}}', 'Поменять структуру')" class="btn btn-info" data-toggle="modal" data-target="#large_modal" id="btn">
                                Поменять структуру
                            </a>
                        </div>
                    </div>
                    <div class="form-group mt-3 pull-right">
                        <button type="submit" class="btn btn-outline-primary rounded" id="save" >Сохранить</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(':radio').change(function () {
            $('#btn').removeAttr('hidden');
        });
    $(document).on("submit", "#productForm", function (event) {
        event.preventDefault();
        console.log(new FormData(this));
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success:function (data) {
                alert(data);
            }
        });
        return false;
    });
    </script>
@endsection



