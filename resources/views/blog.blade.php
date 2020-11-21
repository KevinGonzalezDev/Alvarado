@extends('layout.general')

@section('content')

    <div class="main-container">
        <img src="img/templates/blog/img1.jpg" style="width: 100%;" class="small-margin">


        <div class="text-title-block">
        <h2>{{__('No tener hijos podría gravar el pago de sus impuestos')}}</h2>
        <p>
            <i>{{__('Escrito por: Carlos Alvarado')}}</i>
            <br><br>

            {{__('Esta iniciativa, busca un equilibrio teniendo en cuenta la capacidad de aporte de las personas al Estado a través de los tributos. Dicha gestión será realizada por la intervención de la Comisión de Expertos creada por la DIAN.')}}
        </p>
        <br>
        <p>{{__('Las recomendaciones sobre cómo debe ser el sistema tributario, serán un insumo para llevar a cabo la reforma fiscal que el país requiere. Deberán estar listas y presentadas al gobierno a comienzos del año entrante.')}}</p>
        <br>
    <p>{{__('Conozca más asesorándose en términos de materia tributaria haciendo')}}<a href="{{route('services')}}" class="small-orange-button">{{__('Click Aquí')}}</a></p>
            
        </div>

        <img src="img/templates/blog/img2.jpg" style="width: 100%;" class="small-margin">

        <div class="text-title-block">
            <h2>{{__('Pago de impuestos: todo lo que tiene que saber sobre el sistema tributario para 2021')}}</h2>
            <br>
            <i>{{__('Escrito por: Carlos Alvarado')}}</i>
            <br><br>
        <p>{{__('Parrafo1 pago de impuestos')}}</p>
        <br>
        <p>{{__('Parrafo2 pago de impuestos')}}</p>
        <br>
        <p>{{__('Parrafo3 pago de impuestos')}}</p>
        <br>
        <h3>{{__('PREDIAL')}}</h3>
        <br>
        <p>{{__('Parrafo1 predial')}}</p>
        <br>
        <p>{{__('Parrafo2 predial')}}</p>
        <br>
        <h3>{{__('VEHÍCULOS')}}</h3>
        <br>
        <p>{{__('Parrafo1 vehículos')}}</p>
        <br>
        <p>{{__('Parrafo2 vehículos')}}</p>
        <br>
        <h3>{{__('ICA')}}</h3>
        <br>
        <p>{{__('Parrafo1 ICA')}}</p>
        <br>
        <p>{{__('Parrafo2 ICA')}}</p>
        <br>
        <p>{{__('Parrafo3 ICA')}}</p>
        <br>
        <p>{{__('Parrafo4 ICA')}} <a href="{{route('services')}}" class="small-orange-button">{{__('Click Aquí')}}</a></p>
        </div>
    
    </div>

@endsection