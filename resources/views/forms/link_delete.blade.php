<form id="{{ $link }}" action="{{ route('admin.link.delete', ['link' => $link]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <p class="text-slate-500">
        Are you sure? you want to delete this link?
    </p>
</form>
