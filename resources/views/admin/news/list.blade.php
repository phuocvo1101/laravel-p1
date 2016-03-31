@extends('admin.master')
@section('controller','News')
@section('action','List')
@section('content')
                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Name</th>
            <th>Date</th>
            <th>Category News</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    <?php $stt = 0; ?>
        @foreach ($data as $item)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td>{{ $stt }}</td>
            <td>{!! $item['name']!!}</td>
            <td>
                {!! \Carbon\Carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans(); !!}
            </td>
            <td>
                <?php $cate_news = DB::table('cate_news')->where('id',$item['cate_news_id'])->first(); ?>
                @if (!empty($cate_news->name))
                    {!! $cate_news->name !!}
                @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.news.getDelete', $item['id']) !!}" onclick= "return xacnhanxoa('Do You want delete this News')"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.news.getEdit', $item['id']) !!}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection