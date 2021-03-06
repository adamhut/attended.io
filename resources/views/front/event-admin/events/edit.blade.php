@extends('front.layouts.main')

@section('content')
    {{ Menu::eventAdmin($event) }}

    @can('approve', $event)
        <action-button :action="route('event-admin.events.approve', $event)">
            <button>Approve event</button>
        </action-button>
    @endcan

    @can('publish', $event)
        <action-button :action="route('event-admin.events.publish', $event)">
            <button>Publish event</button>
        </action-button>
    @endcan

    <h1>{{ $event->name }}</h1>

    <form action="{{ route('event-admin.events.update', $event) }}" method="POST">
        @include('front.event-admin.events.partials.form')
    </form>
@endsection