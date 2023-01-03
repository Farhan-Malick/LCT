<x-mail::message>
# Ticket Purchased
# Congratulations

Your ticket for <b>{{ $data->event_name }}</b> event, being held on <b>{{ $data->event_date }}</b> at <b>{{ $data->start_time }}</b> has been purchased.

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
