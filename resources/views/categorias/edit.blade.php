@extends('layouts.default')

@section('conteudo')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card strpied-tabled-with-hover">
						<div class="card-body table-full-width table-responsive">
							<div class="col-md-12">
								Editando categoria id: {{ $categoria->id }}
								<form method="POST" action="{{ action('CategoriaController@salvarEdicao')}}">
									 @csrf
									<div class="form-group">
										<label>Nome</label>
										<input type="text" name="nome" class="form-control" placeholder="Nome" 	value="{{ $categoria->nome }}">
										<input type="hidden" name="id" value="{{ $categoria->id }}">
									</div>
									<div class="form-group">
										<button href="" class="btn btn-info btn-fill pull-right">Salvar	</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection