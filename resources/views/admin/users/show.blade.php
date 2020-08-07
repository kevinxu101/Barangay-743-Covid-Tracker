@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.user.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        Full Name
                    </th>
                    <td>
                        {{ $user->last_name }} {{ $user->first_name }} {{ $user->middle_name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Age
                    </th>
                    <td>
                        {{ $user->age }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Gender
                    </th>
                    <td>
                        {{ $user->gender }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Address
                    </th>
                    <td>
                        {{ $user->address }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Company Name
                    </th>
                    <td>
                        {{ $user->company_name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Company Address
                    </th>
                    <td>
                        {{ $user->company_address }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection