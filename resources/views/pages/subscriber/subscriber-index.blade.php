@extends('layouts.admin.index')

@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>id</th>
                <th>User</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
                <th>Change role</th>
                <th>Remove subscriber</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>id</th>
                <th>User</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
                <th>Change role</th>
                <th>Remove subscriber</th>
            </tr>
            </tfoot>
            <tbody>
            <?php $id = 0 ?>
            @foreach($authorizations as $authorization)
                <tr>
                    <td>{{$id+=1}}</td>
                    <td>{{ $authorization->name }}</td>
                    <td>{{ $authorization->email }}</td>
                    <td>{{ $authorization->phone }}</td>
                    <td>{{ $authorization->address }}</td>
                    <td>{{ $authorization->admin }}</td>
                    <td>
                        <form action="{{route('subscriber.update',$authorization->id)}}" method="post">
                            @method('put')
                            {{csrf_field()}}
                            <input type="submit" value="Make as admin" class="btn btn-success"
                            @if ($authorization->id === auth()->user()->id)
                                disabled
                            @endif>
                        </form>
                    </td>

                    <td>
                        <form action="{{route('subscriber.destroy',$authorization->id)}}" method="post">
                            @method('delete')
                            {{csrf_field()}}
                            <input type="submit" value="Remove subscriber" class="btn btn-danger"
                            @if ($authorization->id === auth()->user()->id)
                                disabled
                            @endif>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
