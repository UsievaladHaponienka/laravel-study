<!-- This file was generated using command `php artisan make:mail NewUserWelcomeMail -m emails.welcome-email` -->
@component('mail::message')
# Welcome to LaravelStudyGram!

This is a community of fellow developers, and we love that you joined us.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
