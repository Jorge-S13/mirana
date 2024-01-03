<?php

namespace App\Forms;

use http\Env\Request;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Components\FormBuilder;
use MoonShine\Fields\Email;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Password;
use MoonShine\Fields\PasswordRepeat;
use MoonShine\Fields\Text;

class ResetPasswordForm
{

    public static function make(): FormBuilder
    {
        return FormBuilder::make(
            route('password.update'),
            'POST'
        )->fields([
            Email::make('Email')->required(),
            Password::make('Password')->required(),
            PasswordRepeat::make('Password confirmation')->required(),
            Hidden::make('token')->setValue(request()->token)
        ])
            ->buttons([
                ActionButton::make('Home', route('home'))->secondary(),
                ActionButton::make('Log in', route('login'))->secondary(),
                ActionButton::make('Registration', route('register'))->secondary(),
            ])
            ->submit('Restore password',['class' => 'btn btn-primary w-full']);
    }
}
