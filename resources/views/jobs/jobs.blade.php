<x-layout title="Jobs">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Jobs Lists</h1>
        <a href="/jobs/create" class="btn btn-primary" >Create new job</a>
    </div>
    <hr>
    <ul>
        @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}" class="text-decoration-none text-dark">
            <div class="rounded border p-2 my-2">
                <b class="text-primary">{{$job->employer->name ?? "Company"}}</b>
                <p class="">{{$job["title"]}} pays {{$job["salary"]}} EGP per year</p>
            </div>
        </a>
        @endforeach

        <div class="m-5 d-flex justify-content-center">
            {{$jobs->links()}}
        </div>
    </ul>
</x-layout>