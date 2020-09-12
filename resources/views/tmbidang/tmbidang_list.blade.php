@extends('layouts.template')
@section('title','Master Bidang')

@section('content')
     
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody></tbody>                         
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($load_script as $script)
       @php echo $script @endphp
@endforeach 
<script>
 


</script>
 
@endsection