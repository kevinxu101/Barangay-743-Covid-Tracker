<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use App\Logs;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('user_access'), 403);

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index')->with('success','New User Created');
    }

    public function edit(User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function case_index($users)
    {
        abort_unless(\Gate::allows('user_access'), 403);

        $users = User::findorfail($users);

        return view('admin.users.case_index', compact('users'));
    }

    public function case_record_edit(User $user,Request $request){
        abort_unless(\Gate::allows('user_edit'), 403);
        $user = User::findorfail($user->id);

        return view('admin.users.case_record', compact('user'));
    }
    
    public function case_record_index($users){
        abort_unless(\Gate::allows('user_access'), 403);

        $user = User::findorfail($users);

        return view('admin.users.case_edit', compact('user'));
    }
    //print
    public function case_index_print($users){
        abort_unless(\Gate::allows('user_access'), 403);

        $users = User::findorfail($users);

        return view('admin.users.case_index_print', compact('users'));
    }

    public function case_record_add(Request $request){
        $user = User::findOrFail($request->user_id);
        $user->contact_number = (!empty($request->contact_number)) ? $request->contact_number : '';
        $user->hospital = (!empty($request->hospital)) ? $request->hospital : '';
        $user->doctor_name = (!empty($request->doctor_name)) ? $request->doctor_name : '';
        $user->doctor_number = (!empty($request->doctor_number)) ? $request->doctor_number : '';
        $user->notes = (!empty($request->notes)) ? $request->notes : '';
        $user->date_of_entry = \Carbon\Carbon::now()->toDateTimeString();
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.users.index');
    }
    
    public function case_record_put_edit(Request $request){

        $user = User::findOrFail($request->user_id);
        if($request->day_temperature == 1){
            
            $user->day1_temperature =  $request->temperature;
        }
        else if($request->day_temperature == 2){
            $user->day2_temperature =  $request->temperature;
        }
        else if($request->day_temperature == 3){
            $user->day3_temperature = $request->temperature;
        }
        else if($request->day_temperature == 4){
            $user->day4_temperature = $request->temperature;
        }
        else if($request->day_temperature == 5){
            $user->day5_temperature =  $request->temperature;
        }
        else if($request->day_temperature == 6){
            $user->day6_temperature = $request->temperature;
        }
        else if($request->day_temperature == 7){
            $user->day7_temperature =  $request->temperature;
        }
        else if($request->day_temperature == 8){
            $user->day8_temperature =  $request->temperature;
        }
        else if($request->day_temperature == 9){
            $user->day9_temperature = $request->temperature;
        }
        else if($request->day_temperature == 10){
            $user->day10_temperature = $request->temperature;
        }
        else if($request->day_temperature == 11){
            $user->day11_temperature = $request->temperature;
        }
        else if($request->day_temperature == 12){
            $user->day12_temperature = $request->temperature;
        }
        else if($request->day_temperature == 13){
            $user->day13_temperature = $request->temperature;
        }
        else if($request->day_temperature == 14){
            $user->day14_temperature =$request->temperature;
        }

  
        
        if($request->day_symptoms == 1){
            if(!empty($request->symptoms))$user->day1_symptoms = implode(',',$request->symptoms);

        }
        else if($request->day_symptoms == 2){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day2_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 3){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day3_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 4){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day4_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 5){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day5_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 6){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day6_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 7){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day7_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 8){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day8_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 9){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day9_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 10){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day10_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 11){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day11_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 12){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day12_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 13){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day13_symptoms = $symptoms_array;
        }
        else if($request->day_symptoms == 14){
            $symptoms_array = implode(',',$request->symptoms);
            $user->day14_symptoms = $symptoms_array;
        }
        //(!empty($request->doctor_name)) ? $request->doctor_name : '';
        $user->status =  $request->status;
        $user->doctor_name =  $request->doctor_name;
        $user->doctor_number = $request->doctor_number;
        $user->hospital = $request->hospital;
        $user->last_location = $request->last_location;
        $user->date_of_admission = $request->date_of_admission;

        $user->pcr_swab_test_date =  $request->pcr_swab_test_date;
        $user->pcr_swab_test_results =  $request->pcr_swab_test_results;
        $user->pcr_swab_date_of_results =  $request->pcr_swab_date_of_results;
        $user->rapid_test_date =  $request->rapid_test_date;
        $user->rapid_test_results =  $request->rapid_test_results;
        $user->rapid_date_of_results =  $request->rapid_date_of_results;
        $user->save();
        return redirect()->route('admin.user.caseindex',$user->id);

    }


    public function update(Request $request, User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $user->update($request->all());

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_unless(\Gate::allows('user_show'), 403);

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_unless(\Gate::allows('user_delete'), 403);

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
