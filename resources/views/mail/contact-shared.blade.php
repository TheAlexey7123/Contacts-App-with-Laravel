<x-mail::message>
    # New contact was shared with you
    User <span class="text-info">{{ $fromUser }} shared contact {{ $sharedContact }}</span> with you.

    <x-mail::button :url="[url => route('contact-shares.index')]">
        See Here!
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
