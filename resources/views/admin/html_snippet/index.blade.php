@extends('layouts.main')

{{-- title --}}
@push('title') Admin HTML Snippets @endpush

@section('content')
<nav class="flex justify-end">
    <a href="{{ route('admin.htmlSnippet.create') }}" class="py-1.5 px-5 rounded-md flex text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm text-center">
        Add New Snippet
    </a>
</nav>

<div class="bg-white py-4 px-6 rounded-sm mt-4 shadow-sm">
    <table class="table-fixed min-w-full">
        <thead>
            <tr>
                <th class="font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Title</th>
                <th class="font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $htmlSnippet)
            <tr>
                <td class="border-t border-slate-100 p-4 pl-8 text-slate-500 truncate max-w-xs text-left">{{ $htmlSnippet->title }}</td>
                <td class="border-t border-slate-100 p-4 pl-8 text-slate-500 text-right">
                    <div id="test" class="flex justify-end space-x-4">
                        <a href="{{ route('admin.htmlSnippet.edit', ['htmlSnippet' => $htmlSnippet->uuid]) }}" class="py-1.5 px-5 rounded-md flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm text-center">
                            Edit
                        </a>
                        <form-modal
                            key="{{ $htmlSnippet->uuid }}"
                            button-name="Delete"
                            button-class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium text-sm text-center"
                            form-id="{{ $htmlSnippet->uuid }}"
                            modal-title="Delete HTML Snippet"
                            modal-button-ok-name="Delete"
                            modal-button-close-name="Close"
                            modal-width="w-96"
                        >
                            @include('forms.htmlSnippet_delete', ['htmlSnippet' => $htmlSnippet->uuid])
                        </form-modal>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="py-4">
    {{ $data->links() }}
</div>
@endsection
