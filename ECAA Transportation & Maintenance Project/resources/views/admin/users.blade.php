@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User List To Approve</div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table">
                             <tr>
                                 <th>First Name</th>
                                 <th>Last Name</th>
                                 <th>Phone</th>
                                 <th>Role</th>
                                 <th>Registered at</th>
                                 <th></th>
                             </tr>
                             @forelse ($users as $user )
                                 <tr>
                                     <td>{{ $user->firstname }}</td>
                                     <td>{{ $user->lastname }}</td>
                                     <td>{{ $user->phone }}</td>
                                     <td>{{ $user->role }}</td>
                                     <td>{{ $user->created_at }}</td>
                                     <td>
                                         <a href="{{ route('admin.user.approve',$user->id) }}"
                                            class="btn btn-primary btn-sm">
                                        Approve</a>
                                     </td>
                                 </tr>
                             @empty
                                 <tr>
                                    <td colspan="4">No Users Found.</td>
                                 </tr>
                             @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection