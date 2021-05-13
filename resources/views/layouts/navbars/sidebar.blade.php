<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Historias Laborales') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'users') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">admin_panel_settings</i>
          <p>{{ __('Administrar usuarios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <span class="sidebar-mini"> US </span>
                <span class="sidebar-normal">{{ __('Usuarios') }} </span>
              </a>
            </li>
            <!--<li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>-->
            <!--<li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> EU </span>
                <span class="sidebar-normal"> {{ __('Editar Usuarios') }} </span>
              </a>
            </li>-->
          </ul>
        </div>
      </li>
      
      <li class="nav-item{{ $activePage == 'registros' ? ' active' : '' }}">
        <a class="nav-link" href={{route('registro.store')}}>
          <i class="material-icons">content_paste</i>
          <p>{{ __('Crear registros') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'index' ? ' active' : '' }}">
        <a class="nav-link" href={{route('registro.index')}}>
          <i class="material-icons">library_books</i>
          <p>{{ __('Ver registros') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'solicitud' ? ' active' : '' }}">
        <a class="nav-link" href={{route('solicitudes.index')}}>
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Solicitudes') }}@if (App\Models\Solicitud::where('estado', 'pendiente')->count() > 0) <span class="badge badge-danger">
            {{ App\Models\Solicitud::where('estado', 'pendiente')->count() }}
          </span>@endif </p>
        </a>
      </li>
      <!--//libros-->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#showLibro" aria-expanded="true">
          <i class="material-icons">import_contacts</i>
          <p>{{ __('Libros') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="showLibro">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'ver' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('libro.index')}}">
                <span class="sidebar-mini"> VL </span>
                <span class="sidebar-normal">{{ __('Ver Libros') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'crear' ? ' active' : '' }}">
              <a class="nav-link" href={{route('libro.create')}}>
                <span class="sidebar-mini"> CL </span>
                <span class="sidebar-normal"> {{ __('Crear libro') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!--//fin libros-->
      <!--
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
          <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notificaciones') }}</p>
        </a>
      </li>-->
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('Soporte') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>