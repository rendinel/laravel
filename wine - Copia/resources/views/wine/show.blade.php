@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1 class="text-5xl uppercase bold">
        {{ $wine->name }}
    </h1>
</div>

<div class="py-10 text-center">

    <div class="m-auto">

        <span class="uppercase text-blue-500 font-bold text-xs italic">
            Founded: {{ $wine->founded }}
        </span>

        <p class="text-lg text-gray-700 py-6">
            {{ $wine->description }}
        </p>

        <ul>
            <p class="tetx-lg text-gray-700 py-3">
                Models:
            </p>
            @forelse ($wine->wineModels as $model )
                <li class="inline italic text-gray-600 px-1 py-6">
                    {{ $model['wine_name'] }}
                </li>
            @empty
                <p>
                    No models found!
                </p>
            @endforelse
        </ul>
        <hr class="mt-4 mb-8">
    </div>    

</div

@endsection