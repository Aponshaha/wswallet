@extends('layouts.app')
@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EXCHANGE</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    <div>
                    <div >
                    
                    <exchange-component></exchange-component>
                    </div>             
                </div>
                </div>
            </div>
            <div>
            
            </div>
        </div>
    </div>
</div>


<div>
<coin-component></coin-component>
</div>

@endsection
