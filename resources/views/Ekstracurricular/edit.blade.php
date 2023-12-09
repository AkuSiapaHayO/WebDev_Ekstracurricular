@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('ekstracurricular.update', $ekstracurricularEdit) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Ekstracurricular Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="New Ekstracurricular"
                    required value="{{ $ekstracurricularEdit->name }}">
            </div>
            <div class="mb-3">
                <label for="requirement" class="form-label">Requirement</label>
                <textarea class="form-control" id="requirement" name="requirement" rows="3" placeholder="Age, Tools, etc"
                    required>{{ $ekstracurricularEdit->requirement }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="20" required
                    value="{{ $ekstracurricularEdit->price }}">
            </div>
            <div class="mb-3">
                <label for="tutor" class="form-label">Tutor Name</label>
                <input type="text" class="form-control" id="tutor" name="tutor" placeholder="Tutor's name" required
                    value="{{ $ekstracurricularEdit->tutor_name }}">
            </div>
            <button type="submit" class="btn btn-primary">
                Update
            </button>
        </form>
    </div>
@endsection
