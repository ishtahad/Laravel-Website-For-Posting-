<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// this is a page which was generated in terminal with the help of artisan.
// PagesController extends Controller and it gets different functionalities.
class PagesController extends Controller
{
    // we create different functions to tell the which view should compile.

    public function index(){
        //here view('pages.index') directs to resources/views/pages/index.blade.php
        $title = 'welcome to laravel';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }
    
    public function services(){
        $data = array(
            'title' => 'services',
            'services'=> ['Web Development', 'Programming', 'SEO']

        );
        return view('pages.services')-> with($data);
    }
}
