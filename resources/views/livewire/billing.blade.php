<div>
<main class="main-content">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xl-6 mb-xl-0 mb-4">
                        <div class="card bg-transparent shadow-xl">
                            <div class="overflow-hidden position-relative border-radius-xl"
                                style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative z-index-1 p-3">
                                    <i class="fas fa-wifi text-white p-2"></i>
                                    <h5 class="text-white mt-4 mb-5 pb-2">
                                        4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                                                <h6 class="text-white mb-0">Jack Peterson</h6>
                                            </div>
                                            <div>
                                                <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                                                <h6 class="text-white mb-0">11/22</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <img class="w-60 mt-2" src="../assets/img/logos/mastercard.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="fas fa-landmark opacity-10"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h6 class="text-center mb-0">ბალანსი</h6>
                                        <hr class="horizontal dark my-3">
                                        <h5 class="mb-0"> {{$user->available_balance}}  GEL</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <h6 class="mb-0">Payment Method</h6>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                                class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-4">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <img class="w-10 me-3 mb-0" src="../assets/img/logos/mastercard.png"
                                                alt="logo">
                                            <h6 class="mb-0">
                                                ****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852
                                            </h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                                            <h6 class="mb-0">
                                                ****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248
                                            </h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <h6 class="mb-0">თანხის გატანა</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body p-3  rounded shadow">
                                <div class="row">
                                    <div class="container col-md-6 text-warning">

                                             <p> ქეშაუთს შეძლებთ თვის ბოლო 5 დღეში. ქეშაუთისთვის მინიმალური თანხა ბალანსზე შეადგენს 50 ლარს.
                                                 ქეშაუთის მოთხოვნის შემდეგ დაელოდეთ საიტის ადმინისტრაციიდან პასუხს. კითხვების შემთხვევაში დაგვიკავშირდით <a class="" href="{{route('contact')}}">კონტაქტი</a>

                                             </p>
                                    </div>

                                <div class="col-md-6 text-right">
                                    <livewire:request-withdrawal />

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-4">--}}
{{--                <div class="card h-100">--}}
{{--                    <div class="card-header pb-0 p-3">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 d-flex align-items-center">--}}
{{--                                <h6 class="mb-0">Invoices</h6>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 text-right">--}}
{{--                                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body p-3 pb-0">--}}
{{--                        <ul class="list-group">--}}
{{--                            <li--}}
{{--                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>--}}
{{--                                    <span class="text-xs">#CC-214589</span>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center text-sm">--}}
{{--                                    $350--}}
{{--                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i--}}
{{--                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li--}}
{{--                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>--}}
{{--                                    <span class="text-xs">#FB-212562</span>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center text-sm">--}}
{{--                                    $560--}}
{{--                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i--}}
{{--                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li--}}
{{--                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>--}}
{{--                                    <span class="text-xs">#QW-103578</span>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center text-sm">--}}
{{--                                    $120--}}
{{--                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i--}}
{{--                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>--}}
{{--                                    <span class="text-xs">#AR-803481</span>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center text-sm">--}}
{{--                                    $300--}}
{{--                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i--}}
{{--                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
{{--                              <div class="d-flex flex-column">--}}
{{--                                  <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>--}}
{{--                                  <span class="text-xs">#ST-451897</span>--}}
{{--                              </div>--}}
{{--                              <div class="d-flex align-items-center text-sm">--}}
{{--                                  $275--}}
{{--                                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i--}}
{{--                                          class="fas fa-file-pdf text-lg me-1"></i> PDF</button>--}}
{{--                              </div>--}}
{{--                          </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="row">
{{--            <div class="col-md-7 mt-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header pb-0 px-3">--}}
{{--                        <h6 class="mb-0">Billing Information</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body pt-4 p-3">--}}
{{--                        <ul class="list-group">--}}
{{--                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="mb-3 text-sm">Oliver Liam</h6>--}}
{{--                                    <span class="mb-2 text-xs">Company Name: <span--}}
{{--                                            class="text-dark font-weight-bold ms-2">Viking Burrito</span></span>--}}
{{--                                    <span class="mb-2 text-xs">Email Address: <span--}}
{{--                                            class="text-dark ms-2 font-weight-bold">oliver@burrito.com</span></span>--}}
{{--                                    <span class="text-xs">VAT Number: <span--}}
{{--                                            class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i--}}
{{--                                            class="far fa-trash-alt me-2"></i>Delete</a>--}}
{{--                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i--}}
{{--                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="mb-3 text-sm">Lucas Harper</h6>--}}
{{--                                    <span class="mb-2 text-xs">Company Name: <span--}}
{{--                                            class="text-dark font-weight-bold ms-2">Stone Tech Zone</span></span>--}}
{{--                                    <span class="mb-2 text-xs">Email Address: <span--}}
{{--                                            class="text-dark ms-2 font-weight-bold">lucas@stone-tech.com</span></span>--}}
{{--                                    <span class="text-xs">VAT Number: <span--}}
{{--                                            class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i--}}
{{--                                            class="far fa-trash-alt me-2"></i>Delete</a>--}}
{{--                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i--}}
{{--                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">--}}
{{--                                <div class="d-flex flex-column">--}}
{{--                                    <h6 class="mb-3 text-sm">Ethan James</h6>--}}
{{--                                    <span class="mb-2 text-xs">Company Name: <span--}}
{{--                                            class="text-dark font-weight-bold ms-2">Fiber Notion</span></span>--}}
{{--                                    <span class="mb-2 text-xs">Email Address: <span--}}
{{--                                            class="text-dark ms-2 font-weight-bold">ethan@fiber.com</span></span>--}}
{{--                                    <span class="text-xs">VAT Number: <span--}}
{{--                                            class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>--}}
{{--                                </div>--}}
{{--                                <div class="ms-auto">--}}
{{--                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i--}}
{{--                                            class="far fa-trash-alt me-2"></i>Delete</a>--}}
{{--                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i--}}
{{--                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-md-12 mt-4">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0">ჩარიცხვების ისტორია</h6>
                            </div>
{{--                            <div class="col-md-6 d-flex justify-content-end align-items-center">--}}
{{--                                <i class="far fa-calendar-alt me-2"></i>--}}
{{--                                <small>23 - 30 March 2020</small>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
{{--                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>--}}
                        <ul class="list-group">
                           @foreach($user->withdrawals as $value)
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-up"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Views Meama</h6>
                                            <span class="text-xs">{{  date('h m d', strtotime($value->approved_at)) }}</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        {{$value->amount}} GEL
                                    </div>
                                </li>
                           @endforeach

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
