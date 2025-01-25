<html>


<head>

<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>

</head>


<body>

<a href="{{route('processpaypal')}}">Pay($100)</a>
</body>
</html>