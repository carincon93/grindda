<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\CarouselRequest;

use App\Carousel;
use App\Evento;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carouselItems = Carousel::all();

        return view('carousel.listar', compact('carouselItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Evento::orderBy('created_at')->get();

        return view('carousel.crear', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarouselRequest $request)
    {
        $carousel = new Carousel;

        $carousel->tipo         = $request->get('tipoItem');

        if ($request->has('imagen')) {
            $carousel->imagen       = $request->get('imagen');

            $carouselItem   = $request->file('imagen');
            $rutaItem       = Storage::putFileAs(
                'public/carousel', $carouselItem, $carouselItem->getClientOriginalName()
            );

            $carousel->imagen = "carousel/{$carouselItem->getClientOriginalName()}";
        }
        if ($request->get('tipoItem') == 'otro') {
            $carousel->descripcion  = $request->get('descripcion');
        } else {
            $carousel->descripcion  = 'ninguno';
        }

        $carousel->url = $request->get('url');

        if ($request->has('evento_id')) {
            $carousel->evento()->associate($request->get('evento_id'));
        }
        $carousel->save();

        return redirect()->route('carousel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos        = Evento::orderBy('created_at')->get();
        $carouselItem   = Carousel::findOrFail($id);

        return view('carousel.editar', compact('eventos', 'carouselItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CarouselRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarouselRequest $request, $id)
    {
        $carousel = Carousel::findOrFail($id);

        $carousel->tipo = $request->get('tipoItem');

        if ($request->has('imagen')) {
            $carousel->imagen       = $request->get('imagen');

            $carouselItem   = $request->file('imagen');
            $rutaItem       = Storage::putFileAs(
                'public/carousel', $carouselItem, $carouselItem->getClientOriginalName()
            );

            $carousel->imagen = "carousel/{$carouselItem->getClientOriginalName()}";
        }
        if ($request->get('tipoItem') == 'otro') {
            $carousel->descripcion  = $request->get('descripcion');
        } else {
            $carousel->descripcion  = 'ninguno';

            if ($request->has('evento_id')) {
                $carousel->evento()->associate($request->get('evento_id'));
            }
        }

        $carousel->url = $request->get('url');
        $carousel->save();

        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carousel::destroy($id);
        return redirect()->back()
            ->with('status', "El ítem del carousel ha sido eliminado con éxito.");
    }
}
