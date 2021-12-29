@extends("layout.layout")

@section("content")
    <div class="card shadow rounded-3 overflow-hidden h-100">
        <h5 class="card-header">Users List</h5>
        <div class="card-footer">
            <form class="row">

                <div class="col-12 col-md-3">
                    <label for="search">Name</label>
                    <div class="input-group">
                        <input type="search" class="form-control shadow-none" id="search" placeholder="Name">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <label for="select1">Group</label>
                    <select class="select2" id="select1" name="group">
                        <option value="ALL">All Group</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
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
        <div class="card-body">
            <div class="w-100 overflow-auto">
                <table class="table table-hover text-center align-middle m-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>GROUP</th>
                    <th>ADDED ON</th>
                    <th>ISSUE STATUS</th>
                    <th>Print Count</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <span class="d-flex align-items-center">
                            <img class="rounded-3" height="50" src="data:image/image/png;base64,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" alt="">
                            <span class="ms-1 text-start">MohammadALi Rahmatizadeh</span>
                        </span>
                    </td>
                    <td></td>
                    <td>
                        <h5>
                            <span class="badge bg-success">	فجر38خبرنگار - FIFF38PRESS</span>
                        </h5>
                    </td>
                    <td>2021/04/08 00:58:30</td>
                    <td>
                        <h5>
                            <span class="badge bg-danger">
                                Not Yet
                            </span>
                        </h5>
                    </td>
                    <td>5</td>
                    <td>
                        <div class="btn-group">
                            <div class="btn-group dropdown" role="group">
                                <button type="button" class="btn btn-sm btn-toolbar" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu text-center px-2">
                                    <li>
                                        <a class="btn btn-sm btn-primary w-100" href="#">Regenerate</a>
                                        <button
                                            class="btn btn-sm btn-primary show-modal"
                                            type="button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#selectGroupModal"
                                            data-userID="1"
                                        >
                                            Set Group
                                        </button>
                                        <a href="#" class="btn btn-sm btn-primary"><span class="fas fa-cloud-download me-1"></span>Get User Card</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
    <div class="modal fade" id="selectGroupModal" aria-labelledby="showImage" aria-modal="true"
         role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="row text-center justify-content-center">
                        <label>Select desired group for user</label>
                        <div class="col-12 col-md-6 mt-1 text-start">
                            <select id="select2" name="state">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="col-12 mt-4">
                            <button class="btn btn-md btn-primary" type="submit">submit</button>
                        </div>
                    </form>
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
        $(document).ready(function() {
            $('#select2').select2({
                dropdownParent: $('#selectGroupModal'),
                width: '100%'
            });
            $('.select2').select2({
                width: '100%',
            });
        });
        $(".show-modal").on("click", (e) => {
            const userId = e.delegateTarget.dataset.userID;
        })
    </script>
@endsection
