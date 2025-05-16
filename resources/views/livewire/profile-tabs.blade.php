<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <!-- ტაბების ჰედერი -->
                    <div class="card-header bg-primary">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <button
                                    class="nav-link {{ $activeTab === 'account' ? 'active' : '' }}"
                                    wire:click="switchTab('account')"
                                >
                                    ანგარიშის პარამეტრები
                                </button>
                            </li>
                            <li class="nav-item">
                                <button
                                    class="nav-link {{ $activeTab === 'verification' ? 'active' : '' }}"
                                    wire:click="switchTab('verification')"
                                >
                                    ვერიფიკაცია
                                </button>
                            </li>
                            <li class="nav-item">
                                <button
                                    class="nav-link {{ $activeTab === 'upload' ? 'active' : '' }}"
                                    wire:click="switchTab('upload')"
                                >
                                    ვიდეოს ატვირთვა
                                </button>
                            </li>
                            <li class="nav-item">
                                <button
                                    class="nav-link {{ $activeTab === 'withdraw' ? 'active' : '' }}"
                                    wire:click="switchTab('withdraw')"
                                >
                                    ბალანსი
                                </button>
                            </li>
                        </ul>
                    </div>

                    <!-- ტაბების კონტენტი -->
                    <div class="card-body">
                        <!-- ანგარიშის ტაბი -->
                        <div x-show="$wire.activeTab === 'account'" x-transition>
                            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                <div class="card shadow-sm mb-4 border-0">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">პროფილის ინფორმაცია</h5>
                                    </div>
                                    <div class="card-body">
                                        @livewire('profile.update-profile-information-form')
                                    </div>
                                </div>
                            @endif

                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                <div class="card shadow-sm mb-4 border-0">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">პაროლის შეცვლა</h5>
                                    </div>
                                    <div class="card-body">
                                        @livewire('profile.update-password-form')
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- ვერიფიკაციის ტაბი -->
                        <div x-show="$wire.activeTab === 'verification'" x-transition>
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">ანგარიშის ვერიფიკაცია</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info" role="alert">
                                        <i class="fas fa-info-circle me-2"></i>აქ შეგიძლიათ შეამოწმოთ თქვენი ანგარიშის ვერიფიკაციის სტატუსი.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ვიდეოს ატვირთვის ტაბი -->
                        <div x-show="$wire.activeTab === 'upload'" x-transition>
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">ვიდეოს ატვირთვა</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-primary" role="alert">
                                        <i class="fas fa-film me-2"></i>აირჩიეთ ვიდეო ფაილი ასატვირთად.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div x-show="$wire.activeTab === 'withdraw'" x-transition>
                            <div class="card shadow-sm border-0">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">ბალანსი</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-primary" role="alert">
                                        <i class="fas fa-film me-2"></i>აირჩიეთ ვიდეო ფაილი ასატვირთად.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
