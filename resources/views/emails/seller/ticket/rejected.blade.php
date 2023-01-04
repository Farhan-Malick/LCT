<x-mail::message>
# Tickets listing Rejected

You ticket listing no {{ $ticket->id }} for event {{ $ticket->event_name }} has been rejected by the admins.<br>
<b>Reason:</b><br>
{{ $ticket->rejection_reason }}

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
