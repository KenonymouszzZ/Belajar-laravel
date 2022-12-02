@extends('layout/main')

@section('title', 'teacher')

@section('content')
    <table class="table table-dark">
        <tbody>
            <tr>
                <td>NIK</td>
                <td>nama</td>
                <td>umur</td>
                <td>kodemapel</td>
                <td>walikelas</td>
            </tr>

            @foreach ($datateacher as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection