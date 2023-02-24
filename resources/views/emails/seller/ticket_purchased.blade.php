<x-mail::message>
    
Congratulations, You sold your tickets for the event <b>{{ $data->event_name }}</b> on {{ date('Y-M-d') }}.<br><br>
<b>Sales Information</b> <br>
Order Number: {{$data->id}}  <br>
Ticket Type: {{$data->ticket_type}} <br>
Section : {{ $data->type_sec }}, Category : {{ $data->type_cat }}, Row : {{ $data->type_row }} <br><br>
Event: {{ $data->event_name }} <br>
Venue: {{ $data->venue_name }} <br>
Date: {{ $data->event_date }} <br><br>
{{-- <b>Must Upload The E-Ticket by Date: Saturday, January 21, 2023 | 19:59 UTC <span style="font-color:red">(5days before 
    the event is the deadline to Upload the E-Tickets if the tickets are not pre uploaded)</span></b><br><br> --}}
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

{{-- <x-mail::message>
# Ticket Purchased
# Congratulations

Your ticket for <b>{{ $data->event_name }}</b> event, being held on <b>{{ $data->event_date }}</b> at <b>{{ $data->start_time }}</b> has been purchased.


Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
