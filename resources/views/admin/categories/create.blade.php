@extends('layouts.app')
@section('content')
    <div class="raw">
        <div class="col-xl-6 col-12">
            <div class="card border-success">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title d-inline">
                        Create
                    </h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" required name="name">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" placeholder="Status" required name="status">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
