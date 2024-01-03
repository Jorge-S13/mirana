<?php

namespace App\Forms;

use MoonShine\Components\FormBuilder;
use MoonShine\Fields\Email;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Password;
use MoonShine\Fields\PasswordRepeat;

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
            ->submit('Save',['class' => 'btn btn-primary w-full']);
    }
}
