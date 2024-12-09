<?

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $cart = session()->get('cart', []);
        $totalPrice = session()->get('totalPrice', 0);


        $validatedData = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|max:255', 
            'address' => 'required|string', 
            'payment_method' => 'required|string', 
        ]);

        
        $order = Order::create([
            'customer_name' => $validatedData['name'],
            'customer_email' => $validatedData['email'],
            'shipping_address' => $validatedData['address'],
            'billing_address' => $validatedData['address'], 
            'cart_data' => json_encode($cart), 
            'total_price' => $totalPrice, 
            'status' => 'pending', 
            'payment_method' => $validatedData['payment_method'], 
        ]);

      
        session()->forget('cart');
        session()->forget('totalPrice');

        return redirect()->route('order.success')->with('success', 'Rendelés sikeresen leadva!');
    }

    public function success()
    {
        return view('order.success');
    }
}
