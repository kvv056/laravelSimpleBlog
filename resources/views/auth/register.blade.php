@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class='edit-profile'>
        <h2 class="heading">Редактировать профиль</h2>
        <form class='form' id='form' method='POST' enctype='multipart/form-data'>
          <ul class="form__list">
            <li class="form__item">
              <label class='form__label' for="nickname">Никнейм:</label>
              <input class='form__input' id='nickname' type="text">
            </li>
            <li class="form__item">
              <label class='form__label' for="name">Имя:</label>
              <input class='form__input' id='name' type="text">
            </li>
            <li class="form__item">
              <label class='form__label' for="surname">Фамилия:</label>
              <input class='form__input' id='surname' type="text">
            </li>
            <li class="form__item">
              <label class='form__inline-label' for="avatar">Аватар:</label>
              <input class='form__inline-input' id='avatar' type="file" value='image/jpeg,image/png'>
            </li>
            <li class="form__item">
              <label class='form__label' for="phone">Телефон:</label>
              <input class='form__input' id='phone' type="text">
            </li>
            <li class="form__item">
              <div class="form__title">Пол:</div>
              <label class='form__inline-label' for="male">Мужской</label>
              <input class='form__inline-input' name='sex' id='male' type="radio">
              <label class='form__inline-label' for="female">Женский</label>
              <input class='form__inline-input' name='sex' id='female' type="radio">
            </li>
            <li class="form__item">
              <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
              <input class='form__inline-input' id='showPhone' type="checkbox">
            </li>
            <li class="form__item">
              <button class='form__button' type="submit">Отправить</button>
            </li>
          </ul>
        </form>
      </div>
<!--				
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>-->
            </div>
        </div>
    </div>
</div>
@endsection
