<div class="card">
  <div class="card-header">
    <center>
      <h5>
          @if (session('status'))
            <div class="alert alert-success"  role="alert">
              {{ session('status') }}
            </div>
          @endif

          {{ Auth::user()->name }}
      </h5>

      <center>Guest</center>
  </div>

  <div class="card-body">
    <center>

      <div>
          <a href="/ticket/create">Create Ticket</a>
      </div>
      <br>      
      <div>
          <a href="/ticket">My Tickets</a>
      </div>  
      <br>
    <!--  <div>
          <a href="{{route('home')}}">Tickets</a>
      </div>  --> 

     </center>
  </div>
</div>    
