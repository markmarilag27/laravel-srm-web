@foreach ($data as $htmlSnippet)
<base-accordion
    key="{{ $htmlSnippet->uuid }}"
    title="{{ $htmlSnippet->title }}"
>
    {!! $htmlSnippet->description !!}
</base-accordion>
@endforeach
