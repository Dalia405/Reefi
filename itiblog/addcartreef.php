public function addcart(Request $request, $id)
  {


    if (Auth::id()) {
      // $input=$request->all();
      //  dd( $input);
      //هملى جدول فيها بيانت user and product بتاع كارت
      

      $cart = session()->get('cart');
      if (!$cart) {
        $user = auth()->user();
      $reefproduct = Reef::find($id); //شايل بيانات row كله
      $cart = new Cart;

        $cart->name = $user->name;
        $cart->product_title = $reefproduct->title;
        $cart->description = $reefproduct->description;
        $cart->image = $reefproduct->image;
        $cart->quantity = 1;
        // dd($request->quantity);
        $cart->price = $reefproduct->price;
        // $cart = Session::get('cart');
        //  dd(Session::get('cart'));
        //  Session::put('cart', $cart);

        session()->put('cart', $cart);
        dd($cart);
        $cart->save();
        dd($cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
      //  return redirect("/reef")->with("message", "product added successfully");
        // return view("reef.cartadd")->with("message","product added successfully");

      }

      // if cart not empty then check if this product exist then increment quantity
      if (isset($cart[$id]))
      {
        dd("$cart[$id]");
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        return  redirect("/")->with("message", "product added successfully");
      }
    } 
    
    else {
      return redirect('login');
    }
  }


  public function showcart()
  {
    $user = auth()->user();
    $count = cart::where("name", $user->name)->count();
    $carts = cart::where('name', 'like', '%' . $user->name . '%')->get();

    //$cart=cart::where("name",$user->name);
    //dd($carts);

    return view("reef.showcart", compact('count', 'carts'));
  }


  function delete($id)
  {
    $cart = new Cart;
    $cartdel = $cart->findorfail($id);
    $cartdel->delete();
    return redirect("/showcart")->with("message", "cart delet successfully");
  }



  function  confirmorder(Request $request)
  {
    //
    // $input= $request->all();
    // dd($input);
    $user = auth()->user();
    $name = $user->name;
    $phone = $user->phone;
    $address = $user->address;

    $reef = new Reef;


    $order = new Order;
    foreach ($request->except('token') as $key => $value) {

      $order->name = $name;
      $order->phone = $phone;
      $order->address = $address;
      /*
        $order->product_title=$reef->product_title;
        $order->image= $reef->image;
        $order->quantity=$reef->quantity;
        $order->price=$reef->price;
        $order->status="Not Deliverd";
*/
      $order->product_title = $request->producttitle[$key];
      // dd($producttitle[$key]);//m
      $order->image = $request->image[$key];
      //dd($image[$key]);
      $order->quantity = $request->quantity[$key];
      // dd($producttitle[$key]);
      $order->price = $request->price[$key];
      // dd($price[$key]);
      $order->status = "Not Deliverd";

      $order->save();
      // dd( $order);

    }


    //عايزة امسح صف ده اللي رقم تليفونه او الايميل ده
    // DB::table('carts')->where('name', 'like', '%' . $name. '%')->delete();

    return redirect("/showcart")->with("message", "product ordered successfully");
  }



  
  public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
}
