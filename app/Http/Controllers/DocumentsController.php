<?php

namespace App\Http\Controllers;

use App\Model\Document;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function show(Document $document)
    {
        return view('document')->withDocument($document);
    }
}
