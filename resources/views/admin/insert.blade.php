<html>
<head>
    
<meata charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .form-control{
        display:block;
margin-left:auto;margin-right:auto;
width:35%;
margin-top: 15px;
    }
    </style>
</head>
<body>

@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <form action="{{ url('http://localhost:8000/admin/insert') }}" method="POST">
                @csrf
<div style="display:block;
margin-left:auto;margin-right:auto">
<input type="file" class="form-control"  name="img" placeholder="img">

<input type="text" class="form-control" name="title" placeholder="title">

<button type="submit" class="btn btn-primary"style="display:block;
margin-left:auto;margin-right:auto;margin-top:12px">Insert</button>
</div>
            </form>
</body>
</html>