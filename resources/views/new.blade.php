<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>New product</title>
</head>
<body>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            <div class="form-group"><br>
                <form action="{{route('createProduct')}}" method="POST">
                    @csrf
                    <label>Nombre del producto: </label>
                <input type="text" class="form-control" name="productName" min="10" max="256" placeholder="Nombre"
                       value="{{old('productName')}}" required><br>
                <label>Descripción del producto:</label>
                <textarea type="text" class="form-control" name="productDescription" cols="30" rows="5" placeholder="Descripción"
                          value="{{old('productDescription')}}"  required></textarea><br>
                <label>Precio del producto:</label>
                <input type="number step=0.01" min="0.1" class="form-control" name="productPrice" placeholder="Precio"
                       value="{{old('productPrice')}}" required><br>
                <label>Stock disponible del producto:</label>
                <input type="number" min="0" class="form-control" name="productStock" placeholder="Stock actual"
                       value="{{old('productStock')}}" required><br>
                <input type="submit" class="btn btn-primary btn-block" value="Guardar datos">
                </form>
            </div>
        </div>
    </div>
</body>
</html>