<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        {
            $products = Product::query()
                ->where('active', '=', 1)
                ->wheredate('published_at', '<', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(8);


            return view('shop', compact('products'));
        }
    }



    public function productCategory(Category $category): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|Factory|Application
    {
        $products = Product::query()
            ->join('category_product', 'products.id', '=', 'category_product.product_id')
            ->where('category_product.category_id', '=', $category->id)
            ->where('active', '=', true)
            ->whereDate('published_at', '<', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('shop', compact('products'));
    }

    public function show(Product $product): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|Factory|Application
    {
        if (!$product->active || $product->published_at > Carbon::now()) {
            throw new NotFoundHttpException();
        }

        return view('product.product-inner', compact('product',));
    }

//    public function checkout()
//    {
////        $stripe = new \Stripe\StripeClient(.env('STRIPE_SECRET_KEY'));
////
////
////        $products = Product::query();
////        $lineItems = [];
////        $totalPrice = 0;
////        foreach ($products as $product) {
////            $totalPrice += $product->price;
////        }
////
////
////
////        $session = $stripe->checkout->sessions->create([
////            'line_items' => [[
////                'price_data' => [
////                    'currency' => 'usd',
////                    'product_data' => [
////                        'name' => $product->product_name,
////                        'images' => [$product->image],
////                    ],
////                    'unit_amount' => $product->price * 100,
////                ],
////                'quantity' => 1,
////            ]],
////            'mode' => 'payment',
////            'success_url' => route('checkout.success', [], true),
////            'cancel_url' => route('checkout.cancel', [], true),
////        ]);
////
////        $order = new Order();
////        $order->status = 'unpaid';
////        $order->total_price = $totalPrice;
////        $order->session_id = $session->id;
////        $order->save();
////
////        return redirect($session->url);
//        return view('under-development-modal')->with('showModal', true);
//    }

    public function success()
    {

    }

    public function cancel()
    {

    }
}
