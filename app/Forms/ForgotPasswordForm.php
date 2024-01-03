<?php

namespace App\Forms;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Components\FormBuilder;
use MoonShine\Fields\Email;
use MoonShine\Fields\Password;
use MoonShine\Fields\PasswordRepeat;
use MoonShine\Fields\Text;

class ForgotPasswordForm
{

    public static function make(): FormBuilder
    {
        return FormBuilder::make(
            route('password.request'),
            'POST'
        )->fields([
            Email::make('Email')->required(),
        ])
            ->buttons([
                ActionButton::make('Back', url()->previous())->secondary(),
            ])
            ->submit('Restore password',['class' => 'btn btn-primary w-full']);
    }
}
