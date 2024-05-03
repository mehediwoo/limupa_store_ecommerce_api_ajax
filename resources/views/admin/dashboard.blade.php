@extends('admin.layout.app')
@section('title','Dashboard')
@section('content')
<div class="d-sm-flex justify-content-between align-items-center text-capitalize mb-5">
    <h2 class="mb-2 mb-sm-0">dashboard</h2>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
</div>


<div class="product-table-area">
    <div class="text-color bg-white rounded-4 shadow-lg pb-5">

        <p class="border-bottom text-capitalize fw-medium px-5 py-5 mb-4">product sales</p>

        <div class="px-5">
            <div
                class="table-product-filter d-sm-flex justify-content-between align-items-center text-color-muted mb-4">
                <div
                    class="select-product-entries text-nowrap d-flex align-items-center gap-1 mb-4 mb-sm-0">
                    <span>Show</span>
                    <select name="" id="" class="brand-color border p-2 rounded-4">
                        <option value="10" selected>10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>entries</span>
                </div>

                <form action="">
                    <div class="search-box position-relative fs-3 overflow-hidden">
                        <input class="fs-4 w-100" type="search" name="" id="" placeholder="Search..."
                            style="min-width: 10rem">
                        <button type="submit"
                            class="btn fs-4 position-absolute top-0 end-0 h-100 px-4 pt-3 text-color-2">
                            <i class="fa-solid fa-magnifying-glass w-100 h-100"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle fs-14 text-capitalize"
                    style="min-width: 90rem">
                    <thead>
                        <tr class="text-uppercase">
                            <td class="py-3">tracking id</td>
                            <td class="py-3">product</td>
                            <td class="py-3">customer</td>
                            <td class="py-3">date</td>
                            <td class="py-3">amount</td>
                            <td class="py-3">payment method</td>
                            <td class="py-3">status</td>
                            <td class="py-3">action</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-completed">shipped</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product-2.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-pending">pending</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product-3.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-cancelled">cancelled</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-completed">shipped</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-completed">shipped</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product-2.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-pending">pending</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product-3.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-cancelled">cancelled</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-completed">shipped</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product-2.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-pending">pending</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3">#9459454</td>
                            <td class="py-3">
                                <span class="d-flex align-items-center text-nowrap gap-2">
                                    <img class="rounded-3" src="images/table-product-3.jpg" alt=""
                                        style="width: 3rem; height: 3rem;">

                                    headsets
                                </span>
                            </td>
                            <td class="py-3">Simon Sais</td>
                            <td class="py-3">05 Jan 2022</td>
                            <td class="py-3">$166.50</td>
                            <td class="py-3">cash on delivery</td>
                            <td class="py-3">
                                <span class="status-cancelled">cancelled</span>
                            </td>
                            <td class="py-3">
                                <a href="" class="d-inline-block">
                                    <span class="p-2 brand-color me-3">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </span>
                                </a>
                                <a href="" class="d-inline-block">
                                    <span class="p-2 red-color">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
