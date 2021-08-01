<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CheckoutRequest;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(CheckoutRequest $request) 
    {
        $data = $request->except('transaction_details'); //membuat suatu variabel data 
        $data['uuid'] = 'TRX' . mt_rand(10000,99999) . mt_rand(100,999); //ditambahkan uuid sebagai identifier transaksi dan fungsi mt_rand digunakan untuk menggenerate integer random

        $transaction = Transaction::create($data); //variabel data akan disimpan pada tabel Transaction dengan variabel transaction

        foreach ($request->transaction_details as $product)
        {
        //membuat array untuk memasukkan transaction detail
            $details[] = new TransactionDetail([
                'transactions_id' => $transaction->id,
                'products_id' => $product,
            ]);
            //untuk melakukan pengurangan pada sisi product
            Product::find($product)-> decrement('quantity');
        }
        //untuk menyimpan array yg direfrensikan
        $transaction->details()->saveMany($details);
        //Jika sudah maka akan mengembalikan data transaction
        return ResponseFormatter::success($transaction);
    }
}
