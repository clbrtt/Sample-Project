@extends ('index')

@section('main-content')


<div class="main-content">
    <div class="dashboard">
        <h1>DASHBOARD</h1>
        <button type="button" action="{{route('Logout')}}" method="get" class="butt1 btn btn-primary" type="logout">LOG OUT</button>
    </div>
</div>
@endsection