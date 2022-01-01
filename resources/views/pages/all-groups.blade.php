@extends("layout.layout")

@section("content")
    <div class="card shadow rounded-3 overflow-hidden flex-fill">
        <h5 class="card-header">Groups List</h5>
        <div class="card-footer">
            <form class="row">

                <div class="col-12 col-md-3">
                    <label for="search" class="fw-bolder">Search</label>
                    <div class="input-group">
                        <input type="search" class="form-control shadow-none" id="search" placeholder="Search">
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <label for="search" class="fw-bolder">Sort</label>
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
                            <th>CARD</th>
                            <th>USERS COUNT</th>
                            <th>DEFAULT</th>
                            <th>VIEW</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="rounded-circle d-inline-block"
                                      style="background: #0c4128; width: 30px; height: 30px"></span>
                            </td>
                            <td>ستاد</td>
                            <td>
                                    <span class="badge bg-success">
                                        STAFF
                                    </span>
                            </td>
                            <td>
                                221 Users
                            </td>
                            <td>
                                    <span class="badge bg-success">
                                        -
                                    </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary shadow-none">
                                    View Users
                                </a>
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
