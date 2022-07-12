<table class="table-fixed min-w-full bg-white py-6 px-6 rounded-b-sm shadow-sm">
    <thead>
        <tr>
            <th class="font-medium p-4 text-slate-800 text-left">Title</th>
            <th class="font-medium p-4 text-slate-800 text-right">File</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $media)
            <tr>
                <td class="border-t border-slate-100 p-4 text-slate-500 truncate max-w-xs text-left">
                    {{ $media->title }}</td>
                <td class="border-t border-slate-100 p-4 text-slate-500 text-right">
                    <a href="{{ $media->url }}" download>Download</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
