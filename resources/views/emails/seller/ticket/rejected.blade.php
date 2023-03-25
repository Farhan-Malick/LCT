<x-mail::message>
# Ticket listing Rejected

You ticket listing no {{ $ticket->id }} for event {{ $ticket->event_name }} has been rejected by the admin.<br>
<b>Reason:</b><br>
{{ $ticket->rejection_reason }}
<br>
{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}
If you need any further information on the listing rejection, please feel free to contact the support 
at support@lastchanceticket.com <br>

Thank you for using {{ config('app.name') }}<br><br>
<img width="100%" height="55px" src="{{asset('assets/images/logo1.png')}}" alt="">
</x-mail::message>
