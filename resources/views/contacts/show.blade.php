@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Information</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('contacts.show', $contact->id) }}">
                                <img class="big-picture mb-4" src="{{ Storage::url($contact->profile_picture) }}">
                            </a>
                        </div>
                        <p><b>Name: </b>{{ $contact->name }}</p>
                        <p><b>Phone Number:</b> <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a>
                        </p>
                        <p><b>Email: </b><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                        <p><b>Age: </b>{{ $contact->age }}</p>
                        <p><b>Created at: </b>{{ $contact->created_at }}</p>
                        <p>
                            <>Last updated: </ b>{{ $contact->updated_at }}
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-secondary mb-2 me-2">Edit
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
            </div>
        </div>
    </div>
    </div>
@endsection
