<p>It Works!</p>
@if($organisation)
    {{$organisation}}
@endif
<br/>
</br>
@if($event)
    {{$event}}
@else
    No upcoming events
@endif