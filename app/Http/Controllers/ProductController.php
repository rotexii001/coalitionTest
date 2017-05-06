<?php
namespace App\Http\Controllers;

use App\products;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use DB;
use File;

use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function postNewProduct(Request $request)
    {
        $this->validate($request, [
				'param.0.name'=>'required',
                'param.1.name'=>'required',
                'param.2.name'=>'required'
			]);

        $product = new products();

        $product->product_name = $request['param.0.value'];
        $product->quantity = $request['param.1.value'];
        $product->price = $request['param.2.value'];

        if($product->save())
        {
$data = "\n\n<product>
    <productName>".ucwords($request['param.0.value'])."</productName>
    <productQuantity>".ucwords($request['param.1.value'])."</productQuantity>
    <productPrice>".ucwords($request['param.2.value'])."</productPrice>
</product>";

            //appending to xml file
            File::append(public_path('data.xml'), $data);

            $dataTable = '<tr>
                            <td>'.ucwords($request['param.0.value']).'</td>
                            <td>'.ucwords($request['param.1.value']).'</td>
                            <td>'.ucwords($request['param.2.value']).'</td>
                          </tr>';

            return response()->json(['status'=>1,"message"=>$dataTable]);
        }
        else{

            return response()->json(['status'=>0,"message"=>"Process Not Successful"]);
        }
    }
}

?>