<x-mail::message>
# Dear {{$package->reciever_name}}

A Package was sent to our company to be delivered to you <br>

The package Tracking code is <b>{{$package->tracking_id}}</b> and can be used to monitor your package <br>

Visit the Site Now To Track Your Package

<x-mail::button :url="''">
Track Your Package
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
