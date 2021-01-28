<style>
    header.page-header>h1 {
        margin-left: 40%;
    }
</style>

<header class="page-header">
    <h1>Ecommerce</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

            </div>
            <form class="form-inline">

                <ul>
                    <button class="btn btn-outline-success" type="button"><a href="{{url('/acceuil')}}">Acceuil</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/profil')}}">Profil</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/inscription')}}">Inscription</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/connexion')}}">Connexion</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/panier')}}">Panier</a></button>
                </ul>

            </form>
        </div>
    </nav>

</header>
