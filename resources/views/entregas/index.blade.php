<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                     
                    <div class="col-md-12">
                        <!--here content-->
                        <h3>Entregas</h3>
                        <div class="table-responsive">
                            <table id="entregas" class="table table-hover">
                                <thead class="table-primary">
                                    <th>codigo</th>
                                    <th>fecha emision</th>
                                    <th>fecha entrega</th>
                                    <th>destion</th>
                                    <th>Origen</th>
                                    <th>Transportadora</th>
                                    <th>Estado</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($entregas as $entrega)
                                    <tr>
                                        <td>{{$entrega->codigo}}</td>
                                        <td>{{$entrega->fecha_emision}}</td>
                                        <td>{{$entrega->fecha_entrega}}</td>
                                        <td>{{$entrega->destino}}</td>
                                        <td>{{$entrega->origenes->nombre}}</td>
                                        <td>{{$entrega->transportadoras->nombre}}</td>
                                        <td></td>
                                        <td><a class="btn btn-info" href="#" role="button">Ver</a></td>
                                        <td><a class="btn btn-success" href="#" role="button">Editar</a></td>
                                        <td><a class="btn btn-danger" href="#" role="button">Eliminar</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a class="btn btn-primary" href="{{route('entregas.create')}}" role="button">Registrar Nueva Entrega</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.js')
    @include('partials.datatable')
   </body>
</html>