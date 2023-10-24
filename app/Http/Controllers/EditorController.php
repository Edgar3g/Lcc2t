<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class EditorController extends Controller
{
    public function show(Request $request)
    {

        $editor = Editor::query()->where('id', $request->id)->get();

        return response()->json([
            'editor' => $editor
        ]);

    }
}
