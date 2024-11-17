<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function show($nombre)
{
    // Lista de municipios con descripción, precio y ruta de imagen
    $municipios = [
        "Acandí" => [
            "descripcion" => "Disfruta de playas paradisíacas y la riqueza natural en Acandí.",
            "precio" => 100,
            "imagen" => "/assets/images/municipios/Acandi.jpg", // Ruta de la imagen principal
            "imagen2" => "/assets/images/municipios/Acandi2.jpeg", // Ruta de la segunda imagen
        ],
        "Alto Baudó" => [
            "descripcion" => "Explora la biodiversidad y cultura del Alto Baudó.",
            "precio" => 150,
            "imagen" => "/assets/images/municipios/AltoBaudo.jpg",
            "imagen2" => "/assets/images/municipios/AltoBaudo2.jpg",
        ],
        "Bagadó" => [
            "descripcion" => "Descubre la historia y los paisajes únicos de Bagadó.",
            "precio" => 120,
            "imagen" => "/assets/images/municipios/Bagado.jpg",
            "imagen2" => "/assets/images/municipios/Bagado2.jpg",
        ],
        "Bahía Solano" => [
            "descripcion" => "Un destino perfecto para el ecoturismo y avistamiento de ballenas.",
            "precio" => 200,
            "imagen" => "/assets/images/municipios/BahíaSolano.jpg",
            "imagen2" => "/assets/images/municipios/BahíaSolano2.jpg",
        ],
        "Bajo Baudó" => [
            "descripcion" => "Conoce las tradiciones y belleza natural del Bajo Baudó.",
            "precio" => 110,
            "imagen" => "/assets/images/municipios/BajoBaudó.jpg",
            "imagen2" => "/assets/images/municipios/BajoBaudó2.jpg",
        ],
        "Bojayá" => [
            "descripcion" => "Un pueblo lleno de historia y cultura afrodescendiente.",
            "precio" => 130,
            "imagen" => "/assets/images/municipios/Bojayá.jpg",
            "imagen2" => "/assets/images/municipios/Bojayá2.jpg",
        ],
        "Cértegui" => [
            "descripcion" => "Admira la riqueza cultural y paisajística de Cértegui.",
            "precio" => 140,
            "imagen" => "/assets/images/municipios/Cértegui.jpg",
            "imagen2" => "/assets/images/municipios/Cértegui2.jpg",
        ],
        "Condoto" => [
            "descripcion" => "Famoso por su minería y la calidez de su gente.",
            "precio" => 120,
            "imagen" => "/assets/images/municipios/Condoto.jpg",
            "imagen2" => "/assets/images/municipios/Condoto2.jpg",
        ],
        "El Cantón de San Pablo" => [
            "descripcion" => "Un lugar lleno de tradición y belleza natural.",
            "precio" => 125,
            "imagen" => "/assets/images/municipios/ElCantónDeSanPablo.jpg",
            "imagen2" => "/assets/images/municipios/ElCantónDeSanPablo2.jpg",
        ],
        "El Carmen de Atrato" => [
            "descripcion" => "Explora montañas y senderos en el Carmen de Atrato.",
            "precio" => 135,
            "imagen" => "/assets/images/municipios/ElCarmenDeAtrato.jpg",
            "imagen2" => "/assets/images/municipios/ElCarmenDeAtrato2.jpg",
        ],
        "Istmina" => [
            "descripcion" => "Explora la riqueza cultural y los paisajes únicos de Istmina.",
            "precio" => 145,
            "imagen" => "/assets/images/municipios/Istmina.jpg",
            "imagen2" => "/assets/images/municipios/Istmina2.jpg",
        ],
        "Juradó" => [
            "descripcion" => "Un rincón tranquilo con hermosas playas y naturaleza.",
            "precio" => 155,
            "imagen" => "/assets/images/municipios/Juradó.jpg",
            "imagen2" => "/assets/images/municipios/Juradó2.jpg",
        ],
        "Lloró" => [
            "descripcion" => "Uno de los lugares más lluviosos del mundo, rodeado de naturaleza.",
            "precio" => 165,
            "imagen" => "/assets/images/municipios/Lloró.jpg",
            "imagen2" => "/assets/images/municipios/Lloró2.jpg",
        ],
        "Medio Atrato" => [
            "descripcion" => "Un lugar para disfrutar de tradiciones y paisajes fluviales.",
            "precio" => 110,
            "imagen" => "/assets/images/municipios/MedioAtrato.jpg",
            "imagen2" => "/assets/images/municipios/MedioAtrato2.jpg",
        ],
        "Medio Baudó" => [
            "descripcion" => "Naturaleza exuberante y tradiciones culturales.",
            "precio" => 115,
            "imagen" => "/assets/images/municipios/MedioBaudó.jpg",
            "imagen2" => "/assets/images/municipios/MedioBaudó2.jpg",
        ],
        "Medio San Juan" => [
            "descripcion" => "Explora ríos y comunidades con historia en Medio San Juan.",
            "precio" => 120,
            "imagen" => "/assets/images/municipios/MedioSanJuan.jpg",
            "imagen2" => "/assets/images/municipios/MedioSanJuan2.jpg",
        ],
        "Nóvita" => [
            "descripcion" => "Historia y naturaleza se unen en el corazón del Chocó.",
            "precio" => 125,
            "imagen" => "/assets/images/municipios/Nóvita.jpg",
            "imagen2" => "/assets/images/municipios/Nóvita2.jpg",
        ],
        "Nuquí" => [
            "descripcion" => "Conocido por sus playas y avistamiento de ballenas jorobadas.",
            "precio" => 175,
            "imagen" => "/assets/images/municipios/Nuquí.jpg",
            "imagen2" => "/assets/images/municipios/Nuquí2.jpg",
        ],
        "Quibdó" => [
            "descripcion" => "Descubre la vibrante cultura y la biodiversidad de la capital del Chocó.",
            "precio" => 190,
            "imagen" => "/assets/images/municipios/Quibdó.jpg",
            "imagen2" => "/assets/images/municipios/Quibdó2.jpg",
        ],
        "Río Iró" => [
            "descripcion" => "Paisajes fluviales y biodiversidad en Río Iró.",
            "precio" => 130,
            "imagen" => "/assets/images/municipios/RíoIró.jpg",
            "imagen2" => "/assets/images/municipios/RíoIró2.jpg",
        ],
        "Río Quito" => [
            "descripcion" => "Un destino lleno de tradiciones y recursos naturales.",
            "precio" => 140,
            "imagen" => "/assets/images/municipios/RíoQuito.jpg",
            "imagen2" => "/assets/images/municipios/RíoQuito2.jpg",
        ],
        "Riosucio" => [
            "descripcion" => "Naturaleza y cultura afrocolombiana en su máxima expresión.",
            "precio" => 150,
            "imagen" => "/assets/images/municipios/Riosucio.jpg",
            "imagen2" => "/assets/images/municipios/Riosucio2.jpg",
        ],
        "San José del Palmar" => [
            "descripcion" => "Rodeado de montañas y selva, perfecto para el ecoturismo.",
            "precio" => 160,
            "imagen" => "/assets/images/municipios/SanJoséDelPalmar.jpg",
            "imagen2" => "/assets/images/municipios/SanJoséDelPalmar2.jpg",
        ],
        "Sipí" => [
            "descripcion" => "Tradiciones vivas en un entorno natural único.",
            "precio" => 170,
            "imagen" => "/assets/images/municipios/Sipí.jpg",
            "imagen2" => "/assets/images/municipios/Sipí2.jpg",
        ],
        "Tadó" => [
            "descripcion" => "Un lugar de historia y naturaleza en el corazón del Chocó.",
            "precio" => 180,
            "imagen" => "/assets/images/municipios/Tadó.jpg",
            "imagen2" => "/assets/images/municipios/Tadó2.jpg",
        ],
        "Unguía" => [
            "descripcion" => "Puerta de entrada al Parque Nacional Natural Los Katíos.",
            "precio" => 190,
            "imagen" => "/assets/images/municipios/Unguía.jpg",
            "imagen2" => "/assets/images/municipios/Unguía2.jpg",
        ],
        "Unión Panamericana" => [
            "descripcion" => "Un lugar lleno de tradiciones y paisajes increíbles.",
            "precio" => 200,
            "imagen" => "/assets/images/municipios/UniónPanamericana.jpg",
            "imagen2" => "/assets/images/municipios/UniónPanamericana2.jpg",
        ],
        "Carmen del Darién" => [
            "descripcion" => "Biodiversidad y cultura afrodescendiente en el Darién.",
            "precio" => 150,
            "imagen" => "/assets/images/municipios/CarmenDelDarién.jpg",
            "imagen2" => "/assets/images/municipios/CarmenDelDarién2.jpg",
        ],
        "Bahía Málaga" => [
            "descripcion" => "Playas hermosas y gran biodiversidad marina.",
            "precio" => 250,
            "imagen" => "/assets/images/municipios/BahíaMálaga.jpg",
            "imagen2" => "/assets/images/municipios/BahíaMálaga2.jpg",
        ],
        "Puerto Meluk" => [
            "descripcion" => "Naturaleza y tradición en un entorno tranquilo.",
            "precio" => 140,
            "imagen" => "/assets/images/municipios/PuertoMeluk.jpg",
            "imagen2" => "/assets/images/municipios/PuertoMeluk2.jpg",
        ],
        "Andagoya" => [
            "descripcion" => "Historia minera y paisajes naturales únicos.",
            "precio" => 160,
            "imagen" => "/assets/images/municipios/Andagoya.jpg",
            "imagen2" => "/assets/images/municipios/Andagoya2.jpg",
        ],
    ];
    
    // Validar si el municipio existe
    if (!array_key_exists($nombre, $municipios)) {
        abort(404); // Mostrar página 404 si no se encuentra
    }

    // Obtener los datos del municipio
    $municipio = $municipios[$nombre];

    // Renderizar la vista con los datos del municipio
    return view('municipios.show', [
        'nombre' => $nombre,
        'descripcion' => $municipio['descripcion'],
        'precio' => $municipio['precio'],
        'imagen' => asset($municipio['imagen']),  // Pasamos la ruta de la image
        'imagen2' => asset($municipio['imagen2']),  // Pasamos la ruta de la image
    ]);
}


    public function convertirMoneda(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'precio' => 'required|numeric',
            'tasaCambio' => 'required|numeric',
        ]);

        // Obtener los valores
        $precio = $request->input('precio');
        $tasaCambio = $request->input('tasaCambio');

        // Calcular la conversión
        $precioConvertido = $precio * $tasaCambio;

        // Retornar el resultado
        return back()->with('mensaje', "El precio convertido es: $precioConvertido");
    }
}
