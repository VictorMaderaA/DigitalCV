<div id="copy-me-cv">
    @if (isset($content))
        {!! $content !!}
    @else
        @include($defaultView);
    @endif
</div>
