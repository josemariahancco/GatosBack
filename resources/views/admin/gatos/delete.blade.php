<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-delete-{{$gato->id}}">
	<form action="{{ route('gatos.destroy', $gato->id) }}" method="POST" >
		@csrf
		@method('DELETE')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
                    <h4 class="modal-title">Eliminar Gato</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					
				</div>
				<div class="modal-body">
					<p>Confirme si desea Eliminar 
					   el gato: <strong>{{ $gato->name }}</strong> , 
					   con identificador: <strong>{{ $gato->id }}</strong>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" 
					        data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		</div>
	</form>
</div>