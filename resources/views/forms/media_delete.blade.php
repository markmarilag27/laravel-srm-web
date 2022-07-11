<form id="{{ $uuid }}" action="{{ route('admin.media.delete', ['media' => $uuid]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <p class="text-slate-500">
        Are you sure? you want to delete this media?
    </p>
</form>
