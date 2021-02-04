@extends('layouts.app')
@section('content')
    <div class="raw">
        <div class="col-xl-6 col-12">
            <div class="card border-success">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title d-inline">
                        Новая запись
                    </h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Наименование</label>
                            <input type="text" class="form-control" id="name" value="{{ $menu->name }}" required name="name">
                        </div>
                        <div class="form-group">
                            <label for="priority">Приоритет</label>
                            <input type="text" class="form-control" id="priority" value="{{ $menu->priority }}" required name="priority">
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
