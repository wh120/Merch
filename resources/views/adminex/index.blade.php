@extends('layou.index')

@section('content')

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
                            <th>Exhibition</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Type Exhibition</th>
                            <th>Attendees Number</th>
                            <th>Companies</th>
                            <th>Event Budget</th>
                            <th>action</th>
                        </thead>
                        <tbody>
                @foreach($exhibtions as $exhibtion )
                    <tr>
                        <td>{{ $exhibtion->Exhibition_Name }}</td>
                        <td>{{ $exhibtion->Full_Name }}</td>
                        <td>{{ $exhibtion->Mobile_Number }}</td>
                        <td>{{ $exhibtion->Type_of_Exhibition }}</td>
                        <td>{{ $exhibtion->Number_of_Attendees }}</td>
                        <td>{{ $exhibtion->Number_of_Exhibiting_Companies }}</td>
                        <td>{{ $exhibtion->Event_Budget }}</td>
                        <td>
                             
                            <form method="POST" action="{{ route('Adminex.destroy', [$exhibtion->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>     
            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
            
    <script src="/asset/js/vendor-all.min.js"></script>
    <script src="/asset/js/plugins/bootstrap.min.js"></script>
    <script src="/asset/js/plugins/feather.min.js"></script>
    <script src="/asset/js/pcoded.min.js"></script>

<script src="/asset/js/plugins/apexcharts.min.js"></script>

<script src="/asset/js/pages/dashboard-sale.js"></script>


@endsection
