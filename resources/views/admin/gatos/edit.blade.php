<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-edit-{{$gato->id}}">
        <form action="{{ route('gatos.update',$gato->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
        @method('PUT')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">

                    <h3 class="modal-title">Editar Gato</h3>
					<button type="button" class="close" data-dismiss="modal" 
					aria-label="Close">
						<span aria-hidden="true"> × </span>
					</button>
					
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Nombre..." value="{{$gato->name}} ">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Fecha de Nacimiento</label>
                        <input type="date" name="date_of_birth" class="form-control" value="{{$gato->date_of_birth}}" >
                    </div> 
                    
                    <div class="form-group">
                        <label for="gender">Genero</label>
                        <select class="form-control" name="gender"  >
                            <option value="HEMBRA" @if($gato->gender=='HEMBRA') selected @endif>HEMBRA</option>
                            <option value="MACHO" @if($gato->gender=='MACHO') selected @endif>MACHO</option>                       
                        </select>
                    </div> 
                    
                    <div class="form-group">
                        <label for="photo">Foto</label> 
                        <input type="file" name="photo">
                        <img src="/storage/{{$gato->photo}}" class="img-responsive" width="200" height="200">
                    </div>

                    <div class="form-group">
                        <label for="breed">Raza</label>
                        <select class="form-control" name="raza_id" value="{{$gato->raza->name}}" >
                            @foreach ($razas as $raza)
                                <option value="{{ $raza->id }}"@if ($gato->raza_id==$raza->id) selected @endif>{{ $raza->name }}</option>                                                  
                            @endforeach
                        </select>

                    </div> 

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Guardar Cambios</button>
				</div>
			</div>
		</div>
	</form>
</div>
