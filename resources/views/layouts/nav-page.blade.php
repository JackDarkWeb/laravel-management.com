
<div class=''>
    <nav class="navbar navbar-expand-lg w-100 py-3" id='navbar' style="z-index: 10000; background-color: rgba(0,0,0,0.7); position: fixed; top: 0;">
        <a class="navbar-brand font-weight-bold" href="{{route('home')}}"><img src="{{asset('app/images/My-logo.png')}}" alt="" class='img-fluid'></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-uppercase font-weight-bold">
                <li class="nav-item px-3 active">
                    <a class="nav-link" href="{{route('home')}}">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{route('about')}}">A propos</a>
                </li>
                <li class="nav-item px-3">

                    <a class="nav-link" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{route('service')}}" tabindex="-1" aria-disabled="true">Nos services</a>
                </li>
            </ul>

        </div>
    </nav>
</div>

<section id='header-page'>
    <div class=''>
        <div class='container py-5'>
            <h2 class='text-white font-weight-bold text-uppercase'>{{isset($title) ? $title : ''}}</h2>
        </div>
    </div>
</section>
