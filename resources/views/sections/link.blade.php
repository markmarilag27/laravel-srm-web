<table class="table-fixed min-w-full bg-white py-4 px-6 rounded-b-sm shadow-sm">
    <thead>
        <tr>
            <th class="font-medium p-4 text-slate-800 text-left">Title</th>
            <th class="font-medium p-4 text-slate-800 text-right">Link</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $link)
            <tr>
                <td class="border-t border-slate-100 p-4 text-slate-500 truncate max-w-xs text-left">
                    {{ $link->title }}</td>
                <td class="border-t border-slate-100 p-4 text-slate-500 text-right">
                    <a href="{{ $link->url }}" target="{{ $link->is_new_tab ? '_blank' : '' }}" class="text-slate-800">Click here</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
