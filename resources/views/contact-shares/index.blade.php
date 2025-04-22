@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center white">Contacts shared with me</h1>
        @forelse ($contactsSharedWithUser as $contact)
            <div class="d-flex justify-content-between bg-dark mb-3  flex-grow-1 rounded px-4 py-2">
                <div>
                    <a href="{{ route('contacts.show', $contact->id) }}">
                        <img class="profile-picture" src="{{ Storage::url($contact->profile_picture) }}">
                    </a>
                </div>
                <div class="d-flex align-items-center">

                    <p class="name me-2 mb-0">{{ $contact->name }}</p>
                    <p class="me-2 mb-0 d-none d-md-block">
                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                    </p>
                    <p class="me-2 mb-0 d-none d-md-block">
                        <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a>
                    </p>
                    <p class="me-2 mb-0">Shared by <span class="text-info">{{ user->email }}</span></p>
                    <form action="{{ route('contact-shares.destroy', $user->pivot->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-danger mb-0 p-1 px-2">
                            Unshare
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-md-4 mx-auto">
                <div class="card card-body text-center">
                    <p>No contacts shared with you yet</p>
                </div>
            </div>
        @endforelse

        <p class="space"></p>
        <h1 class="text-center white">Contacts shared by me</h1>
        @forelse ($contactsShareByUser as $contact)
            <div class="d-flex justify-content-between bg-dark mb-3  flex-grow-1 rounded px-4 py-2">
                <div>
                    <a href="{{ route('contacts.show', $contact->id) }}">
                        <img class="profile-picture" src="{{ Storage::url($contact->profile_picture) }}">
                    </a>
                </div>
                <div class="d-flex align-items-center">

                    <p class="name me-2 mb-0">{{ $contact->name }}</p>
                    <p class="me-2 mb-0 d-none d-md-block">
                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                    </p>
                    <p class="me-2 mb-0 d-none d-md-block">
                        <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a>
                    </p>
                    <p class="me-2 mb-0">Shared by <span class="text-info">{{ $contact->user->email }}</span></p>
                </div>
            </div>
        @empty
            <div class="col-md-4 mx-auto">
                <div class="card card-body text-center">
                    <p>You did not shared any contacts yet!</p>
                    <p>Share contacts <a href="{{ route('contact-shares.create') }}">here</a></p>
                </div>
            </div>
        @endforelse
        {{-- <div class="pagination text-muted d-flex justify-content-end mt-auto me-2 mb-2">
            <div class="pagination-info">
                {{ $contactsSharedWithUser->links() }}
            </div>
        </div> --}}
    </div>
@endsection
