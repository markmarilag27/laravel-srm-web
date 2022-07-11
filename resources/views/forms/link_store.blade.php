@if ($errors->any())
    @foreach($errors as $error)
        {{ $error }}
    @endforeach
@endif

<form id="add-new-link" action="{{ route('admin.link.index') }}" method="POST">
    @csrf
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
    <div class="py-4">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">URL</label>
        <input
            type="text"
            name="url"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="url"
            required
        >
    </div>
    <div class="flex items-center mb-4">
        <input id="default-checkbox" name="is_new_tab" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is Open New Tab</label>
    </div>
</form>
