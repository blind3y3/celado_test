@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Пожалуйста, оставьте свой отзыв</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('feedbacks.store')}}" method="post">
                    @csrf
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="укажите ваше имя" value="{{old('name')}}">

                    <label for="email">email:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="укажите ваш email" value="{{old('email')}}">

                    <label for="phone_number">номер телефона</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="укажите ваш номер телефона" value="{{old('phone_number')}}">

                    <br>
                    <button class="btn btn-success" type="submit">Отправить</button>
                    <a href="{{route('feedbacks.show')}}" class="btn btn-secondary">Список отзывов</a>
                </form>
            </div>
        </div>
    </div>
@endsection
