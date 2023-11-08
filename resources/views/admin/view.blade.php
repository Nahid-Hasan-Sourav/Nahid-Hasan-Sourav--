@extends('master')

@section('content')
<table class="table">
    <thead>
        <h2 class="text-center text-success fw-bold">{{ session('message') }}</h2>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title </th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $data->title }}</td>
        <td>{{ $data->description }}</td>
        <td>{{ $data->status==1 ? 'completed' : 'uncompleted' }}</td>
        <td>
            <a href="{{ route('task.edit',['id'=>$data->id]) }}" class="btn btn-sm btn-primary">
                edit
            </a>
            <a href="{{ route('task.delete',['id'=>$data->id]) }}" class="btn btn-sm btn-danger">
                delete
            </a>
        </td>
      </tr>
      

        @endforeach
     
    </tbody>
  </table>
@endsection