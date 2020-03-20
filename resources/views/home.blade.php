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
               
                <div class="card-header"><h3>Tickets</h3> </div>

                <div class="card-body">
                    <table class="table table-sm table-info table-striped">
                        <thead class="thead" align="center">
                          <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                          <tr>
                            <td>{{$ticket->id}}</td>
                            <td></td>
                            <td>{{$ticket->summary}}</td>
                            <td>{{$ticket->description}}</td>
                            <td>{{$ticket->status}}</td>
                            <td>{{$ticket->created_at}}</td>
                          </tr>
                            @endforeach
                        </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>

@endsection
