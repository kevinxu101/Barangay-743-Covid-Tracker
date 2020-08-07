@extends('layouts.admin')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('global.user.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route('admin.user.caserecord_put_edit', [$user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container-fluid">
                    <input type="hidden" id="custId" name="user_id" value="{{ $user->id }}">
                    <div class="row">
                        <div class="col-md-12">
                            <small>User Information</small>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                        value="{{ $user->last_name }} {{ $user->first_name }} {{ $user->middle_name }}  " readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Contact Number</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="contact_number"
                                        value="{{ $user->contact_number }}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{ $user->address }}" readonly>
                            </div>
                            <small>Case Information</small><br />

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                      <option selected="{{$user->status}}">{{$user->status}}</option>
                                      <option value="Home Quarantine">Home Quarantine</option>
                                      <option value="Facility Quarantine">Facility Quarantine</option>
                                      <option value="Admitted">Admitted</option>
                                      <option value="Recovered">Recovered</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Patient Location in the Last 24 hours</label>
                                <input type="text" class="form-control" id="inputAddress" name="last_location" value="{{ $user->last_location }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Suspected Patient Notes</label>
                                <textarea class="form-control" name="notes" rows="3" name="notes">{{$user->notes}}</textarea>
                            </div>
                            <hr/>
                            <small>Day to Day Information</small><br />
                            <div class="day1_temperature">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="symptoms" class="mr-2">Select Day</label>
                                    <select name="day_symptoms" id="day_symptoms" class="mr-2">
                                        <option selected="Select Day ">Select Day </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                    </select>
                                    <label for="symptoms">Temperature</label> <br/>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="symptoms[]" value="Fever">
                                      <label class="form-check-label" for="inlineCheckbox1">Fever</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="symptoms[]" value="Dry Cough">
                                      <label class="form-check-label" for="inlineCheckbox2">Dry Cough</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="symptoms[]" value="Loss of taste or smell">
                                    <label class="form-check-label" for="inlineCheckbox6">Loss of taste or smell</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="symptoms[]" value="Runny Nose or Sipon">
                                    <label class="form-check-label" for="inlineCheckbox6">Runny Nose / Sipon</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="symptoms[]" value="Body Pain / Sakit ng katawan">
                                    <label class="form-check-label" for="inlineCheckbox6">Body Pain / Sakit ng katawan</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="symptoms[]" value="Headache">
                                      <label class="form-check-label" for="inlineCheckbox5">Headache</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="symptoms[]" value="Conjunctivitis">
                                      <label class="form-check-label" for="inlineCheckbox6">Conjunctivitis</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="symptoms[]" value="Sore Throat">
                                    <label class="form-check-label" for="inlineCheckbox6">Sore Throat</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="symptoms[]" value="Headache">
                                    <label class="form-check-label" for="inlineCheckbox6">Headache</label>
                                  </div>

                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="symptoms[]" value="Fatigue/Tiredess">
                                    <label class="form-check-label" for="inlineCheckbox3">Fatigue/Tiredness</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="symptoms[]" value="Diarrhoea">
                                    <label class="form-check-label" for="inlineCheckbox4">Diarrhoea</label>
                                </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="symptoms" class="mr-2">Select Day</label>
                                    <select name="day_temperature" id="day_temperature" class="mr-2">
                                    <option selected="Select Day">Select Day </option>

                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                  </select>
                                      <label for="inputPassword4">Temperature</label>
                                      <input type="text" class="form-control"  placeholder="Temperature in Celcius Degrees" name="temperature" min="33" max="41">
                                  </div>

                              
                              </div>
                              </div>
                              <hr/>
                              <small >Test Information</small>
                              <table class="table table-bordered mt-3">
                                <thead>
                                  <tr>
                                    <th scope="col">Type of Test</th>
                                    <th scope="col">Date of Test</th>
                                    <th scope="col">Results</th>
                                    <th scope="col">Date of Results</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>PCR Swab Test</td>
                                    <td><input class="form-control" type="date" name="pcr_swab_test_date" value="{{$user->pcr_swab_test_date}}"></td>
                                    <td><select class="form-control" name="pcr_swab_test_results">
                                        <option selected="{{$user->pcr_swab_test_results}}" value="{{$user->pcr_swab_test_results}}">{{$user->pcr_swab_test_results}}</option>
                                        <option value="Positive">Positive</option>
                                        <option value="Negative">Negative</option>
                                        </select>
                                    </td>
                                    <td><input class="form-control" type="date"  name="pcr_swab_date_of_results" value="{{$user->pcr_swab_date_of_results}}"></td>
                                  </tr>
                                  <tr>
                                    <td>Blood Rapid Test</td>
                                    <td><input class="form-control" type="date" name="rapid_test_date" value="{{$user->rapid_test_date}}"></td>
                                    <td><select class="form-control" name="rapid_test_results">
                                        <option selected="{{$user->rapid_test_results}}" value="{{$user->rapid_test_results}}">{{$user->rapid_test_results}}</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </td>
                                    <td><input class="form-control" type="date" name="rapid_date_of_results" value="{{$user->rapid_date_of_results}}"></td>
                                  </tr>
    
                                </tbody>
                              </table>

                              <hr/>
                              <small>Doctor's Information</small>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="inputEmail4">Doctor's Name</label>
                                      <input type="text" class="form-control" name="doctor_name" value="{{$user->doctor_name}}">
                                       
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="inputPassword4">Doctor Number</label>
                                      <input type="text" class="form-control" name="doctor_number" value="{{$user->doctor_number}}">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputAddress">Hospital Name</label>
                                  <input type="text" class="form-control" name="hospital" value="{{$user->hospital}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Date of Admission</label>
                                    <input type="date" class="form-control" name="date_of_admission" value="{{$user->date_of_admission}}">
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
