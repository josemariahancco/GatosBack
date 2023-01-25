<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-show-{{$gato->id}}">
	<form action="{{ route('gatos.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">

                    <h3 class="modal-title">ver Gato</h3>
					<button type="button" class="close" data-dismiss="modal" 
					aria-label="Close">
						<span aria-hidden="true"> × </span>
					</button>
					
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" value="{{$gato->name}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Fecha de Nacimiento</label>
                        <input type="date" name="date_of_birth" class="form-control" value="{{$gato->date_of_birth}}" disabled >
                    </div> 
                    
                    <div class="form-group">
                        <label for="gender">Genero</label>
                        <input type="text" name="gender" class="form-control" value="{{$gato->gender}}" disabled >
                    </div> 
                    
                    <div class="form-group">
                        <label for="photo">Foto</label>
                        <img src="/storage/{{$gato->photo}}" class="img-responsive" width="200" height="200">
                    </div>

                    <div class="form-group">
                        <label for="breed">Raza</label>
                        <input type="text" name="raza" class="form-control" value="{{$gato->raza->name}}" disabled >

                    </div> 


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</form>
</div>