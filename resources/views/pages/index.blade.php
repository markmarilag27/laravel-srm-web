@extends('layouts.main')

{{-- title --}}
@push('title') Simple Resource Management @endpush

@section('content')
<visitor-section>
    <template v-slot:media>
        @include('sections.media')
    </template>
    <template v-slot:html_snippet>
        @include('sections.html_snippet')
    </template>
    <template v-slot:link>
        @include('sections.link')
    </template>
</visitor-section>

<div class="py-4">
    {{ $data->withQueryString()->links() }}
</div>
@endsection
