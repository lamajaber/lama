@component('mail::message')
# Introduction

Order Details.

@component('mail::table')
| Product       | Price         | Quantity  | Total  |
| ------------- |:-------------:| ---------:| ------:|
<?php $total = 0 ?>
@foreach($order->orderItems as $item)
<?php $total+=$item->total_price ?>
| {{ $item->product['title']??''}}| {{ $item->price??''}} | {{ $item->quantity??'' }} | {{ $item->total_price??'' }} |
@endforeach
@endcomponent


@component('mail::button', ['url' => ''])
Open your Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
