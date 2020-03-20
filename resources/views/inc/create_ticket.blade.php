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
            <div class="card-header"><h3>Create A Ticket</h3> </div>
              <div class="card-body">
                <center>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                      Click Here
                    </button>
                </center>  

                  <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body" align="center">
                          <form method="POST" action="/ticket/create">
                              @csrf
                              <div class="form-group row">

                                  <label for="title" class="col-lg-2 col-form-label text-lg-right ">{{ __('Title') }}</label>
                                  <div class="col-lg-9">
                                      <select id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>   
                                          <option></option>                                      
                                          <option>Hardware</option>
                                          <option>OS(Windows, Linux, Mac)</option>
                                          <option>Office Suites</option>
                                          <option>Ms Office</option>
                                      </select>
                                      @error('title')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>


                              <div class="form-group row">
                                  <label for="priority" class="col-lg-2 col-form-label text-lg-right">{{ __('Priority') }}</label>
                                  <div class="col-lg-9">
                                      <select id="priority" type="text" class="form-control @error('priority') is-invalid @enderror" name="priority" value="{{ old('priority') }}" required autocomplete="priority" autofocus>   
                                          <option></option>                                      
                                          <option>High</option>
                                          <option>Low</option>
                                          <option>Urgent</option>
                                      </select>
                                      @error('priority')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>


                              <div class="form-group row">
                                  <label for="description" class="col-lg-2 col-form-label text-lg-right">{{ __('Description') }}</label>
                                  <div class="col-lg-9">
                                      <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                      </textarea> 
                                  </div>
                              </div>
                              <div class="form-group row mb-0">

                               </div>

                              </form>
                                <!-- Modal footer -->
                               <div class="modal-footer">
                                  
                                      <button type="submit" class="btn btn-primary">
                                              {{ __('Submit') }}
                                      </button>

                                      <button type="submit" class="btn btn-danger " data-dismiss="modal">
                                              {{ __('Close') }}
                                      </button>
                           
                               </div>
                      </div>
                    </div>
                  </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection