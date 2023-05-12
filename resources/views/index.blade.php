@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Add Category</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="#"> Create New Category</a>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>
      <td>
        <a class="btn btn-primary" href="#">Edit</a>
        <a class="btn btn-danger" href="#">Delete</a>
      </td>
      </td>
    </tr>
  </tbody>
</table>

@endsection