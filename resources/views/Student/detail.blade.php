@extends('layouts.app')

@section('content')
    <div class="card mt-5 m-4">
        <div class="card-body p-5">
            <h2 class="text-center">{{ $student->name }}'s Details</h2>
            <div class="d-flex justify-content-center mt-5">
                <img src="{{ $student->photo }}" alt="" width="400" height="400">
            </div>
            <table class="table table-hover mt-5 mb-5">
                <tr>
                    <th scope="row">Name</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Nickname</th>
                    <td>{{ $student->nickname }}</td>
                </tr>
                <tr>
                    <th scope="row">Grade</th>
                    <td>{{ $student->grade_number }}</td>
                </tr>
                <tr>
                    <th scope="row">Phone</th>
                    <td>{{ $student->phone }}</td>
                </tr>
                <tr>
                    <th scope="row">Social Media</th>
                    <td>{{ $student->sosmed }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $student->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Password</th>
                    <td>{{ $student->password }}</td>
                </tr>
                <tr>
                    <th scope="row">Gender</th>
                    <td>{{ $student->gender }}</td>
                </tr>
                <tr>
                    <th scope="row">Birthdate</th>
                    <td>{{ $student->birthdate }}</td>
                </tr>
                <tr>
                    <th scope="row">Nationality</th>
                    <td>{{ $student->nationality }}</td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td>{{ $student->address }}</td>
                </tr>
                <tr>
                    <th scope="row">City</th>
                    <td>{{ $student->city }}</td>
                </tr>
                <tr>
                    <th scope="row">Province</th>
                    <td>{{ $student->province }}</td>
                </tr>
                <tr>
                    <th scope="row">Country</th>
                    <td>{{ $student->country }}</td>
                </tr>
                <tr>
                    <th scope="row">Postcode</th>
                    <td>{{ $student->postcode }}</td>
                </tr>
            </table>
            <div class="container bg-dark-subtle rounded-4 p-5">
                <p class="fw-bold">Note</p>
                {{ $student->note }}
            </div>
        </div>
    </div>
@endsection
