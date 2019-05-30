<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrenController extends Controller
{
    public function vistaHome (){
        return view('home');
    }
    public function vistaInstrucciones (){
        return view('instrucciones');
    }
    public function lineaRoja (){
        return view('lineaRoja');
    }
    public function lineaAmarilla (){
        return view('lineaAmarilla');
    }
    public function lineaVerde (){
        return view('lineaVerde');
    }
    public function simularLR(){
        //$personas = $request->input('cantidad');
        $est0 = mt_rand(0, 50);
        $com0 =mt_rand(0, 50);
        $tra0 =mt_rand(0, 50);
        $comu0 = mt_rand(0, 50);
        $sub0 = $est0+$com0+$tra0+$comu0;



        $est1 = mt_rand(0, 50);
        $com1 =mt_rand(0, 50);
        $tra1 =mt_rand(0, 50);
        $comu1 = mt_rand(0, 50);
        $sub1 = $est1+$com1+$tra1+$comu1;
        $baj1 = mt_rand(70, 110);

        $est2 = mt_rand(0, 50);
        $com2 =mt_rand(0, 50);
        $tra2 =mt_rand(0, 50);
        $comu2 = mt_rand(0, 50);
        $sub2 = $est2+$com2+$tra2+$comu2;
        $baj2 = mt_rand(70, 110);

        $est3 = mt_rand(0, 50);
        $com3 =mt_rand(0, 50);
        $tra3 =mt_rand(0, 50);
        $comu3 = mt_rand(0, 50);
        $sub3 = $est3+$com3+$tra3+$comu3;
        $baj3 = mt_rand(70, 110);

        $est4 = mt_rand(0, 50);
        $com4 =mt_rand(0, 50);
        $tra4 =mt_rand(0, 50);
        $comu4 = mt_rand(0, 50);
        $sub4 = $est4+$com4+$tra4+$comu4;
        $baj4 = mt_rand(70, 110);
        
        $est5 = mt_rand(0, 50);
        $com5 =mt_rand(0, 50);
        $tra5 =mt_rand(0, 50);
        $comu5 = mt_rand(0, 50);
        $sub5 = $est5+$com5+$tra5+$comu5;
        $baj5 = mt_rand(70, 110);

        $est6 = mt_rand(0, 50);
        $com6 =mt_rand(0, 50);
        $tra6 =mt_rand(0, 50);
        $comu6 = mt_rand(0, 50);
        $sub6 = $est6+$com6+$tra6+$comu6;
        $baj6 = mt_rand(70, 110);
        return view('lineaRoja.lineaRoja', compact('est0','com0','tra0','comu0','sub0',
                                                'est1','com1','tra1','comu1','sub1','baj1',
                                                'est2','com2','tra2','comu2','sub2','baj2',
                                                'est3','com3','tra3','comu3','sub3','baj3',
                                                'est4','com4','tra4','comu4','sub4','baj4',
                                                'est5','com5','tra5','comu5','sub5','baj5',
                                                'est6','com6','tra6','comu6','sub6','baj6'));
        }

    

        public function simularLA(){
        /*  for i< nrotrenes{}
            for a< nrosimulacionesrequeridas
                for j< nro estaciones{
                    generar estacion j
                    j++;
                }
            i++;
            a++ */
            for ($i = 1 ; $i <= 4 ; $i++){
                for($j= 1 ; $j <= 5; $j++){
                $est = mt_rand(0, 50);
                $com =mt_rand(0, 50);
                $tra =mt_rand(0, 50);
                $comu = mt_rand(0, 50);
                $sub = $est+$com+$tra+$comu;
                $baj = mt_rand(70, 110);
                    if($j == 1){
                        \DB::insert('insert into resultado ( idestacion,estudiantes,comerciantes, trabajadores,comunes, suben ) values (?,?,?,?,?,?)', [ $j,$est,$com,$tra, $comu,$sub] );
                    }else {
                        
                        \DB::insert('insert into resultado ( idestacion,estudiantes,comerciantes, trabajadores,comunes, bajan, suben ) values (?,?,?,?,?,?,?)', [ $j,$est, $com,$tra, $comu,$baj,$sub] );
                    }
                }
            } 
            /*
            $est1 = mt_rand(0, 50);
            $com1 =mt_rand(0, 50);
            $tra1 =mt_rand(0, 50);
            $comu1 = mt_rand(0, 50);
            $sub1 = $est1+$com1+$tra1+$comu1;
            $baj1 = mt_rand(70, 110);
    
            $est2 = mt_rand(0, 50);
            $com2 =mt_rand(0, 50);
            $tra2 =mt_rand(0, 50);
            $comu2 = mt_rand(0, 50);
            $sub2 = $est2+$com2+$tra2+$comu2;
            $baj2 = mt_rand(70, 110);
    
            $est3 = mt_rand(0, 50);
            $com3 =mt_rand(0, 50);
            $tra3 =mt_rand(0, 50);
            $comu3 = mt_rand(0, 50);
            $sub3 = $est3+$com3+$tra3+$comu3;
            $baj3 = mt_rand(70, 110);
    
            $est4 = mt_rand(0, 50);
            $com4 =mt_rand(0, 50);
            $tra4 =mt_rand(0, 50);
            $comu4 = mt_rand(0, 50);
            $sub4 = $est4+$com4+$tra4+$comu4;
            $baj4 = mt_rand(70, 110);
            
            $est5 = mt_rand(0, 50);
            $com5 =mt_rand(0, 50);
            $tra5 =mt_rand(0, 50);
            $comu5 = mt_rand(0, 50);
            $sub5 = $est5+$com5+$tra5+$comu5;
            $baj5 = mt_rand(70, 110);
    
            $est6 = mt_rand(0, 50);
            $com6 =mt_rand(0, 50);
            $tra6 =mt_rand(0, 50);
            $comu6 = mt_rand(0, 50);
            $sub6 = $est6+$com6+$tra6+$comu6;
            $baj6 = mt_rand(70, 110);
            return view('lineaAmarilla.lineaAmarilla', compact('est0','com0','tra0','comu0','sub0',
                                                    'est1','com1','tra1','comu1','sub1','baj1',
                                                    'est2','com2','tra2','comu2','sub2','baj2',
                                                    'est3','com3','tra3','comu3','sub3','baj3',
                                                    'est4','com4','tra4','comu4','sub4','baj4',
                                                    'est5','com5','tra5','comu5','sub5','baj5',
                                                    'est6','com6','tra6','comu6','sub6','baj6'));*/
            return view('lineaAmarilla.lineaAmarilla', compact('est','com','tra','comu','sub','baj'));
            }
}
