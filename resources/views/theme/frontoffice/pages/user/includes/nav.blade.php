{{-- menu lateral --}}

<div class="col s12 m4">
        <div class="collection">
                <a href="{{route('frontoffice.user.profile')}}" class="collection-item {{active_class(route('frontoffice.user.profile'))}}">Perfil</a>
                @if(auth()->user()->has_role(config('app.patient_role')))
                <a href="{{route('frontoffice.patient.schedule')}}" class="collection-item {{active_class(route('frontoffice.patient.schedule'))}}">Agendar cita</a>
                <a href="{{route('frontoffice.patient.appointments')}}" class="collection-item {{active_class(route('frontoffice.patient.appointments'))}}">Mis citas</a>
                <a href="#!" class="collection-item">Recetas</a>
                @endif
                <a href="#!" class="collection-item">Facturacion</a>
                <a href="#!" class="collection-item">Editar perfil</a>

        </div>

</div>