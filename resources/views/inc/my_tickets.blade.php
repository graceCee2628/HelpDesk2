<!--+++++++++++++++++++++++++++++++++++++++++++++
            GUEST MY ACCOUNT PAGE
+++++++++++++++++++++++++++++++++++++++++++++++-->    


@extends('layouts.app')

@section('content')

  <div class="row">
      <div class="col-md-2">
          @include('layouts.partials._sidebar')
      </div>

      <div class="col-md-10">
          <div class="card">
              <div class="card-header"><h3>My Tickets</h3> </div>
              <div class="card-body">
                    <table class="table table-sm table-info table-striped">
                        <thead class="thead">
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th> Created</th>
                            <th> Updated</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($tickets as $ticket)
                          <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->summary}}</td>
                            <td>{{$ticket->description}}</td>
                            <td>{{$ticket->priority}}</td>
                            <td>{{$ticket->status}}</td>
                            <td>{{$ticket->created_at}}</td>
                            <td>{{$ticket->updated_at}}</td>
                            <td>
                                <button class="btn btn-sm btn-danger">Edit</button>

                            </td>  

                            <td>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>                             
                          </tr>
                           @endforeach
                        </tbody>
                  </table>




              </div>
          </div>
      </div>
  </div>

@endsection