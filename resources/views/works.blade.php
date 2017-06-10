@extends('layouts.master')

@section('title', 'Мои работы')

@section('content')

    <div class="block">
        <div class="block_header">
            <h2>Мои работы</h2>
        </div>

        <div class="block_content">

            @foreach($works as $work)
                <div class="work">
                    <div class="image">
                        <a href="{{ $work->url }}">
                            <img src="/images/Screenshot_13.png" alt="">
                            <div class="text">
                                {{ $work->url }}
                            </div>
                        </a>
                    </div>
                    <em>{{ $work->url }}</em>
                    <p>{{ $work->description }}</p>
                </div>
            @endforeach

            <div class="work" style="margin-top: -100px">
                {{--<a href=""></a>--}}
                <div class="add_project">
                    {{--<div class="image">--}}
                        <img src="{{ asset('/images/add-project.png') }}" alt="" style="width: 10px; height: 10px">
                        <span>Добавить проект</span>

                    {{--</div>--}}
                </div>
            </div>

        </div>


        <form action="{{ route('addwork') }} " method="post">

            <label for="url">URL сайта</label>
            <input type="text" name="url"> <br>
            @if ($errors->has('url'))
                <div class="error">
                    <strong>{{ $errors->first('url') }}</strong>
                </div>
            @endif

            <label for="url">Описание сайта</label>
            <input type="text" name="description"> <br>
            @if ($errors->has('description'))
                <div class="error">
                    <strong>{{ $errors->first('description') }}</strong>
                </div>
            @endif

            <input type="submit" value="Добавить проект">


        </form>


    </div>

@endsection