<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>...</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
<p>
<p> <img src="{{asset('images/0925e9a6.jpg')}}"> </p>
<div style="width: 50%; margin-left: 20px">
<form method="post" class="credit-card-form row" action="/card/answer">
    @csrf
    <div class="mb-3 col-sm-6">
        <input class="form-control jp-card-invalid" type="text" name="number" placeholder="Card Number" required="">
    </div>
    <div class="mb-3 col-sm-6">
        <input class="form-control jp-card-invalid" type="text" name="name" placeholder="Full Name" required="">
    </div>
    <div class="mb-3 col-sm-3">
        <input class="form-control jp-card-invalid" type="text" name="expiry" placeholder="MM/YY" required="">
    </div>
    <div class="mb-3 col-sm-3">
        <input class="form-control jp-card-invalid" type="text" name="cvc" placeholder="CVC" required="">
    </div>
    <div class="col-sm-6">
        <button class="btn btn-outline-primary d-block w-100 mt-0" type="submit">Submit</button>
    </div>
</form>
</div>
</p>


</body>
</html>
