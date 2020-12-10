<div class="sidebarr">
    <center>
        <img src="../img/photo.png" class="profile_image" alt="">
        <h4>{{ Auth::user()->name }}</h4>
    </center>
        <a href="/usuario/"><i class="fas fa-user-circle"></i><span>Perfil</span></a>
        <a href="/usuario/reservaciones"><i class="fas fa-desktop"></i><span>Reservaciones</span></a>
        <a href="/usuario/servicio_domicilio"><i class="fas fa-shopping-cart"></i><span>Servicio a domicilio</span></a>
        <a href="/usuario/buzon"><i class="fas fa-envelope"></i><span>Buzon</span></a>
        <a href="/index"><i class="fas fa-sign-out-alt"></i><span>Salir de perfil</span></a>
</div>