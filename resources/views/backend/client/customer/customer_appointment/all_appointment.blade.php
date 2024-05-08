@extends('admin.admin_dashboard')
@section('admin')
<style>
  .page-breadcrumb .breadcrumb {
    background: aliceblue;
}
.form-select {
    background-color: aliceblue;
  }
  .form-control{
    background-color: aliceblue;
  }
  .pagination {
    --bs-pagination-disabled-bg: aliceblue;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content"  style="background-color: aliceblue;">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a href="{{route('all.customers')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.customerservice')}}">List Services</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.customercalls')}}">List Call</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.appointments')}}">List Appointment</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.quotations')}}">List Quotation</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.documents')}}">List Document</a></li>
            </ol>
          </nav>
    </div>
    <div>
        <button type="button" class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">
           <i class="btn-icon-prepend" data-feather="plus"></i>Add Appointment
        </button>
        </div>
    <br>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card"  style="background-color: aliceblue; border:none;">
  <div class="card-body">
    <h6 class="card-title">Appointment All</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th style="color: gray;">ID</th>
            <th style="color: gray;">Meeting Date</th>
            <th style="color: gray;">Person Name</th>
            <th style="color: gray;">Email</th>
            <th style="color: gray;">Meeting BY</th>
            <th style="color: gray;">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $combine_array as $key => $item)
            <tr>
                <td style="color: black;">{{ $key+1}}</td>
                <td style="color: black;">{{ date('Y-m-d', strtotime($item->meeting_date)) }}</td></td>
                <td style="color: black;">{{ $item->customer_name}}</td>
                <td style="color: black;">{{ $item->customer_email}}</td>
                <td style="color: black;">{{ $item->name_user }}</td>
                <td>
                    <a href="{{ route('edit.appointments',$item->id)}}" class="btn btn-outline-warning" title="Edit"><i data-feather="edit"></i></a>
                    <a href="{{ route('delete.appointments',$item->id)}}" id="delete" class="btn btn-outline-danger" title="Delete"><i data-feather="trash-2"></i></a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

{{-- Create form --}}
<div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"  style="background-color: aliceblue;">
        <div class="modal-header">
          <h5 class="modal-title" id="varyingModalLabel"  style="color: black;">New Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
            <form id="myForm" method="POST" action="{{ route('store.appointments')}}" class="forms-sample" >
                @csrf

                <div class="mb-3 form-group" >
                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Meeting Date</label>
                    <input type="date" name="meeting_date" class="form-control" style="color: black;background-color:aliceblue">
                </div>
                <div class="mb-3 form-group" >
                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Person Name</label>
                    <input type="name" name="customer_name" class="form-control" style="color: black;background-color:aliceblue">
                </div>
                <div class="mb-3 form-group" >
                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Email</label>
                    <input type="email" name="customer_email" class="form-control" style="color: black;background-color:aliceblue">
                </div>
                <div class="mb-3 form-group" >
                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Description</label>
                    <input type="text" name="description" class="form-control" style="color: black;background-color:aliceblue">
                </div>
                <div class="mb-3 form-group" >
                    <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Meeting By</label>
                    <select name="users_id" style="background-color: aliceblue; color:black;" class="form-control">
                        <option selected="" disabled="">Select User</option>
                        @foreach ($users as $user )
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                          @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary me-2">Save</button>
              </form>
        </div>

      </div>
    </div>
  </div>
@endsection