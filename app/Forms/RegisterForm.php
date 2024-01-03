<?php

namespace App\Forms;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Components\FormBuilder;
use MoonShine\Fields\Email;
use MoonShine\Fields\Password;
use MoonShine\Fields\PasswordRepeat;
use MoonShine\Fields\Text;

class RegisterForm
{

    public static function make(): FormBuilder
    {
        return FormBuilder::make(
            route('register'),
        )->fields([
            Text::make('Name')->required(),
            Email::make('Email')->required(),
            Password::make('Password')->required(),
            PasswordRepeat::make('Password confirmation')->required()
        ])
            ->buttons([
                ActionButton::make('Sign-in', route('login'))->secondary(),
                ActionButton::make('Forgot password ?', route('password.request'))->secondary(),
            ])
            ->submit('Sign-up',['class' => 'btn btn-primary w-full']);
    }
}
