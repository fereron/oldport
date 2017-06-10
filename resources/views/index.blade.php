@extends('layouts.master')

@section('title', 'Главная')

@section('content')
    <div class="block">
        <div class="block_header">
            <h2>Основная информация</h2>
        </div>

        <div class="block_content">
            <div class="avatar">
                <img src="/images/no-user.png" alt="">
            </div>
            <div class="description">
                <p><strong>Меня зовут:</strong> Иванов Андрей Степанович</p>
                <p><strong>Мой возраст:</strong> 25 лет</p>
                <p><strong>Мой город:</strong> Санкт Петербург, Россия</p>
                <p><strong>Моя специализация:</strong> FRONTEND разработчик</p>
                <p><strong>Ключевые навыки:</strong> HTML5 CSS3</p>
            </div>
        </div>
    </div>
@endsection