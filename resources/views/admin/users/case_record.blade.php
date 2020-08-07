@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('global.user.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route('admin.user.caserecordadd', [$user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{$user->id}}" name="user_id">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <small>User Information</small>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" value="{{$user->last_name}} {{$user->first_name}} {{$user->middle_name}}" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Contact Number</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="contact_number"
                                        value="{{ $user->contact_number }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{ $user->address }}" readonly>
                            </div>
                            <small>Medical Information</small><br />
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                      <option value="Home Quarantine">Home Quarantine</option>
                                      <option value="Facility Quarantine">Facility Quarantine</option>
                                      <option value="Admitted">Admitted</option>
                                      <option value="Recovered">Recovered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Doctor Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="doctor_name"
                                        placeholder="Doctor Name"
                                        value="{{ $user->last_name }} {{ $user->first_name }} {{ $user->middle_name }}  ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Doctor Contact Number</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="doctor_number"
                                        value="{{ $user->contact_number }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Hospital Address</label>
                                <input type="text" class="form-control" name="hospital"
                                    placeholder="eg. Philippine General Hospital">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Suspected Patient Notes</label>
                                <textarea class="form-control" name="notes" rows="3"></textarea>
                            </div>

                            <div>

                                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                            </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#sample').on('change', function(e) {
                var selectVal = $("#sample option:selected").val();
                alert(selectVal);
            });
        });

    </script>
@endsection
