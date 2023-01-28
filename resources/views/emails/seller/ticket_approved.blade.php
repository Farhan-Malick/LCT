<x-mail::message>
# Ticket Listing Approved

You ticket listing no {{ $ticket->id }} for event {{ $ticket->event_name }} has been admin.<br>

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
