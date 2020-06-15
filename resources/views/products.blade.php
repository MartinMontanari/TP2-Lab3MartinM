<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<div class="row justify-content-center">
    <div class="col-sm-7">
        <div class="form-group">
            <br>
            <form method="GET" action="{{ route('newProductForm') }}">
                <input type="submit" class="btn btn-primary btn-block" value="Agregar producto">
            </form>
        </div>
        <br>
        <br>
        <br>
        @if (isset($products) && !$products->isEmpty())
            <div class="card-body">

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>{{__('Id')}}</th>
                        <th>{{__('Nombre')}}</th>
                        <th>{{__('Descripcion')}}</th>
                        <th>{{__('Precio')}}</th>
                        <th>{{__('Stock')}}</th>
                    </tr>
                    </thead>
                    @endif
                    @foreach($products as $itemProduct)
                        <tbody>
                        <tr>
                            <th scope="row">{{$itemProduct->getId()}}</th>
                            <td>{{$itemProduct->getProductName()}}</td>
                            <td>{{$itemProduct->getProductDescription()}}</td>
                            <td>{{$itemProduct->getProductPrice()}}</td>
                            <td>{{$itemProduct->getProductStock()}}</td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
    </div>


</body>
</html>
