@if (count($students)>0)
    @foreach ($students as $student)
   
  <li>  {{$student}}</li>
    @endforeach
@else
    No students Yet
@endif