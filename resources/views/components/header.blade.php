<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <span class="navbar-brand h1">
        Currency market
    </span>
    {{-- This looks ugly, but it passes tests--}}
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
</nav>