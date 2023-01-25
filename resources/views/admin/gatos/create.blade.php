<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create">
        <form action="{{ route('gatos.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">

                    <h3 class="modal-title">Agregar Gato</h3>
					<button type="button" class="close" data-dismiss="modal" 
					aria-label="Close">
						<span aria-hidden="true"> × </span>
					</button>
					
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Nombre...">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Fecha de Nacimiento</label>
                        <input type="date" name="date_of_birth" class="form-control" >
                    </div> 
                    
                    <div class="form-group">
                        <label for="gender">Genero</label>
                        <select class="form-control" name="gender">
                            <option value="HEMBRA">HEMBRA</option>
                            <option value="MACHO">MACHO</option>                           
                        </select>
                    </div> 
                    
                    <div class="form-group">
                        <label for="photo">Foto</label>
                        <input type="file" name="photo" >
                    </div>

                    <div class="form-group">
                        <label for="breed">Raza</label>
                        <select class="form-control" name="raza_id">
                            @foreach ($razas as $raza)
                                <option value="{{ $raza->id }}">{{ $raza->name }}</option>                                                  
                            @endforeach
                        </select>

                    </div> 


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</div>
	</form>
</div>