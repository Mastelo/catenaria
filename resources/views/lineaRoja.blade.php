@extends('inicio')
@section('contenido')
<div class="row">
    <div class="tm-block-col">
        <form class="form-inline tm-sigup-form row" action="simular">
        
            <div class="form-group">
                <label>Cantidad:</label>
                <input class="form-control" type="text" placeholder="" name="">
                <label>Tiempo:</label>
                <input class="form-control" type="text" placeholder="" name="">
                <button class="btn btn-primary text-uppercase" type="submit">Simular</button>
            </div>
        </form>
    </div>
</div>
<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block">
        <h2 class="tm-block-title">Paradas de la Línea Roja</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="5%">N°</th>
                    <th scope="col">ESTACION</th>
                    <th scope="col">ESTUDIANTES</th>
                    <th scope="col">COMERCIANTES</th>
                    <th scope="col">TRABAJADORES</th>
                    <th scope="col">COMUN</th>
                    <th scope="col">BAJAN</th>
                    <th scope="col">SUBEN</th>
                </tr>
            </thead>
            <tbody>
                <tr>    
                    <td></td>
                    <td><b>Estación Central San Antonio</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>1</td>
                    <td><b>Parada el Arco</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>2</td>
                    <td><b>Parada Av. Santa Bárbara</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>3</td>
                    <td><b>Parada Vidriolux</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>4</td>
                    <td><b>Parada Av. Petrolera</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>5</td>
                    <td><b>Parada Politécnico</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>6</td>
                    <td><b>Parada Agronomía</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td></td>
                    <td><b>Estación Facultad de Agronomía</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection