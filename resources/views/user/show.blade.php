@extends('layouts.master')
<!--
<style>
	header{
		/*background-color: greenyellow ;*/
		width: 100%;
	}
	.logo{
		height: 75px;
		width: 100%;
		/*background-color: orangered ;*/
	}
	.logo-title{
		padding-left: 2px;
		text-align: center	;
		font-size: 35px;
		font-weight: bold;
		color:white;
		background-color: dodgerblue;
		width: 80%;
		float: left;
		height: 75px;
		line-height: 75px;
		background: -webkit-linear-gradient(left,white,dodgerblue, white 80%);
		background: -o-linear-gradient(left ,white, dodgerblue, white 80%);
		background: -moz-linear-gradient(left, white, dodgerblue, white 80%);
		background: linear-gradient( left, white, dodgerblue, white 80%);
	}
	.logo-title-big{
		 text-align: right;
		 font-weight: bold;
		 color:white;
		font-family: Papyrus;
		 background-color: dodgerblue;
		 width: 20%;
		 float: left;
		 height: 75px;
		 line-height: 75px;
		padding-right: 3px;
		 /*background: -webkit-linear-gradient(left,white 2%,dodgerblue, white 80%);*/
		 /*background: -o-linear-gradient(left ,white, dodgerblue, white 80%);*/
		 /*background: -moz-linear-gradient(left, white, dodgerblue, white 80%);*/
		 /*background: linear-gradient( left, white, dodgerblue, white 80%);*/
		 }
	.logo-title:hover{
		transition:animation 200ms ease-in;
		animation:logoanimate 1s 0ms infinite;
	}
	.sign-in-up{
		height: 75px;
		width: 100%;
		/*background-color: cornflowerblue ;*/
	}
	.button-custom{
		width:100px;
		/*background-color: white;*/
		/*color:red;*/
		/*border-radius: 0;*/
	}
	/*.button-custom:hover{*/
	/*width:100px;*/
	/*background-color: floralwhite;*/
	/*color:white;*/
	/*}*/

	.nav{
		width: 100%;
		background-color: #34495e;
		background: -webkit-linear-gradient(left top, #34495e, deepskyblue, white 80%);
		background: -o-linear-gradient(bottom right, #34495e, deepskyblue, white 80%);
		background: -moz-linear-gradient(bottom right, #34495e, deepskyblue, white 80%);
		background: linear-gradient(to bottom right, #34495e, deepskyblue, white 80%);
		color: #ffffff;
	}
	.nav .menu-items{
		width: 100%;
	}
	/* top level
--------------------------------------------*/
	.menuTemplate2
	{
		margin: 0 auto; width: auto;float:left;
		position:relative;
		z-index:4;
		height: 36px;
		background: none;
		border: none;
		list-style: none;
		padding: 0;
	}

	.menuTemplate2 div {
	}

	.menuTemplate2 li
	{
		padding: 0;
		float: left;
		height: 34px;
		_height:36px;/*IE6 Hack*/
		position: relative;/*delete it if you want submenu to be positioned relative to the whole menu instead of this li element*/
		z-index:5;

		border-left:1px solid;
		border-right:1px solid;
		border-top:2px solid;
		border-color:transparent;
		_border-color:#FFF;/*IE6 Hack*/
	}

	.menuTemplate2 li:hover, .menuTemplate2 li.onhover
	{
		border-color:#DDD;
		border-bottom:1px solid #DDD;
	}
	.menuTemplate2 a
	{
		padding: 0 30px;
		line-height: 34px; /*Note: keep this value the same as the height of .menuTemplate2 li */
		font-weight: normal;
		display: inline-block;
		outline: 0;
		text-decoration: none;
		cursor: pointer;
		color: #FFF;
		text-shadow:  4px 4px 5px black;
		position: relative;
		transition: all 300ms ease-in;
	}


	.menuTemplate2 li:hover a, .menuTemplate2 li.onhover a
	{
		background-color: #EEE;
		color: #000;
		text-shadow:  2px 2px whitesmoke;
		z-index: 9;
		font-weight: bold;
		transition: all 300ms ease-in;
	}
	.menuTemplate2 a.arrow
	{
		text-decoration: none;
		cursor: pointer;
	}


	/*Used to align a top-level item to the right*/
	.menuTemplate2 li.menuRight
	{
		float: right;
		margin-right: 0px;
	}

	/*for the top-level separators*/
	.menuTemplate2 li.separator
	{
		display:none;
	}


	/* sub level
    --------------------------------------------*/

	.menuTemplate2 .drop
	{
		position: absolute;
		z-index:5;
		width:100px;
		left: -9999px;
		border: 1px solid #DDD;
		border-bottom:2px solid cornflowerblue;
		background: #FFF;
		text-align: left;
		padding: 20px;
		padding-bottom:0;
		top:31px;
	}

	.menuTemplate2 .drop a
	{
		padding-left: 0px;
		padding-right: 0px;
		line-height: 24px;
		font-size: 14px;
		font-weight: normal;
		display: inline;
		text-align: left;
		width:100px;
		position: static;
		z-index: 0;
	}

	.menuTemplate2 li:hover .drop, .menuTemplate2 li.onhover .drop
	{
		left: -1px;/*Use this property to change offset of the dropdown*/
	}
	.menuTemplate2 li:hover .dropToLeft, .menuTemplate2 li.onhover .dropToLeft
	{
		left: auto;
		right: -1px;
	}
	.menuTemplate2 li:hover .dropToLeft2, .menuTemplate2 li.onhover .dropToLeft2
	{
		left: auto;
		right: -60px;
	}

	/* Elements within the drop down sub-menu
    --------------------------------------------*/

	.menuTemplate2 div.drop div div
	{
		padding: 0px 0px;
		width:100px;
	}
	.menuTemplate1 li:hover .drop a, .menuTemplate1 li.onhover .drop a
	{
		z-index: 999;;
		padding:0 0;
	}
	.menuTemplate2 div.drop div a
	{
		line-height: 24px;
		color: #048;
		background:none;
		width:100px;
	}
	.menuTemplate2 div.drop div a:hover
	{
		cursor:pointer;
		background-color: whitesmoke;
	}

	.menuTemplate2 div.left {float:none;}



	/* CSS3 effects
    --------------------------------------------*/

	/*for top-level*/
	.decor2_1
	{
	}

	/*for submenu.*/
	.decor2_2
	{
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px;
		border-radius: 4px;

		-moz-box-shadow: 0 0 14px #AAA;
		-webkit-box-shadow: 0 0 14px #AAA;
		box-shadow: 0 0 14px #AAA;

		color:cornflowerblue;
		z-index: 999;
	}
	.decor2_2 .left .drop-cont{
		width:300px;
	}
	.decor2_2 .left .drop-cont div:hover{
		background-color: whitesmoke;
		cursor: pointer;
	}
	.decor2_2 .left .drop-cont div {
		height:24px;
		width: 100%;
		padding-right: 20px;
		padding-left: 20px;
	}

	.search-div{
		width:100%;
		/*background-color: lightslategrey;*/
	}
	.search-bar{
		width:100%;
		border:0;
		height:30px;
		border-radius: 3px;
		margin: 3px;
		color:dodgerblue;
		padding-left: 10px;
	}
	.search-bar:focus {
		background-color: white;
	}
	/*.search-icon{*/
		/*position:absolute;*/
		/*background-color: red;*/
		/*top:100px;*/
	/*}*/
	.radio-search{
		height:20px;
		float: left;
	}
	.trending-ads{
/*		background: #000;
*/		color: white;
		width:100%;
		height: 500px;
	}
	.ad{
		background-color: #FFF;
		/*border: solid 4px #34495e;*/
		height: 100px;
		width: 90%;
		border-radius: 5px;
	}

	.ad-image{
		background-color: green;
		height:100px;
		width: 20%;
	}
	.ad-info{
		background-color: red;
		height:100px;
		width: 80%;
	}
	.pagination{
		color:white;
		border: solid 1px white;
		width: 90%;
		height:35px;
		line-height: 35px;
		margin-bottom: 10px;
	}

</style>-->

@section('content')
 {{--Header	--}}
<<header class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	<div class="logo col-md-8 col-lg-8 col-xs-12 col-sm-12">
		{{--<div class="logo-title-big"><font style="font-size: 50px;">B</font><font style="font-size: 50px; color: blue;">L</font> </div>--}}
		<div class="logo-title"></div>
	</div>
	<!-- <div class="sign-in-up col-md-4 col-lg-4 col-xs-12 col-sm-12">
		<br>
		@if(Auth::guest())
		<center><a class="btn button-custom btn-primary" href={{ url('/register') }}>SIGN UP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="btn button-custom btn-success" href={{ url('/login') }}>LOGIN</a></center>
		@else
			<div class="btn btn-primary">{{ Auth::user()->first_name }}</div>
		@endif
	</div> -->
</header>
{{--End Header--}} 
<div class="nav col-xs-12 col-md-12 col-lg-12 col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"><h3 class="panel-title">Profile Details</h3></div>

<div class="panel-body">
<table class="table table-bordered table-hover">
 <tbody>
 <tr>
  <td>Name : {{ Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name }}</td>
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
<td>Batch : {{ Auth::user()->start_year }}-{{ Auth::user()->end_year }}</td>
 </tr> 
 <tr>
 <td>Year : {{ Auth::user()->year }}</td>
 </tr>
 <tr>
<td>Address : {{ Auth::user()->address }}</td>
 </tr>
 <tr>
<td>Contact No : {{ Auth::user()->contact }}</td>
 </tr>
 <tr>
<a href="{{ url('/user/edit/') }}"><button type="button" class="btn btn-default">Edit Profile</button></a>&nbsp;
<a href="{{ url('/user/delete/') }}"><button type="button" class="btn btn-default">Delete Profile</button></a>
 </tr>
 </tbody>
 </table>
<h4></h4>
</div>

</div>
</div>
@endsection