<html>

<body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
<table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
    <thead>
    <tr>
        <th style="text-align:left;"><img style="max-width: 150px;" src="{{asset('img/logo.png')}}" alt="Ogani"></th>
        <th style="text-align:right;font-weight:400;">{{$now}}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="height:35px;"></td>
    </tr>
    <tr>
        <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Order Id: {{$carts->order_no}}</span></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Order status</span><b style="color:red;font-weight:normal;margin:0">{{$carts->status}}</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> {{$carts->transaction_id}}</p>
            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> Tk. {{$total}}</p>
        </td>
    </tr>
    <tr>
        <td style="height:35px;"></td>
    </tr>
    <tr>
        <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Name</span> {{$info->fname}} {{$info->lname}}</p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Email</span> {{$info->email}}</p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Phone</span> {{$info->phone}}</p>
        </td>
        <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Address</span> {{$info->shipaddress}}, {{$info->city}}</p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Country</span>{{$info->country}}</p>

        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Items</td>
    </tr>
    <tr>
        <td colspan="2" style="padding:15px;">
            @foreach($cata as $catas)
            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;"><span style="display:block;font-size:13px;font-weight:normal;">{{$catas->product_name}}</span>Quantity: {{$catas->quantity}} <b>Price: {{$catas->price}}</b></p>
            @endforeach
        </td>
    </tr>
    </tbody>
    <tfooter>
        <tr>
            <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                <strong style="display:block;margin:0 0 10px 0;">Regards</strong> Ashar Alo Shop<br> Doripara, Jamalpur Sadar, Jamalpur<br><br>
                <b>Phone:</b> +88 01706821156<br>
                <b>Email:</b> mr.tubraji@gmail.com
            </td>
        </tr>
    </tfooter>
</table>
</body>

</html>
