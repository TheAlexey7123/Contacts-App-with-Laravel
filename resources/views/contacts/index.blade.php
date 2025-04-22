@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse ($contacts as $contact)
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

                    <div class="d-flex justify-content-center">
                        <a class="d-flex align-items-center justify-content-center btn btn-secondary ms-2 mb-0 me-2 pe-0 ps-2 p-3 px-1 py-1"
                            href="{{ route('contacts.edit', $contact->id) }}">
                            <x-icon icon="pencil" class="me-2"></x-icon>
                        </a>
                    </div>

                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class=" d-flex align-items-center justify-content-center btn btn-danger ps-2 mb-0 pe-0 p-1 px-1">
                            <x-icon icon="trash" />
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-md-4 mx-auto">
                <div class="card card-body text-center">
                    <p>No contacts saved yet</p>
                    <a href="{{ route('contacts.create') }}">Add One!</a>
                </div>
            </div>
        @endforelse
        <div class="pagination text-muted d-flex justify-content-end mt-auto me-2 mb-2">
            <div class="pagination-info">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
