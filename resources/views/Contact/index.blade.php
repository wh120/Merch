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
                                <span class="user-name">Hussien Kahoul</span>
                                <span class="user-desc">Exhibitioin Admin</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <div class=" dropdown-header">                          </div>
                
                            <a href="../login.html" class="dropdown-item">
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
                            <th>name</th>
                            <th>subject</th>
                            <th>email</th>
                            <th>message</th>
                        </thead>
                        <tbody>
                @foreach($contact as $cont )
                    <tr>
                        <td>{{ $cont->name }}</td>
                        <td>{{ $cont->subject }}</td>
                        <td>{{ $cont->email }}</td>
                        <td>{{ $cont->message }}</td>
                    </tr>     
            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    <script src="/asset/js/vendor-all.min.js"></script>
    <script src="/asset/js/plugins/bootstrap.min.js"></script>
    <script src="/asset/js/plugins/feather.min.js"></script>
    <script src="/asset/js/pcoded.min.js"></script>

<script src="/asset/js/plugins/apexcharts.min.js"></script>


<script src="/asset/js/pages/dashboard-sale.js"></script>
@endsection

<!-- if('Exhibition_Name' == exhibtion->$Exhibition_Name) -->

