@extends('layouts.app')

@section('content')
<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    p.test1 {
    white-space: nowrap; 
    width: 200px; 
    border: 1px solid #000000;
    overflow: hidden;
    text-overflow: clip;
}

p.test2 {
    white-space: nowrap; 
    width: 200px; 
    border: 1px solid #000000;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default"> tu particion aqui sigue
                <div class="panel-heading"> </div>
                <div class="pagination">
<tbody>
                                    
                                   
                                          <a href="#">&laquo;</a>
                                          <a href="{{ url('/home') }}"><th>{{ Auth::user()->name }}</th></a>
                                          <a href="#">&raquo;</a>
                                                            <textarea placeholder="Esta es tu area de trabajo {{ Auth::user()->name }}" cols="30" rows="5"></textarea> 

                                </tbody>

  
</div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
