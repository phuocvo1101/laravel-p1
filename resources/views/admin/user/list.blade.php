@extends('admin.master')
@section('controller','User')
@section('action','List')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Username</th>
            <th>Level</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    <?php $stt = 0 ?>
        @foreach ($data as $item)
        <?php $stt++ ?>
        <tr class="odd gradeX" align="center">
            <td>{{$stt}}</td>
            <td>{{$item['username']}}</td>
            <td>
                @if ($item['level']==1)
                    Admin
                @else
                    Member
                @endif
            </td>
            <td>{{$item['email']}}</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có muốn xóa không')" href="{!! URL::route('admin.user.getDelete',$item['id'])!!}"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.user.getEdit',$item['id'])!!}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
              