<x-layout>
    <h1>Job</h1>
    <h1>Title: {{$job["title"]}}</h1>
    <h1>Salary: {{$job["salary"]}} EGP per year</h1>
    <hr>
    <div class="d-flex justify-content-between">
        <form action="/jobs/{{$job->id}}" method="POST">
            @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger" >Delete</button>
        </form>
        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
        <a href="/jobs/{{$job->id}}/edit" class="btn btn-primary">Edit</a>
    </div>
</x-layout>