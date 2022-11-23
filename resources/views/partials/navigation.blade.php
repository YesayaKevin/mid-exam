<nav class="navbar navbar-expand-lg navbar-primary bg-light d-flex flex-column p-0 m-0 shadow-sm sticky-top">
    <div class="w-100 bg-warning d-flex justify-content-center">
        <a class="navbar-brand text-white" style="font-size: 2rem;" href="{{ route('index') }}">Giant Book Supplier</a>
    </div>
    <div class="d-flex flex-row">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($categories as $category)
                    <a class="dropdown-item text-primary" href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
                @endforeach
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('publisher') }}">Publisher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>