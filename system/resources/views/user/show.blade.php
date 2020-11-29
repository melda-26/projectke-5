@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data user
					</div>
					<div class="card-body">
						<h4>{{$user->nama}}</h4><hr>
						<h4>{{$user->Username}}</h4><hr>
						<h4>{{$user->Email}}</h4><hr>
							<h4>{{$user->Password}}</h4><hr>
							
							
						
						
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection