@extends('layouts.admin')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <script>
$(document).ready(function(){ 
    window.print();
}) 

    </script>
    <div class="card">
    
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-sm table-borderless">

                            <tbody>
                            <tr>
                                <th>Name : {{ $users->last_name }} {{ $users->first_name }} {{ $users->middle_name }}</th>
                            </tr>
                              <tr>
                                <th scope="row">Age : {{$users->age}}</th>
                                <th>Occupation : {{$users->occupation}}</th>
                                <th>Status : {{$users->status}}</th>
                              </tr>
                              <tr>
                                <th >Gender : {{$users->gender}}</th>

                                <th>Address : {{$users->address}}</th>
                                <th id="date_of_entry"><th>
                              </tr>
                              <tr>
                              </tr>
                            </tbody>
                          </table>

                  
                    
                        <hr>
                        <small>Medical Day to Day Information</small>
                
                                    <table class="table ">
                                        <thead>
                                          <tr>
                                            <th scope="col">Day #</th>
                                            <th scope="col">Temperature</th>
                                            <th scope="col" width="80%">Symptoms</th>
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
                                            <td>{{$users->day2_temperature}}</td>
                                            <td><small>{{$users->day2_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 3</td>
                                            <td>{{$users->day3_temperature}}</td>
                                            <td><small>{{$users->day3_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 4</td>
                                            <td>{{$users->day4_temperature}}</td>
                                            <td><small>{{$users->day4_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 5</td>
                                            <td>{{$users->day5_temperature}}</td>
                                            <td><small>{{$users->day5_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 6</td>
                                            <td>{{$users->day6_temperature}}</td>
                                            <td><small>{{$users->day6_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 7</td>
                                            <td>{{$users->day7_temperature}}</td>
                                            <td><small>{{$users->day7_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 8</td>
                                            <td>{{$users->day8_temperature}}</td>
                                            <td><small>{{$users->day8_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 9</td>
                                            <td>{{$users->day9_temperature}}</td>
                                            <td><small>{{$users->day9_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 10</td>
                                            <td>{{$users->day10_temperature}}</td>
                                            <td><small>{{$users->day10_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 11</td>
                                            <td>{{$users->day11_temperature}}</td>
                                            <td><small>{{$users->day11_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 12</td>
                                            <td>{{$users->day12_temperature}}</td>
                                            <td><small>{{$users->day12_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 13</td>
                                            <td>{{$users->day13_temperature}}</td>
                                            <td><small>{{$users->day13_symptoms}}</small></td>
                                          </tr>
                                          <tr>
                                            <td>Day 14</td>
                                            <td>{{$users->day14_temperature}}</td>
                                            <td><small>{{$users->day14_symptoms}}</small></td>
                                          </tr>
                                        </tbody>
                                      </table>
                            

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
                          <p class="mr-3"><strong>Hospital Name</strong> :  {{$users->hospital}}</p>
                          <p class="mr-3"><strong>Doctor Name</strong> :  {{$users->doctor_name}} </p>
                          <p class="mr-3"><strong>Date of Admission</strong> : {{$users->date_of_admission}}</p>

                          <hr>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$users->notes}}" readonly></textarea>

                        
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
      document.getElementById("date_of_entry").innerHTML = "Case Record Entry: " + cTime;

      document.getElementById("pcr_swab_test_date").innerHTML = pcr_swab_test_date_converted;
    </script>
@endsection
