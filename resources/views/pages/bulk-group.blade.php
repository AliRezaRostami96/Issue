@extends("layout.layout")

@section("content")
    <div class="card flex-fill">
        <h5 class="card-header">Bulk Set Group</h5>
        <div class="card-body">
            <form class="row">

                <div class="col-12 col-md-6">
                    <label for="firstGroup">Group</label>
                    <select class="select2" id="firstGroup" name="firstGroup">
                        <option value="ALL">All Group</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>

                <div class="col-12 col-md-6">
                    <label for="secondGroup">Group</label>
                    <select class="select2" id="secondGroup" name="secondGroup">
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
