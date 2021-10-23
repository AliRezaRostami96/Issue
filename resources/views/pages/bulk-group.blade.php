@extends("layout.layout")

@section("content")
    <div class="card">
        <h5 class="card-header">Bulk Set Group</h5>
        <div class="card-body">
            <form class="row">

                <div class="col-12 col-md-6">
                    <label for="select1">Group</label>
                    <select class="select2" id="select1" name="state">
                        <option value="ALL">All Group</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>

                <div class="col-12 col-md-6">
                    <label for="select2">Group</label>
                    <select class="select2" id="select2" name="state">
                        <option value="ALL">All Group</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>

                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Sync All Users</button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section("script")
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
        });
    </script>
@endsection
