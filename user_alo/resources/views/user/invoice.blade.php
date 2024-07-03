<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Invoice || #{{$invoice}} || {{$info->fname}} {{$info->lname}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="#" type="image/x-icon" >

<script async src="https://www.googletagmanager.com/gtag/js?id=G-0Y5TLG7WD0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-0Y5TLG7WD0');
        </script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>

<!-- Invoice 3 start -->
<div class="invoice-3 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner">
                    <div class="invoice-info" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-name">
                                        <!-- logo started -->
                                        <div class="logo">
                                            <img src="{{asset('img/logo.png')}}" alt="logo">
                                        </div>
                                        <!-- logo ended -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice">
                                        <h1 class="text-end inv-header-1 mb-0">Order No: #{{$invoice}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6 mb-30">
                                    <div class="invoice-number">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        <p class="invo-addr-1 mb-0">
                                            Ashar Alo Shop <br/>
                                            mr.tubraji@gmail.com <br/>
                                            Doripara, Jamalpur Sadar, Jamalpur, Bangladesh <br/>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-30">
                                    <div class="invoice-number text-end">
                                        <h4 class="inv-title-1">Bill To</h4>
                                        <p class="invo-addr-1 mb-0">
                                            {{$info->fname}} {{$info->lname}} <br/>
                                           <strong> {{$cat->phone}}  </strong> <br />
                                            {{$info->email}} <br/>
                                            {{$cat->shipping_address}}, {{$cat->city}} <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-30">
                                    <h4 class="inv-title-1">Payment Method</h4>
                                    <p class="inv-from-1 mb-0">{{$cat->payment}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="order-summary">
                                <h4>Order summary</h4>
                                <div class="table-outer">
                                    <table class="default-table invoice-table">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($carts as $cat)
                                            <tr>
                                                <td>{{$cat->product_name}}</td>
                                                <td>{{$cat->quantity}} </td>
                                                <td>Tk. {{$cat->price}}</td>
                                            </tr>
                                        @endforeach

                                        @php
                                            $totalDue = 0; // Initialize total due variable
                                        @endphp

                                        @foreach($carts as $cat)
                                            @php
                                                // Calculate the total due by adding the price of each item
                                                $totalDue += $cat->price * $cat->quantity;
                                            @endphp
                                        @endforeach

                                        <!-- Delivery charge row -->
                                        @php
                                            if ($cat->city == 'Dhaka')
                                                $deliveryCharge = 60;
                                            elseif ($cat->city == 'Savar, Dhaka' || $cat->city == 'Keraniganj, Dhaka' || $cat->city == 'Gazipur'){
                                                $deliveryCharge = 100;
                                            }
                                            else
                                                $deliveryCharge = 120;
                                            $totalDue += $deliveryCharge; // Add delivery charge to the total due
                                        @endphp
                                        <tr>
                                            <td><strong>Delivery Charge</strong></td>
                                            <td></td>
                                            <td>Tk. {{ number_format($deliveryCharge, 2) }}</td>
                                        </tr>

                                        <!-- Total due row -->
                                        <tr>
                                            <td><strong>Total Due</strong></td>
                                            <td></td>
                                            <td><strong>Tk. {{ number_format($totalDue, 2) }}</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="important-note mb-30">
                                        <h3 class="inv-title-1">Important Note</h3>
                                        <ul class="important-notes-list-1">
                                            <li>Once order done, money can't refund</li>
                                            <li>Delivery might delay due to some external dependency</li>
                                            <li>This is computer generated invoice and physical signature does not require.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" href="{{route('welcome',['id'=>$id->id])}}" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-home"></i> Back To Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 3 end -->

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jspdf.min.js')}}"></script>
<script src="{{asset('assets/js/html2canvas.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>
