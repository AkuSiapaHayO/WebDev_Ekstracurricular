@extends('layouts.template')

@section('layout')
    <div class="card m-4 mt-5">
        <div class="card-body">

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
