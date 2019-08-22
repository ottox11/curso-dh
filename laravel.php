<?php

insert / attach
update / sync
delete / dettach

Genre::create([
  'name' => 'Terror',
  'active' => 1
]);

--------------------------------------------------------------------------

$genre = Genre::find(1);

$genre->movies()->create([
  'title' => 'nueva',
  'length' => 120
]);

--------------------------------------------------------------------------

UPDATE:

$movie = Movie::find(1);

$movie->update([
  'title' => 'nuevo titulo'
]);

--------------------------------------------------------------------------

DELETE:

$movie = Movie::find(1);

$movie->delete();

--------------------------------------------------------------------------

$brands = Brand::find(1);

$brands->products()->update([
  'stock' => 0
]);

--------------------------------------------------------------------------

carts {
  id
  user_id
  total
}

user {
  id
  email
}

products {
  id
  price
}

cart_product {
  id
  cart_id
  product_id
  qty
  unit_price
  subtotal
  created_at
  update_at
}

$cart = Cart::find(1);
$products = Product::find(1);

$cart->attach($product, [
  'qty' => $request-get('qty'),
  'price' => $product->price,
  'subtotal'=> $request->get('qty') * $product->price,
]);

------------------------

$cart = Cart::find(1);
$products = Product::find(1);

$cart->dettach($product);

------------------------

$cart = Cart::find(1);
$products = Product::find(1);

$cart->sync([
  $product->id => [
    'qty' => 2
  ]
  ]);


 ?>
