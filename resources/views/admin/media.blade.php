@extends('layouts.main')

{{-- title --}}
@push('title') Admin Media @endpush

@section('content')
<nav class="flex justify-end">
    <form-modal
        button-name="Add New Media"
        button-class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm text-center"
        form-id="add-new-media"
        modal-title="Add New Media"
        modal-button-ok-name="Save"
        modal-button-close-name="Close"
        modal-width="w-full"
        >
            @include('forms.media_store')
    </form-modal>
</nav>

<div class="bg-white py-4 px-6 rounded-sm mt-4 shadow-sm">
    <table class="table-fixed min-w-full">
        <thead>
            <tr>
                <th class="font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Title</th>
                <th class="font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-right">File</th>
                <th class="font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $media)
            <tr>
                <td class="border-t border-slate-100 p-4 pl-8 text-slate-500 truncate max-w-xs text-left">{{ $media->title }}</td>
                <td class="border-t border-slate-100 p-4 pl-8 text-slate-500 text-right">
                    <a href="{{ $media->url }}" download>Download</a>
                </td>
                <td class="border-t border-slate-100 p-4 pl-8 text-slate-500 text-right">
                    <div class="flex justify-end space-x-4">
                        <form-modal
                            key="{{ $media->uuid }}"
                            button-name="Edit"
                            button-class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm text-center"
                            form-id="{{ $media->uuid }}"
                            modal-title="Edit Media"
                            modal-button-ok-name="Save"
                            modal-button-close-name="Close"
                            modal-width="w-full"
                        >
                            @include('forms.media_update', ['media' => $media])
                        </form-modal>
                        <form-modal
                            key="{{ $media->uuid }}"
                            button-name="Delete"
                            button-class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium text-sm text-center"
                            form-id="{{ $media->uuid }}"
                            modal-title="Delete Media"
                            modal-button-ok-name="Delete"
                            modal-button-close-name="Close"
                            modal-width="w-96"
                        >
                            @include('forms.media_delete', ['uuid' => $media->uuid])
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
