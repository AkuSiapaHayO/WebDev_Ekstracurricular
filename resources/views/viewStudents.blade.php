@extends('layouts.template')

@section('layout')
    <div class="card mt-5 m-4">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Country</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach ($students as $i => $student)
                    <tbody>

                        <tr>
                            <th scope="row">{{ $i + 1 }}</td>
                            <td class="align-middle">{{ $student->name }}</td>
                            <td class="align-middle">{{ $student->grade_number }}</td>
                            <td class="align-middle">{{ $student->gender }}</td>
                            <td class="align-middle">{{ $student->birthdate }}</td>
                            <td class="align-middle">{{ $student->nationality }}</td>
                            <td class="align-middle">{{ $student->country }}</td>
                            <td class="align-middle text-center">
                                <a href="/student/{{ $student->id }}">
                                    <button class="btn btn-dark">
                                        More
                                    </button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @php($i++)
                @endforeach
            </table>
        </div>
    </div>
@endsection
