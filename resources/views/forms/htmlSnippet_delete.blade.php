<form id="{{ $htmlSnippet }}" action="{{ route('admin.htmlSnippet.delete', ['htmlSnippet' => $htmlSnippet]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <p class="text-slate-500">
        Are you sure? you want to delete this HTML Snippet?
    </p>
</form>
