@extends ('index')

@section('main-content')


<div class="main-content">
    <div class="dashboard">
        <h1>DASHBOARD</h1>

        <form class="form-products" action="{{route('Sampleproducts')}}" method="post">
                    @csrf
                    <label for="InputProdname" class="sr-only">PRODUCT NAME</label>
                    <input type="prodname" name="prod_name" id="InputProdname" class="form-control" placeholder="Product Name" required="" autofocus="">
                    <br>
                    <label for="InputCategory" class="sr-only">CATEGORY</label>
                    <input type="category" name="category" id="InputCategory" class="form-control" placeholder="Category" required="">
                    <br>
                    <label for="Inputqty" class="sr-only">QUANTITY</label>
                    <input type="qty" name="qty" id="Inputqty" class="form-control" placeholder="Quantity" required="">
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">SUBMIT</button>
                </form>

    <div class="table-1">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            @foreach($data as $prod)
            <tr>
                <td>{{$prod->prod_name}}</td>
                <td>{{$prod->category}}</td>
                <td>{{$prod->qty}}</td>
                <td><a href="/delete/{{$prod->id}}" class="btn btn-info">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div> 
        <button type="button" method="get" class="butt2 edit btn btn-primary" type="edit">Edit</button>
        <a href="/delete/id"><button type="button" method="get" class="butt2 delete btn btn-primary" type="delete">Delete</button></a>
        <a href="/logout"><button type="button" class="butt1 logout btn btn-primary" type="logout">LOG OUT</button></a>
    </div>
</div>
@endsection