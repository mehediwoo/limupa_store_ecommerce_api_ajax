<ul class="minicart-product-list" id="cart_iteam_list">
    @if (!empty($cart_iteam) && $cart_iteam->count() > 0)
    @foreach ($cart_iteam as $row)
    <li>
        <a href="single-product.html" class="minicart-product-image">
            <img src="{{ asset('storage/'.$row->thumbnail) }}" alt="cart products">
        </a>
        <div class="minicart-product-details">
            <h6><a href="single-product.html">{{ Str::substr($row->p_title, 0, 15) }}</a></h6>
            <span>{{ $footer->default_currency }} {{ $row->p_discount_price }} x 1</span>
        </div>
        <button class="close">
            <i class="fa fa-close"></i>
        </button>
    </li>
    @endforeach
    @endif

</ul>
<p class="minicart-total">SUBTOTAL: <span>£160</span></p>
<div class="minicart-button">
    <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
        <span>View Full Cart</span>
    </a>
    <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
        <span>Checkout</span>
    </a>
</div>
