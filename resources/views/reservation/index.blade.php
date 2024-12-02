@extends('layouts.app')

@section('template_title')
    Reservations
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reservations') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reservations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Apellido</th>
									<th >Dni</th>
									<th >Codigo Vuelo</th>
									<th >Origen</th>
									<th >Destino</th>
									<th >Numero Asiento</th>
									<th >Fecha Vuelo</th>
									<th >Hora Salida</th>
									<th >Hora Llegada</th>
									<th >Precio</th>
									<th >Estado</th>
									<th >Email</th>
									<th >Telefono</th>
									<th >Notas</th>
									<th >User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $reservation->nombre }}</td>
										<td >{{ $reservation->apellido }}</td>
										<td >{{ $reservation->dni }}</td>
										<td >{{ $reservation->codigo_vuelo }}</td>
										<td >{{ $reservation->origen }}</td>
										<td >{{ $reservation->destino }}</td>
										<td >{{ $reservation->numero_asiento }}</td>
										<td >{{ $reservation->fecha_vuelo }}</td>
										<td >{{ $reservation->hora_salida }}</td>
										<td >{{ $reservation->hora_llegada }}</td>
										<td >{{ $reservation->precio }}</td>
										<td >{{ $reservation->estado }}</td>
										<td >{{ $reservation->email }}</td>
										<td >{{ $reservation->telefono }}</td>
										<td >{{ $reservation->notas }}</td>
										<td >{{ $reservation->user_id }}</td>

                                            <td>
                                                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reservations.show', $reservation->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservations.edit', $reservation->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservations->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
