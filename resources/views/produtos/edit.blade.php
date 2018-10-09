@extends('layouts.default')

@section('conteudo')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card strpied-tabled-with-hover">
						<div class="card-body table-full-width table-responsive">
							<div class="col-md-12">
								<form method="POST" action="{{ action('ProdutoController@salvarEdicao')}}">
									@csrf
									<input type="hidden" name="id" value="{{ $produto->id }}">
									<div class="form-group">
										<label>Nome</label>
										<input type="text" class="form-control" placeholder="Nome" name="nome" value="{{$produto->nome}}">
									</div>
									<div class="form-group">
										<label>Valor</label>
										<input type="text" class="form-control" placeholder="Valor" name="valor" value="{{$produto->valor}}">
									</div>
									<div class="form-group">
										<label>Categoria</label>
									</div>
									<div class="form-group">
										<div class="table-full-width">
											<table class="table">
												<tbody>
													@foreach ($categorias as $categoria)
														<tr>
															<td>
																<div class="form-check">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox" name="categoriasMarcadas[]" value="{{$categoria->id}}"
																		{{
																			$categoriasMarcadas->contains($categoria->id) ?"checked":""	}}>
																		<span class="form-check-sign"></span>
																	</label>
																</div>
															</td>
															<td>{{$categoria->nome}}</td>
														</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
									<div class="form-group">
										<button href="" class="btn btn-info btn-fill pull-right">Salvar</button>
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