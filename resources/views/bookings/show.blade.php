@extends('layouts.app')

@section('content')
<dl>
    @foreach ($booking->getAttributes() as $name => $value)
        <dt>{{ $name }}</dt>
        <dd>{{ $booking->$name }}</dd>
        <!-- <dd>{{ $value }}</dd> same as $booking->$name -->
    @endforeach
</dl>
@foreach ($booking->users as $user)
    <p>{{ $user->name }}</p>
@endforeach
@endsection