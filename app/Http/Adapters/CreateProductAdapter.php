<?php


namespace App\Http\Adapters;


use App\Application\Commands\ProductCommands\CreateProductCommand;
use App\Exceptions\InvalidBodyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CreateProductAdapter
{
    /**
     * @var array|string[]
     */
    private array $rules = [
        'productName' => 'bail|required|regex:/^[\pL\s]+$/u|min:10|max:256',
        'productDescription' =>'bail|required|regex:/^[\pL\s\[0-9]+$/u|min:10',
        'productPrice' => 'bail|required|numeric|regex:/^\d*(\.\d{2})?$/|min:0.01',
        'productStock' => 'bail|required|integer|min:0'
    ];

    /**
     * @var array
     */
    private array $messages = [
        'productName.required' => 'Debe ingresar el nombre del producto.',
        'productName.regex' => 'El nombre del producto debe estar compuesto solo por letras y espacios.',
        'productName.between' => 'El nombre del producto debe tener entre 10 y 256 carácteres',
        'productDescription.required' => 'Debe ingresar la descripción del producto.',
        'productDescription.regex' => 'La descripción del producto debe contener solo números y letras.',
        'productDescription.min' => 'La descripción del producto debe tener al menos 10 carácteres.',
        'productPrice.required' => 'Debe ingresar el precio del producto.',
        'productPrice.numeric' => 'El precio del producto debe ser un número.',
        'productPrice.regex' => 'El precio del producto debe tener solo 2 decimales.',
        'productPrice.min' => 'El precio del producto es inferior a lo permitido.',
        'productStock.required' => 'Debe ingresar el stock del producto',
        'productStock.integer' => 'El stock del producto debe ser un número entero.',
        'productStock.min' => 'El stock mínimo del producto debe ser mayor a 0.'
    ];

    /**
     * @param Request $request
     * @return CreateProductCommand|void
     */
    public function adapt(Request $request){
        $validate = Validator::make($request->all(), $this->rules, $this->messages);

        if($validate->fails()){
            throw new InvalidBodyException($validate->errors()->getMessages());
        }
        else{
            return new CreateProductCommand(
                $request->input('productName'),
                $request->input('productDescription'),
                $request->input('productPrice'),
                $request->input('productStock')
            );
        }
    }
}