@extends("layout.layout")

@section("style")
    <link rel="stylesheet" href="{{@asset('plugins/cropperJs/cropper.min.css')}}">
@endsection

@section("content")
    <div class="card">
        <h5 class="card-header">Add User</h5>
        <div class="card-body">
            <form class="row">

                <div class="col-12 col-md-6 mt-3">
                    <label for="userName" class="form-label">User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="userName" placeholder="User Name">
                    </div>
                </div>

                <div class="col-12 col-md-6 mt-3">
                    <label for="groupName" class="form-label">Group Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" id="groupName" placeholder="Group Name">
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
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
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
                        <img class="img-fluid" src="{{@asset('images/barcode.png')}}" id="imageCropper" alt="">
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

        $("#cropperModal").on("shown.bs.modal", function () {
            cropperInit();
        })

        function closeModal() {
            cropperModal.hide();
            removeImage();
        }

        function onImageSelect(e) {
            getBase64(e.srcElement.files[0]).then(function (base64) {
                $("#imageCropper").attr("src", base64);
                cropperModal.show();
            })
        }

        function cropperInit() {
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
            const croppedBase64 = cropper.getCroppedCanvas().toDataURL();
            $("#cropperImage").val(croppedBase64);
            $("#croppedImagePreview").attr("src", croppedBase64);
            $("#previewContainer").removeClass("d-none");
            cropperModal.hide();
        }
    </script>
@endsection
