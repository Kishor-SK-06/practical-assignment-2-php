<?php
class ShoppingCart {
    public $items = [];
    public $total = 0;

    public function addItem($item, $price, $quantity) {
        $this->items[] = [
            'item' => $item,
            'price' => $price,
            'quantity' => $quantity
        ];
        $this->total += ($price * $quantity);
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}

// Example Usage
$cart = new ShoppingCart();
$cart->addItem("Apple", 50, 3);
$cart->addItem("Banana", 20, 5);
echo "Total Cost: " . $cart->calculateTotal();
?>
