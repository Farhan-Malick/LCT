<x-mail::message>
    #  [LCT] Congratulations!!! You have successfully purchased the tickets for the Event <b>{{ $data->event_name }}</b>
{{-- # Ticket Purchased --}}

Hello <LastName>,<br>
Congratulations, You have successfully purchased tickets for the event <Event name>. <br><br>
<b>Order Information</b><br>
Order Number: <ordernumber>  <br>
Ticket Type: <TicketType> <br>
Section : <Category>, <Row> : NIL , 2 Tickets <br>
Event: {{ $data->event_name }} <br>
Venue: {{ $data->venue_name }} <br>
Date: {{ $data->event_date }} <br><br>
<b>You will shortly receive an email from us about delivery of the tickets.</b> <br> <br>
Price Information: <br>
Number of Tickets: 2 <br>
Price per Ticket: USD2,400.00 <br>
Total Price : USD4,800.00 <br> <br>
If you need any further information on your order, please feel free to contact the support at 
support@lastchanceticket.com <br><br><br>
Thank you for using Last Chance Ticket

{{-- You have successfully purchased the ticket for <b>{{ $data->event_name }}</b> event, being held on <b>{{ $data->event_date }}</b> at <b>{{ $data->start_time }}</b>. You will recieve your tickets soon the admin approve. --}}

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

{{ config('app.name') }}
</x-mail::message>
