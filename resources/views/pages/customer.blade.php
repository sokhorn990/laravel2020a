@if (count($teachers)>0)
    @foreach ($teachers as $teacher)
    {{$teacher}}<br>
    @endforeach
@else
    No Customer Yet
@endif