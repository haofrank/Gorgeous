@component('mail::message')
# Hi {{$user->name}},

@component('mail::button', ['url' => route('email.verify',['token' => $user->confirmation_token])])
点击验证邮件
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
