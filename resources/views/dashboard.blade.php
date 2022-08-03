@extends ('index')

@section('main-content')


<div class="main-content">
    <div class="dashboard">
        <h1>DASHBOARD</h1>

        <div class="modal fade" id="exampleadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-products" action="{{route('Sampleproducts')}}" method="post">
                            @csrf
                            <label for="InputProdname" class="sr-only">PRODUCT NAME</label>
                            <input type="prodname" name="prod_name" id="InputProdname" class="form-control"
                                placeholder="Product Name" required="" autofocus="">
                            <br>
                            <label for="InputCategory" class="sr-only">CATEGORY</label>
                            <input type="category" name="category" id="InputCategory" class="form-control"
                                placeholder="Category" required="">
                            <br>
                            <label for="Inputqty" class="sr-only">QUANTITY</label>
                            <input type="qty" name="qty" id="Inputqty" class="form-control" placeholder="Quantity"
                                required="">
                            <br>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">SUBMIT</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-1 ">
            <div class="search-container">
                    <input id="search-1" type="text" placeholder="Search.." name="search">
            </div>
            <table id="tbl-sample" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($data as $prod)
                <tbody>
                    <tr>
                        <td>{{$prod->prod_name}}</td>
                        <td>{{$prod->category}}</td>
                        <td>{{$prod->qty}}</td>
                        <td><a href="{{ url('edit/'.$prod->id) }}" class="inner-butt btn btn-info bi bi-pencil"></a>
                            <a href="/delete/{{$prod->id}}" class="inner-butt btn btn-danger bi bi-trash"></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="tbl-butt">
            <button type="button" class="Addbutt btn btn-info bi bi-plus-square" data-toggle="modal"
                data-target="#exampleadd" data-whatever="@mdo"></button>
        </div>
        <a href="/logout"><button type="button" class="butt1 logout bi bi-door-open btn btn-primary" type="logout">LOG OUT</button></a>
    </div>
</div>
@endsection