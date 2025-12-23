<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::with("employer")->latest()->simplePaginate(3);
        return view("jobs.jobs", ["jobs" => $jobs]);
    }

    public function create(){
        return view("jobs.create");
    }

    public function store(){
            // validation
    request()->validate(
        [
            "title" => ["required", "min:3"],
            // "salary" => ["required", "decimal:0,2", "between:1000,10000"]
            "salary" => ["required", "numeric", "between:1000,10000"]
        ]
    );

    // store
    Job::create(
        [
            "title" => request("title"),
            "salary" => request("salary"),
            "employer_id" => 3
        ]
    );
    // redirect to index
    return redirect("/jobs");
    }

    public function show(Job $job){
        return view("jobs.show", ["job"=> $job]);
    }

    public function edit(Job $job){
        return view("jobs.edit", ["job" => $job]);
    }

    public function update(Job $job){
            // authorize
    // validation
    request()->validate(
        [
            "title" => ["required", "min:3"],
            // "salary" => ["required", "decimal:0,2", "between:1000,10000"]
            "salary" => ["required", "numeric", "between:1000,10000"]
        ]
    );
    // update
    $job->update(
        [
            "title" => request("title"),
            "salary" => request("salary"),
        ]
    );
    // redirect to show
    return redirect("jobs/" . $job->id);
    }

    public function destroy(Job $job){
         // authorize
    $job->delete();
    return redirect("/jobs");
    }
}