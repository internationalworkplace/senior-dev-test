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

<div class="max-w-full md:flex md:justify-center sm:px-6 lg:px-8">
    <form class="px-4 py-6 sm:p-8 w-5/5 sm:w-3/5 md:w-2/5" action="{{ route('') }}" method="POST">
        @csrf
        <div class="grid grid-cols-3 gap-4 sm:grid-cols-3">
            <div class="col-span-full">
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Course Title</label>
                <div class="mt-2">
                    <input type="text" name="title" id="title" autocomplete="off"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="col-span-full">
                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Course
                    Description</label>
                <div class="mt-2">
                    <textarea rows="4" name="description" id="description"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>

            <div class="col-span-full sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Trainer
                    Name</label>
                <div class="mt-2">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="col-span-full sm:col-span-3">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Trainer Email</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="col-span-full">
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">URL Slug</label>
                <div class="mt-2">
                    <input type="text" name="title" id="title" autocomplete="off"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
        </div>
    </form>
</div>
@stop
