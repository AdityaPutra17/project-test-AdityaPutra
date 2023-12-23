@extends('tamplate')

@section('content')
    <div class="banner-container">
        <div class="banner">
            <div class="banner-text">
                <h1 class="text-light">Ideas</h1>
                <p class="text-light">where all our great things begin</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <b>Showing 1-10 of 100</b>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-around">
                    {{-- show per page --}}
                        <div class="d-flex align-items-center">
                            <b class="me-2">Show per Page :</b>
                            <div class="dropdown ">
                                <a class="btn dropdown-toggle  justify-content-between" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  10
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">9</a></li>
                                  <li><a class="dropdown-item" href="#">8</a></li>
                                  <li><a class="dropdown-item" href="#">7</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        {{-- sortby --}}
                        <div class="d-flex align-items-center">
                            <b class="me-2">Sort by :</b>
                            <div class="dropdown ">
                                <a class="btn dropdown-toggle  justify-content-between" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Newest
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        {{-- artikels --}}
        <div class="d-flex justify-content-around mt-5 mb-5">
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around mt-3 mb-5">
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="assets/image/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title text-secondary">5 September 2022</p>
                  <h5 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h5>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
    </div>
@endsection