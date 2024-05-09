<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    //     What the $jobs Variable Contains: The variable $jobs now holds the query builder instance, allowing you to build queries and interact with the Job model's corresponding database table. It does not contain the actual data yet; it's merely a blueprint or a set of instructions for building the SQL query.

    // Executing the Query: To get the results from the query builder, you need to call a method like get(), first(), or similar. For example:

    //     $jobs->get() fetches all results matching the built query.
    //     $jobs->first() fetches the first result matching the built query.
    //     $jobs->count() returns the count of matching row
    public function index()
    {
        // $jobs = Job::query();
        // dd($jobs->toSql());
        // "select * from `jobs`"; so $jobs holds query statement
        // $jobs->when(request('search'), function ($query) {
        //     $query->where(function ($query) {
        //         $query->where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%');
        //     });
        // })->when(request('min_salary'), function ($query) {
        //     $query->where('salary', '>=', request('min_salary'));
        // })->when(request('max_salary'), function ($query) {
        //     $query->where('salary', '<=', request('max_salary'));
        // })->when(request('experience'), function ($query) {
        //     $query->where('experience', request('experience'));
        // })->when(request('category'), function ($query) {
        //     $query->where('category', request('category'));
        // });

        // This code works the same as above code
        // $jobs->when(request('search'), function ($query) {
        //     $query->whereAny(['title','description'], 'like', '%' . request('search') . '%');
        // });

        // return view('jobs.index', ['jobs' => $jobs->get()]);

        $filters = request()->only('search', 'min_salary', 'max_salary', 'experience', 'category');
        // dd($filters);
        return view('jobs.index', ['jobs' => Job::filter($filters)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
