@extends('layouts.main')

{{-- title --}}
@push('title') Add New HTML Snippet @endpush

@section('content')
<form action="{{ route('admin.htmlSnippet.store') }}" method="POST">
    @csrf
    <div class="container sm:mx-auto md:max-w-screen-sm">
        <div class="flex justify-between">
            <a href="{{ route('admin.htmlSnippet.index') }}">
                Back to main
            </a>
            <button type="submit" class="py-1.5 px-5 rounded-md flex text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm text-center">
                Save
            </button>
        </div>
        <div class="bg-white py-6 px-6 rounded-sm mt-4 shadow-sm">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                <input
                    type="text"
                    name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Title"
                    required
                >
            </div>
            <div class="pt-6">
                <label class="block mb-2 text-sm font-medium text-gray-900">HTML Snippet</label>
                <textarea rows="4" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Your HTML snippets..."></textarea>
            </div>
        </div>
    </div>
</form>
@endsection
