<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;


class TagsController extends Controller
{
    public function show(Tag $tag) {
    //  $tag = Tag::find($id);
      return view('tags.show', compact('tag'));
    }
}
