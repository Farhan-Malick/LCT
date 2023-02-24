<x-mail::message>
    {{-- #  [LCT] Congratulations!!! You have successfully purchased the tickets for the Event <b>{{ $data->event_name }}</b> --}}
{{-- # Ticket Purchased --}}

Hello {{auth()->user()->last_name}},<br>
Congratulations, You have successfully purchased tickets for the event <b>{{ $data->event_name }}</b> on {{ date('Y-M-d') }}.<br><br>
<b>Order Information</b><br>
Order Number: {{$data->id}}  <br>
Ticket Type: {{$data->ticket_type}} <br>
Section : {{ $data->type_sec }}, Category : {{ $data->type_cat }}, Row : {{ $data->type_row }} <br>
Event: {{ $data->event_name }} <br>
Venue: {{ $data->venue_name }} <br>
Date: {{ $data->event_date }} <br><br>
<b>You will shortly receive an email from us about delivery of the tickets.</b><br><br>
<b>Price Information: </b><br>
Number of Tickets: {{$purchase->quantity}}<br>
Price per Ticket: USD {{$data->price}} <br>
Total Price : USD {{$purchase->price}}<br> <br>
If you need any further information on your order, please feel free to contact the support at
support@lastchanceticket.com <br><br><br>
Thank you for using {{ config('app.name') }}

{{-- You have successfully purchased the ticket for <b>{{ $data->event_name }}</b> event, being held on <b>{{ $data->event_date }}</b> at <b>{{ $data->start_time }}</b>. You will recieve your tickets soon the admin approve. --}}

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}
</x-mail::message>
