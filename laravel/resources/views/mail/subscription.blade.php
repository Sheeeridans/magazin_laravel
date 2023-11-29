<p>Уважаемый клиент, товар {{ $sku->__('name') }} появился в наличии.</p>

<p><a href="{{ route('product', [$sku->category->code, $sku->code]) }}">Узнать подробности...</a></p>
