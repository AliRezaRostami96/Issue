@extends("layout.layout")

@section("style")
    <link rel="stylesheet" href="{{@asset('plugins/cropperJs/cropper.min.css')}}">
@endsection

@section("content")
    <div class="overflow-auto">
        <div class="card">
        <h5 class="card-header">Add User(Multiple)</h5>
        <div class="card-body">
            <form class="row">

                <div class="col-12 col-md-6 mt-3">
                    <label for="FirstNameMulti" class="form-label">First Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="FirstNameMulti" placeholder="First Name">
                    </div>
                </div>

                <div class="col-12 col-md-6 mt-3">
                    <label for="lastNameMulti" class="form-label">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="lastNameMulti" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <label for="groupMulti" class="form-label">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="groupMulti" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <label for="excel" class="form-label">Excel file</label>
                    <div class="input-group">
                        <input class="form-control shadow-none" type="file" id="excel">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <label for="images" class="form-label">Images file</label>
                    <div class="input-group">
                        <input class="form-control shadow-none" type="file" id="images">
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

        <div class="card mt-2">
        <h5 class="card-header">Add User(Single)</h5>
        <div class="card-body">
            <form class="row">

                <div class="col-12 col-md-6 mt-3">
                    <label for="FirstName" class="form-label">First Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="FirstName" placeholder="First Name">
                    </div>
                </div>

                <div class="col-12 col-md-6 mt-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="lastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <label for="formFile" class="form-label">Profile Image</label>
                    <div class="input-group">
                        <input class="form-control shadow-none" type="file" id="formFile"
                               onchange="onImageSelect(event)" accept="image/png, image/jpg, image/jpeg">
                        <input type="hidden" id="croppedImage">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <div id="previewContainer" class="d-flex align-items-center w-100 h-100 d-none">
                        <img id="croppedImagePreview" src="" height="70" width=70"/>
                        <button class="btn btn-sm btn-success rounded-circle ms-1" type="button" onclick="cropperModal.show()"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-sm btn-danger rounded-circle ms-1" type="button" onclick="removeImage()"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-1 text-start">
                    <select id="select2" name="state">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection

@section("modal")
    <div class="modal" id="cropperModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" onclick="closeModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img class="img-fluid" id="imageCropper" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveCroppedImage()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src="{{asset('plugins/cropperJs/cropper.min.js')}}"></script>
    <script>
        let cropperModal = new bootstrap.Modal(document.getElementById('cropperModal'))
        let cropper;

        function closeModal() {
            cropperModal.hide();
            removeImage();
        }

        function onImageSelect(e) {
            getBase64(e.srcElement.files[0]).then(function (base64) {
                $("#imageCropper").attr("src", base64);
                cropperInit();
                cropperModal.show();
            })
        }

        function cropperInit() {
            console.log($("#imageCropper"))
            const image = document.getElementById('imageCropper');
            cropper = new Cropper(image, {
                aspectRatio: 1 / 1,
                zoomable: false
            });
        }

        function removeImage() {
            cropper.destroy();
            $("#formFile").val("");
            $("#previewContainer").addClass("d-none")
        }

        function saveCroppedImage() {
            console.log(cropper);
            const croppedBase64 = cropper.getCroppedCanvas().toDataURL();
            $("#cropperImage").val(croppedBase64);
            $("#croppedImagePreview").attr("src", croppedBase64);
            $("#previewContainer").removeClass("d-none");
            cropperModal.hide();
        }


        $(document).ready(function() {
            $('#select2').select2({
                dropdownParent: $('#selectGroupModal'),
                width: '100%'
            });
            $('.select2').select2({
                width: '100%',
            });
        });

    </script>
@endsection
