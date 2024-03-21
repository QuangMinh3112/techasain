<div wire:ignore.self class="modal fade" id="createUser" tabindex="-1" aria-labelledby="createUser" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header rounded-top bg-primary">
                <h1 class="modal-title fs-5 text-white">Thêm mới tài khoản</h1>
            </div>
            <div class="modal-body">
                <form wire:submit='createUser'>
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
                            <x-form.input :label="'Email'" :type="'text'" :wire_model="'email'"
                                :error="'email'"></x-form.input>
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
                            <x-form.input :label="'Mật khẩu'" :type="'password'" :wire_model="'password'"
                                :error="'password'"></x-form.input>
                        </div>
                    </div>
                    <div class="float-end gap-2">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                        <x-button.submit :text="'Thêm mới'" :class="'btn btn-success'"></x-button.submit>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
