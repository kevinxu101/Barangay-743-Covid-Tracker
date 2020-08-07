@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.user.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.users.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">            
            @csrf
			@method('PUT')

            <div class="modal-body">
                <div class="form-row">


                    <div class="form-group col-md-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}"/>
                    </div>

                    <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input  type="text" name="first_name" class="form-control" value="{{$user->first_name}}"/>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Middle Name</label>
                        <input type="text" name="middle_name" class="form-control"  value="{{$user->middle_name}}"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Age</label>
                        <input  type="text" name="age" class="form-control"  value="{{$user->age}}"/>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option selected="{{$user->gender}}" value="{{$user->gender}}">{{$user->gender}}</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleFormControlSelect1">Occupation</label>
                        <select class="form-control" name="occupation" >
                            <option selected="{{$user->occupation}}" value="{{$user->occupation}}">{{$user->occupation}}</option>
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
                        <input  type="text" name="address" class="form-control"  value="{{$user->address}}"/>
                        <small id="emailHelp" class="form-text text-muted">Private Residence means may sariling bahay ang tao. While pag nilagay na apartment, mas madaling matrack ang mga kasama niya.</small>
                    </div>
                </div>

                <hr />
                <div class="job_information" >
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Name of Company</label>
                            <input type="text" name="company_name" class="form-control" value="{{$user->company_name}}"/>
                        </div>

                        <div class="form-group col-md-7">
                            <label>Company Address</label>
                            <input  type="text" name="company_address" class="form-control" value="{{$user->company_address}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection