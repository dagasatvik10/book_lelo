@extends('layouts.master')
<style>
 #border{
  border-color: #03085D;
 }
 #border:hover{
  background-color: white;
 }
</style>

@section('content')
 {{--Header	--}}
<header class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	<div class="logo col-md-8 col-lg-8 col-xs-12 col-sm-12">
		{{--<div class="logo-title-big"><font style="font-size: 50px;">B</font><font style="font-size: 50px; color: blue;">L</font> </div>--}}
		<div class="logo-title"></div>
	</div>

</header>
{{--End Header--}} 


<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 margin-auto">
<div class="headingClass"><h3>Profile Details</h3></div>

<div class="panel-body panelBodyClass">
<table class="table table-bordered table-hover written-data">
<tbody>
 <tr >
  <td id="border"><font class="written-data-headings">Name :</font> {{ Auth::user()->name}}</td>
 </tr>
 <tr>
<td id="border"><font class="written-data-headings">E-Mail :</font> {{Auth::user()->email }}</td>
 </tr>
 <tr>
  <td id="border"><font class="written-data-headings">Branch :</font> {{ Auth::user()->branch['name'] }}</td>
 </tr>
 <tr>
<td id="border"><font class="written-data-headings">College :</font> {{ Auth::user()->college['name'] }}</td>
 </tr>
 <tr>
<td id="border"><font class="written-data-headings">Batch :</font> {{ Auth::user()->batch }}</td>
 </tr> 
 <tr>
<td id="border"><font class="written-data-headings">Contact No :</font> {{ Auth::user()->contact }}</td>
 </tr>
 <tr>
<a href="{{ url('/user/edit/') }}" style="float:right; "><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Profile</button></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="{{ url('/user/deleteconfirm/') }}" style="float:right;padding-right:20px;"><button type="button" class="btn submit-button"><i class="fa fa-trash-o"></i> Delete Profile</button></a>
 </tr>
 <br><br>
 </tbody>
 </table>
<h4></h4>
</div>

</div>
@endsection