@extends('layouts.master')

@section('content')
 {{--Header	--}}
<header class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	<div class="logo col-md-8 col-lg-8 col-xs-12 col-sm-12">
		{{--<div class="logo-title-big"><font style="font-size: 50px;">B</font><font style="font-size: 50px; color: blue;">L</font> </div>--}}
		<div class="logo-title"></div>
	</div>

</header>
{{--End Header--}} 


<div class="nav col-xs-12 col-md-12 col-lg-12 col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"><h3 class="panel-title">Profile Details</h3></div>

<div class="panel-body">
<table class="table table-bordered table-hover">
 <tbody>
 <tr>
  <td>Name : {{ Auth::user()->name}}</td>
 </tr>
 <tr>
<td>E-Mail : {{Auth::user()->email }}</td>
 </tr>
 <tr>
  <td>Branch : {{ Auth::user()->branch['name'] }}</td>                             
 </tr>
 <tr>
<td>College : {{ Auth::user()->college['name'] }}</td>
 </tr>
 <tr>
<td>Batch : {{ Auth::user()->batch }}</td>
 </tr> 
 <tr>
<td>Contact No : {{ Auth::user()->contact }}</td>
 </tr>
 <tr>
<a href="{{ url('/user/edit/') }}"><button type="button" class="btn btn-default">Edit Profile</button></a>&nbsp;
<a href="{{ url('/user/deleteconfirm/') }}"><button type="button" class="btn btn-default">Delete Profile</button></a>
 </tr>
 </tbody>
 </table>
<h4></h4>
</div>

</div>
</div>
@endsection