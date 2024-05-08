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
<div class="page-content"style="background-color: aliceblue;">

    <div>
        <button type="button" class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">
           <i class="btn-icon-prepend" data-feather="plus"></i>Add ATM
        </button>
        </div>
    <br>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card" style="background-color: aliceblue; border:none;">
  <div class="card-body">
    <h6 class="card-title">ATM All</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th style="color: gray;">ID</th>
            <th style="color: gray;">Name Company</th>
            <th style="color: gray;">Model</th>
            <th style="color: gray;">Type</th>
            <th style="color: gray;">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $atms as $key => $item)
            <tr>
                <td style="color: black;">{{ $key+1}}</td>
                <td style="color: black;">{{ $item->name}}</td>
                <td style="color: black;">{{ $item->model}}</td>
                <td style="color: black;">{{ $item->type}}</td>
                <td>
                    <a href="{{ route('edit.atms',$item->id)}}" class="btn btn-inverse-warning" title="Edit"><i data-feather="edit"></i></a>
                    <a href="{{ route('delete.atms',$item->id)}}" id="delete" class="btn btn-inverse-danger" title="Delete"><i data-feather="trash-2"></i></a>
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
          <h5 class="modal-title" id="varyingModalLabel"  style="color: black;">Add ATM</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
            <form id="myForm" method="POST" action="{{ route('store.atms')}}" class="forms-sample" >
                @csrf
                  <div class="mb-3 form-group" >
                      <label for="exampleInputEmail1" class="form-label" style="color: gray;">Company Name</label>
                      <input type="text" name="name" class="form-control" style="color: black;background-color:aliceblue">
                  </div>
                  <div class="mb-3 form-group" >
                      <label  class="form-label" style="color: gray;">ATM Model</label>
                      <select class="js-example-basic-single form-select select2-hidden-accessible" name="model" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="Model A" data-select2-id="3">Model A</option>
                        <option value="Model B" data-select2-id="13">Model B</option>
                        <option value="Model C" data-select2-id="14">Model C</option>
                        <option value="Model D" data-select2-id="15">Model D</option>
                        <option value="Model E" data-select2-id="16">Model E</option>
                    </select>
                  </div>
                  <div class="mb-3 form-group" >
                    <label  class="form-label" style="color: gray;">ATM Classification</label>
                    <select class="js-example-basic-single form-select select2-hidden-accessible" name="classification" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="Yellow Label" data-select2-id="3">Yellow Label</option>
                        <option value="White Label" data-select2-id="13">White Label</option>
                        <option value="Green Label" data-select2-id="14">Green Label</option>
                        <option value="Pink Label" data-select2-id="15">Pink Label</option>
                        <option value="Brown Label" data-select2-id="16">Brown Label</option>
                  </select>
                </div>
                <div class="mb-3 form-group" >
                    <label  class="form-label" style="color: gray;">ATM Type</label>
                    <select class="js-example-basic-single form-select select2-hidden-accessible" name="type" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="Type 1" data-select2-id="3">Type 1</option>
                      <option value="Type2" data-select2-id="13">Type2</option>
                  </select>
                </div>
                <div class="mb-3 form-group" >
                    <label  class="form-label" style="color: gray;">ATM Category</label>
                    <select class="js-example-basic-single form-select select2-hidden-accessible" name="category" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="Category A" data-select2-id="3">Category A</option>
                      <option value="Category B" data-select2-id="13">Category B</option>
                      <option value="Category C" data-select2-id="14">Category C</option>
                      <option value="Category D" data-select2-id="15">Category D</option>
                      <option value="Category E" data-select2-id="16">Category E</option>
                    </select>
                </div>
                <div class="mb-3 form-group" >
                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Address</label>
                    <input type="text" name="address" class="form-control" style="color: black;background-color:aliceblue">
                </div>
                <div class="mb-3 form-group" >
                    <label  class="form-label" style="color: gray;">City</label>
                    <select class="js-example-basic-single form-select select2-hidden-accessible" name="city" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="Phnom Penh" data-select2-id="3">Phnom Penh</option>
                      <option value="Kratie" data-select2-id="13">Kratie</option>
                      <option value="Banteay Meanchey" data-select2-id="14">Banteay Meanchey</option>
                      <option value="Battambang" data-select2-id="15">Battambang</option>
                      <option value="Kampong Cham" data-select2-id="16">Kampong Cham</option>
                      <option value="Kampong Chhnang" data-select2-id="16">Kampong Chhnang</option>
                      <option value="Kampong Speu" data-select2-id="16">Kampong Speu</option>
                      <option value="Kampong Thom" data-select2-id="16">Kampong Thom</option>
                      <option value="Kampot" data-select2-id="16">Kampot</option>
                      <option value="Kandal" data-select2-id="16">Kandal</option>
                      <option value="Kep" data-select2-id="16">Kep</option>
                      <option value="Koh Kong" data-select2-id="16">Koh Kong</option>
                      <option value="Mondulkiri" data-select2-id="16">Mondulkiri</option>
                      <option value="Oddar Meanchhey" data-select2-id="16">Oddar Meanchhey</option>
                      <option value="Paillin" data-select2-id="16">Paillin</option>
                      <option value="Preah Sihanouk" data-select2-id="16">Preah Sihanouk</option>
                      <option value="Preah Vihea" data-select2-id="16">Preah Vihea</option>
                      <option value="Prey Veng" data-select2-id="16">Prey Veng</option>
                      <option value="Pursat" data-select2-id="16">Pursat</option>
                      <option value="Ratanak Kiri" data-select2-id="16">Ratanak Kiri</option>
                      <option value="Stung Treng" data-select2-id="16">Stung Treng</option>
                      <option value="Svay Rieng" data-select2-id="16">Svay Rieng</option>
                      <option value="Takeo" data-select2-id="16">Takeo</option>
                      <option value="Tboung Khmum" data-select2-id="16">Tboung Khmum</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2">Save</button>
              </form>
        </div>

      </div>
    </div>
  </div>
@endsection
