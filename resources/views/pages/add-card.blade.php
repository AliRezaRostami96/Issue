@extends("layout.layout")

@section("content")
    <div class="card">
        <h5 class="card-header">Add Group</h5>
        <div class="card-body overflow-hidden">
            <div class="overflow-auto row h-100">
                <form class="col-12 col-md-8 row m-0">
                    <span class="h6 text-secondary m-0 p-0">Card Info</span>
                    <div class="col-12 col-md-4 mt-3">
                        <label for="CardName" class="form-label">Card Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="CardName" placeholder="Card Name">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label class="form-label" for="uploadFile">Card Base</label>
                        <div class="input-group ">
                            <input type="file" class="form-control" id="uploadFile" onchange="previewFile()">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="CardType" class="form-label">Card Type</label>
                        <div class="input-group">
                            <select id="CardType" class="form-select">
                                <option selected></option>
                                <option value="1" selected>English</option>
                                <option value="3">Persian</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="CardName" class="form-label">Card Width(cm)</label>
                        <div class="input-group">
                            <input
                                type="number"
                                class="form-control"
                                id="CardWidth"
                                value="10"
                                placeholder="Card Width"
                                onchange="onStyleChange('#previewSection','width', 'cm', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="CardName" class="form-label">Card height(cm)</label>
                        <div class="input-group">
                            <input
                                type="number"
                                class="form-control"
                                id="CardHeight"
                                value="15"
                                placeholder="Card Height"
                                onchange="onStyleChange('#previewSection','height', 'cm', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="ew" class="form-label">Print Font</label>
                        <div class="input-group">
                            <select id="CardType"
                                    class="form-select"
                                    onchange="onStyleChange('#previewSection','font-family', '', event)"
                            >
                                <option selected></option>
                                <option value="Arial" selected>Arial</option>
                                <option value="B Nazanin">Bnazanin</option>
                            </select>
                        </div>
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <span class="h6 text-secondary m-0 p-0">First Name</span>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="qw" class="form-label">First Name From Top</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="qw"
                                   value="50"
                                   placeholder="First Name From Top"
                                   onchange="onStyleChange('#firstName','top', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="qw" class="form-label">First Name Width</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="qw"
                                   value="100"
                                   placeholder="First Name Width"
                                   onchange="onStyleChange('#firstName','width', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="er" class="form-label">Font Size</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="er"
                                   min="10"
                                   max="30"
                                   value="20"
                                   placeholder="Font Size"
                                   onchange="onStyleChange('#firstName','font-size', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="colorPicker" class="form-label">Color picker</label>
                        <input
                            type="color"
                            class="form-control form-control-color"
                            id="colorPicker"
                            value="#000000"
                            onchange="onStyleChange('#firstName','color', '', event)"
                        >
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <span class="h6 text-secondary m-0 p-0">Last Name</span>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="wq" class="form-label">Last Name From Top</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="wq"
                                   value="80"
                                   placeholder="Last Name From Top"
                                   onchange="onStyleChange('#lastName','top', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="we" class="form-label">Last Name Width</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="we"
                                   value="100"
                                   placeholder="Last Name Width"
                                   onchange="onStyleChange('#lastName','width', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="er" class="form-label">Font Size</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="er"
                                   min="10"
                                   max="30"
                                   value="20"
                                   placeholder="Font Size"
                                   onchange="onStyleChange('#lastName','font-size', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="colorPicker" class="form-label">Color picker</label>
                        <input
                            type="color"
                            class="form-control form-control-color"
                            id="colorPicker"
                            value="#000000"
                            onchange="onStyleChange('#lastName','color', '', event)"
                        >
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <span class="h6 text-secondary m-0 p-0">Avatar</span>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="re" class="form-label">Avatar Border</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="re"
                                   value="8"
                                   placeholder="Avatar Border"
                                   onchange="onStyleChange('#avatar','border-width', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="rt" class="form-label">Avatar Width</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="rt" value="100"
                                   placeholder="Avatar Width"
                                   onchange="onStyleChange('#avatar','width', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="tr" class="form-label">Avatar Height</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="tr"
                                   value="100"
                                   placeholder="Avatar Height"
                                   onchange="onStyleChange('#avatar','height', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="tr" class="form-label">Avatar Radius</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="tr" value="40"
                                   placeholder="Avatar Radius"
                                   onchange="onStyleChange('#avatar','border-radius', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="tr" class="form-label">Avatar From Top</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="tr"
                                   value="100"
                                   placeholder="Avatar From Top"
                                   onchange="onStyleChange('#avatar','top', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="yt" class="form-label">Avatar From Left</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="yt"
                                   value="100"
                                   placeholder="Avatar From Left"
                                   onchange="onStyleChange('#avatar','left', 'px', event)"
                            >

                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="borderColor" class="form-label">Border Color</label>
                        <input type="color"
                               class="form-control form-control-color"
                               id="borderColor"
                               value="#000000"
                               onchange="onStyleChange('#avatar','border-color', '', event)"
                        >
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <span class="h6 text-secondary m-0 p-0">Occupation</span>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="ty" class="form-label">Occupation From Top</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="ty"
                                   value="0"
                                   placeholder="Occupation From Top"
                                   onchange="onStyleChange('#occupation','top', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="yt" class="form-label">Occupation From Left</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="yt"
                                   value="0"
                                   placeholder="Occupation From Top"
                                   onchange="onStyleChange('#occupation','left', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="er" class="form-label">Occupation Font Size</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="er"
                                   min="10"
                                   max="30"
                                   value="20"
                                   placeholder="Occupation Font Size"
                                   onchange="onStyleChange('#occupation','font-size', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="colorPicker" class="form-label">Color picker</label>
                        <input
                            type="color"
                            class="form-control form-control-color"
                            id="colorPicker"
                            value="#000000"
                            onchange="onStyleChange('#occupation','color', '', event)"
                        >
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <span class="h6 text-secondary m-0 p-0">Barcode</span>

                    <div class="row m-0 p-0" id="barcodeContainer">

                        <div class="col-12 col-md-4 mt-3 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="needBarcode"
                                       onchange="barcodeToggle(event)" checked>
                                <label class="form-check-label" for="needBarcode">Need Barcode</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       id="default"
                                       checked
                                       onchange="barcodeRotateOnChange( '#barcode', 'transform', event)"
                                >
                                <label class="form-check-label" for="default">Vartical Barcode</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="er" class="form-label">Barcode From Top</label>
                            <div class="input-group">
                                <input type="number"
                                       class="form-control"
                                       id="er"
                                       value="120"
                                       placeholder="Barcode From Top"
                                       onchange="onStyleChange('#barcode','top', 'px', event)"
                                >
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="er" class="form-label">Barcode From Left</label>
                            <div class="input-group">
                                <input type="number"
                                       class="form-control"
                                       id="er"
                                       value="0"
                                       placeholder="Barcode From Left"
                                       onchange="onStyleChange('#barcode','left', 'px', event)"
                                >
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="er" class="form-label">Barcode Length(%)</label>
                            <div class="input-group">
                                <input type="number"
                                       class="form-control"
                                       id="er"
                                       value="100"
                                       min="0"
                                       max="100"
                                       placeholder="Barcode Length"
                                       onchange="onStyleChange('#barcode','width', '%', event)"
                                >
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="er" class="form-label">Barcode Height(px)</label>
                            <div class="input-group">
                                <input type="number"
                                       class="form-control"
                                       id="er"
                                       value="70"
                                       placeholder="Barcode Height"
                                       onchange="onStyleChange('#barcode','height', 'px', event)"
                                >
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="er" class="form-label">Barcode Text Top</label>
                            <div class="input-group">
                                <input type="number"
                                       class="form-control"
                                       id="er"
                                       value="195"
                                       placeholder="Barcode Text Top"
                                       onchange="onStyleChange('#barcodeText','top', 'px', event)"
                                >
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="er" class="form-label">Barcode Text Left</label>
                            <div class="input-group">
                                <input type="number"
                                       class="form-control"
                                       id="er"
                                       value="0"
                                       placeholder="Barcode Text Left"
                                       onchange="onStyleChange('#barcodeText','left', 'px', event)"
                                >
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="colorPicker" class="form-label">Color picker</label>
                            <input
                                type="color"
                                class="form-control form-control-color"
                                id="colorPicker"
                                value="#000000"
                                onchange="onStyleChange('#barcodeText','color', '', event)"
                            >
                        </div>

                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <span class="h6 text-secondary m-0 p-0">Custom Text</span>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="customText" class="form-label">Custom Text</label>
                        <div class="input-group">
                            <input type="text"
                                   class="form-control"
                                   id="customText"
                                   value=""
                                   placeholder="Custom Text"
                                   onchange="addTextToHtml('#customTextPrev', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="er1" class="form-label">Custom Text From Top</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="er1"
                                   value="50"
                                   placeholder="Custom Text From Top"
                                   onchange="onStyleChange('#customTextPrev','top', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="er2" class="form-label">Custom Text From Left</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="er2"
                                   value="150"
                                   placeholder="Custom Text From Left"
                                   onchange="onStyleChange('#customTextPrev','left', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="er2" class="form-label">Custom Text Font Size</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   id="er2"
                                   min="10"
                                   max="30"
                                   value="20"
                                   placeholder="Custom Text Font Size"
                                   onchange="onStyleChange('#customTextPrev','font-size', 'px', event)"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="colorPicker" class="form-label">Color picker</label>
                        <input
                            type="color"
                            class="form-control form-control-color"
                            id="colorPicker"
                            value="#000000"
                            onchange="onStyleChange('#customTextPrev','color', '', event)"
                        >
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c">
                    </div>

                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
                <div class="col-12 col-md-4">
                    <div class="position-sticky top-0 overflow-auto">
                        <h1 class="text-center">
                            Preview
                        </h1>
                        <div class="preview-section position-relative" id="previewSection" style="width: 10cm; height: 15cm">
                            <img src="" id="previewImage" class="img-fluid">
                            <span id="firstName"
                                  class="position-absolute start-0 end-0 text-center"
                                  style="top: 50px; width: 100px"
                            >First Name</span>
                            <span id="lastName"
                                  class="position-absolute start-0 end-0 text-center"
                                  style="top: 80px; width: 100px"
                            >Last Name</span>
                            <span class="position-absolute overflow-hidden card-avatar"
                                  id="avatar"
                                  style="width: 100px; height: 100px; border-radius: 40px; top: 100px; left: 100px; border-width: 8px"
                            >
                                <span class="position-relative d-inline-block h-100 w-100">
                                    <img src="https://www.w3schools.com/howto/img_avatar.png"
                                         alt="avatar"
                                         class="img-fluid position-absolute top-0"
                                    >
                                </span>
                            </span>
                            <span id="barcodePrevContainer" >
                                <span id="barcode"
                                      class="position-absolute d-inline-block overflow-hidden"
                                      style="top: 120px; left: 0; height: 70px"
                                >
                                    <img src="{{@asset('images/barcode.png')}}" alt="barcode">
                                </span>
                                <span id="barcodeText"
                                      class="position-absolute"
                                      style="top: 195px; left: 0"
                                >
                                    Barcode Text
                                </span>
                            </span>
                            <span id="occupation"
                                  class="position-absolute"
                                  style="top: 0; left: 0; font-size: 20px"
                            >
                                Occupation
                            </span>
                            <span id="customTextPrev"
                                  class="position-absolute"
                                  style="top: 50px; left: 150px"
                            ></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("script")
    <script>
        function previewFile() {
            const preview = document.querySelector('img');
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                $("#previewImage").attr("src", reader.result);
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        const onStyleChange = (elementId, propertyName, unit, e) => {
            const value = e.target.value;
            $(elementId).css(propertyName, value + unit);
        }

        const barcodeRotateOnChange = (elementId, propertyName, e) => {
            const checkStatus = e.target.checked;
            if (!checkStatus) {
                $(elementId).css(propertyName, "rotate(90deg)");
            } else {
                $(elementId).css(propertyName, "rotate(0deg)");
            }
        }

        const barcodeToggle = (e) => {
            const checkStatus = e.target.checked;
            if (!checkStatus) {
                $("#barcodeContainer input:not(#needBarcode)").attr("disabled", true);
                $("#barcodePrevContainer").addClass('d-none');
            } else {
                $("#barcodeContainer input:not(#needBarcode)").attr("disabled", false);
                $("#barcodePrevContainer").removeClass('d-none');
            }
        }

        const addTextToHtml = (elementId, e) => {
            const value = e.target.value;
            $(elementId).text(value);
        }
    </script>
@endsection
