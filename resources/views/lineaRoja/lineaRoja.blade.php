@extends('inicio')
@section('contenido')
<div class="row">
    <div class="tm-block-col">
        <form class="form-inline tm-sigup-form row" action="simular">
            <div class="form-group">
                <label>Cantidad:</label>
                <input class="form-control" type="text" placeholder="" name="#">
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
                    <th scope="col">SUBEN</th>
                    <th scope="col">BAJAN</th>
                    <th scope="col">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>    
                    <td></td>
                    <td><b>Estación Central San Antonio</b></td>
                    <td>{{$est0}}</td>
                    <td>{{$com0}}</td>
                    <td>{{$tra0}}</td>
                    <td>{{$comu0}}</td>
                    <td>{{$sub0}}</td>
                    <td>{{0}}</td>
                    <td>{{$sub0}}</td>
                </tr>
                <tr>    
                    <td>1</td>
                    <td><b>Parada el Arco</b></td>
                    <td>{{$est1}}</td>
                    <td>{{$com1}}</td>
                    <td>{{$tra1}}</td>
                    <td>{{$comu1}}</td>
                    <td>{{$sub1}}</td>
                    <td>{{$baj1}}</td>
                    <td>{{($sub0-$baj1)+$sub1}}</td>
                </tr>
                <tr>    
                    <td>2</td>
                    <td><b>Parada Av. Santa Bárbara</b></td>
                    <td>{{$est2}}</td>
                    <td>{{$com2}}</td>
                    <td>{{$tra2}}</td>
                    <td>{{$comu2}}</td>
                    <td>{{$sub2}}</td>
                    <td>{{$baj2}}</td>
                    <td>{{($sub2-$baj2)+(($sub0-$baj1)+$sub1)}}</td>
                </tr>
                <tr>    
                    <td>3</td>
                    <td><b>Parada Vidriolux</b></td>
                    <td>{{$est3}}</td>
                    <td>{{$com3}}</td>
                    <td>{{$tra3}}</td>
                    <td>{{$comu3}}</td>
                    <td>{{$sub3}}</td>
                    <td>{{$baj3}}</td>
                    <td>{{($sub3-$baj3)+($sub2-$baj2)+(($sub0-$baj1)+$sub1)}}</td>
                </tr>
                <tr>    
                    <td>4</td>
                    <td><b>Parada Av. Petrolera</b></td>
                    <td>{{$est4}}</td>
                    <td>{{$com4}}</td>
                    <td>{{$tra4}}</td>
                    <td>{{$comu4}}</td>
                    <td>{{$sub4}}</td>
                    <td>{{$baj4}}</td>
                    <td>{{($sub4-$baj4)+($sub3-$baj3)+($sub2-$baj2)+(($sub0-$baj1)+$sub1)}}</td>
                </tr>
                <tr>    
                    <td>5</td>
                    <td><b>Parada Politécnico</b></td>
                    <td>{{$est5}}</td>
                    <td>{{$com5}}</td>
                    <td>{{$tra5}}</td>
                    <td>{{$comu5}}</td>
                    <td>{{$sub5}}</td>
                    <td>{{$baj5}}</td>
                    <td>{{($sub5-$baj5)+($sub4-$baj4)+($sub3-$baj3)+($sub2-$baj2)+(($sub0-$baj1)+$sub1)}}</td>
                </tr>
                <tr>    
                    <td>6</td>
                    <td><b>Parada Agronomía</b></td>
                    <td>{{$est6}}</td>
                    <td>{{$com6}}</td>
                    <td>{{$tra6}}</td>
                    <td>{{$comu6}}</td>
                    <td>{{$sub6}}</td>
                    <td>{{$baj6}}</td>
                    <td>{{($sub6-$baj6)+($sub5-$baj5)+($sub4-$baj4)+($sub3-$baj3)+($sub2-$baj2)+(($sub0-$baj1)+$sub1)}}</td>
                </tr>
                <tr>    
                    <td></td>
                    <td><b>Estación Facultad de Agronomía</b></td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>{{($sub6-$baj6)+($sub5-$baj5)+($sub4-$baj4)+($sub3-$baj3)+($sub2-$baj2)+(($sub0-$baj1)+$sub1)}}</td>
                    <td>{{0}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection