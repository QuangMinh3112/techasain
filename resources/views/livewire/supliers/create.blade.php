<div>
    <div class="row">
        <div class="col-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Thêm mới tài khoản</h5>
                    <form wire:submit='createSupplier'>
                        <div class="d-flex justify-content-between">
                            <div class="col-5">
                                <x-form.input :label="'Mã cung cấp'" :type="'text'" :wire_model="'code'"
                                    :error="'code'"></x-form.input>
                            </div>
                            <div class="col-5">
                                <x-form.input :label="'Tên nhà cung cấp'" :type="'text'" :wire_model="'name'"
                                    :error="'name'"></x-form.input>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-5">
                                <x-form.input :label="'Địa chỉ'" :type="'text'" :wire_model="'address'"
                                    :error="'address'"></x-form.input>
                            </div>
                            <div class="col-5">
                                <x-form.input :label="'Só điện thoại'" :type="'text'" :wire_model="'phone_number'"
                                    :error="'phone_number'"></x-form.input>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model='status' value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Hoạt động
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model='status' value="0">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Không hoạt động
                                    </label>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <x-button.previous :route="'admin.suplier.list'"></x-button.previous>
                        <x-button.submit :text="'Thêm mới'" :class="'btn btn-success'"></x-button.submit>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
