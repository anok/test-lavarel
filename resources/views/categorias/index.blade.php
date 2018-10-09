@extends('layouts.default')

@section('conteudo')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card strpied-tabled-with-hover">
						<div class="card-header ">
							<div class="row">
								<div class="col-6">
									<h4 class="card-title">Categorias</h4>
									<p class="card-category">Veja a lista de todos os categorias abaixo.</p>
									@if (\Session::has('success'))
      									<div class="alert alert-success">
        									<p>{{ \Session::get('success') }}</p>
      									</div><br />
     								@endif
     								@if (\Session::has('danger'))
      									<div class="alert alert-danger">
        									<p>{{ \Session::get('danger') }}</p>
      									</div><br />
     								@endif
								</div>
								<div class="col-6 text-right">
									<a href="{{ route('categoria.adicionar') }}" class="btn btn-info btn-fill pull-right">Adicionar</a>
								</div>
							</div>
						</div>
						<div class="card-body table-full-width table-responsive">
							<table class="table table-hover table-striped">
								<thead>
									<th>ID</th>
									<th>Data de criação</th>
									<th>Nome</th>
									<th></th>
								</thead>
								<tbody>
									@foreach ($categorias as $categoria)
										<tr>
											<td>{{ $categoria->id }}</td>
											<td>{{ $categoria->created_at }}</td>
											<td>{{ $categoria->nome }}</td>
											<td>
												<a href="{{ action('CategoriaController@editar', ['id' => $categoria->id]) }}" class="btn btn-secondary btn-xs btn-fill">Editar</a>
												<form method="POST" action="{{ action('CategoriaController@deletar', ['id' => $categoria->id]) }}">
													@csrf
													@method('DELETE')
													<button class="btn btn-danger btn-xs btn-fill">Apagar</button>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection