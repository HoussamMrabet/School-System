@if (empty($demande))
    there is no demande with this information
@else
<h1>{{ $demande[0]->status }}</h1>
@endif
