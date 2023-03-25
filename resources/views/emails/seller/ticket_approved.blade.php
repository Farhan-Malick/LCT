<x-mail::message>
# Ticket Listing Approved

You ticket listing no {{ $ticket->id }} for event {{ $ticket->event_name }} has been approved by admin.<br>

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thank you for using {{ config('app.name') }}<br><br>
<img width="100%" height="55px" src="{{asset('assets/images/logo1.png')}}" alt="">
</x-mail::message>
