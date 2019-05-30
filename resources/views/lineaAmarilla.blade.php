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
                    <th scope="col">PASAJEROS</th>
                    <th scope="col">...</th>
                    <th scope="col">...</th>
                    <th scope="col">...</th>
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
                </tr>
                <tr>    
                    <td>1</td>
                    <td><b>Parada Av. Aroma</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>2</td>
                    <td><b>Parada Aeropuerto</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>3</td>
                    <td><b>Parada Villa Coronilla</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>4</td>
                    <td><b>Parada ELFEC</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>5</td>
                    <td><b>Parada Parque de la Familia</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>6</td>
                    <td><b>Parada Estadio Felix Capriles</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>    
                    <td>7</td>
                    <td><b>Parada Recoleta</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
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