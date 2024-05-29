<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Catalog;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showCatalog1(): View {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        return view('catalog')
                        ->with('topCategories', $topCats);

    }

    public function showCatalog2(int $topCatId): View {

        Log::info('Categoria Top Selezionata: '.$topCatId);

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId($topCatId);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats);
        }

    public function showCatalog3(int $topCatId, int $catId): View {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId($topCatId);

        // Prodotti
        $prods = $this->_catalogModel->getProdsByCat($catId);

       return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }

}
