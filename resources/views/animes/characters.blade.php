@extends('layouts.skel')

@section('content')
	<div class="container">
		<div class="row">
			@foreach($characters as $character)
				<div class="col-sm-3 col-6">
					<div class="card mb-5">
						<a href="{{ url('/personajes/') . '/' . $character->name }}">
							<img class="card-img-top" src="{{ asset('images/character/sagiri.jpg') }}">
						</a>
						<div class="card-footer text-center" style="background-color:#ffffff">
							{{$character->name}}<br>
							<div class="text-left">
								<span class="badge badge-dark">Yundere</span>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		{{ $characters->links() }}
	</div>
@endsection
