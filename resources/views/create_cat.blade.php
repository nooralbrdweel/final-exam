@extends('layouts.app')

 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
    
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Welcome, admin</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
   @include('layouts.sidebar')
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Category</h1>
         <div class="btn-group mr-2">
                <a href="{{route('categories')}}" class="btn btn-outline-secondary">All Categories</a>
            </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="card-body">
            <form method="post"  action="{{ route('categories.store') }}" >

                @csrf
                <div class="form-group">
                    {{-- <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ"> --}}
                    <label for="name">Category Name:</label>
                    <input type="text" class="form-control" name="name" />
                </div>
              
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</main>
</div>
</div>
<script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/bootstrap.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/feather.js"></script>
        <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/Chart.js"></script>
        <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/dashboard.js"></script>

</body></html>
</div>
@endsection