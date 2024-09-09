<x-mail::message>
# New Message from Admin

**Email:** {{ $data['email'] }}  

**Message:**  
{{ $data['message'] }}
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
s
