<?php 
namespace App\Http\Controllers;

Class HomeController extends Controller
{
     /**
	 * Page home.
	 *
	 * @return \Illuminate\Http\Response
	 */
	// retourne la vue home
    public function index()
    {
    	return view('home');
    }

}