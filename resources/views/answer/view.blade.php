@extends('layout')

@section('content')
<h4>{{ $survey->title }}</h4>
<table class="bordered striped">
  <thead>
    <tr>
        <th data-field="id">Question</th>
        <th data-field="name">Answer(s)</th>
    </tr>
  </thead>

  <tbody>
    @forelse ($survey->questions as $item)
    <tr>
      <td>{{ $item->title }}</td>
      @foreach ($item->answers as $answer)
      <br/>

          <td>
          @if (strpos($answer["answer"], '[') === false)
            @php echo($answer["answer"]) @endphp
          @endif
          
              <script>
                try{
                  var js = " ";
                  js  = {!!$answer['answer']!!};
                  console.log(js);
                  console.log(typeof(js) == 'object');
                  if (typeof(js) == 'object')
                  {
                   
                    for(let i=0;i<js.length;i++)
                    {
                      document.write(js[i]+", ");
                    }
                  }
      
                }catch(err){
                  
                }
              </script>
               <br/>
          <small>{{ $answer->created_at }}</small></td>
        
      
       
        
      @endforeach
    </tr>
    @empty
      <tr>
        <td>
          No answers provided by you for this Survey
        </td>
        <td></td>
      </tr>
    @endforelse
  </tbody>
</table>
@endsection
