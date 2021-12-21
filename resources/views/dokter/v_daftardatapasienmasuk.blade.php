@include('dokter.templatedokter.v_header')
@include('dokter.templatedokter.v_sidebar')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Antrian</a></li>
        </ol>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Data Table</h4> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">Waktu</th>
                                    <th>no RM </th>
                                    <th>rpk</th>
                                    <th>rps</th>
                                    <th>rpd</th>
                                    <th>tb</th>
                                    <th>bb</th>
                                    <!-- <th>Status</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($antrian as $a)
                                <tr>
                                    <td class=" text-center">{{$a->waktu}}</td>
                                    <td>{{$a->no_rm}}</td>
                                    <td>{{$a->rpk}}</td>
                                    <td>{{$a->rps}}</td>
                                    <td>{{$a->rpd}}</td>
                                    <td>{{$a->tb}}</td>
                                    <td>{{$a->bb}}</td>
                                    <!-- <td>{{$a->status}}</td> -->
                                    <td>
                                        <button type="button" class="btn btn-light"  onclick="location.href='/pelayanandokter/{{$a->no_rm}}'" data-toggle="tooltip" data-placement="top" title="Open">
                                            <i class="fa fa-folder"></i>
                                        </button>
                                    </td>            
                                </tr>
                            @endforeach
                            </tbody>               
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
</div>
    <script>
        // function deleteConfirm(url) {
        //     $('#btn-delete').attr('href', url);
        //     $('#deleteModal').modal();
        // }
    </script>
    <!--**********************************
            Content body end
        ***********************************-->
@include('dokter.templatedokter.v_footer')