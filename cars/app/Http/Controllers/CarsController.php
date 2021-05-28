<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Headquarter;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // query pagination
        // $cars = DB::table('cars')->paginate(4);

        // cars all mostra tutti su pagina singola
        // $cars = Car::all();
        $cars = Car::paginate(3);
        
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();

        // $test = $request->only(['_token','name']);
        // $test = $request->except(['_token','name']);

        // $test = $request->has('founded');

        // if($request->has('founded')) {
        //     dd('Founded has been found!');
        // }

        // dd($request->path());
        // if($request->is('cars')) {
        //     dd('endpoint is cars!');
        // }

        // if($request->method('post'))
        // {
        //     dd('Method is post!');
        // }

        // dd($request->url());

        // dd($request->ip());
        // dd($test);

        // $request->validate([
        //     'name' => 'required|unique:cars',
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);

        // validation personalizzata con uppercase

        // $request->validate([
        //     'name' => new Uppercase,
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);

        // $request->validated();


        // $request->validate([
        //     'name' => 'required',
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required',
        //     'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        // $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        
        // $request->image->move(public_path('images'),$newImageName);        

        // dd($newImageName);

        $request->validate([
            'name' => 'required',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required'
        ]);

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
            'image_path' =>  $newImageName
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        // $hq = $car->headquarter;

        $hq = Headquarter::find($id);

        return view('cars.show')->with('car',$car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id)->first();

        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {

        // $request->validate([
        //     'name' => new Uppercase,
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);

        $request->validated();

        $car = Car::where('id',$id)->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $car = Car::find($id)->first();

    //     $car->delete();

    //     return redirect('/cars');
    // }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect('/cars');
    }
}
