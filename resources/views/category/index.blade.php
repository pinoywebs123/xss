@extends('shared.template')

@section('content')
<div class="card">
    <div class="card-body">Show Category


    	@include('shared.notification')

    	<ul>
    		@foreach($categories as $cat)
				<li>
					<a href="{{route('todo_display',$cat->id)}}">
						{{$cat->category_name}}
					</a> 
					
				</li>
				
			@endforeach
				<li>
					<a href="{{route('todo_display','0')}}">All</a>
				</li>
    	</ul>
    	<br>

    	@yield('todos')
			

    	<form action="{{route('todo_store')}}" method="POST">
    		@csrf
    		<div class="row">
    			<div class="col-md-7">
    				<div class="form-group">
    			<label for="todo">Add TO DO:</label>
    			<input type="text" name="todo_name" id="todo" placeholder="Enter To do" class="form-control">
    		</div>
    			</div>
    		</div>

    		<div class="row">
    			<div class="col-md-6">
    				<div class="form-group">
		    			<label for="category">Category</label>
		    			<select name="category_id" class="form-control" id="category">
		    				<option value="">Choose Category</option>
		    				@foreach($categories as $cat)
				    			<option value="{{$cat->id}}">{{$cat->category_name}}</option>
				    		@endforeach
		    			</select>
		    			
		    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="form-group">
    					
    					<button type="submit" class="btn btn-primary" id="addTodoBtn">Add TODO</button>
    				</div>
    			</div>	
    		</div>
    		
    		
    	</form>
    	<br>
    	<h3>CATEGORIES</h3>

    	<form action="{{route('categories_store')}}" method="POST">
    		@csrf
    		<div class="row">
    			<div class="col-md-6">
    				<div class="form-group">
		    			<label for="category_name">Add Category</label>
		    			<input type="text" name="category_name" id="category_name" class="form-control" max="100">
		    		</div>
    			</div>
    			<div class="col-md-6">
    					<button type="submit" class="btn btn-primary" id="addCategoryBtn">Add Category</button>
    			</div>
    		</div>
    		
    	</form>

    	<ul>
    		@foreach($categories as $cat)
    			<li>
    				<a href="{{route('categories_delete',$cat->id)}}">X</a> 
    				{{$cat->category_name}}
    			</li>
    		@endforeach
    	</ul>

    </div>
  </div>
@endsection