@if ($errors->any()) 
    
  <ul>
    @foreach($errors->all() as $error)
       <li style="list-style: none; font-size: 14px;">{{ $error }}</li> 
    @endforeach
  </ul>

@endif