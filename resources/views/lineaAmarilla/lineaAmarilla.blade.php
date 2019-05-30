@extends('inicio')
@section('contenido')
<div class="row">
    <div class="tm-block-col">
        <form class="form-inline tm-sigup-form row" action="simularA">
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
        <h2 class="tm-block-title">Paradas de la Línea Amarilla</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="5%">N°</th>
                    <th scope="col">ESTACION</th>
                    <th scope="col">ESTUDIANTES</th>
                    <th scope="col">COMERCIANTES</th>
                    <th scope="col">TRABAJADORES</th>
                    <th scope="col">COMUN</th>
                    <th scope="col">SUBEN</th>
                    <th scope="col">BAJAN</th>
                    <th scope="col">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>    
                    <td></td>
                    <td><b>Estación Central San Antonio</b></td>
                    <td>{{$est}}</td>
                    <td>{{$com}}</td>
                    <td>{{$tra}}</td>
                    <td>{{$comu}}</td>
                    <td>{{$sub}}</td>
                    <td>{{0}}</td>
                    <td>{{$sub}}</td>
                </tr>
              
                <tr>    
                    <td>7</td>
                    <td><b>Parada Recoleta</b></td>
                    <td>{{$est}}</td>
                    <td>{{$com}}</td>
                    <td>{{$tra}}</td>
                    <td>{{$comu}}</td>
                    <td>{{$sub}}</td>
                    <td>{{$baj}}</td>
                    <td>{{$dif=$sub-$baj}}</td>
                </tr>
                <tr>    
                    <td>8</td>
                    <td><b>Parada Muyurina</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>9</td>
                    <td><b>Parada USIP</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>10</td>
                    <td><b>Parada SEDCAM</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>11</td>
                    <td><b>Parada Zona Paraíso</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>12</td>
                    <td><b>Parada El Castillo</b></td>
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