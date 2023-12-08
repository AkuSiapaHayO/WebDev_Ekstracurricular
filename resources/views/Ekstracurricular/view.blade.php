@extends('layouts.app')

@section('content')
    <div class="card m-4 mt-5">
        <div class="card-body">

            <div class="text-end">
                <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group me-2" role="group" aria-label="Basic Example">
                        <form method="GET" action="{{ route('ekstracurricular.create') }}">
                            <button class="btn btn-outline-success" href="{{ route('ekstracurricular.create') }}">
                                Add Ekstracurricular
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Tutor</th>
                        <th scope="col" class="text-center">Requirement</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ekstracurriculars as $i => $ekstracurricular)
                        <tr>
                            <td class="align-middle">{{ $i + 1 }}</td>
                            <td class="align-middle">{{ $ekstracurricular->name }}</td>
                            <td class="align-middle">${{ $ekstracurricular->price }}.00</td>
                            <td class="align-middle">{{ $ekstracurricular->tutor_name }}</td>
                            <td class="align-middle">{{ $ekstracurricular->requirement }}</td>
                        </tr>
                        @php($i++)
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
