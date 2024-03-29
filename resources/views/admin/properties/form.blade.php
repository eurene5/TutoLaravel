@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Creer un bien')

@section('content')
    <h1>@yield('title')</h1>

    <form action={{route($property->exists ? 'admin.property.update' : 'admin.property.store', $property)}} method='post'>
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', ['class' => 'col', 'label' => 'Titre', 'name' => 'title', 'value' => $property->title])
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'surface', 'value' => $property->surface])
                @include('shared.input', ['class' => 'col', 'name' => 'price', 'label' => 'Prix', 'value' => $property->price])
            </div>
            @include('shared.input', ['type' => 'textarea', 'name' => 'description', 'value' => $property->description])
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'rooms', 'label' => 'Pieces', 'value' => $property->rooms])
                @include('shared.input', ['class' => 'col', 'name' => 'bedrooms', 'label' => 'Chambres', 'value' => $property->bedrooms])
                @include('shared.input', ['class' => 'col', 'name' => 'floor', 'label' => 'Etage', 'value' => $property->floor])
            </div>
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'city', 'label' => 'Ville', 'value' => $property->city])
                @include('shared.input', ['class' => 'col', 'name' => 'address', 'label' => 'Adresse', 'value' => $property->address])
                @include('shared.input', ['class' => 'col', 'name' => 'postal_code', 'label' => 'Code postale', 'value' => $property->postal_code])
            </div>
            <div class="container">
                @include('shared.check', ['class' => 'col', 'name' => 'sold', 'label' => 'Vendu', 'value' => $property->sold])
            </div>
        </div>


        <div class="mt-3">
             <button class="btn btn-primary" >
                @if($property->exists)
                    Modifier
                @else
                    Creer
                @endif
             </button>
        </div>
    </form>

@endsection