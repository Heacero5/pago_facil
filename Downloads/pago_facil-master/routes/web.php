<?php

use App\Producto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("pruebaprod", function(){
    //inserte un producto
    $p = new Producto();
    //crearatributos
    $p->nombre = "bicicleta";
    $p->valor_unitario = 450.897;
        //guardar en bd:
        $p->save();
} );

Route::get("nuevoproducto", function(){
    //mostrar el formulario de guardar producto
    return view("productos.crear");
} );

Route::post("guardarproducto", function(){
    //recibir los datos que vienen desde el formulario
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

} );

Route::post("guardarproducto", function(){
    //recibir los datos que vienen desde el formulario
    $p = new Producto();
    //crearatributos
    $p->nombre = $_POST["nombre"];
    $p->valor_unitario = $_POST["valor"];
        //guardar en bd:
        $p->save();
        echo "Producto registrado";
} );
    

Route::get("arreglosm", function(){


    $paises = ["Colombia" =>[
                 "capital" => "Bogota",
                         "moneda" => "Peso",
                         "poblacion" => 50,
                         "ciudades" =>["Cali" , "Medellin", "Bogota"]
                             ] ,
                "Peru" =>[
                    "capital" => "Lima",
                         "moneda" => "Sol",
                         "poblacion" => 32,
                         "ciudades" =>["Cuzco" , "Arequipa", "Lima"]
                ],
                "Bolivia" =>[
                    "capital" => "La Paz",
                         "moneda" => "Peso Boliviano",
                         "poblacion" => 12,
                         "ciudades" =>["Cochabamba" , "Santacruz", "La paz"]
                ]
            ];


            //Recorrer el arreglo de paises
             //foreach($paises as $pais => $informacion ){
             // echo "<h1> $pais </h1>";
            //foreach($informacion as $clave=> $valor){
             // echo "$clave: $valor";
            //echo "<pre>";           
            //var_dump($paises);
             //echo "</pre>";


    //mostrar la vista:
    // Ala vista se puede pasar o adjuntar:
    return view("paises")
    ->with("paises", $paises);

} );
