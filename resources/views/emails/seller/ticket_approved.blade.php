<x-mail::message>
# Ticket Listing Approved

You ticket listing no {{ $ticket->id }} for event {{ $ticket->event_name }} has been approved by admin.<br>

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}<br>
<img width="50%" height="40px" src="{{asset('assets/images/logo1.png')}}" alt="">
</x-mail::message>
