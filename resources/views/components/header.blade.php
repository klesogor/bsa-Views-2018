<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <span class="navbar-brand h1">
        CoinTrade
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('currencies.index')}}">
                    <i class="fas fa-hand-holding-usd"></i>
                    Currencies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('currencies.create')}}">
                    <i class="fas fa-user-plus"></i>
                    Add
                </a>
            </li>
        </ul>
    </div>
</nav>