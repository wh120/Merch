@extends('layou.index')


@section('content')

 <header class="pc-header ">
        <div class="header-wrapper">
            <div class="ml-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="material-icons-two-tone">search</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i data-feather="search"></i>
                                    <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span>
                                <span class="user-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                <span class="user-desc">Exhibitioin Admin</span>

                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <div class=" dropdown-header">                          </div>

                            <a href="/login/logout" class="dropdown-item" >
                                <i class="material-icons-two-tone">chrome_reader_mode</i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <div class="pc-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="exadmin.html">Home</a></li>
                                <li class="breadcrumb-item">Manage My Exhibitioin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">

        <thead>
            <tr>
                <th>Full_Name</th>
                <th>Company_Name</th>
                <th>Email</th>
                <th>Password</th>

                <th>Type_of_goods</th>
                <th>Space_Required</th>
                <th>image</th>

            </tr>
        </thead>
        <tbody>

            @foreach($merchs as $merch)

            <tr>
                <td>{{ $merch->Full_Name }}</td>
                <td>{{ $merch->Company_Name }}</td>
                <td>{{ $merch->Email }}</td>
                <td>{{ $merch->Password }}</td>

                <td>{{ $merch->Type_of_goods }}</td>
                <td>{{ $merch->Space_Required }}</td>
                <td><img src="./images/{{$merch->Full_Name}}.jpg" width="60%" /></td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
                <script src="/asset/js/plugins/bootstrap.min.js"></script>

@endsection
<!-- if('Exhibition_Name' == merch->$Exhibition_Name) -->
