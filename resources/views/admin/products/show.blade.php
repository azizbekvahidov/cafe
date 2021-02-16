<div class="container-fluid">
    <div class="col-lg-12 col-12">
            <div class="card-body">
                <form action="" enctype="multipart/form-data" id="productForm">
                    @csrf
                    <div class="form-group">
                        <label for="product" class="control-label">
                            Выберите продукт
                        </label>
                        <select id="product" class="form-control select2" style="width:100%" name="product">
                            <option value="" selected="selected">Выберите продукт</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Наименование</th>
                                <th>Кол-во</th>
                                <th>Тип</th>
                                <th>Ед.изм</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="structure"></tbody>
                        </table>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-outline-primary rounded" onclick="sendAjax('GET', '{{route('products.store')}}', 'Сохранить')">Сохранить</button>
                    </div>
                </form>
            </div>
    </div>
</div>
<script>
    $('#product').change(function () {
        var str = " <tr>\
                            <td><input type='text' name='name' class='form-control' value='" + $("#product").val() + "' hidden>" + $("#product option:selected").text() + "</td> <input type='text' name='id' class='form-control' value='{{ $product->id }}' hidden>\
                            <td><input type='text' name='cnt' class='form-control'></td>\
                            <td>{{ $product->productTypes['name'] }}</td>\
                            <td>{{ $product->measures['name'] }}</td>\
                            <td><button class='btn'><i class='fa fa-trash'></i></button></td>\
                        </tr>";
    $('#structure').append(str);
    str = "";
    });

$(document).ready(function () {
    $('#productForm').submit(function () {
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '{{route('products.store')}}',
            data: data,
            success: function (data) {
                $('#productForm').modal("hide");
                table.ajax.reload();
            }
        })
    })
})

</script>

