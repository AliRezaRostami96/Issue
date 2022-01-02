@extends("layout.layout")

@section("content")
    <div class="card shadow rounded-3 flex-fill">
        <h5 class="card-header">Cards List</h5>
        <div class="card-footer">
            <form class="row">

                <div class="col-12 col-md-3">
                    <label for="search">Search</label>
                    <div class="input-group">
                        <input type="search" class="form-control shadow-none" id="search" placeholder="Search">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <label for="search">Sort</label>
                    <div class="input-group">
                        <select class="form-select shadow-none">
                            <option selected></option>
                            <option value="a-z">A-Z</option>
                            <option value="z-a">Z-A</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>

            </form>
        </div>
        <div class="card-body d-flex flex-column overflow-hidden">
            <div class="w-100 flex-fill overflow-auto">
                <table class="table table-hover text-center m-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>COLOR</th>
                        <th>NAME</th>
                        <th>PRINT TYPE</th>
                        <th>FONT</th>
                        <th>GROUPS COUNT</th>
                        <th>CARD BASE</th>
                        <th>NEED BARCODE</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span style="background-color: #0c4128; width: 30px; height: 30px" class="rounded-circle d-inline-block"></span>
                            </td>
                            <td>Staff</td>
                            <td>1 Group</td>
                            <td>English</td>
                            <td>ArialBold</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn-sm btn-primary shadow-none show-modal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#showCardModal"
                                    data-img="https://issue.fajriff.com/upload/cards/card_base_6078218ef082c.jpg"
                                >
                                    Show Card
                                </button>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    yes
                                </span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="mt-3 d-flex flex-row-reverse">
                <div style="width: 80px;">
                    <select class="form-select shadow-none">
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="me-2">
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("modal")
    <div class="modal fade" id="showCardModal" tabindex="-1" aria-labelledby="showImage" aria-modal="true"
         role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script>
        $(".show-modal").on("click", (e) => {
            const image = e.delegateTarget.dataset.img;
            $(".modal img").attr("src", image);
        })
    </script>
@endsection
