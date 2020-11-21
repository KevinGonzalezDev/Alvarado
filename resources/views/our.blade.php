@extends('layout.general')

@section('content')
    <div class="main-container">

        <div class="flex-row-nowrap small-margin">
            <div class="text-title-block">
                <h2>{{__("Nosotros")}}</h2>
            <p>{{__("NosotrosParrafo")}}</p>
            </div>

            <div class="text-title-block">
                <h2></h2>
                <p>{{__('Descripcion')}}</p>
            </div>
        </div>


        <div class="flex-row-nowrap small-margin">
            <div class="text-title-block">
                <h2>{{__('Misión')}}</h2>
                <p>{{__('MisiónParrafo')}}</p>
            </div>

            <div class="text-title-block">
            <h2>{{__('Vision')}}</h2>
                <p>{{__('VisionParrafo')}}</p>
            </div>
        </div>

        <img src="img/templates/our/full.png" alt="" style="width:100%;" class="small-margin">


        <div class="flex-row-nowrap">

            <div class="block-our">
                <span>
                    <img src="img/templates/our/block1.png" alt="">
                </span>

                <p>{{__('¿No tener hijos podría gravar el pago de sus impuestos?')}}
                </p>

                <a href="" class="orange-button">{{__('Leer Más')}}</a>
            </div>

            <div class="block-our">
                <span>
                    <img src="img/templates/our/block2.png" alt="">
                </span>

                <p>{{__('Todo lo que tiene que saber sobre el sistema tributario para el 2021')}}
                </p>

            <a href="" class="orange-button">{{__('Leer Más')}}</a>
            </div>

        </div>

    </div>
@endsection