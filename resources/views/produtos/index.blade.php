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
									<h4 class="card-title">Produtos</h4>
									<p class="card-category">Veja a lista de todos os produtos abaixo.</p>
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
									<a href="{{ route('produto.adicionar') }}" class="btn btn-info btn-fill pull-right">Adicionar</a>
								</div>
							</div>
						</div>
						<div class="card-body table-full-width table-responsive">
							<table class="table table-hover table-striped">
								<thead>
									<th>ID</th>
									<th>Data de criação</th>
									<th>Nome</th>
									<th>Valor</th>
									<th>Categorias</th>
									<th></th>
								</thead>
								<tbody>
									@foreach ($produtos as $produto)
										<tr>
											<td>{{$produto->id}}</td>
											<td>{{$produto->created_at}}</td>
											<td>{{$produto->nome}}</td>
											<td>{{$produto->valor}}</td>
											<td>@foreach ($produto->categorias()->get() as $categoria)
													{{ $categoria->nome }} 
												@endforeach
											</td>
											<td>
												<a href="{{ action('ProdutoController@editar', ['id' => $produto->id]) }}" class="btn btn-secondary btn-xs btn-fill">Editar</a>
												<form method="POST" action="{{ action('ProdutoController@deletar', ['id' => $produto->id]) }}">
													@csrf
													@method('DELETE')
													<button class="btn btn-danger btn-xs btn-fill">Apagar</button>
												</form>
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