@if (isset($slice->primary->embed->html))
    <section class="l-content-section video l-grid-container">
        {!! $slice->primary->embed->html !!}
    </section>
@endif
