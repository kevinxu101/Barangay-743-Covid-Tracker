@extends('layouts.admin')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="d-flex">
                <h6>View Suspected Case Record</h6>
                <button type="button" class="btn btn-warning btn-sm ml-auto"> <a href="{{ route('admin.user.case_edit', $users->id) }}">Edit Suspected Case Record</button></a>
                <a href="{{ route('admin.user.caseindex_print', $users->id) }}"><button type="button" class="btn btn-light btn-sm"> <i class="fa fa-print" aria-hidden="true"></i>Print</button></a>
                </button></a>

            </div>
        </div>

        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <small>Case Information</small>
                        <h6><strong>Initial Case Records</strong></h6>
                        <div class="d-fle">
                          <p>Status: <span>{{$users->status}}</span></p>

                        </div>
                        <p id="date_of_entry"></p>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Patient Locations last 24 Hours</label>
                            <input type="text" class="form-control"  placeholder="{{$users->last_location}}" readonly>
                        </div>
                        <hr>
                        <small>Medical Day to Day Information</small>
                        <div id="accordion">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Symptoms & Temperature
                                  </button>
                                </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table table-sm">
                                        <thead>
                                          <tr>
                                            <th scope="col">Day #</th>
                                            <th scope="col">Temperature</th>
                                            <th scope="col" width="70%">Symptoms</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @if($users->day1_temperature >= 38.3 && $users->day1_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day1_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day1_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 1</td>
                                            <td>{{$users->day1_temperature}}°C </td>
                                            <td><small>{{$users->day1_symptoms}}</small></td>
                                          </tr>
                                          

                                          @if($users->day2_temperature >= 38.3 && $users->day2_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day2_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day2_temperature <= 38.2 || $users->day2_temperature == null)
                                          <tr>
                                            @endif
                                            <td>Day 2</td>
                                            <td>{{$users->day2_temperature}}°C</td>
                                            <td><small>{{$users->day2_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day3_temperature >= 38.3 && $users->day3_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day3_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day3_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 3</td>
                                            <td>{{$users->day3_temperature}}°C</td>
                                            <td><small>{{$users->day3_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day4_temperature >= 38.3 && $users->day4_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day4_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day4_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 4</td>
                                            <td>{{$users->day4_temperature}}°C</td>
                                            <td><small>{{$users->day4_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day5_temperature >= 38.3 && $users->day5_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day5_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day5_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 5</td>
                                            <td>{{$users->day5_temperature}}°C</td>
                                            <td><small>{{$users->day5_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day6_temperature >= 38.3 && $users->day6_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day6_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day6_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 6</td>
                                            <td>{{$users->day6_temperature}}°C</td>
                                            <td><small>{{$users->day6_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day7_temperature >= 38.3 && $users->day7_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day7_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day7_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 7</td>
                                            <td>{{$users->day7_temperature}}°C</td>
                                            <td><small>{{$users->day7_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day8_temperature >= 38.3 && $users->day8_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day8_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day8_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 8</td>
                                            <td>{{$users->day8_temperature}}°C</td>
                                            <td><small>{{$users->day8_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day9_temperature >= 38.3 && $users->day9_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day9_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day9_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 9</td>
                                            <td>{{$users->day9_temperature}}°C</td>
                                            <td><small>{{$users->day9_symptoms}}</small></td>
                                          </tr>


                                          @if($users->day10_temperature >= 38.3 && $users->day10_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day10_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day10_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 10</td>
                                            <td>{{$users->day10_temperature}}°C</td>
                                            <td><small>{{$users->day10_symptoms}}</small></td>
                                          </tr>

                                          @if($users->day11_temperature >= 38.3 && $users->day11_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day11_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day11_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 11</td>
                                            <td>{{$users->day11_temperature}}°C</td>
                                            <td><small>{{$users->day11_symptoms}}</small></td>
                                          </tr>

                                          @if($users->day12_temperature >= 38.3 && $users->day12_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day12_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day12_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 12</td>
                                            <td>{{$users->day12_temperature}}°C</td>
                                            <td><small>{{$users->day12_symptoms}}</small></td>
                                          </tr>

                                          @if($users->day13_temperature >= 38.3 && $users->day13_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day13_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day13_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 13</td>
                                            <td>{{$users->day13_temperature}}°C</td>
                                            <td><small>{{$users->day13_symptoms}}</small></td>
                                          </tr>

                                          @if($users->day14_temperature >= 38.3 && $users->day14_temperature <= 39.3)
                                          <tr class="bg-warning">
                                            @elseif($users->day14_temperature >= 39.4)
                                          <tr class="bg-danger">
                                            @elseif($users->day14_temperature <= 38.2)
                                          <tr>
                                            @endif
                                            <td>Day 14</td>
                                            <td>{{$users->day14_temperature}}°C</td>
                                            <td><small>{{$users->day14_symptoms}}</small></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                              </div>

                            </div>
                        <br/><h6><strong>Medical Test Results</strong></h6>
                        <table class="table table-bordered">
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
                                <td>{{$users->pcr_swab_test_date}}</td>
                                <td>{{$users->pcr_swab_test_results}}</td>
                                <td>{{$users->pcr_swab_date_of_results}}</td>
                              </tr>
                              <tr>
                                <td>Blood Rapid Test</td>
                                <td>{{$users->rapid_test_date}}</td>
                                <td>{{$users->rapid_test_results}}</td>
                                <td>{{$users->rapid_date_of_results}}</td>
                              </tr>

                            </tbody>
                          </table>
                          <h6><strong>Hospital Information</strong></h6>
                          <p>Hospital Name :  {{$users->hospital}}</p>
                          <p>Doctor Name :  {{$users->doctor_name}} </p>
                          <p>Date of Admission : {{$users->date_of_admission}}</p>

                          <hr>
                          <small>Case Notes</small><br/>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$users->notes}}" readonly></textarea>

                          </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://image.shutterstock.com/image-vector/picture-profile-icon-human-people-260nw-1011304363.jpg" height="200" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center"><strong>{{ $users->last_name }} {{ $users->first_name }} {{ $users->middle_name }}</strong></h5><br/>
                              <h6 class="card-text">Age: {{$users->age}}</h6>
                              <h6 class="card-text">Sex: {{$users->gender}}</h6>
                              <h6 class="card-text">Contact Number: {{$users->contact_number}}</h6>
                              <h6 class="card-text">Address:   {{$users->address}}</h6>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <strong>Hospital Hotlines</strong><br/>
                              DOH Covid Hotline <br/>
                              (02) 894-COVID 1555<br/><br/>
                              Manila Doctors Hospital<br/>
                              (02) 524 3011<br/><br/>
                              Philippine General Hospital<br/>
                              (02) 521 8450 / 02 524 2221<br/><br/>
                              Ospital ng Maynila Medical Center<br/>
                              (02) 524 6061<br/><br/>
                              Dr. Jose Fabella Memorial Hospital<br/>
                              (02) 735 7144<br/><br/>
                              San Lazaro Hospital<br/>
                              (02) 732 9177 / 02 711 6966<br/><br/>
                              Tondo Medical Center<br/>
                              (02) 251 8421<br/>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
  var jobs = {!! json_encode($users->date_of_entry) !!};
  var pcr_swab_test_date =  {!! json_encode($users->pcr_swab_test_date) !!};
  var pcr_swab_test_dates_of_result =  {!! json_encode($users->pcr_swab_test_dates_of_result) !!};

      var cTime = moment(jobs).format('LLLL');
      var pcr_swab_test_date_converted = moment(pcr_swab_test_date).format('L');
      var pcr_swab_test_dates_of_result = moment(pcr_swab_test_dates_of_result)
      document.getElementById("date_of_entry").innerHTML = "First Suspected Case Record: " + cTime;
      document.getElementById("pcr_swab_test_date").innerHTML = pcr_swab_test_date_converted;
    </script>
@endsection
