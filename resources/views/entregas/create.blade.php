<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--****************DASHBOARD**********************-->
                    <!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    @include('partials.menuentregas')
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-md-12">
                        <form action="{{ route('entregas.store')}}" method="post">
                            @csrf
                            <div class="container">
                                <div class="row justify-content-center align-items-center g-2">

                                    <div class="col">
                                        <div class="mb-3">
                                          <label for="codigo" class="form-label">Codigo</label>
                                          <input type="integer" name="codigo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="destino" class="form-label">Cliente/Destino</label>
                                            <input type="text" name="destino" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="fecha_entrega" class="form-label">Fecha emision</label>
                                            <input type="date" name="fecha_emision" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="codigo" class="form-label">Fecha entrega</label>
                                            <input type="date" name="fecha_entrega" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="mb-3">
                                          <label for="" class="form-label">Origen</label>
                                          <select class="form-select" aria-label="select" name="origen_id">
                                            @foreach ($origenes as $origen)
                                            <option value="{{$origen->id}}">{{$origen->nombre}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                          <label for="" class="form-label">Transportadora</label>
                                          <select class="form-select" aria-label="select" name="transportadora_id">
                                            @foreach ($transportadoras as $transportadora)
                                            <option value="{{$transportadora->id}}">{{$transportadora->nombre}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                          <label for="" class="form-label">Deparametos</label>
                                          <select class="form-select" aria-label="select" name="departamento_id">
                                            @foreach ($departamentos as $departamento)
                                            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                          <label for="" class="form-label">Tipo de Venta</label>
                                          <select class="form-select" aria-label="select" name="tipoventa_id">
                                            @foreach ($tipoventas as $tipoventa)
                                            <option value="{{$tipoventa->id}}">{{$tipoventa->nombre}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                          <label for="" class="form-label">Mercado</label>
                                          <select class="form-select" aria-label="select" name="mercado_id">
                                            @foreach ($mercados as $mercado)
                                            <option value="{{$mercado->id}}">{{$mercado->nombre}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row justify-content-center align-items-center g-2">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="reset" class="btn btn-secondary">Limpiar</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a name="" id="" class="btn btn-danger" href="{{route('entrega')}}" role="button">Cancelar</a>
                                    </div>
                                </div>

                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.js')
    @include('partials.datatable')
   </body>
</html>
                    <!--**************************************-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>