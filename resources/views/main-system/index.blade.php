@extends('main-system.layouts.master')
@section('title') @endsection
@section('head')
<link rel="stylesheet" href="{{ asset('css/main-system/frontmain.css') }}">
@endsection
@section('content')

<?php echo $template->content  ?>

@endsection


  

  