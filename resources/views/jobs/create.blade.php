<x-layout title="create form">
    <h1>Create new job</h1>
    <hr>
    {{-- @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif --}}
    <form action="/jobs" method="post">
        @csrf
        <label>Enter Job Title</label>
        <input type="text" class="form-control mt-2" name="title" placeholder="e. g: Doctor" required>
        @error("title")
            <p class="text-danger" >{{$message}}</p>
        @enderror
        <label>Enter Salary Per Year</label>
        <input type="number" class="form-control mt-2" name="salary" placeholder="e. g: 12,000" required>
        @error("salary")
            <p class="text-danger" >{{$message}}</p>
        @enderror
        <button class="btn btn-primary mt-2" type="submit" >Add new Job</button>
    </form>
</x-layout>