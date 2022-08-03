@extends ('index')

@section('main-content')

<div class="main-content">
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="{{ url('dashboard')}}">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form>
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="prod_name" value="{{$data->prod_name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <input type="text" name="category" value="{{$data->category}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Quantity</label>
                            <input type="text" name="qty" value="{{$data->qty}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection