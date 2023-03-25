<x-mail::message>

Hello {{$data->first_name}},<br>
Congratulations, You sold your tickets for the event <b>{{ $data->event_name }}</b> on {{ date('Y-M-d') }}.<br><br>
<b>Sales Information</b> <br>
Order Number: {{$data->id}}  <br>
Ticket Type: {{$data->ticket_type}} <br>
Section : {{ $data->type_sec }}, Category : {{ $data->type_cat }}, Row : {{ $data->type_row }} <br><br>
Event: {{ $data->event_name }} <br>
Venue: {{ $data->venue_name }} <br>
Date: {{ $data->event_date }} <br>

<b>{{$data->msg}}</b><br>
<b>{{$data->msg3}}</b><br>

<b>Price Information: </b><br>
Number of Tickets: {{$purchase->quantity}}<br>
Price per Ticket: USD {{$data->price}} <br>
Total Price : USD {{$purchase->price}}<br> <br>
Service Charges : USD {{$purchase->webCharge}} <br>
You will receive: USD {{$purchase->grand_total}} <br>

If you need any further information on your order, please feel free to contact the support at
support@lastchanceticket.com <br><br><br>
Thank you for using {{ config('app.name') }}<br><br>
<img width="100%" height="55px" src="{{asset('assets/images/logo1.png')}}" alt="">

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}
</x-mail::message>

