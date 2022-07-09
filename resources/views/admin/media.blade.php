@extends('layouts.main')

{{-- title --}}
@push('title') Admin Media @endpush

@section('content')
<nav class="flex justify-end">
    button
</nav>

<div class="bg-white py-4 px-6 rounded-sm mt-4 shadow-sm">
    <table class="table-fixed min-w-full">
        <thead>
            <tr>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Title</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-right">File</th>
                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $media)
            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400 truncate max-w-xs text-left">{{ $media->title }}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400 text-right">
                    <a href="{{ $media->url }}" download>Download</a>
                </td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400 text-right">
                    <div class="flex justify-end space-x-4">
                        <button>Foo</button>
                        <button>Foo</button>
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
