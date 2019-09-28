
<?php


 
Route::group(['prefix'=>'admin'],function(){

    Route::get('/saludar',function(){ 
        return "hola"; 
    });

    Route::get('/saludar-p/{name}',function($name){ 
        return "hola: ".$name;
    });

    Route::get('/saludar-d/{name?}',function($name="vacio"){ 
        return "hola: ".$name;
    });

    Route::get('/sumar/{op1}/{op2?}',function($op1,$op2=1){ 
        return $op1+op2;
    });

    Route::get('validador/{num}',function ($num){
        return $num;
    })->where(['num'=>'[0-9]+']);

    Route::get('validador2/{num}/{num2}', function($num,$num2){
        return $num+$num2;
    })->where(['num'=>'[0-9]+','num2'=>'[0-9]+']);
});

