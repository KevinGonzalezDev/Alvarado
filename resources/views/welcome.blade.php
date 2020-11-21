@extends('layout.general')

@section('content')

    <div class="flex-row-nowrap main-container">

        <div class="block-home">
            <h2>{{__('Servicios')}}</h2>
            <div class="gray-separator"></div>
            <span><img src="img/templates/home/servicios.jpg"></span>
            <p>{{__('ServiciosParrafo')}}</p>
            <a href="{{route('services')}}" class="orange-button">{{__('Leer Más')}}</a>
        </div>


        <div class="block-home">
            <h2>{{__('Nosotros')}}</h2>
            <div class="gray-separator"></div>
            <span><img src="img/templates/home/servicios.jpg"></span>
            <p>{{__('NosotrosParrafo')}}</p>
            <a href="{{route('our')}}" class="orange-button">{{__('Leer Más')}}</a>
        </div>


        
        <div class="block-home">
            <h2>Blog</h2>
            <div class="gray-separator"></div>
            <span><img src="img/templates/home/servicios.jpg"></span>
            <p>{{__('BlogParrafo')}}</p>
        <a href="{{route('blog')}}" class="orange-button">{{__('Leer Más')}}</a>
        </div>

    </div>

@endsection
