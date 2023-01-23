<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
// import models
use App\Models\Book;
 

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $response = Http::get('https://jsonplaceholder.typicode.com/posts');
    
        // $books = $response->json();
          
        // dd($books);

        $books = Book::all();
        $titles = ['NO', 'ISBN', 'TITLE', 'SUBTITLE', 'AUTHOR', 'PUBLISHED', 'PUBLISHER', 'PAGES', 'DESCRIPTION','WEBSITE', 'ACTION'];

        return view('dashboard.books.index', compact('books', 'titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'published' => 'required',
            'publisher' => 'required',
            'pages' => 'required',
            'description' => 'required',
            'website' => 'required',
        ]);

        DB::table('books')->insert(
            [
                'isbn' => $request->isbn,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'author' => $request->author,
                'published' => $request->published,
                'publisher' => $request->publisher,
                'pages' => $request->pages,
                'description' => $request->description,
                'website' => $request->website,
            ]);

            return redirect()->back()
                        ->with('success','Book created succesfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::find($id);

        return view('dashboard.books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('dashboard.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'published' => 'required',
            'publisher' => 'required',
            'pages' => 'required',
            'description' => 'required',
            'website' => 'required',
        ]);

        DB::table('books')
        ->where('id',$id)
        ->update(
            [
                'isbn' => $request->isbn,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'author' => $request->author,
                'published' => $request->published,
                'publisher' => $request->publisher,
                'pages' => $request->pages,
                'description' => $request->description,
                'website' => $request->website,
            ]);

        return redirect()->back()->with(['success' => 'Book Update Successfuly!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::find($id)->delete();

        return redirect()->back()
                        ->with('success', 'Book deleled!');
    }
}