@extends('layouts.app')

@section('content')
    <div class="card mt-5 m-4">
        <div class="card-body">
            <form action="/viewStudent" method="GET" class="form-inline w-25 d-flex gap-2">
                <input class="form-control" type="search" name="search" placeholder="Search">
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
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
                        @Auth
                            @if (Auth::user()->isAdmin())
                                <th scope="col" class="text-center">Action</th>
                            @endif
                        @endAuth
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
                            @Auth
                                @if (Auth::user()->isAdmin())
                                    <td class="align-middle text-center">
                                        <a href="/student/{{ $student->id }}">
                                            <button class="btn btn-dark">
                                                More
                                            </button>
                                        </a>
                                    </td>
                                @endif
                            @endAuth
                        </tr>
                    </tbody>
                    @php($i++)
                @endforeach
            </table>
            <div>
                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
