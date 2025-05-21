<form wire:submit.prevent="changePassword" action="#" method="POST" role="form text-left">
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            <div x-data="{ show: false }" class="form-group">--}}
{{--                <label for="user-password" class="form-control-label">მიმდინარე პაროლი</label>--}}
{{--                <div class="@error('current_password') border border-danger rounded-3 @enderror">--}}
{{--                    <input wire:model="current_password" class="form-control" type="password" placeholder="მიმდინარე პაროლი"--}}
{{--                           id="user-password">--}}
{{--                    <span class="input-group-text" style="cursor: pointer" @click="show = !show">--}}
{{--                         <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--                @error('current_password') <div class="text-danger">{{ $message }}</div> @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            <div x-data="{ show: false }" class="form-group">--}}
{{--                <label for="user-password" class="form-control-label">მიმდინარე პაროლი</label>--}}
{{--                <div class="input-group @error('current_password') border border-danger rounded-3 @enderror">--}}
{{--                    <input :type="show ? 'text' : 'password'"--}}
{{--                           wire:model="current_password"--}}
{{--                           class="form-control"--}}
{{--                           placeholder="მიმდინარე პაროლი"--}}
{{--                           id="user-password">--}}
{{--                    <span class="input-group-text" style="cursor: pointer" @click="show = !show">--}}
{{--                    <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>--}}
{{--                </span>--}}
{{--                </div>--}}
{{--                @error('current_password') <div class="text-danger">{{ $message }}</div> @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row">
        <div class="col-md-6">
            <div x-data="{ show: false }" class="form-group">
                <label for="user-password" class="form-control-label">მიმდინარე პაროლი</label>
                <div class="input-group @error('current_password') border border-danger rounded-3 @enderror">
                    <input :type="show ? 'text' : 'password'"
                           wire:model="current_password"
                           class="form-control"
                           placeholder="მიმდინარე პაროლი"
                           id="user-password">
                    <div @click="show = !show" class="rounded-2 bg-gradient-dark text-white flex px-2 justify-content-center align-content-center" >
                        <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>
                    </div>
                </div>
                @error('current_password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-md-6">
            <div x-data="{ show: false }"  class="form-group">
                <label for="user-new_password" class="form-control-label">ახალი პაროლი</label>
                <div class="input-group @error('new_password') border border-danger rounded-3 @enderror">
                    <input :type="show ? 'text' : 'password'"
                           wire:model="new_password"
                           class="form-control"
                           placeholder="ახალი პაროლი"
                           id="user-new_password">
                    <div @click="show = !show" class="rounded-2 bg-gradient-dark text-white flex px-2 justify-content-center align-content-center" >
                        <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>
                    </div>
                </div>
                @error('new_password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div x-data="{show: false}" class="form-group">
                <label for="user-repeat_password" class="form-control-label">გაიმეორეთ ახალი პაროლი</label>
                <div class="input-group @error('repeat_password') border border-danger rounded-3 @enderror">
                    <input :type="show ? 'text' : 'password'"
                           wire:model="repeat_password"
                           class="form-control"
                           placeholder="გაიმეორეთ ახალი პაროლი"
                           id="user-repeat_password">
                    <div @click="show = !show" class="rounded-2 bg-gradient-dark text-white flex px-2 justify-content-center align-content-center" >
                        <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>
                    </div>
                </div>

            </div>
                @error('repeat_password') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
    </div>

    @if($showSuccesNotification)
        <div class="alert alert-success mt-3">პაროლი წარმატებით შეიცვალა!</div>
    @endif

    <div class="d-flex">
        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">პაროლის შეცვლა</button>
    </div>


</form>
