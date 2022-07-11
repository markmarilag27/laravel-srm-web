<nav class="bg-gray-800 flex flex-row justify-between py-4 px-6">
    <span class="text-white font-bold flex-auto">Admin SRM</span>
    <ul class="flex-auto space-x-4 text-right">
        <li class="inline-block">
            <a href="{{ route('admin.media.index') }}" class="text-white hover:text-slate-400">Media</a>
        </li>
        <li class="inline-block">
            <a href="{{ route('admin.htmlSnippet.index') }}" class="text-white hover:text-slate-400">HTML Snippets</a>
        </li>
        <li class="inline-block">
            <a href="{{ route('admin.link.index') }}" class="text-white hover:text-slate-400">Links</a>
        </li>
    </ul>
</nav>
