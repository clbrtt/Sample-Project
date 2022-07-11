@extends ('index')

@section('main-content')


<div class="main-content">
    <div class="dashboard">
        <h1>DASHBOARD</h1>

        <form class="form-products" action="{{route('Sampleproducts')}}" method="post">
                    @csrf
                    <label for="InputProdname" class="sr-only">PRODUCT NAME</label>
                    <input type="prodname" name="prodname" id="InputProdname" class="form-control" placeholder="Product Name" required="" autofocus="">
                    <br>
                    <label for="InputCategory" class="sr-only">CATEGORY</label>
                    <input type="category" name="category" id="InputCategory" class="form-control" placeholder="Category" required="">
                    <br>
                    <label for="Inputqty" class="sr-only">QUANTITY</label>
                    <input type="qty" name="qty" id="Inputqty" class="form-control" placeholder="Quantity" required="">
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">SUBMIT</button>
                </form>

        <a href="/login"><button type="button" action="{{route('Logout')}}" method="get" class="butt1 logout btn btn-primary" type="logout">LOG OUT</button></a>
    </div>
</div>
@endsection