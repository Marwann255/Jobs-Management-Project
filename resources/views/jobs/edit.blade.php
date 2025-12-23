<x-layout title="create form">
    <h1>Edit {{$job->title}}</h1>
    <hr>
    <form action="/jobs/{{$job->id}}" method="post">
        @csrf
        @method("PATCH")
        <label>Enter Job Title</label>
        <input type="text" class="form-control mt-2" name="title" placeholder="e. g: Doctor" value="{{$job->title}}" required>
        @error("title")
            <p class="text-danger" >{{$message}}</p>
        @enderror
        <label>Enter Salary Per Year</label>
        <input type="number" class="form-control mt-2" name="salary" placeholder="e. g: 12,000" value="{{$job->salary}}" required>
        @error("salary")
            <p class="text-danger" >{{$message}}</p>
        @enderror
        <button class="btn btn-primary mt-2" type="submit" >Edit Job</button>
    </form>
</x-layout>