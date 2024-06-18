<?php
// a

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Dompdf\Dompdf;
use Exception;
use Illuminate\Database\QueryException;

class CategoryArticleController extends Controller
{
    
    public function reporteCategoriaProductos(){
        
        $categories = Category::all();
        return view('reports.categories.index', compact('categories'));
    }
    public function vistaPdf(){
        
        $categories = Category::all();
        return view('reports.categories.vistaPdf', compact('categories'));
    }

  
    public function generatePdf()
    {
        // Obtener las categorías desde tu modelo o repositorio
        $categories = Category::all();
    
        // Crear una nueva instancia de Dompdf
        $dompdf = new Dompdf();
    
        // Opciones para permitir el uso completo de HTML5 y CSS
        $options = $dompdf->getOptions();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf->setOptions($options);
    
        // Cargar la vista HTML para el PDF (en este caso, 'reports.categories.index')
        $html = view('reports.categories.vistaPdf', compact('categories'))->render();
    
        // Cargar el contenido HTML al Dompdf
        $dompdf->loadHtml($html);
    
        // Opcional: Establecer opciones para el PDF (tamaño de página, orientación, etc.)
        $dompdf->setPaper('A4', 'portrait');
    
        // Renderizar el PDF
        $dompdf->render();
    
        // Mostrar el PDF en el navegador o descargarlo
        return $dompdf->stream('reporte_categorias.pdf');
    }
    
}
