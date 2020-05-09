@extends('layouts.app')

@section('content')
    <h1>Documents</h1>  
    {!! link_to_route('documents.create', 'Upload Document') !!} 

    <table class="table" id="table-documents">
    </table>
    <example-component></example-component>
     
@endsection