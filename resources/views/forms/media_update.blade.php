<form id="{{ $media->uuid }}" action="{{ route('admin.media.update', ['media' => $media->uuid]) }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
        <input
            type="text"
            name="title"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Title"
            value="{{ $media->title }}"
            required
        >
    </div>
    <div class="py-4">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Upload PDF File</label>
        <input
            type="file"
            name="uploaded"
            accept="application/pdf"
            required
        >
    </div>
</form>
