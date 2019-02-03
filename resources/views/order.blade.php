<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Orders</title>
    <style>
.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
}
.responsive-table thead {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
.responsive-table thead th {
  background-color: #1d96b2;
  border: 1px solid #1d96b2;
  font-weight: normal;
  text-align: center;
  color: white;
}
.responsive-table thead th:first-of-type {
  text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
  display: block;
  padding: 0;
  text-align: left;
  white-space: normal;
}
.responsive-table th,
.responsive-table td {
  padding: .5em;
  vertical-align: middle;
}
.responsive-table caption {
  margin-bottom: 1em;
  font-size: 1em;
  font-weight: bold;
  text-align: center;
}
.responsive-table tfoot {
  font-size: .8em;
  font-style: italic;
}
.responsive-table tbody tr {
  margin-bottom: 1em;
  border: 2px solid #1d96b2;
}
.responsive-table tbody tr:last-of-type {
  margin-bottom: 0;
}
.responsive-table tbody th[scope="row"] {
  background-color: #1d96b2;
  color: white;
}
.responsive-table tbody td[data-type=currency] {
  text-align: right;
}
.responsive-table tbody td[data-title]:before {
  content: attr(data-title);
  float: left;
  font-size: .8em;
  color: rgba(94, 93, 82, 0.75);
}
.responsive-table tbody td {
  text-align: right;
  border-bottom: 1px solid #1d96b2;
}


@media (min-width: 52em) {
  .responsive-table {
    font-size: .9em;
  }
  .responsive-table thead {
    position: relative;
    clip: auto;
    height: auto;
    width: auto;
    overflow: auto;
  }
  .responsive-table tr {
    display: table-row;
  }
  .responsive-table th,
  .responsive-table td {
    display: table-cell;
    padding: .5em;
  }

  .responsive-table caption {
    font-size: 1.5em;
  }
  .responsive-table tbody {
    display: table-row-group;
  }
  .responsive-table tbody tr {
    display: table-row;
    border-width: 1px;
  }
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: rgba(94, 93, 82, 0.1);
  }
  .responsive-table tbody th[scope="row"] {
    background-color: transparent;
    color: #5e5d52;
    text-align: left;
  }
  .responsive-table tbody td {
    text-align: center;
  }
  .responsive-table tbody td[data-title]:before {
    content: none;
  }
}
@media (min-width: 62em) {
  .responsive-table {
    font-size: 1em;
  }
  .responsive-table th,
  .responsive-table td {
    padding: .75em .5em;
  }
  .responsive-table tfoot {
    font-size: .9em;
  }
}

@media (min-width: 75em) {
  .responsive-table th,
  .responsive-table td {
    padding: .75em;
  }
}

    </style>
</head>
<body>
    <div class=" ">
    <table class="responsive-table table-hover">
    
        <thead>
            <tr>
                    <tr>
                        <th scope="col" class="th-sm size">Number</th>
                        <th scope="col" class="th-sm size">User Name</th>
                        <th scope="col" class="th-sm size">Currency</th>
                        <th scope="col" class="th-sm size">Quantity</th>
                        <th scope="col" class="th-sm size">Price</th>
                        <th scope="col" class="th-sm size">Total Price</th>
                        <th scope="col" class="th-sm size">Phone Number</th>
                        <th scope="col" class="th-sm size">Account Number</th>
                        <th scope="col" class="th-sm size">Email Address</th>
                        <th scope="col" class="th-sm size">Payment Gateway</th>
                        <th scope="col" class="th-sm size">Transaction Number</th>
                        <th scope="col" class="th-sm size">Status</th>
                        <th scope="col" class="th-sm size">Time</th>
                        <th scope="col" class="th-sm size">Action</th>
                    </tr>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)     
        
        <tr>
              
                <th scope="row">{{$order->id}}</th>
                
                <td class="data-title">{{Auth::user()->username }}</td>
                <td class="data-title">{{$order->curr_name}}</td>
                <td class="data-title">{{$order->amount}}</td>
                <td class="data-title">{{$order->price}}</td>
                <td class="data-title">{{$order->total}}</td>
                <td class="data-title">{{$order->phone_no}}</td>
                <td class="data-title">{{$order->account_no}}</td>
                <td class="data-title">{{$order->email}}</td>
                <td class="data-title">{{$order->bank}}</td>
                <td class="data-title">{{$order->Trx_no}} </td>
                @if ($order->status === 1)
                    <td class="data-title">Complete</td>
                @elseif ($order->status === 0)
                   <td class="data-title">Pending</td>
                @else
                   <td class="data-title">Saved</td>
                @endif
                <td class="data-title">{{$order->created_at}}</td>
                <td class="data-title">
                    <a href="/order_approve/{{$order->id}}"><button>Approve</button></a>
                    <a href="/order_destroy/{{$order->id}}"><button>Cancle</button></a>
                    

                </td class="data-title">
              
        </tr>
        @endforeach  
            
        </tbody>
        </table>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>