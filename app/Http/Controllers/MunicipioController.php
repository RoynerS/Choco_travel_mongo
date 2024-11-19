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
            "descripcion" => "Acandí es el lugar perfecto para los amantes de la naturaleza y la tranquilidad. Sus playas de arena blanca y aguas cristalinas, como Capurganá y Sapzurro, son un paraíso para el ecoturismo. Además, ofrece una rica biodiversidad y la oportunidad de explorar la cultura local.",
            "precio" => 100,
            "imagen" => "/assets/images/municipios/Acandi.jpg",
            "imagen2" => "/assets/images/municipios/Acandi2.jpeg",
        ],
        "Alto Baudó" => [
            "descripcion" => "Ubicado en el corazón del Chocó, Alto Baudó es conocido por su exuberante biodiversidad y su cultura ancestral. Es un destino ideal para quienes desean experimentar la auténtica conexión con la naturaleza y aprender sobre las tradiciones de las comunidades afro e indígenas.",
            "precio" => 150,
            "imagen" => "/assets/images/municipios/AltoBaudo.jpg",
            "imagen2" => "/assets/images/municipios/AltoBaudo2.jpg",
        ],
        "Bagadó" => [
            "descripcion" => "Bagadó ofrece un viaje al pasado con su riqueza histórica y cultural. Rodeado de montañas y ríos, es un destino ideal para el senderismo y la observación de aves. Aquí, la hospitalidad de su gente y las historias locales crean una experiencia inolvidable.",
            "precio" => 120,
            "imagen" => "/assets/images/municipios/Bagado.jpg",
            "imagen2" => "/assets/images/municipios/Bagado2.jpg",
        ],
        "Bahía Solano" => [
            "descripcion" => "Bahía Solano es uno de los destinos turísticos más destacados de Colombia. Famoso por el avistamiento de ballenas jorobadas, también cuenta con playas vírgenes, ríos cristalinos y selvas tropicales que lo convierten en un paraíso para los amantes de la naturaleza y el ecoturismo.",
            "precio" => 200,
            "imagen" => "/assets/images/municipios/BahíaSolano.jpg",
            "imagen2" => "/assets/images/municipios/BahíaSolano2.jpg",
        ],
        "Bajo Baudó" => [
            "descripcion" => "Bajo Baudó es un rincón encantador del Chocó, donde convergen la tradición y la naturaleza. Este municipio, atravesado por ríos navegables, ofrece a los visitantes la posibilidad de explorar sus ecosistemas únicos y aprender sobre las costumbres locales.",
            "precio" => 110,
            "imagen" => "/assets/images/municipios/BajoBaudó.jpg",
            "imagen2" => "/assets/images/municipios/BajoBaudó2.jpg",
        ],
        "Bojayá" => [
            "descripcion" => "Conocido por su historia y resiliencia, Bojayá es un municipio que honra sus tradiciones y cultura afrodescendiente. Sus paisajes fluviales y la calidez de su gente hacen de este lugar un destino único en el Pacífico colombiano.",
            "precio" => 130,
            "imagen" => "/assets/images/municipios/Bojayá.jpg",
            "imagen2" => "/assets/images/municipios/Bojayá2.jpg",
        ],
        "Cértegui" => [
            "descripcion" => "Cértegui destaca por su riqueza cultural y su entorno natural lleno de ríos y montañas. Es un lugar perfecto para quienes buscan aprender sobre las tradiciones chocoanas y disfrutar de actividades al aire libre.",
            "precio" => 140,
            "imagen" => "/assets/images/municipios/Cértegui.jpg",
            "imagen2" => "/assets/images/municipios/Cértegui2.jpg",
        ],
        "Condoto" => [
            "descripcion" => "Considerada la 'capital minera del Chocó', Condoto es famosa por su producción de oro y platino. Además de su historia minera, ofrece paisajes naturales impresionantes y una rica cultura afrocolombiana.",
            "precio" => 120,
            "imagen" => "/assets/images/municipios/Condoto.jpg",
            "imagen2" => "/assets/images/municipios/Condoto2.jpg",
        ],
        "El Cantón de San Pablo" => [
            "descripcion" => "El Cantón de San Pablo es un municipio rodeado de ríos y selvas, ideal para quienes desean desconectarse de la rutina y adentrarse en un entorno natural y lleno de tradiciones.",
            "precio" => 125,
            "imagen" => "/assets/images/municipios/ElCantónDeSanPablo.jpg",
            "imagen2" => "/assets/images/municipios/ElCantónDeSanPablo2.jpg",
        ],
        "El Carmen de Atrato" => [
            "descripcion" => "Con sus montañas y paisajes verdes, El Carmen de Atrato es un destino privilegiado para el ecoturismo. Es perfecto para realizar caminatas ecológicas, disfrutar de sus cascadas y aprender sobre su historia.",
            "precio" => 135,
            "imagen" => "/assets/images/municipios/ElCarmenDeAtrato.jpg",
            "imagen2" => "/assets/images/municipios/ElCarmenDeAtrato2.jpg",
        ],
        "Istmina" => [
            "descripcion" => "Istmina es un municipio lleno de vida, cultura y biodiversidad. Ubicado en la cuenca del río San Juan, ofrece paisajes fluviales únicos, historia minera y una rica tradición cultural que refleja la esencia del Chocó.",
            "precio" => 145,
            "imagen" => "/assets/images/municipios/Istmina.jpg",
            "imagen2" => "/assets/images/municipios/Istmina2.jpg",
        ],
        "Juradó" => [
            "descripcion" => "Enclavado en la región del Darién, Juradó es un destino perfecto para quienes buscan desconexión y contacto con la naturaleza. Sus playas solitarias y su fauna exótica lo convierten en un tesoro escondido del Pacífico colombiano.",
            "precio" => 155,
            "imagen" => "/assets/images/municipios/Juradó.jpg",
            "imagen2" => "/assets/images/municipios/Juradó2.jpg",
        ],
        "Lloró" => [
            "descripcion" => "Reconocido como uno de los lugares más lluviosos del planeta, Lloró es un paraíso natural. Rodeado de selvas tropicales y ríos, es un destino ideal para el turismo ecológico y la exploración de su biodiversidad única.",
            "precio" => 165,
            "imagen" => "/assets/images/municipios/Lloró.jpg",
            "imagen2" => "/assets/images/municipios/Lloró2.jpg",
        ],
        "Medio Atrato" => [
            "descripcion" => "Medio Atrato es un municipio donde las aguas del río Atrato son protagonistas. Este lugar combina paisajes fluviales y la riqueza cultural de las comunidades afrocolombianas, ofreciendo una experiencia auténtica y relajante.",
            "precio" => 110,
            "imagen" => "/assets/images/municipios/MedioAtrato.jpg",
            "imagen2" => "/assets/images/municipios/MedioAtrato2.jpg",
        ],
        "Medio Baudó" => [
            "descripcion" => "Enclavado en la selva chocoana, Medio Baudó es un lugar para desconectarse y disfrutar de la tranquilidad. Sus paisajes, marcados por ríos y selvas, son ideales para la exploración y el ecoturismo.",
            "precio" => 115,
            "imagen" => "/assets/images/municipios/MedioBaudó.jpg",
            "imagen2" => "/assets/images/municipios/MedioBaudó2.jpg",
        ],
        "Medio San Juan" => [
            "descripcion" => "Medio San Juan es conocido por su red fluvial que conecta a las comunidades y su biodiversidad exuberante. Es un destino perfecto para quienes buscan adentrarse en las tradiciones del Chocó y disfrutar de su riqueza natural.",
            "precio" => 120,
            "imagen" => "/assets/images/municipios/MedioSanJuan.jpg",
            "imagen2" => "/assets/images/municipios/MedioSanJuan2.jpg",
        ],
        "Nóvita" => [
            "descripcion" => "Enclavado en el corazón del Chocó, Nóvita combina historia, tradiciones y paisajes espectaculares. Este municipio es un punto de encuentro entre la cultura afrocolombiana y la naturaleza.",
            "precio" => 125,
            "imagen" => "/assets/images/municipios/Nóvita.jpg",
            "imagen2" => "/assets/images/municipios/Nóvita2.jpg",
        ],
        "Nuquí" => [
            "descripcion" => "Famoso por su avistamiento de ballenas jorobadas, Nuquí es un paraíso natural. Sus playas, como Guachalito, y su selva tropical atraen a viajeros en busca de ecoturismo, deportes acuáticos y experiencias inolvidables.",
            "precio" => 175,
            "imagen" => "/assets/images/municipios/Nuquí.jpg",
            "imagen2" => "/assets/images/municipios/Nuquí2.jpg",
        ],
        "Quibdó" => [
            "descripcion" => "Como capital del Chocó, Quibdó combina tradición, modernidad y naturaleza. Sus celebraciones, como las Fiestas de San Pacho, y su vibrante cultura afrocolombiana hacen de esta ciudad un punto de encuentro único.",
            "precio" => 190,
            "imagen" => "/assets/images/municipios/Quibdó.jpg",
            "imagen2" => "/assets/images/municipios/Quibdó2.jpg",
        ],
        "Río Iró" => [
            "descripcion" => "Río Iró es un municipio que destaca por sus paisajes fluviales y su biodiversidad. Este lugar, donde el agua y la selva son protagonistas, invita a la contemplación y al turismo de naturaleza.",
            "precio" => 130,
            "imagen" => "/assets/images/municipios/RíoIró.jpg",
            "imagen2" => "/assets/images/municipios/RíoIró2.jpg",
        ],
        "Río Quito" => [
            "descripcion" => "Río Quito es un municipio lleno de tradiciones y paisajes asombrosos. Sus comunidades, a orillas del río, conservan prácticas ancestrales que enriquecen la experiencia de quienes lo visitan.",
            "precio" => 140,
            "imagen" => "/assets/images/municipios/RíoQuito.jpg",
            "imagen2" => "/assets/images/municipios/RíoQuito2.jpg",
        ],
        "Riosucio" => [
            "descripcion" => "Riosucio es un lugar donde la cultura afrocolombiana se vive intensamente. Sus paisajes, dominados por ríos y selvas, lo convierten en un destino perfecto para quienes buscan contacto con la naturaleza y aprender de las comunidades locales.",
            "precio" => 150,
            "imagen" => "/assets/images/municipios/Riosucio.jpg",
            "imagen2" => "/assets/images/municipios/Riosucio2.jpg",
        ],
        "San José del Palmar" => [
            "descripcion" => "Rodeado de montañas y selva, San José del Palmar es un lugar ideal para el ecoturismo. Sus paisajes, cascadas y senderos lo convierten en un destino perfecto para los aventureros y amantes de la naturaleza.",
            "precio" => 160,
            "imagen" => "/assets/images/municipios/SanJoséDelPalmar.jpg",
            "imagen2" => "/assets/images/municipios/SanJoséDelPalmar2.jpg",
        ],
        "Sipí" => [
            "descripcion" => "Ubicado a orillas del río Sipí, este municipio es un refugio de tradiciones y biodiversidad. Sus paisajes fluviales y su ambiente tranquilo lo convierten en un destino ideal para conectar con la naturaleza y la cultura local.",
            "precio" => 170,
            "imagen" => "/assets/images/municipios/Sipí.jpg",
            "imagen2" => "/assets/images/municipios/Sipí2.jpg",
        ],
        "Tadó" => [
            "descripcion" => "Conocido como un punto de encuentro de la riqueza cultural y natural del Chocó, Tadó ofrece paisajes exuberantes, historias mineras y tradiciones que celebran la diversidad afrocolombiana e indígena.",
            "precio" => 180,
            "imagen" => "/assets/images/municipios/Tadó.jpg",
            "imagen2" => "/assets/images/municipios/Tadó2.jpg",
        ],
        "Unguía" => [
            "descripcion" => "Puerta de entrada al Parque Nacional Natural Los Katíos, Unguía combina paisajes selváticos, riqueza cultural y biodiversidad. Este municipio es ideal para quienes buscan una experiencia de ecoturismo inolvidable.",
            "precio" => 190,
            "imagen" => "/assets/images/municipios/Unguía.jpg",
            "imagen2" => "/assets/images/municipios/Unguía2.jpg",
        ],
        "Unión Panamericana" => [
            "descripcion" => "Unión Panamericana es un lugar donde las tradiciones afrocolombianas y la naturaleza confluyen en perfecta armonía. Sus paisajes son ideales para el descanso y la conexión con la cultura local.",
            "precio" => 200,
            "imagen" => "/assets/images/municipios/UniónPanamericana.jpg",
            "imagen2" => "/assets/images/municipios/UniónPanamericana2.jpg",
        ],
        "Carmen del Darién" => [
            "descripcion" => "Ubicado en la región del Darién, este municipio destaca por su biodiversidad y su rica herencia cultural afrodescendiente. Carmen del Darién es un destino perfecto para los amantes de la naturaleza y la cultura.",
            "precio" => 150,
            "imagen" => "/assets/images/municipios/CarmenDelDarién.jpg",
            "imagen2" => "/assets/images/municipios/CarmenDelDarién2.jpg",
        ],
        "Bahía Málaga" => [
            "descripcion" => "Conocida por su increíble biodiversidad marina y sus playas de ensueño, Bahía Málaga es un paraíso para los amantes del mar. El avistamiento de ballenas y la riqueza cultural de sus comunidades hacen de este destino una experiencia única.",
            "precio" => 250,
            "imagen" => "/assets/images/municipios/BahíaMálaga.jpg",
            "imagen2" => "/assets/images/municipios/BahíaMálaga2.jpg",
        ],
        "Puerto Meluk" => [
            "descripcion" => "Enclavado en un entorno tranquilo, Puerto Meluk combina la serenidad de la naturaleza con la calidez de sus habitantes. Es un destino perfecto para quienes buscan paz y contacto con la cultura local.",
            "precio" => 140,
            "imagen" => "/assets/images/municipios/PuertoMeluk.jpg",
            "imagen2" => "/assets/images/municipios/PuertoMeluk2.jpg",
        ],
        "Andagoya" => [
            "descripcion" => "Con una rica historia minera, Andagoya es un municipio donde la tradición y los paisajes naturales se entrelazan. Sus ríos, selvas y la hospitalidad de su gente lo convierten en un lugar memorable.",
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


}
