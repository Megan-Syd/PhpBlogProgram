@extends('layouts.main')
@section('content')

<div class="container">
    <a href="{{ route('admin') }}" class="text-dark"> <h1 class="m-5">Administration</h1></a>
    <form action="{{ route('admin.search') }}" method="GET" class="d-flex">
        <input type="search" aria-label="Search Users" name="query" placeholder="Search Users" class="form-control rounded">
        <button type="submit" class="rounded"><i class="fas fa-search"></i></button>
    </form>
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Event Notifications</th>
                <th scope="col">Custom Notifications</th>
                <th scope="col">Custom Suggestions</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Modified</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribers as $subscriber)
            <tr>
            <th scope="row">{{ $subscriber->id }}</th>
	      <td>{{ $subscriber->first_name }}</td>
	      <td>{{ $subscriber->last_name }}</td>
	      <td>{{ $subscriber->email }}</td>
	      <td>{{ $subscriber->notif_event }}</td>
          <td>{{ $subscriber->notif_custom }}</td>
	      <td>{{ $subscriber->notif_suggest }}</td>
	      <td>{{ $subscriber->created_at }}</td>
	      <td>{{ $subscriber->updated_at }}</td>
	      <td><button class="btn rounded btn-dark btn-raised btn-sm"><a href="{{ route('edit', $subscriber->id) }}"><i style="color:#fff" class="far fa-edit"></i></a></button></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $subscribers->links()}}
</div>
@endsection