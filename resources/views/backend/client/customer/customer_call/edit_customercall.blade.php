@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content" style="background-color: aliceblue;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
<br>
    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card" style="background-color: aliceblue;border:none" >
                <div class="card-body">
                    <h6 class="card-title" style="color: black;">Edit Customer Call</h6>

                        <form id="myForm" method="POST" action="{{ route('update.customercalls',$customercalls->id)}}" class="forms-sample" >
                          @csrf

                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >date</label>
                                <input type="text" style="background-color: aliceblue; color:black;"  class="form-control" value="{{  date('Y-m-d', strtotime($customercalls->date))  }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label  class="form-label" style="color: gray;">Call Type</label>
                                <select class="js-example-basic-single form-select select2-hidden-accessible" style="background-color: white; color:black;" name="call_type" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="{{$customercalls->call_type}}" data-select2-id="13" style="color:black;">Select Call Type</option>
                                    <option value="Out Going" data-select2-id="13" style="color:black;">Out Going</option>
                                    <option value="In Coming" data-select2-id="14" style="color:black;">In Coming</option>
                              </select>
                            </div>
                            <div class="mb-3 form-group" >
                                <label  class="form-label" style="color: gray;">Status</label>
                                <select class="js-example-basic-single form-select select2-hidden-accessible" style="background-color: white; color:black;" name="status" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="{{$customercalls->stutus}}" data-select2-id="13" style="color:black;">Select Status</option>
                                    <option value="Under Processing" data-select2-id="13" style="color:black;">Under Processing</option>
                                    <option value="Finished" data-select2-id="14" style="color:black;">Finished</option>
                              </select>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Sold by</label>
                                <select name="" style="background-color: aliceblue; color:black;" class="form-control">
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
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
