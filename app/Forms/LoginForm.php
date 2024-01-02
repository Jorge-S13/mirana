<?php

namespace App\Forms;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Components\FormBuilder;
use MoonShine\Fields\Email;
use MoonShine\Fields\Password;

class LoginForm
{

    public static function make(): FormBuilder
    {
        return FormBuilder::make(
            route('login'),
        )->fields([
            Email::make('Email')->required(),
            Password::make('Password')->required()
        ])
            ->buttons([
                ActionButton::make('Home', route('home'))->secondary(),
                ActionButton::make('Registration', route('register'))->secondary(),
                ActionButton::make('Forgot Password', route('home'))->secondary(),
            ])
            ->submit('Log in',['class' => 'btn btn-primary w-full']);
    }
}
