<!-- banner -->
<div class="container">
    <div class="h-25 position-relative w-100">
        <div class="w-100 h-100 position-absolute overflow-hidden top-50 start-50 translate-middle d-flex justify-content-center z-n1">
            <img src="{{asset('img/bandeau.jpg')}}" alt="" class="h-100">
        </div>
        <div class="row h-50 d-flex justify-content- justify-content-between align-items-end ">
            <div class="col-3">
                <img src="{{asset('img/pussay_logo.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="{{asset('img/territoire-engage-nature.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- navbar -->
<div class="container bg-light">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2 mx-2 " type="text" placeholder="Search" />
                <button class="btn btn-outline-success my-2a my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </nav>

</div>