@extends('layout.general')

@section('content')

    <div class="main-container">

       
        <div class="flex-row-nowrap align-middle">

            <div class="text-title-block">
                <h2>{{__('Valoraciones empresariales')}}</h2>
            <p>{{__('Valoraciones empresarialesParrafo')}}</p>
            </div>
            
            <img src="img/templates/services/info2.png" alt="image info">
        </div>

    
        <img src="img/templates/services/info.png" alt="for template" style="width:100%; margin:4em 0 4em 0;">



        <div class="flex-row-nowrap">

            <div class="text-title-block">
                <h2>{{__('Valoración de empresas')}}</h2>
            <p>{{__('Valoración de empresasParrafo')}}</p>
            </div>

            <div class="text-title-block">
                <h2>{{__('Políticas contables para NIIF')}}</h2>
                <p>{{__('Políticas contables para NIIFparrafo')}}</p>
            </div>
    
        </div>
    </div>


@endsection