@extends ('index')

@section('main-content')


<div class="main-content">
    <div class="dashboard">
        <h1>DASHBOARD</h1>
        <button action="{{route('Logout')}}" method="get" class="btn btn-lg btn-primary btn-block" type="logout">LOG OUT</button>
    </div>
</div>
@endsection