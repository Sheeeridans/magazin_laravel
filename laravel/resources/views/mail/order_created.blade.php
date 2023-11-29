<h3>Уважаемый(ая) {{ $name }},</h3>
<p>Благодарим за покупку.</p>

<p>Ваш заказ на сумму <b>{{ $fullSum }} {{ $currencySymbol }}</b> cоздан.</p>
<p>Состав заказа представлен ниже в таблице.</p>
<table style="border: 3px solid #696969;">
    <thead style="background: #efefef; padding: 5px 10px; border: 3px solid #696969;">
    <tr >
        <th>Изображение</th>
        <th>Название</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Стоимость</th>
    </tr>
    </thead>
    <tbody style="padding: 10px 15px; border: 3px solid #696969;">
    @foreach($order->skus as $sku)
        <tr>
            <td><img height="56px" src="{{ Storage::url($sku->product->image) }}"></td>
            <td><a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}"> {{ $sku->product->__('name') }}</a></td>
            <td>{{ $sku->countInOrder }}</td>
            <td>{{ $sku->price }} {{ $order->currency->symbol }}</td>
            <td>{{ $sku->price * $sku->countInOrder }} {{ $currencySymbol }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<p>Наш менеджер свяжется с Вами в рабочее время для уточнения деталей по заказу.</p>


