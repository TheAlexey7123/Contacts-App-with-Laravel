@extends('layouts.app')

@section('content')
    <div class="container pt-4 p-3">
        <div class="row">

            @forelse ($contacts as $contact)
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('contacts.show', $contact->id) }}">
                                    <img class="profile-picture" src="{{ Storage::url($contact->profile_picture) }}">
                                </a>
                            </div>

                            <a class="text-decoration-none text-white" href="{{ route('contacts.show', $contact->id) }}">
                                <h3 class="card-title text-capitalize">{{ $contact->name }}</h3>
                            </a>
                            <p class="m-2">{{ $contact->phone_number }}</p>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-secondary mb-2">Edit
                                Contact</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mb-2">
                                    Delete Contact
                                </button>
                            </form>
                        </div>
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
        </div>
    </div>
@endsection
