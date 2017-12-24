<!DOCTYPE html>
@extends('layouts.app')

<html>
  <head>
    <meta charset="utf-8">
    <link href="css\template.css" rel="stylesheet" type="text/css">
    <title>Calendar</title>
  </head>
  <body>
    @section('content')
    <div class="content">
      <h1> Hello {{ Auth::user()->name }} </h1>
    </div>
    @endsection
  </body>
</html>
