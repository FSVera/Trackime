@extends('layouts.skel')

@section('content')
<div class="container">	
	<div class="row">
		<div class="col-3 text-center" style='background-color:white'>
			<div id="infoUser" class='mt-3'>
			@if(Auth::user()->name === $userName->name)
				<img style='cursor:pointer;' id='userImage' src="{{ asset('images/user/' . $userName->image ) }}.png" class="img-thumbnail mb-2" data-toggle="modal" data-target="#changeImage">
			@else
				<img id='userImage' src="{{ asset('images/user/' . $userName->image ) }}.png" class="img-thumbnail mb-2">
			@endif
			</div>
			<p align="center"><b>{{ $userName->name }}</b></p>
		</div>
		<div class="col-9">
			<ul class="nav nav-tabs">
				@if(Auth::user()->name === $userName->name)
				<li class="nav-item"> <a class="nav-link active" href="{{ url('/usuario') . '/' . $userName->name }}">Perfil</a> </li>
				@endif
				<li class="nav-item"> <a class="nav-link" href="{{ url('/usuario/') . '/' . $userName->name . '/' . 'pendiente' }}">Pendientes</a> </li>
				<li class="nav-item"> <a class="nav-link" href="{{ url('/usuario/') . '/' . $userName->name . '/' . 'terminada' }}">Terminadas</a> </li>
			</ul>
		</div>		
	</div>
</div>

<!-- Modal-->

<div class="container mb-5">
	<div class="modal fade" id="changeImage">
		<div class="modal-dialog">
			<div class="modal-content">
			<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">{{ __('Editar imágen de perfil') }}</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->

				<div class="modal-body">
					<div class="row">
						<div class="col-sm-3 col-4 mb-2"><img src="{{ asset('images/user/jibril.png') }}" class="rounded new-image" id="jibril"></div>
						<div class="col-sm-3 col-4 mb-2"><img src="{{ asset('images/user/sagiri.png') }}" class="rounded new-image" id="sagiri"></div>
						<div class="col-sm-3 col-4 mb-2"><img src="{{ asset('images/user/shuvi.png')  }}" class="rounded new-image" id="shuvi"></div>
						<div class="col-sm-3 col-4 mb-2"><img src="{{ asset('images/user/luffy.png') }}" class="rounded new-image" id="luffy"></div>
					</div>
				</div>

				<!-- Modal footer -->

				<div class="modal-footer">
					<button type="button" class="btn btn-success cambiar-imagen" data-dismiss="modal">{{ __('Actualizar') }}</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Cancelar') }}</button>
				</div>

			</div>
		</div>
	</div>
</div>



@endsection
