@extends('layouts.app')

@section('content')
    <h1>Documents</h1>  
    {!! link_to_route('documents.create', 'Upload Document') !!} 
@endsection