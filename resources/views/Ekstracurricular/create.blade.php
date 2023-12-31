@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('ekstracurricular.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Ekstracurricular Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="New Ekstracurricular"
                    required>
            </div>
            <div class="mb-3">
                <label for="requirement" class="form-label">Requirement</label>
                <textarea class="form-control" id="requirement" name="requirement" rows="3" placeholder="Age, Tools, etc"
                    required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="20" required>
            </div>
            <div class="mb-3">
                <label for="tutor" class="form-label">Tutor Name</label>
                <input type="text" class="form-control" id="tutor" name="tutor" placeholder="Tutor's name"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
@endsection
