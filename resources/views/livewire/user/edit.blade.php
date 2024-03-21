<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUser" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header rounded-top bg-primary">
                <h1 class="modal-title fs-5 text-white">Chỉnh sửa tài khoản</h1>
            </div>
            <div class="modal-body">
                <form wire:submit='updateUser'>
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <x-form.input :label="'Mã nhân viên'" :type="'text'" :wire_model="'code'"
                                :error="'code'"></x-form.input>
                        </div>
                        <div class="col-5">
                            <x-form.input :label="'Họ và tên nhân viên'" :type="'text'" :wire_model="'name'"
                                :error="'name'"></x-form.input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <x-form.input :label="'Ngày sinh'" :type="'date'" :wire_model="'date_of_birth'"
                                :error="'date_of_birth'"></x-form.input>
                        </div>
                        <div class="col-5">
                            <x-form.input :label="'CCCD'" :type="'text'" :wire_model="'identity_card'"
                                :error="'identity_card'"></x-form.input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <x-form.input :label="'Email'" :type="'text'" :wire_model="'email'" :error="'email'"
                                :disabled="true"></x-form.input>
                        </div>
                        <div class="col-5">
                            <x-form.input :label="'Địa chỉ'" :type="'text'" :wire_model="'address'"
                                :error="'address'"></x-form.input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <x-form.input :label="'Số điện thoại'" :type="'text'" :wire_model="'phone_number'"
                                :error="'phone_number'"></x-form.input>
                        </div>
                        <div class="col-5">
                            <x-form.input :label="'Mã tài khoản'" :type="'text'" :wire_model="'account_code'"
                                :error="'account_code'"></x-form.input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <x-form.input :label="'Mật khẩu'" :type="'password'" :wire_model="'password'" :error="'password'"
                                :disabled="true"></x-form.input>
                        </div>
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
                    <div class="float-end gap-2 d-flex">
                        <x-button.submit :text="'Cập nhật'" :class="'btn btn-primary'"></x-button.submit>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
