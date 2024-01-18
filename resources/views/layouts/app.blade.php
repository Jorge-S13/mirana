<!DOCTYPE html>
<html lang="en">

<head>
    <title>NextGen NFT Marketplace HTML CSS Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <style type="text/css">
        :root,[data-bs-theme=light] {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-gray-100: #f8f9fa;
            --bs-gray-200: #e9ecef;
            --bs-gray-300: #dee2e6;
            --bs-gray-400: #ced4da;
            --bs-gray-500: #adb5bd;
            --bs-gray-600: #6c757d;
            --bs-gray-700: #495057;
            --bs-gray-800: #343a40;
            --bs-gray-900: #212529;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-primary-rgb: 13,110,253;
            --bs-secondary-rgb: 108,117,125;
            --bs-success-rgb: 25,135,84;
            --bs-info-rgb: 13,202,240;
            --bs-warning-rgb: 255,193,7;
            --bs-danger-rgb: 220,53,69;
            --bs-light-rgb: 248,249,250;
            --bs-dark-rgb: 33,37,41;
            --bs-primary-text-emphasis: #052c65;
            --bs-secondary-text-emphasis: #2b2f32;
            --bs-success-text-emphasis: #0a3622;
            --bs-info-text-emphasis: #055160;
            --bs-warning-text-emphasis: #664d03;
            --bs-danger-text-emphasis: #58151c;
            --bs-light-text-emphasis: #495057;
            --bs-dark-text-emphasis: #495057;
            --bs-primary-bg-subtle: #cfe2ff;
            --bs-secondary-bg-subtle: #e2e3e5;
            --bs-success-bg-subtle: #d1e7dd;
            --bs-info-bg-subtle: #cff4fc;
            --bs-warning-bg-subtle: #fff3cd;
            --bs-danger-bg-subtle: #f8d7da;
            --bs-light-bg-subtle: #fcfcfd;
            --bs-dark-bg-subtle: #ced4da;
            --bs-primary-border-subtle: #9ec5fe;
            --bs-secondary-border-subtle: #c4c8cb;
            --bs-success-border-subtle: #a3cfbb;
            --bs-info-border-subtle: #9eeaf9;
            --bs-warning-border-subtle: #ffe69c;
            --bs-danger-border-subtle: #f1aeb5;
            --bs-light-border-subtle: #e9ecef;
            --bs-dark-border-subtle: #adb5bd;
            --bs-white-rgb: 255,255,255;
            --bs-black-rgb: 0,0,0;
            --bs-font-sans-serif: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: var(--bs-font-sans-serif);
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #212529;
            --bs-body-color-rgb: 33,37,41;
            --bs-body-bg: #fff;
            --bs-body-bg-rgb: 255,255,255;
            --bs-emphasis-color: #000;
            --bs-emphasis-color-rgb: 0,0,0;
            --bs-secondary-color: rgba(33, 37, 41, 0.75);
            --bs-secondary-color-rgb: 33,37,41;
            --bs-secondary-bg: #e9ecef;
            --bs-secondary-bg-rgb: 233,236,239;
            --bs-tertiary-color: rgba(33, 37, 41, 0.5);
            --bs-tertiary-color-rgb: 33,37,41;
            --bs-tertiary-bg: #f8f9fa;
            --bs-tertiary-bg-rgb: 248,249,250;
            --bs-heading-color: inherit;
            --bs-link-color: #0d6efd;
            --bs-link-color-rgb: 13,110,253;
            --bs-link-decoration: underline;
            --bs-link-hover-color: #0a58ca;
            --bs-link-hover-color-rgb: 10,88,202;
            --bs-code-color: #d63384;
            --bs-highlight-color: #212529;
            --bs-highlight-bg: #fff3cd;
            --bs-border-width: 1px;
            --bs-border-style: solid;
            --bs-border-color: #dee2e6;
            --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
            --bs-border-radius: 0.375rem;
            --bs-border-radius-sm: 0.25rem;
            --bs-border-radius-lg: 0.5rem;
            --bs-border-radius-xl: 1rem;
            --bs-border-radius-xxl: 2rem;
            --bs-border-radius-2xl: var(--bs-border-radius-xxl);
            --bs-border-radius-pill: 50rem;
            --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --bs-box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
            --bs-focus-ring-width: 0.25rem;
            --bs-focus-ring-opacity: 0.25;
            --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
            --bs-form-valid-color: #198754;
            --bs-form-valid-border-color: #198754;
            --bs-form-invalid-color: #dc3545;
            --bs-form-invalid-border-color: #dc3545
        }
        *,::after,::before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion:no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            border: 0;
            border-top: var(--bs-border-width) solid;
            opacity: .25
        }

        .h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color)
        }
        .h2,h2 {
            font-size: calc(1.325rem + .9vw)
        }
        .h3,h3 {
            font-size: calc(1.3rem + .6vw)
        }
        .h4,h4 {
            font-size: calc(1.275rem + .3vw)
        }
        .h5,h5 {
            font-size: 1.25rem
        }
        p {
            margin-top: 0;
            margin-bottom: 1rem
        }
        ol,ul {
            padding-left: 2rem
        }

        dl,ol,ul {
            margin-top: 0;
            margin-bottom: 1rem
        }
        b,strong {
            font-weight: bolder
        }
        a {
            color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));
            text-decoration: underline
        }
        img,svg {
            vertical-align: middle
        }
        button {
            border-radius: 0
        }
        button,input,optgroup,select,textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,select {
            text-transform: none
        }
        [type=button],[type=reset],[type=submit],button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled) {
            cursor: pointer
        }
        .list-unstyled {
            padding-left: 0;
            list-style: none
        }
        .container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 576px) {
            .container,.container-sm {
                max-width:540px
            }
        }

        @media (min-width: 768px) {
            .container,.container-md,.container-sm {
                max-width:720px
            }
        }

        @media (min-width: 992px) {
            .container,.container-lg,.container-md,.container-sm {
                max-width:960px
            }
        }

        @media (min-width: 1200px) {
            .container,.container-lg,.container-md,.container-sm,.container-xl {
                max-width:1140px
            }
        }

        @media (min-width: 1400px) {
            .container,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl {
                max-width:1320px
            }
        }

        :root {
            --bs-breakpoint-xs: 0;
            --bs-breakpoint-sm: 576px;
            --bs-breakpoint-md: 768px;
            --bs-breakpoint-lg: 992px;
            --bs-breakpoint-xl: 1200px;
            --bs-breakpoint-xxl: 1400px
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x))
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y)
        }
        .btn {
            --bs-btn-padding-x: 0.75rem;
            --bs-btn-padding-y: 0.375rem;
            --bs-btn-font-family: ;
            --bs-btn-font-size: 1rem;
            --bs-btn-font-weight: 400;
            --bs-btn-line-height: 1.5;
            --bs-btn-color: var(--bs-body-color);
            --bs-btn-bg: transparent;
            --bs-btn-border-width: var(--bs-border-width);
            --bs-btn-border-color: transparent;
            --bs-btn-border-radius: var(--bs-border-radius);
            --bs-btn-hover-border-color: transparent;
            --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),0 1px 1px rgba(0, 0, 0, 0.075);
            --bs-btn-disabled-opacity: 0.65;
            --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-family: var(--bs-btn-font-family);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: var(--bs-btn-color);
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
            border-radius: var(--bs-btn-border-radius);
            background-color: var(--bs-btn-bg);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
        }
        .navbar {
            --bs-navbar-padding-x: 0;
            --bs-navbar-padding-y: 0.5rem;
            --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
            --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
            --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
            --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-padding-y: 0.3125rem;
            --bs-navbar-brand-margin-end: 1rem;
            --bs-navbar-brand-font-size: 1.25rem;
            --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-nav-link-padding-x: 0.5rem;
            --bs-navbar-toggler-padding-y: 0.25rem;
            --bs-navbar-toggler-padding-x: 0.75rem;
            --bs-navbar-toggler-font-size: 1.25rem;
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
            --bs-navbar-toggler-border-radius: var(--bs-border-radius);
            --bs-navbar-toggler-focus-width: 0.25rem;
            --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)
        }

        .navbar>.container,.navbar>.container-fluid,.navbar>.container-lg,.navbar>.container-md,.navbar>.container-sm,.navbar>.container-xl,.navbar>.container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between
        }
        .offcanvas.offcanvas-end {
            top: 0;
            right: 0;
            width: var(--bs-offcanvas-width);
            border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            transform: translateX(100%)
        }
        .offcanvas-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x)
        }
        .offcanvas-body {
            flex-grow: 1;
            padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
            overflow-y: auto
        }
        .flex-wrap {
            flex-wrap: wrap!important
        }
        .justify-content-between {
            justify-content: space-between!important
        }
        .align-items-center {
            align-items: center!important
        }
        .m-0 {
            margin: 0!important
        }
        .my-4 {
            margin-top: 1.5rem!important;
            margin-bottom: 1.5rem!important
        }
        .mt-5 {
            margin-top: 3rem!important
        }
        .mb-0 {
            margin-bottom: 0!important
        }
        .mb-3 {
            margin-bottom: 1rem!important
        }
        .p-3 {
            padding: 1rem!important
        }
        .pt-5 {
            padding-top: 3rem!important
        }
        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important
        }
        .rounded-1 {
            border-radius: var(--bs-border-radius-sm)!important
        }
        .d-lg-flex {
            display: flex!important
        }
        .my-lg-0 {
            margin-top: 0!important;
            margin-bottom: 0!important
        }
        .px-lg-4 {
            padding-right: 1.5rem!important;
            padding-left: 1.5rem!important
        }
        button, [type='button'], [type='reset'], [type='submit'] {
            -webkit-appearance: button;
        }
        button, select {
            /* 1 */
            text-transform: none;
        }
        button, input {
            /* 1 */
            overflow: visible;
        }
        button, input, optgroup, select, textarea {
            font-family: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            line-height: 1.15;
            /* 1 */
            margin: 0;
            /* 2 */
        }
        img {
            border-style: none;
        }
        b, strong {
            font-weight: 900;
        }
        a {
            background-color: transparent;
        }
        hr {
            box-sizing: content-box;
            /* 1 */
            height: 0;
            /* 1 */
            overflow: visible;
            /* 2 */
        }
        body {
            margin: 0;
        }
        html {
            line-height: 1.15;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }
        :root {
            /* widths for rows and containers
               */
            --header-height: 160px;
            --header-height-min: 80px;
        }
        :root {
            --accent-color: #F0F0F0;
            --dark-color: #04040C;
            --light-color: #f2f2f2;
            --dim-light-color: rgba(240, 240, 240, 0.7);
        ;
            --primary-color: #6847F5;
            --secondary-color: #A95BF3;
            --blue-color: #9CD0FF;
            --swiper-pagination: #D9D8E2;
        }

        /* Fonts */
        :root {
            --body-font: "Montserrat", sans-serif;
            --heading-font: "Montserrat", sans-serif;
        }
        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            box-sizing: border-box;
        }

        body {
            font-family: var(--body-font);
            font-size: 19px;
            font-weight: 300;
            line-height: 2;
            color: var(--accent-color);
            margin: 0;
        }
        a {
            color: var(--accent-color);
            text-decoration: none;
            transition: 0.3s color ease-out;
        }
        ul,
        ol {
            margin-top: 0;
            margin-bottom: 10px;
            margin-left: 0;
        }
        ul li,
        ol li {
            margin-bottom: 5px;
            outline: 0;
        }
        ul li:last-child,
        ol li:last-child {
            margin-bottom: 0;
        }
        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            outline: 0;
        }
        img {
            display: inline-block;
            border: 0;
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }
        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3,
        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            font-family: var(--heading-font);
            color: var(--dark-color);
            line-height: 1.2;
            letter-spacing: 2px;
        }

        h1.light,
        .h1,
        h2.light,
        .h2,
        h3.light,
        .h3,
        h4.light,
        .h4,
        h5.light,
        .h5,
        h6.light,
        .h6 {
            color: var(--light-color);
        }

        h1,
        h2,
        h3 {
            /* margin: 25px 0; */
            text-transform: capitalize;
        }

        h5,
        h6 {
            letter-spacing: 1px;
        }

        h1,
        .h1 {
            font-size: 3em;
            line-height: 1.4;
        }

        h2,
        .h2 {
            font-size: 2em;
            line-height: 1.4;
        }

        h3,
        .h3 {
            font-size: 1.4em;
            line-height: 1.4;
        }

        h4,
        .h4 {
            font-size: 1.1em;
            line-height: 1.4;
        }
        p {
            font-size: 19px;
            line-height: 2;
            /* margin: 0 0 20px 0; */
        }
        dfn,
        cite,
        em,
        i {
            font-style: italic;
        }
        .container::after,
        .row::after,
        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }
        .text-center {
            text-align: center;
            margin: 0 auto;
        }
        ul {
            list-style: circle inside;
        }
        ol,
        ul {
            padding-left: 0;
            margin-top: 0;
        }
        li {
            margin-bottom: 1rem;
        }
        button,
        .button {
            margin-bottom: 1rem;
        }

        input,
        textarea,
        select,
        fieldset {
            margin-bottom: 1.5rem;
        }
        .list-unstyled {
            list-style: none;
        }
        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }
        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        hr {
            stroke-width: 2px;
            stroke: rgba(83, 84, 136, 0.30);
        }

        /*--------------------------------------------------------------
        /** 2.10 Buttons
        --------------------------------------------------------------*/
        a.btn,
        input[type="button"],
        input[type="submit"],
        input[type="reset"],
        input[type="file"],
        button {
            background-image: none;
            background: var(--dark-color);
            text-decoration: none !important;
            display: inline-block;
            position: relative;
            /* border: 2px solid transparent; */
            text-transform: capitalize;
            border-radius: 0;
            padding: 0.75em 1.5em;
            /* margin-top: 15px; */
            font-family: var(--body-font);
            font-size: 15px;
            font-weight: 500;
            line-height: normal;
            text-align: center;
            color: var(--light-color);
            z-index: 1;
            cursor: pointer;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .btn:last-child {
            margin-right: 0;
        }
        .btn.btn-medium {
            padding: 0.9em 2.6em;
            font-size: 1.0em;
        }
        .btn.btn-outline-linear {
            border-width: 1px;
            border-image: linear-gradient(to bottom, var(--primary-color), var(--secondary-color)) 1;
        }
        .btn.btn-linear {
            background-color: var(--primary-color);
            /* For browsers that do not support gradients */
            background: linear-gradient(var(--primary-color), var(--secondary-color));
            color: var(--light-color);
            border: none;
        }
        .section-title {
            font-size: 2.9em;
            font-weight: 900;
            line-height: 4.235rem;
            letter-spacing: 0.105rem;
        }

        h3.block-title {
            font-weight: 800;
            font-size: 1.375rem;
            color: var(--light-color);
            color: #F2F2F2;
            letter-spacing: 0.04125rem;
        }
        .padding-small {
            padding-top: 2em;
            padding-bottom: 2em;
        }
        .padding-large {
            padding-top: 7em;
            padding-bottom: 7em;
        }
        .bg-dark {
            background-color: var(--dark-color) !important;
        }

        .bg-blue-trans {
            background: rgba(134, 155, 223, 0.14) !important;
            border: 2px solid rgba(83, 84, 136, 0.4);
        }

        /* - Content Colors
        --------------------------------------------------------------*/
        .content-light h1,
        .content-light h2,
        .content-light h3,
        .content-light h4,
        .content-light h5,
        .content-light h6 {
            color: var(--light-color);
        }
        .content-light a,
        .content-light {
            color: var(--light-color);
        }
        .border-rounded-circle {
            border-radius: 50%;
        }
        .pattern-blur,
        .pattern-circle {
            position: relative;
        }

        .pattern-blur .pattern-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            z-index: -1;
        }
        .pattern-blur .pattern-overlay.pattern-blur-right {
            right: 0;
        }

        .pattern-blur .pattern-overlay.pattern-blur-footer {
            right: 0;
            top: -95%;
        }
        .main-menu li.menu-item {
            padding: 10px 20px;
        }

        .main-menu li.menu-item a {
            color: var(--accent-color);
        }
        .btn-wrap a.btn {
            margin-right: 20px;
        }
        .offcanvas {
            background-color: var(--dark-color);
        }
        .view-btn {
            color: var(--secondary-color);
        }
        #footer .footer-item.item-001 {
            margin-right: 140px;
        }

        #footer .footer-item.item-001 p {
            margin: 20px 0;
        }

        .footer-item .social-media li {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-right: 15px;
            cursor: pointer;
        }
        .footer-item .social-media a {
            width: 48px;
            line-height: 48px;
            height: 48px;
            background: linear-gradient(95deg, var(--primary-color), var(--secondary-color));
            background: -webkit-linear-gradient(95deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .footer-item .footer-menu a {
            transition: 0.8s all;
        }

    </style>

{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></noscript>

    <link rel="preload" href="{{asset('css/normalize.css')}}"
          as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{asset('css/normalize.css')}}"></noscript>

    <link rel="preload" href="{{asset('style.css')}}"
          as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{asset('style.css')}}"></noscript>

{{--    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/icomoon.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;800;900&display=swap"
          rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
</head>

<body class="bg-dark">

{{--Header--}}
@include('includes.header')
{{--Header--}}

@yield('content')

{{--Footer--}}
@include('includes.footer')
{{--Footer--}}
<hr>


<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
