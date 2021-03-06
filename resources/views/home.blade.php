@extends('layouts.skel')

@section('content')
<div id="animes" class="container text-right">
    <div class="row text-center mt-3 justify-content-center">
		@foreach($animes as $anime)
			<div class="col-lg-4 col-md-6 col-xs-12 mb-5">
					<anime-component 
						:genres="{{ $anime->genre }}"
						:anime="{{ $anime }}"
						:image="'{{ $anime->image() }}'">
					</anime-component>
			</div>
		@endforeach
    </div>
</div>
@endsection
