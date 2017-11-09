@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<style> 
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
<p class="test1">This is some long text that will not fit in the box</p>
</div>
</div>