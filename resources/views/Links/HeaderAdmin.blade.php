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
                    <button class="btn btn-outline-success" type="button"><a href="{{url('/news')}}">Tableau de bord</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/games')}}">Jeux</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/connexionAdmin')}}">Connexion</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/users')}}">Utilisateurs</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="{{url('/acceuil')}}">Retour au site</a></button>
                </ul>

            </form>
        </div>
    </nav>

</header>
