@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item pt-1"><h3>Новая запись</h3>
        </li>
    </ol>
    <div class="raw">
        <div class="col-xl-6 col-12">
            <div class="card border-success">
                <div class="card-body">
                    <form action="{{ route('menu.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Наименование</label>
                            <input type="text" class="form-control" id="name" placeholder="Наименование" required name="name">
                        </div>
                        <div class="form-group">
                            <label for="priority">Приоритет</label>
                            <input type="text" class="form-control" id="priority" placeholder="Приоритет" required name="priority">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
