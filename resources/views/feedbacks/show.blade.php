@extends('layouts.main')

@section('content')
    <a href="{{route('feedbacks.index')}}" class="btn btn-secondary pt-2 mt-2 mb-2">На главную</a>
    <h3>Список пользователей</h3>
    <div class="row">
        <div class=" col-10 d-flex">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Имя</th>
                    <th scope="col">email</th>
                    <th scope="col">Номер телефона</th>
                </tr>
                </thead>
                <tbody>
                @isset($feedbacks)
                    @foreach($feedbacks as $feedback)
                        <tr>
                            <td>{{$feedback->name }}</td>
                            <td>{{$feedback->email}}</td>
                            <td>{{$feedback->phone_number}}</td>
                        </tr>
                    @endforeach
                @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection
