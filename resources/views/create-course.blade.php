@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="mx-auto text-center max-w-5xl px-4 sm:px-6 lg:px-8">
    <div class="sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
        <div class="mt-12 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
            <div class="mt-10 min-w-0 flex-1 sm:hidden md:block">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                    New Course Form</h2>
            </div>
        </div>
    </div>
</div>

<div class="max-w-full md:flex md:justify-center sm:px-6 lg:px-8 mt-4">
    @includeUnless($trainers->isEmpty(), 'components.forms.create-course', ['trainers' => $trainers])
    @includeWhen($trainers->isEmpty(), 'components.alert', ['message' => 'There are no available trainers.'])
</div>
@stop
