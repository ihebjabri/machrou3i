@extends('layouts.app')

@section('content')
 
<div class="container justify-content-center">
 
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex">
                <b>Taks</b>
               
            </div>
    
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        @livewire('create-task')
                    </div>

                    <div class="col-md-8">
                        @livewire('app-tasks')
                    </div>
                </div>
               
              
            </div>
        
        </div>
    </div>
</div>
 
@endsection
