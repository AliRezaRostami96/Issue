@extends("layout.layout")

@section("content")
    <div class="card flex-fill">
        <h5 class="card-header">Issue Cards</h5>
        <div class="card-body">
            <form class="row">

                <div class="col-12 col-md-3">
                    <label for="select2">Group</label>
                    <select id="select2" name="state">
                        <option value="ALL">All Group</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>

                <div class="col-12 col-md-3 row m-0">
                    <div class="form-check form-switch d-flex justify-content-center align-items-end">
                        <input class="form-check-input" type="checkbox" id="default" checked>
                        <label class="form-check-label ms-2" for="default">Just Unissued</label>
                    </div>
                </div>

                <div class="col-12 col-md-3 row m-0">
                    <div class="form-check form-switch d-flex justify-content-center align-items-end">
                        <input class="form-check-input" type="checkbox" id="Custom">
                        <label class="form-check-label ms-2" for="Custom">
                            Custom Date</label>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <label for="date">Date</label>
                    <input class="form-control" type="date" disabled>
                </div>

                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Get Data</button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section("script")
    <script>
        $(document).ready(function() {
            $('#select2').select2({
                width: '100%'
            });
        });
    </script>
@endsection
