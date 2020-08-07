@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.user.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-row">


                    <div class="form-group col-md-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input  type="text" name="first_name" class="form-control" />
                    </div>

                    <div class="form-group col-md-3">
                        <label>Middle Name</label>
                        <input type="text" name="middle_name" class="form-control"  />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Age</label>
                        <input  type="text" name="age" class="form-control"  />
                    </div>

                    <div class="form-group col-md-3">
                        <label>Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleFormControlSelect1">Occupation</label>
                        <select class="form-control" name="occupation" >
                            <option selected value="Select Occupation">Select Occupation</option>
                            <option value="Student">Student</option>
                            <option value="Married">Married</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Self-employed">Self Employed</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Home/Apartment Address</label>
                        <input  type="text" name="address" class="form-control"  />
                        <small id="emailHelp" class="form-text text-muted">Private Residence means may sariling bahay ang tao. While pag nilagay na apartment, mas madaling matrack ang mga kasama niya.</small>
                    </div>
                </div>

                <hr />
                <div class="job_information" >
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Name of Company</label>
                            <input type="text" name="company_name" class="form-control" />
                        </div>

                        <div class="form-group col-md-7">
                            <label>Company Address</label>
                            <input  type="text" name="company_address" class="form-control"/>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection