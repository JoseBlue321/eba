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
                                    <th>departamento</th>
                                    <th>TIpo Ventas</th>
                                    <th>Mercados</th>
                                    <th>Canastillas</th>
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
                                        <td>{{$entrega->departamentos->nombre}}</td>
                                        <td>{{$entrega->tipoventas->nombre}}</td>
                                        <td>{{$entrega->mercados->nombre}}</td>
                                        <td>
                                            <table class="table">
                                                <tbody>
                                                    @foreach ($entrega->detalles as $detalle)
                                                    <tr>
                                                        <td>
                                                            {{$detalle->canastillas->nombre}}
                                                        </td>
                                                        <td>
                                                            {{$detalle->cantidad}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
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