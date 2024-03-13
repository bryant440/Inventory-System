@extends('layouts.admin_master')

@section('content')
<style>
.card-hover:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease; /* Add a smooth transition */
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.bg-gradient-scooter {
    background: #17ead9;
    background: -webkit-linear-gradient(
45deg
 , #17ead9, #6078ea)!important;
    background: linear-gradient(
45deg
 , #17ead9, #6078ea)!important;
}
.widgets-icons-2 {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ededed;
    font-size: 27px;
    border-radius: 10px;
}
.rounded-circle {
    border-radius: 50%!important;
}
.text-white {
    color: #fff!important;
}
.ms-auto {
    margin-left: auto!important;
}
.bg-gradient-bloody {
    background: #f54ea2;
    background: -webkit-linear-gradient(
45deg
 , #f54ea2, #ff7676)!important;
    background: linear-gradient(
45deg
 , #f54ea2, #ff7676)!important;
}

.bg-gradient-ohhappiness {
    background: #00b09b;
    background: -webkit-linear-gradient(
45deg
 , #00b09b, #96c93d)!important;
    background: linear-gradient(
45deg
 , #00b09b, #96c93d)!important;
}

.bg-gradient-blooker {
    background: #ffdf40;
    background: -webkit-linear-gradient(
45deg
 , #ffdf40, #ff8359)!important;
    background: linear-gradient(
45deg
 , #ffdf40, #ff8359)!important;
}
</style>
<main>
    <div class="container-fluid">
        <div class="pagetitle border-bottom mb-4" style="display: flex; justify-content: space-between; align-items: center;">
            <!-- <h1>Dashboard</h1> -->
            <h1>Welcome {{ Auth::user()->name }}</h1>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card text-white card-hover" style="background-color: #AAB2E1">
                    <div class="card-body d-flex align-items-center">
                        <img width="50px" src="{{ asset('img/tsales.png') }}" style="color: orange;margin-top: 10px">
                        <div class="m-2" style="margin-left: 19px;color: green;font-size: 13px">
                            <p class="card-text">Today Sales</p>
                            <p class="card-text" style="margin-top: -20px"><small>ksh. 2000.00</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <a href="#" style="text-decoration: none;">
                    <div class="card text-white card-hover" style="background-color: #ffcccc">
                        <div class="card-body d-flex align-items-center">
                            <img width="50px" src="{{ asset('img/sell.png') }}" style="color: orange;margin-top: 10px">
                            <div class="m-2" style="margin-left: 19px;color: black;font-size: 13px">
                                <p class="card-text">View Products Sold</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" style="text-decoration: none;">
                    <div class="card text-white card-hover" style="background-color: #fff3cd">
                        <div class="card-body d-flex align-items-center">
                            <img width="50px" src="{{ asset('img/report.png') }}" style="color: orange;margin-top: 10px">
                            <div class="m-2" style="margin-left: 19px;color: black;font-size: 13px;margin-top: 6px">
                                <p class="card-text">Print todays invoice</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" style="text-decoration: none;">
                    <div class="card text-white card-hover" style="background-color: #d9ead3">
                        <div class="card-body d-flex align-items-center">
                            <img width="50px" src="{{ asset('img/print.png') }}" style="color: orange;margin-top: 10px">
                            <div class="m-2" style="margin-left: 19px;color: black;font-size: 13px;margin-top: 6px">
                                <p class="card-text">View Reports</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Today's Invoices</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>0.00</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Last 6 Months Sales</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>0.00</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Users</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>1</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Available Prodcuts</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>6</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Current Year Revenue</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>0.00</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Suppliers</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>2</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Today's Invoices</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>0.00</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Current Months Sales</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>0.00</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mt-2">
                                <p class="mb-0" style="font-size: 14px;color: gray"><small>Last 3 Months Sales</small></p>
                                <h4 class="my-1" style="font-size: 14px;color: black"><small><strong>0.00</strong></small></h4>
                            </div>
                            <div class="mt-3 widgets-icons-2 bg-gradient-scooter text-white ms-auto"><i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table style='font-size: 12px' id="example" class="mt-4 table table-striped" style="width:100%">

                    <thead>
                        <tr style='font-size: 10px'>
                            <th>S/N</th>
                            <th>INVOICE</th>
                            <th>CUSTOMER</th>
                            <th>AMOUNT</th>
                            <th>ATTENDEE</th>
                            <th>METHOD</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class='fw-bold'>2</td>
                        <td>INV000022</td>
                        <td>Alice Johnson</td>
                        <td>Ksh. 500.00</td>
                        <td>Michael Smith</td>
                        <td>Credit Card</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>3</td>
                        <td>INV000023</td>
                        <td>Emily Brown</td>
                        <td>Ksh. 600.00</td>
                        <td>David Jones</td>
                        <td>PayPal</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>4</td>
                        <td>INV000024</td>
                        <td>James Wilson</td>
                        <td>Ksh. 700.00</td>
                        <td>Sarah Lee</td>
                        <td>Bank Transfer</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>5</td>
                        <td>INV000025</td>
                        <td>Sarah Miller</td>
                        <td>Ksh. 800.00</td>
                        <td>Matthew Taylor</td>
                        <td>Bitcoin</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>6</td>
                        <td>INV000026</td>
                        <td>Michael Davis</td>
                        <td>Ksh. 900.00</td>
                        <td>Emma Anderson</td>
                        <td>Ethereum</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>7</td>
                        <td>INV000027</td>
                        <td>Olivia Martinez</td>
                        <td>Ksh. 1000.00</td>
                        <td>Daniel Garcia</td>
                        <td>Stripe</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>8</td>
                        <td>INV000028</td>
                        <td>Ethan Lopez</td>
                        <td>Ksh. 1100.00</td>
                        <td>Isabella Hernandez</td>
                        <td>Apple Pay</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>9</td>
                        <td>INV000029</td>
                        <td>Charlotte Hill</td>
                        <td>Ksh. 1200.00</td>
                        <td>Liam Taylor</td>
                        <td>Google Pay</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>10</td>
                        <td>INV000030</td>
                        <td>Noah King</td>
                        <td>Ksh. 1300.00</td>
                        <td>Oliver Adams</td>
                        <td>Venmo</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>11</td>
                        <td>INV000031</td>
                        <td>Emma Wright</td>
                        <td>Ksh. 1400.00</td>
                        <td>Elijah Parker</td>
                        <td>Zelle</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>12</td>
                        <td>INV000032</td>
                        <td>Luna Nguyen</td>
                        <td>Ksh. 1500.00</td>
                        <td>Logan Wilson</td>
                        <td>Western Union</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>13</td>
                        <td>INV000033</td>
                        <td>Aiden Carter</td>
                        <td>Ksh. 1600.00</td>
                        <td>Harper Lewis</td>
                        <td>TransferWise</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>14</td>
                        <td>INV000034</td>
                        <td>Mia Clark</td>
                        <td>Ksh. 1700.00</td>
                        <td>Ethan Moore</td>
                        <td>Alipay</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>15</td>
                        <td>INV000035</td>
                        <td>Lucas Hill</td>
                        <td>Ksh. 1800.00</td>
                        <td>Madison Garcia</td>
                        <td>WeChat Pay</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>16</td>
                        <td>INV000036</td>
                        <td>Ella Walker</td>
                        <td>Ksh. 1900.00</td>
                        <td>Aiden Reed</td>
                        <td>Paytm</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>17</td>
                        <td>INV000037</td>
                        <td>Henry Martinez</td>
                        <td>Ksh. 2000.00</td>
                        <td>Sophia Scott</td>
                        <td>CashApp</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>18</td>
                        <td>INV000038</td>
                        <td>Scarlett Morris</td>
                        <td>Ksh. 2100.00</td>
                        <td>Jack Turner</td>
                        <td>Revolut</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>19</td>
                        <td>INV000039</td>
                        <td>Lincoln Wright</td>
                        <td>Ksh. 2200.00</td>
                        <td>Hailey White</td>
                        <td>N26</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>20</td>
                        <td>INV000040</td>
                        <td>Amelia Jackson</td>
                        <td>Ksh. 2300.00</td>
                        <td>Evan Brown</td>
                        <td>TransferGo</td>
                    </tr>
                    <tr>
                        <td class='fw-bold'>21</td>
                        <td>INV000041</td>
                        <td>Christopher Lopez</td>
                        <td>Ksh. 2400.00</td>
                        <td>Abigail Perez</td>
                        <td>Monzo</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style='font-size: 10px'>
                        <th>S/N</th>
                        <th>INVOICE</th>
                        <th>CUSTOMER</th>
                        <th>AMOUNT</th>
                        <th>ATTENDEE</th>
                        <th>METHOD</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</main>

@endsection
