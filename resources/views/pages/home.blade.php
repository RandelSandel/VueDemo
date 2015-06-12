@extends('app')



@section('content')

<h3>
	Home Page
</h3>


{!! Form::open() !!}
	{!! Form::label('name', 'testing forms facade package:') !!}
	{!! Form::text('name') !!}
{!! Form::close() !!}

    <h1 class="page-heading">
        Gulp sass testing   
	</h1>

<div id="app">
	@{{ message | reverse }}
</div>
</br>
<div id="demo" class="controller">
	<input type="text" v-model="name">
	
	<pre>@{{ $data | json }}</pre>
</div>
</br>



<div id="demo2" class="container">
	<ul>
		<li v-repeat="name: names"> @{{ name }} </li> 
	</ul>
	
	<input type="text" placeholder="Add a new name" v-model="newName" v-on="blur: addName">
</div>



</br>
<div id="demo3" class="container">
	<input type="text" v-on="
		
		keyup: onKeyUp,
		blur:onBlur
	">
</div>
</br>
<article id="post" class="container" v-show="isVisible">

	<button class="glyphicon glyphicon-remove-sign pull-right" v-on="click: isVisible = false"></button>

<h1>Some Post</h1>
	
<p>Lorem ipsum dal et armor Lorem ipsum dal et armorLorem ipsum dal et armor</p>
	
<button type="button"
		class="btn btn-default btn-lg"
		v-class="active: liked"
		v-on="click: toggleLike"
		>
	
		<span class="glyphicon glyphicon-thumbs-up"></span> @{{likesCount}}
</button>
	<br><br>
<pre>@{{ $data | json }}</pre>
	
</article>

<div id="demo4" class="container">
	
<input v-model="search" class="form-control">

<table class="table table-striped">
	
	<thead>
		<tr>
			<th><a href="#" v-on="click: sortBy('name')">Name</th>
			<th><a href="#" v-on="click: sortBy('age')">Age</th>
		</tr>
	</thead>
	
	<tbody>
		<tr v-repeat="people | filterBy search | orderBy sortKey reverse">
			<td>@{{ name }}</td>
			<td>@{{ age }}</td>
		</tr>
	</tbody>
	
	
</table>
	
<div class="radio">
	<label>
		<input type="radio" name="gender" v-model="gender" value="male"> All
	</label>
</div>
	
	</table>
	
<div class="radio">
	<label>
		<input type="radio" name="gender" v-model="gender" value="male"> Male
	</label>
</div>

</table>
	
<div class="radio">
	<label>
		<input type="radio" name="gender" v-model="gender" value="male"> Female
	</label>
</div>

<ul>
	<li v-repeat="people | gender">@{{ name }}: @{{ gender }}</li>
</ul>

</div>
@endsection