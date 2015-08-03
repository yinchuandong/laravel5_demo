<?php namespace App\Http\Controllers;

use App\Models\Page;

class PagesController extends Controller {

    public function show( $id ) {
        return view( 'pages.show' )->withPage( Page::find( $id ) );
    }

}
