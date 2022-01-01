@extends("layout.layout")

@section("content")
    <div class="card flex-fill">
        <h5 class="card-header">Add Group</h5>
        <div class="card-body">
            <form class="row">

                <div class="col-12 col-md-6 mt-3">
                    <label for="groupName" class="form-label">Group Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="groupName" placeholder="Group Name">
                    </div>
                </div>

                <div class="col-12 col-md-6 mt-3">
                    <label for="groupName" class="form-label">Group Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="groupName" placeholder="Group Name">
                    </div>
                </div>

                <div class="col-12 col-md-6 mt-3">
                    <label for="groupName" class="form-label">Group Card</label>
                    <div class="input-group">
                        <select class="form-select shadow-none">
                            <option selected></option>
                            <option value="1">1</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6 row m-0">
                    <div class="col-6 mt-3">
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c">
                    </div>
                    <div class="col-6 mt-3 form-check form-switch d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="default" checked>
                        <label class="form-check-label" for="default">Default</label>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
@endsection
