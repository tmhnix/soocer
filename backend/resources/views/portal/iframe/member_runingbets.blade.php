<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    {{-- <link href="/assets/admin/css/ddrtv_files/Agent.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="/assets/admin/css/ddrtv_files/Reports.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="/assets/admin/css/ddrtv_files/BetList.css" rel="stylesheet" type="text/css"> --}}
    <style type="text/css">
        /* html {
            color: #171717;
            cursor: default;
            font-family: Tahoma, Arial, helvetica, sans-serif;
            font-size: 11px;
            margin: 0;
            text-align: left;
        }

        .btn-group button.multiselect {
            -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 30%);
            -khtml-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -ms-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -o-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            box-shadow: 0 1px 1px rgb(0 0 0 / 30%);
            background: #fff;
            font-size: 13px;
            margin-right: 0;
            position: relative;
        }

        .multiselect .multiselect-selected-text {
            width: 130px;
        }

        .multiselect .multiselect-selected-text {
            width: 170px;
            margin-right: 10px;
            display: inline-block;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            text-align: left;
        } */
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        font,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent
        }

        body {
            line-height: 1
        }

        ol,
        ul {
            list-style: none
        }

        blockquote,
        q {
            quotes: none
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none
        }

        :focus {
            outline: 0
        }

        ins {
            text-decoration: none
        }

        del {
            text-decoration: line-through
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        @charset "UTF-8";

        /*!
 * Bootstrap v3.3.6 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
        /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block
        }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            vertical-align: baseline
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        [hidden],
        template {
            display: none
        }

        a {
            background-color: transparent
        }

        a:active,
        a:hover {
            outline: 0
        }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b,
        strong {
            font-weight: bold
        }

        dfn {
            font-style: italic
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        mark {
            background: #ff0;
            color: #000
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        figure {
            margin: 1em 40px
        }

        hr {
            box-sizing: content-box;
            height: 0
        }

        pre {
            overflow: auto
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer
        }

        button[disabled],
        html input[disabled] {
            cursor: default
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input {
            line-height: normal
        }

        input[type="checkbox"],
        input[type="radio"] {
            box-sizing: border-box;
            padding: 0
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            height: auto
        }

        input[type="search"] {
            -webkit-appearance: textfield;
            box-sizing: content-box
        }

        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: .35em .625em .75em
        }

        legend {
            border: 0;
            padding: 0
        }

        textarea {
            overflow: auto
        }

        optgroup {
            font-weight: bold
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        td,
        th {
            padding: 0
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px;
            -webkit-tap-highlight-color: transparent
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857;
            color: #333;
            background-color: #fff
        }

        input,
        button,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #337ab7;
            text-decoration: none
        }

        a:hover,
        a:focus {
            color: #23527c;
            text-decoration: underline
        }

        a:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        figure {
            margin: 0
        }

        img {
            vertical-align: middle
        }

        .img-responsive {
            display: block;
            max-width: 100%;
            height: auto
        }

        .img-rounded {
            border-radius: 6px
        }

        .img-thumbnail {
            padding: 4px;
            line-height: 1.42857;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            display: inline-block;
            max-width: 100%;
            height: auto
        }

        .img-circle {
            border-radius: 50%
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eee
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto
        }

        [role="button"] {
            cursor: pointer
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

        h1 small,
        h1 .small,
        h2 small,
        h2 .small,
        h3 small,
        h3 .small,
        h4 small,
        h4 .small,
        h5 small,
        h5 .small,
        h6 small,
        h6 .small,
        .h1 small,
        .h1 .small,
        .h2 small,
        .h2 .small,
        .h3 small,
        .h3 .small,
        .h4 small,
        .h4 .small,
        .h5 small,
        .h5 .small,
        .h6 small,
        .h6 .small {
            font-weight: normal;
            line-height: 1;
            color: #777
        }

        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3 {
            margin-top: 20px;
            margin-bottom: 10px
        }

        h1 small,
        h1 .small,
        .h1 small,
        .h1 .small,
        h2 small,
        h2 .small,
        .h2 small,
        .h2 .small,
        h3 small,
        h3 .small,
        .h3 small,
        .h3 .small {
            font-size: 65%
        }

        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            margin-top: 10px;
            margin-bottom: 10px
        }

        h4 small,
        h4 .small,
        .h4 small,
        .h4 .small,
        h5 small,
        h5 .small,
        .h5 small,
        .h5 .small,
        h6 small,
        h6 .small,
        .h6 small,
        .h6 .small {
            font-size: 75%
        }

        h1,
        .h1 {
            font-size: 36px
        }

        h2,
        .h2 {
            font-size: 30px
        }

        h3,
        .h3 {
            font-size: 24px
        }

        h4,
        .h4 {
            font-size: 18px
        }

        h5,
        .h5 {
            font-size: 14px
        }

        h6,
        .h6 {
            font-size: 12px
        }

        p {
            margin: 0 0 10px
        }

        .lead {
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.4
        }

        @media(min-width:768px) {
            .lead {
                font-size: 21px
            }
        }

        small,
        .small {
            font-size: 85%
        }

        mark,
        .mark {
            background-color: #fcf8e3;
            padding: .2em
        }

        .text-left {
            text-align: left
        }

        .text-right {
            text-align: right
        }

        .text-center {
            text-align: center
        }

        .text-justify {
            text-align: justify
        }

        .text-nowrap {
            white-space: nowrap
        }

        .text-lowercase {
            text-transform: lowercase
        }

        .text-uppercase,
        .initialism {
            text-transform: uppercase
        }

        .text-capitalize {
            text-transform: capitalize
        }

        .text-muted {
            color: #777
        }

        .text-primary {
            color: #337ab7
        }

        a.text-primary:hover,
        a.text-primary:focus {
            color: #286090
        }

        .text-success {
            color: #3c763d
        }

        a.text-success:hover,
        a.text-success:focus {
            color: #2b542c
        }

        .text-info {
            color: #31708f
        }

        a.text-info:hover,
        a.text-info:focus {
            color: #245269
        }

        .text-warning {
            color: #8a6d3b
        }

        a.text-warning:hover,
        a.text-warning:focus {
            color: #66512c
        }

        .text-danger {
            color: #a94442
        }

        a.text-danger:hover,
        a.text-danger:focus {
            color: #843534
        }

        .bg-primary {
            color: #fff
        }

        .bg-primary {
            background-color: #337ab7
        }

        a.bg-primary:hover,
        a.bg-primary:focus {
            background-color: #286090
        }

        .bg-success {
            background-color: #dff0d8
        }

        a.bg-success:hover,
        a.bg-success:focus {
            background-color: #c1e2b3
        }

        .bg-info {
            background-color: #d9edf7
        }

        a.bg-info:hover,
        a.bg-info:focus {
            background-color: #afd9ee
        }

        .bg-warning {
            background-color: #fcf8e3
        }

        a.bg-warning:hover,
        a.bg-warning:focus {
            background-color: #f7ecb5
        }

        .bg-danger {
            background-color: #f2dede
        }

        a.bg-danger:hover,
        a.bg-danger:focus {
            background-color: #e4b9b9
        }

        .page-header {
            padding-bottom: 9px;
            margin: 40px 0 20px;
            border-bottom: 1px solid #eee
        }

        ul,
        ol {
            margin-top: 0;
            margin-bottom: 10px
        }

        ul ul,
        ul ol,
        ol ul,
        ol ol {
            margin-bottom: 0
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px
        }

        .list-inline>li {
            display: inline-block;
            padding-left: 5px;
            padding-right: 5px
        }

        dl {
            margin-top: 0;
            margin-bottom: 20px
        }

        dt,
        dd {
            line-height: 1.42857
        }

        dt {
            font-weight: bold
        }

        dd {
            margin-left: 0
        }

        .dl-horizontal dd:before,
        .dl-horizontal dd:after {
            content: " ";
            display: table
        }

        .dl-horizontal dd:after {
            clear: both
        }

        @media(min-width:768px) {
            .dl-horizontal dt {
                float: left;
                width: 160px;
                clear: left;
                text-align: right;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .dl-horizontal dd {
                margin-left: 180px
            }
        }

        abbr[title],
        abbr[data-original-title] {
            cursor: help;
            border-bottom: 1px dotted #777
        }

        .initialism {
            font-size: 90%
        }

        blockquote {
            padding: 10px 20px;
            margin: 0 0 20px;
            font-size: 17.5px;
            border-left: 5px solid #eee
        }

        blockquote p:last-child,
        blockquote ul:last-child,
        blockquote ol:last-child {
            margin-bottom: 0
        }

        blockquote footer,
        blockquote small,
        blockquote .small {
            display: block;
            font-size: 80%;
            line-height: 1.42857;
            color: #777
        }

        blockquote footer:before,
        blockquote small:before,
        blockquote .small:before {
            content: '— '
        }

        .blockquote-reverse,
        blockquote.pull-right {
            padding-right: 15px;
            padding-left: 0;
            border-right: 5px solid #eee;
            border-left: 0;
            text-align: right
        }

        .blockquote-reverse footer:before,
        .blockquote-reverse small:before,
        .blockquote-reverse .small:before,
        blockquote.pull-right footer:before,
        blockquote.pull-right small:before,
        blockquote.pull-right .small:before {
            content: ''
        }

        .blockquote-reverse footer:after,
        .blockquote-reverse small:after,
        .blockquote-reverse .small:after,
        blockquote.pull-right footer:after,
        blockquote.pull-right small:after,
        blockquote.pull-right .small:after {
            content: ' —'
        }

        address {
            margin-bottom: 20px;
            font-style: normal;
            line-height: 1.42857
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .container:before,
        .container:after {
            content: " ";
            display: table
        }

        .container:after {
            clear: both
        }

        @media(min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media(min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media(min-width:1200px) {
            .container {
                width: 1170px
            }
        }

        .container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .container-fluid:before,
        .container-fluid:after {
            content: " ";
            display: table
        }

        .container-fluid:after {
            clear: both
        }

        .row {
            margin-left: -15px;
            margin-right: -15px
        }

        .row:before,
        .row:after {
            content: " ";
            display: table
        }

        .row:after {
            clear: both
        }

        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px
        }

        .col-xs-1,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12 {
            float: left
        }

        .col-xs-1 {
            width: 8.33333%
        }

        .col-xs-2 {
            width: 16.66667%
        }

        .col-xs-3 {
            width: 25%
        }

        .col-xs-4 {
            width: 33.33333%
        }

        .col-xs-5 {
            width: 41.66667%
        }

        .col-xs-6 {
            width: 50%
        }

        .col-xs-7 {
            width: 58.33333%
        }

        .col-xs-8 {
            width: 66.66667%
        }

        .col-xs-9 {
            width: 75%
        }

        .col-xs-10 {
            width: 83.33333%
        }

        .col-xs-11 {
            width: 91.66667%
        }

        .col-xs-12 {
            width: 100%
        }

        .col-xs-pull-0 {
            right: auto
        }

        .col-xs-pull-1 {
            right: 8.33333%
        }

        .col-xs-pull-2 {
            right: 16.66667%
        }

        .col-xs-pull-3 {
            right: 25%
        }

        .col-xs-pull-4 {
            right: 33.33333%
        }

        .col-xs-pull-5 {
            right: 41.66667%
        }

        .col-xs-pull-6 {
            right: 50%
        }

        .col-xs-pull-7 {
            right: 58.33333%
        }

        .col-xs-pull-8 {
            right: 66.66667%
        }

        .col-xs-pull-9 {
            right: 75%
        }

        .col-xs-pull-10 {
            right: 83.33333%
        }

        .col-xs-pull-11 {
            right: 91.66667%
        }

        .col-xs-pull-12 {
            right: 100%
        }

        .col-xs-push-0 {
            left: auto
        }

        .col-xs-push-1 {
            left: 8.33333%
        }

        .col-xs-push-2 {
            left: 16.66667%
        }

        .col-xs-push-3 {
            left: 25%
        }

        .col-xs-push-4 {
            left: 33.33333%
        }

        .col-xs-push-5 {
            left: 41.66667%
        }

        .col-xs-push-6 {
            left: 50%
        }

        .col-xs-push-7 {
            left: 58.33333%
        }

        .col-xs-push-8 {
            left: 66.66667%
        }

        .col-xs-push-9 {
            left: 75%
        }

        .col-xs-push-10 {
            left: 83.33333%
        }

        .col-xs-push-11 {
            left: 91.66667%
        }

        .col-xs-push-12 {
            left: 100%
        }

        .col-xs-offset-0 {
            margin-left: 0%
        }

        .col-xs-offset-1 {
            margin-left: 8.33333%
        }

        .col-xs-offset-2 {
            margin-left: 16.66667%
        }

        .col-xs-offset-3 {
            margin-left: 25%
        }

        .col-xs-offset-4 {
            margin-left: 33.33333%
        }

        .col-xs-offset-5 {
            margin-left: 41.66667%
        }

        .col-xs-offset-6 {
            margin-left: 50%
        }

        .col-xs-offset-7 {
            margin-left: 58.33333%
        }

        .col-xs-offset-8 {
            margin-left: 66.66667%
        }

        .col-xs-offset-9 {
            margin-left: 75%
        }

        .col-xs-offset-10 {
            margin-left: 83.33333%
        }

        .col-xs-offset-11 {
            margin-left: 91.66667%
        }

        .col-xs-offset-12 {
            margin-left: 100%
        }

        @media(min-width:768px) {

            .col-sm-1,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12 {
                float: left
            }

            .col-sm-1 {
                width: 8.33333%
            }

            .col-sm-2 {
                width: 16.66667%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-4 {
                width: 33.33333%
            }

            .col-sm-5 {
                width: 41.66667%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-7 {
                width: 58.33333%
            }

            .col-sm-8 {
                width: 66.66667%
            }

            .col-sm-9 {
                width: 75%
            }

            .col-sm-10 {
                width: 83.33333%
            }

            .col-sm-11 {
                width: 91.66667%
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-pull-0 {
                right: auto
            }

            .col-sm-pull-1 {
                right: 8.33333%
            }

            .col-sm-pull-2 {
                right: 16.66667%
            }

            .col-sm-pull-3 {
                right: 25%
            }

            .col-sm-pull-4 {
                right: 33.33333%
            }

            .col-sm-pull-5 {
                right: 41.66667%
            }

            .col-sm-pull-6 {
                right: 50%
            }

            .col-sm-pull-7 {
                right: 58.33333%
            }

            .col-sm-pull-8 {
                right: 66.66667%
            }

            .col-sm-pull-9 {
                right: 75%
            }

            .col-sm-pull-10 {
                right: 83.33333%
            }

            .col-sm-pull-11 {
                right: 91.66667%
            }

            .col-sm-pull-12 {
                right: 100%
            }

            .col-sm-push-0 {
                left: auto
            }

            .col-sm-push-1 {
                left: 8.33333%
            }

            .col-sm-push-2 {
                left: 16.66667%
            }

            .col-sm-push-3 {
                left: 25%
            }

            .col-sm-push-4 {
                left: 33.33333%
            }

            .col-sm-push-5 {
                left: 41.66667%
            }

            .col-sm-push-6 {
                left: 50%
            }

            .col-sm-push-7 {
                left: 58.33333%
            }

            .col-sm-push-8 {
                left: 66.66667%
            }

            .col-sm-push-9 {
                left: 75%
            }

            .col-sm-push-10 {
                left: 83.33333%
            }

            .col-sm-push-11 {
                left: 91.66667%
            }

            .col-sm-push-12 {
                left: 100%
            }

            .col-sm-offset-0 {
                margin-left: 0%
            }

            .col-sm-offset-1 {
                margin-left: 8.33333%
            }

            .col-sm-offset-2 {
                margin-left: 16.66667%
            }

            .col-sm-offset-3 {
                margin-left: 25%
            }

            .col-sm-offset-4 {
                margin-left: 33.33333%
            }

            .col-sm-offset-5 {
                margin-left: 41.66667%
            }

            .col-sm-offset-6 {
                margin-left: 50%
            }

            .col-sm-offset-7 {
                margin-left: 58.33333%
            }

            .col-sm-offset-8 {
                margin-left: 66.66667%
            }

            .col-sm-offset-9 {
                margin-left: 75%
            }

            .col-sm-offset-10 {
                margin-left: 83.33333%
            }

            .col-sm-offset-11 {
                margin-left: 91.66667%
            }

            .col-sm-offset-12 {
                margin-left: 100%
            }
        }

        @media(min-width:992px) {

            .col-md-1,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9,
            .col-md-10,
            .col-md-11,
            .col-md-12 {
                float: left
            }

            .col-md-1 {
                width: 8.33333%
            }

            .col-md-2 {
                width: 16.66667%
            }

            .col-md-3 {
                width: 25%
            }

            .col-md-4 {
                width: 33.33333%
            }

            .col-md-5 {
                width: 41.66667%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-7 {
                width: 58.33333%
            }

            .col-md-8 {
                width: 66.66667%
            }

            .col-md-9 {
                width: 75%
            }

            .col-md-10 {
                width: 83.33333%
            }

            .col-md-11 {
                width: 91.66667%
            }

            .col-md-12 {
                width: 100%
            }

            .col-md-pull-0 {
                right: auto
            }

            .col-md-pull-1 {
                right: 8.33333%
            }

            .col-md-pull-2 {
                right: 16.66667%
            }

            .col-md-pull-3 {
                right: 25%
            }

            .col-md-pull-4 {
                right: 33.33333%
            }

            .col-md-pull-5 {
                right: 41.66667%
            }

            .col-md-pull-6 {
                right: 50%
            }

            .col-md-pull-7 {
                right: 58.33333%
            }

            .col-md-pull-8 {
                right: 66.66667%
            }

            .col-md-pull-9 {
                right: 75%
            }

            .col-md-pull-10 {
                right: 83.33333%
            }

            .col-md-pull-11 {
                right: 91.66667%
            }

            .col-md-pull-12 {
                right: 100%
            }

            .col-md-push-0 {
                left: auto
            }

            .col-md-push-1 {
                left: 8.33333%
            }

            .col-md-push-2 {
                left: 16.66667%
            }

            .col-md-push-3 {
                left: 25%
            }

            .col-md-push-4 {
                left: 33.33333%
            }

            .col-md-push-5 {
                left: 41.66667%
            }

            .col-md-push-6 {
                left: 50%
            }

            .col-md-push-7 {
                left: 58.33333%
            }

            .col-md-push-8 {
                left: 66.66667%
            }

            .col-md-push-9 {
                left: 75%
            }

            .col-md-push-10 {
                left: 83.33333%
            }

            .col-md-push-11 {
                left: 91.66667%
            }

            .col-md-push-12 {
                left: 100%
            }

            .col-md-offset-0 {
                margin-left: 0%
            }

            .col-md-offset-1 {
                margin-left: 8.33333%
            }

            .col-md-offset-2 {
                margin-left: 16.66667%
            }

            .col-md-offset-3 {
                margin-left: 25%
            }

            .col-md-offset-4 {
                margin-left: 33.33333%
            }

            .col-md-offset-5 {
                margin-left: 41.66667%
            }

            .col-md-offset-6 {
                margin-left: 50%
            }

            .col-md-offset-7 {
                margin-left: 58.33333%
            }

            .col-md-offset-8 {
                margin-left: 66.66667%
            }

            .col-md-offset-9 {
                margin-left: 75%
            }

            .col-md-offset-10 {
                margin-left: 83.33333%
            }

            .col-md-offset-11 {
                margin-left: 91.66667%
            }

            .col-md-offset-12 {
                margin-left: 100%
            }
        }

        @media(min-width:1200px) {

            .col-lg-1,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12 {
                float: left
            }

            .col-lg-1 {
                width: 8.33333%
            }

            .col-lg-2 {
                width: 16.66667%
            }

            .col-lg-3 {
                width: 25%
            }

            .col-lg-4 {
                width: 33.33333%
            }

            .col-lg-5 {
                width: 41.66667%
            }

            .col-lg-6 {
                width: 50%
            }

            .col-lg-7 {
                width: 58.33333%
            }

            .col-lg-8 {
                width: 66.66667%
            }

            .col-lg-9 {
                width: 75%
            }

            .col-lg-10 {
                width: 83.33333%
            }

            .col-lg-11 {
                width: 91.66667%
            }

            .col-lg-12 {
                width: 100%
            }

            .col-lg-pull-0 {
                right: auto
            }

            .col-lg-pull-1 {
                right: 8.33333%
            }

            .col-lg-pull-2 {
                right: 16.66667%
            }

            .col-lg-pull-3 {
                right: 25%
            }

            .col-lg-pull-4 {
                right: 33.33333%
            }

            .col-lg-pull-5 {
                right: 41.66667%
            }

            .col-lg-pull-6 {
                right: 50%
            }

            .col-lg-pull-7 {
                right: 58.33333%
            }

            .col-lg-pull-8 {
                right: 66.66667%
            }

            .col-lg-pull-9 {
                right: 75%
            }

            .col-lg-pull-10 {
                right: 83.33333%
            }

            .col-lg-pull-11 {
                right: 91.66667%
            }

            .col-lg-pull-12 {
                right: 100%
            }

            .col-lg-push-0 {
                left: auto
            }

            .col-lg-push-1 {
                left: 8.33333%
            }

            .col-lg-push-2 {
                left: 16.66667%
            }

            .col-lg-push-3 {
                left: 25%
            }

            .col-lg-push-4 {
                left: 33.33333%
            }

            .col-lg-push-5 {
                left: 41.66667%
            }

            .col-lg-push-6 {
                left: 50%
            }

            .col-lg-push-7 {
                left: 58.33333%
            }

            .col-lg-push-8 {
                left: 66.66667%
            }

            .col-lg-push-9 {
                left: 75%
            }

            .col-lg-push-10 {
                left: 83.33333%
            }

            .col-lg-push-11 {
                left: 91.66667%
            }

            .col-lg-push-12 {
                left: 100%
            }

            .col-lg-offset-0 {
                margin-left: 0%
            }

            .col-lg-offset-1 {
                margin-left: 8.33333%
            }

            .col-lg-offset-2 {
                margin-left: 16.66667%
            }

            .col-lg-offset-3 {
                margin-left: 25%
            }

            .col-lg-offset-4 {
                margin-left: 33.33333%
            }

            .col-lg-offset-5 {
                margin-left: 41.66667%
            }

            .col-lg-offset-6 {
                margin-left: 50%
            }

            .col-lg-offset-7 {
                margin-left: 58.33333%
            }

            .col-lg-offset-8 {
                margin-left: 66.66667%
            }

            .col-lg-offset-9 {
                margin-left: 75%
            }

            .col-lg-offset-10 {
                margin-left: 83.33333%
            }

            .col-lg-offset-11 {
                margin-left: 91.66667%
            }

            .col-lg-offset-12 {
                margin-left: 100%
            }
        }

        table {
            background-color: transparent
        }

        caption {
            padding-top: 8px;
            padding-bottom: 8px;
            color: #777;
            text-align: left
        }

        th {
            text-align: left
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px
        }

        .table>thead>tr>th,
        .table>thead>tr>td,
        .table>tbody>tr>th,
        .table>tbody>tr>td,
        .table>tfoot>tr>th,
        .table>tfoot>tr>td {
            padding: 8px;
            line-height: 1.42857;
            vertical-align: top;
            border-top: 1px solid #ddd
        }

        .table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd
        }

        .table>caption+thead>tr:first-child>th,
        .table>caption+thead>tr:first-child>td,
        .table>colgroup+thead>tr:first-child>th,
        .table>colgroup+thead>tr:first-child>td,
        .table>thead:first-child>tr:first-child>th,
        .table>thead:first-child>tr:first-child>td {
            border-top: 0
        }

        .table>tbody+tbody {
            border-top: 2px solid #ddd
        }

        .table .table {
            background-color: #fff
        }

        .table-condensed>thead>tr>th,
        .table-condensed>thead>tr>td,
        .table-condensed>tbody>tr>th,
        .table-condensed>tbody>tr>td,
        .table-condensed>tfoot>tr>th,
        .table-condensed>tfoot>tr>td {
            padding: 5px
        }

        .table-bordered {
            border: 1px solid #ddd
        }

        .table-bordered>thead>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>tbody>tr>th,
        .table-bordered>tbody>tr>td,
        .table-bordered>tfoot>tr>th,
        .table-bordered>tfoot>tr>td {
            border: 1px solid #ddd
        }

        .table-bordered>thead>tr>th,
        .table-bordered>thead>tr>td {
            border-bottom-width: 2px
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f9f9f9
        }

        .table-hover>tbody>tr:hover {
            background-color: #f5f5f5
        }

        table col[class*="col-"] {
            position: static;
            float: none;
            display: table-column
        }

        table td[class*="col-"],
        table th[class*="col-"] {
            position: static;
            float: none;
            display: table-cell
        }

        .table>thead>tr>td.active,
        .table>thead>tr>th.active,
        .table>thead>tr.active>td,
        .table>thead>tr.active>th,
        .table>tbody>tr>td.active,
        .table>tbody>tr>th.active,
        .table>tbody>tr.active>td,
        .table>tbody>tr.active>th,
        .table>tfoot>tr>td.active,
        .table>tfoot>tr>th.active,
        .table>tfoot>tr.active>td,
        .table>tfoot>tr.active>th {
            background-color: #f5f5f5
        }

        .table-hover>tbody>tr>td.active:hover,
        .table-hover>tbody>tr>th.active:hover,
        .table-hover>tbody>tr.active:hover>td,
        .table-hover>tbody>tr:hover>.active,
        .table-hover>tbody>tr.active:hover>th {
            background-color: #e8e8e8
        }

        .table>thead>tr>td.success,
        .table>thead>tr>th.success,
        .table>thead>tr.success>td,
        .table>thead>tr.success>th,
        .table>tbody>tr>td.success,
        .table>tbody>tr>th.success,
        .table>tbody>tr.success>td,
        .table>tbody>tr.success>th,
        .table>tfoot>tr>td.success,
        .table>tfoot>tr>th.success,
        .table>tfoot>tr.success>td,
        .table>tfoot>tr.success>th {
            background-color: #dff0d8
        }

        .table-hover>tbody>tr>td.success:hover,
        .table-hover>tbody>tr>th.success:hover,
        .table-hover>tbody>tr.success:hover>td,
        .table-hover>tbody>tr:hover>.success,
        .table-hover>tbody>tr.success:hover>th {
            background-color: #d0e9c6
        }

        .table>thead>tr>td.info,
        .table>thead>tr>th.info,
        .table>thead>tr.info>td,
        .table>thead>tr.info>th,
        .table>tbody>tr>td.info,
        .table>tbody>tr>th.info,
        .table>tbody>tr.info>td,
        .table>tbody>tr.info>th,
        .table>tfoot>tr>td.info,
        .table>tfoot>tr>th.info,
        .table>tfoot>tr.info>td,
        .table>tfoot>tr.info>th {
            background-color: #d9edf7
        }

        .table-hover>tbody>tr>td.info:hover,
        .table-hover>tbody>tr>th.info:hover,
        .table-hover>tbody>tr.info:hover>td,
        .table-hover>tbody>tr:hover>.info,
        .table-hover>tbody>tr.info:hover>th {
            background-color: #c4e3f3
        }

        .table>thead>tr>td.warning,
        .table>thead>tr>th.warning,
        .table>thead>tr.warning>td,
        .table>thead>tr.warning>th,
        .table>tbody>tr>td.warning,
        .table>tbody>tr>th.warning,
        .table>tbody>tr.warning>td,
        .table>tbody>tr.warning>th,
        .table>tfoot>tr>td.warning,
        .table>tfoot>tr>th.warning,
        .table>tfoot>tr.warning>td,
        .table>tfoot>tr.warning>th {
            background-color: #fcf8e3
        }

        .table-hover>tbody>tr>td.warning:hover,
        .table-hover>tbody>tr>th.warning:hover,
        .table-hover>tbody>tr.warning:hover>td,
        .table-hover>tbody>tr:hover>.warning,
        .table-hover>tbody>tr.warning:hover>th {
            background-color: #faf2cc
        }

        .table>thead>tr>td.danger,
        .table>thead>tr>th.danger,
        .table>thead>tr.danger>td,
        .table>thead>tr.danger>th,
        .table>tbody>tr>td.danger,
        .table>tbody>tr>th.danger,
        .table>tbody>tr.danger>td,
        .table>tbody>tr.danger>th,
        .table>tfoot>tr>td.danger,
        .table>tfoot>tr>th.danger,
        .table>tfoot>tr.danger>td,
        .table>tfoot>tr.danger>th {
            background-color: #f2dede
        }

        .table-hover>tbody>tr>td.danger:hover,
        .table-hover>tbody>tr>th.danger:hover,
        .table-hover>tbody>tr.danger:hover>td,
        .table-hover>tbody>tr:hover>.danger,
        .table-hover>tbody>tr.danger:hover>th {
            background-color: #ebcccc
        }

        .table-responsive {
            overflow-x: auto;
            min-height: .01%
        }

        @media screen and (max-width:767px) {
            .table-responsive {
                width: 100%;
                margin-bottom: 15px;
                overflow-y: hidden;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #ddd
            }

            .table-responsive>.table {
                margin-bottom: 0
            }

            .table-responsive>.table>thead>tr>th,
            .table-responsive>.table>thead>tr>td,
            .table-responsive>.table>tbody>tr>th,
            .table-responsive>.table>tbody>tr>td,
            .table-responsive>.table>tfoot>tr>th,
            .table-responsive>.table>tfoot>tr>td {
                white-space: nowrap
            }

            .table-responsive>.table-bordered {
                border: 0
            }

            .table-responsive>.table-bordered>thead>tr>th:first-child,
            .table-responsive>.table-bordered>thead>tr>td:first-child,
            .table-responsive>.table-bordered>tbody>tr>th:first-child,
            .table-responsive>.table-bordered>tbody>tr>td:first-child,
            .table-responsive>.table-bordered>tfoot>tr>th:first-child,
            .table-responsive>.table-bordered>tfoot>tr>td:first-child {
                border-left: 0
            }

            .table-responsive>.table-bordered>thead>tr>th:last-child,
            .table-responsive>.table-bordered>thead>tr>td:last-child,
            .table-responsive>.table-bordered>tbody>tr>th:last-child,
            .table-responsive>.table-bordered>tbody>tr>td:last-child,
            .table-responsive>.table-bordered>tfoot>tr>th:last-child,
            .table-responsive>.table-bordered>tfoot>tr>td:last-child {
                border-right: 0
            }

            .table-responsive>.table-bordered>tbody>tr:last-child>th,
            .table-responsive>.table-bordered>tbody>tr:last-child>td,
            .table-responsive>.table-bordered>tfoot>tr:last-child>th,
            .table-responsive>.table-bordered>tfoot>tr:last-child>td {
                border-bottom: 0
            }
        }

        fieldset {
            padding: 0;
            margin: 0;
            border: 0;
            min-width: 0
        }

        legend {
            display: block;
            width: 100%;
            padding: 0;
            margin-bottom: 20px;
            font-size: 21px;
            line-height: inherit;
            color: #333;
            border: 0;
            border-bottom: 1px solid #e5e5e5
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: bold
        }

        input[type="search"] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin: 4px 0 0;
            margin-top: 1px \9;
            line-height: normal
        }

        input[type="file"] {
            display: block
        }

        input[type="range"] {
            display: block;
            width: 100%
        }

        select[multiple],
        select[size] {
            height: auto
        }

        input[type="file"]:focus,
        input[type="radio"]:focus,
        input[type="checkbox"]:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        output {
            display: block;
            padding-top: 7px;
            font-size: 14px;
            line-height: 1.42857;
            color: #555
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
        }

        .form-control::-moz-placeholder {
            color: #999;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #999
        }

        .form-control::-webkit-input-placeholder {
            color: #999
        }

        .form-control::-ms-expand {
            border: 0;
            background-color: transparent
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #eee;
            opacity: 1
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            cursor: not-allowed
        }

        textarea.form-control {
            height: auto
        }

        input[type="search"] {
            -webkit-appearance: none
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {

            input[type="date"].form-control,
            input[type="time"].form-control,
            input[type="datetime-local"].form-control,
            input[type="month"].form-control {
                line-height: 34px
            }

            input[type="date"].input-sm,
            .input-group-sm>input[type="date"].form-control,
            .input-group-sm>input[type="date"].input-group-addon,
            .input-group-sm>.input-group-btn>input[type="date"].btn,
            .input-group-sm input[type="date"],
            input[type="time"].input-sm,
            .input-group-sm>input[type="time"].form-control,
            .input-group-sm>input[type="time"].input-group-addon,
            .input-group-sm>.input-group-btn>input[type="time"].btn,
            .input-group-sm input[type="time"],
            input[type="datetime-local"].input-sm,
            .input-group-sm>input[type="datetime-local"].form-control,
            .input-group-sm>input[type="datetime-local"].input-group-addon,
            .input-group-sm>.input-group-btn>input[type="datetime-local"].btn,
            .input-group-sm input[type="datetime-local"],
            input[type="month"].input-sm,
            .input-group-sm>input[type="month"].form-control,
            .input-group-sm>input[type="month"].input-group-addon,
            .input-group-sm>.input-group-btn>input[type="month"].btn,
            .input-group-sm input[type="month"] {
                line-height: 30px
            }

            input[type="date"].input-lg,
            .input-group-lg>input[type="date"].form-control,
            .input-group-lg>input[type="date"].input-group-addon,
            .input-group-lg>.input-group-btn>input[type="date"].btn,
            .input-group-lg input[type="date"],
            input[type="time"].input-lg,
            .input-group-lg>input[type="time"].form-control,
            .input-group-lg>input[type="time"].input-group-addon,
            .input-group-lg>.input-group-btn>input[type="time"].btn,
            .input-group-lg input[type="time"],
            input[type="datetime-local"].input-lg,
            .input-group-lg>input[type="datetime-local"].form-control,
            .input-group-lg>input[type="datetime-local"].input-group-addon,
            .input-group-lg>.input-group-btn>input[type="datetime-local"].btn,
            .input-group-lg input[type="datetime-local"],
            input[type="month"].input-lg,
            .input-group-lg>input[type="month"].form-control,
            .input-group-lg>input[type="month"].input-group-addon,
            .input-group-lg>.input-group-btn>input[type="month"].btn,
            .input-group-lg input[type="month"] {
                line-height: 46px
            }
        }

        .form-group {
            margin-bottom: 15px
        }

        .radio,
        .checkbox {
            position: relative;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .radio label,
        .checkbox label {
            min-height: 20px;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: normal;
            cursor: pointer
        }

        .radio input[type="radio"],
        .radio-inline input[type="radio"],
        .checkbox input[type="checkbox"],
        .checkbox-inline input[type="checkbox"] {
            position: absolute;
            margin-left: -20px;
            margin-top: 4px \9
        }

        .radio+.radio,
        .checkbox+.checkbox {
            margin-top: -5px
        }

        .radio-inline,
        .checkbox-inline {
            position: relative;
            display: inline-block;
            padding-left: 20px;
            margin-bottom: 0;
            vertical-align: middle;
            font-weight: normal;
            cursor: pointer
        }

        .radio-inline+.radio-inline,
        .checkbox-inline+.checkbox-inline {
            margin-top: 0;
            margin-left: 10px
        }

        input[type="radio"][disabled],
        input[type="radio"].disabled,
        fieldset[disabled] input[type="radio"],
        input[type="checkbox"][disabled],
        input[type="checkbox"].disabled,
        fieldset[disabled] input[type="checkbox"] {
            cursor: not-allowed
        }

        .radio-inline.disabled,
        fieldset[disabled] .radio-inline,
        .checkbox-inline.disabled,
        fieldset[disabled] .checkbox-inline {
            cursor: not-allowed
        }

        .radio.disabled label,
        fieldset[disabled] .radio label,
        .checkbox.disabled label,
        fieldset[disabled] .checkbox label {
            cursor: not-allowed
        }

        .form-control-static {
            padding-top: 7px;
            padding-bottom: 7px;
            margin-bottom: 0;
            min-height: 34px
        }

        .form-control-static.input-lg,
        .input-group-lg>.form-control-static.form-control,
        .input-group-lg>.form-control-static.input-group-addon,
        .input-group-lg>.input-group-btn>.form-control-static.btn,
        .form-control-static.input-sm,
        .input-group-sm>.form-control-static.form-control,
        .input-group-sm>.form-control-static.input-group-addon,
        .input-group-sm>.input-group-btn>.form-control-static.btn {
            padding-left: 0;
            padding-right: 0
        }

        .input-sm,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.btn {
            height: 30px;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        select.input-sm,
        .input-group-sm>select.form-control,
        .input-group-sm>select.input-group-addon,
        .input-group-sm>.input-group-btn>select.btn {
            height: 30px;
            line-height: 30px
        }

        textarea.input-sm,
        .input-group-sm>textarea.form-control,
        .input-group-sm>textarea.input-group-addon,
        .input-group-sm>.input-group-btn>textarea.btn,
        select[multiple].input-sm,
        .input-group-sm>select[multiple].form-control,
        .input-group-sm>select[multiple].input-group-addon,
        .input-group-sm>.input-group-btn>select[multiple].btn {
            height: auto
        }

        .form-group-sm .form-control {
            height: 30px;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        .form-group-sm select.form-control {
            height: 30px;
            line-height: 30px
        }

        .form-group-sm textarea.form-control,
        .form-group-sm select[multiple].form-control {
            height: auto
        }

        .form-group-sm .form-control-static {
            height: 30px;
            min-height: 32px;
            padding: 6px 10px;
            font-size: 12px;
            line-height: 1.5
        }

        .input-lg,
        .input-group-lg>.form-control,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.btn {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33333;
            border-radius: 6px
        }

        select.input-lg,
        .input-group-lg>select.form-control,
        .input-group-lg>select.input-group-addon,
        .input-group-lg>.input-group-btn>select.btn {
            height: 46px;
            line-height: 46px
        }

        textarea.input-lg,
        .input-group-lg>textarea.form-control,
        .input-group-lg>textarea.input-group-addon,
        .input-group-lg>.input-group-btn>textarea.btn,
        select[multiple].input-lg,
        .input-group-lg>select[multiple].form-control,
        .input-group-lg>select[multiple].input-group-addon,
        .input-group-lg>.input-group-btn>select[multiple].btn {
            height: auto
        }

        .form-group-lg .form-control {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33333;
            border-radius: 6px
        }

        .form-group-lg select.form-control {
            height: 46px;
            line-height: 46px
        }

        .form-group-lg textarea.form-control,
        .form-group-lg select[multiple].form-control {
            height: auto
        }

        .form-group-lg .form-control-static {
            height: 46px;
            min-height: 38px;
            padding: 11px 16px;
            font-size: 18px;
            line-height: 1.33333
        }

        .has-feedback {
            position: relative
        }

        .has-feedback .form-control {
            padding-right: 42.5px
        }

        .form-control-feedback {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none
        }

        .input-lg+.form-control-feedback,
        .input-group-lg>.form-control+.form-control-feedback,
        .input-group-lg>.input-group-addon+.form-control-feedback,
        .input-group-lg>.input-group-btn>.btn+.form-control-feedback,
        .input-group-lg+.form-control-feedback,
        .form-group-lg .form-control+.form-control-feedback {
            width: 46px;
            height: 46px;
            line-height: 46px
        }

        .input-sm+.form-control-feedback,
        .input-group-sm>.form-control+.form-control-feedback,
        .input-group-sm>.input-group-addon+.form-control-feedback,
        .input-group-sm>.input-group-btn>.btn+.form-control-feedback,
        .input-group-sm+.form-control-feedback,
        .form-group-sm .form-control+.form-control-feedback {
            width: 30px;
            height: 30px;
            line-height: 30px
        }

        .has-success .help-block,
        .has-success .control-label,
        .has-success .radio,
        .has-success .checkbox,
        .has-success .radio-inline,
        .has-success .checkbox-inline,
        .has-success.radio label,
        .has-success.checkbox label,
        .has-success.radio-inline label,
        .has-success.checkbox-inline label {
            color: #3c763d
        }

        .has-success .form-control {
            border-color: #3c763d;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-success .form-control:focus {
            border-color: #2b542c;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
        }

        .has-success .input-group-addon {
            color: #3c763d;
            border-color: #3c763d;
            background-color: #dff0d8
        }

        .has-success .form-control-feedback {
            color: #3c763d
        }

        .has-warning .help-block,
        .has-warning .control-label,
        .has-warning .radio,
        .has-warning .checkbox,
        .has-warning .radio-inline,
        .has-warning .checkbox-inline,
        .has-warning.radio label,
        .has-warning.checkbox label,
        .has-warning.radio-inline label,
        .has-warning.checkbox-inline label {
            color: #8a6d3b
        }

        .has-warning .form-control {
            border-color: #8a6d3b;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-warning .form-control:focus {
            border-color: #66512c;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
        }

        .has-warning .input-group-addon {
            color: #8a6d3b;
            border-color: #8a6d3b;
            background-color: #fcf8e3
        }

        .has-warning .form-control-feedback {
            color: #8a6d3b
        }

        .has-error .help-block,
        .has-error .control-label,
        .has-error .radio,
        .has-error .checkbox,
        .has-error .radio-inline,
        .has-error .checkbox-inline,
        .has-error.radio label,
        .has-error.checkbox label,
        .has-error.radio-inline label,
        .has-error.checkbox-inline label {
            color: #a94442
        }

        .has-error .form-control {
            border-color: #a94442;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-error .form-control:focus {
            border-color: #843534;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
        }

        .has-error .input-group-addon {
            color: #a94442;
            border-color: #a94442;
            background-color: #f2dede
        }

        .has-error .form-control-feedback {
            color: #a94442
        }

        .has-feedback label~.form-control-feedback {
            top: 25px
        }

        .has-feedback label.sr-only~.form-control-feedback {
            top: 0
        }

        .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #737373
        }

        @media(min-width:768px) {
            .form-inline .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .form-control-static {
                display: inline-block
            }

            .form-inline .input-group {
                display: inline-table;
                vertical-align: middle
            }

            .form-inline .input-group .input-group-addon,
            .form-inline .input-group .input-group-btn,
            .form-inline .input-group .form-control {
                width: auto
            }

            .form-inline .input-group>.form-control {
                width: 100%
            }

            .form-inline .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .radio,
            .form-inline .checkbox {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .radio label,
            .form-inline .checkbox label {
                padding-left: 0
            }

            .form-inline .radio input[type="radio"],
            .form-inline .checkbox input[type="checkbox"] {
                position: relative;
                margin-left: 0
            }

            .form-inline .has-feedback .form-control-feedback {
                top: 0
            }
        }

        .form-horizontal .radio,
        .form-horizontal .checkbox,
        .form-horizontal .radio-inline,
        .form-horizontal .checkbox-inline {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 7px
        }

        .form-horizontal .radio,
        .form-horizontal .checkbox {
            min-height: 27px
        }

        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px
        }

        .form-horizontal .form-group:before,
        .form-horizontal .form-group:after {
            content: " ";
            display: table
        }

        .form-horizontal .form-group:after {
            clear: both
        }

        @media(min-width:768px) {
            .form-horizontal .control-label {
                text-align: right;
                margin-bottom: 0;
                padding-top: 7px
            }
        }

        .form-horizontal .has-feedback .form-control-feedback {
            right: 15px
        }

        @media(min-width:768px) {
            .form-horizontal .form-group-lg .control-label {
                padding-top: 11px;
                font-size: 18px
            }
        }

        @media(min-width:768px) {
            .form-horizontal .form-group-sm .control-label {
                padding-top: 6px;
                font-size: 12px
            }
        }

        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .btn:focus,
        .btn.focus,
        .btn:active:focus,
        .btn:active.focus,
        .btn.active:focus,
        .btn.active.focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        .btn:hover,
        .btn:focus,
        .btn.focus {
            color: #333;
            text-decoration: none
        }

        .btn:active,
        .btn.active {
            outline: 0;
            background-image: none;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
        }

        .btn.disabled,
        .btn[disabled],
        fieldset[disabled] .btn {
            cursor: not-allowed;
            opacity: .65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            box-shadow: none
        }

        a.btn.disabled,
        fieldset[disabled] a.btn {
            pointer-events: none
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc
        }

        .btn-default:focus,
        .btn-default.focus {
            color: #333;
            background-color: #e6e6e6;
            border-color: #8c8c8c
        }

        .btn-default:hover {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad
        }

        .btn-default:active,
        .btn-default.active,
        .open>.btn-default.dropdown-toggle {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad
        }

        .btn-default:active:hover,
        .btn-default:active:focus,
        .btn-default:active.focus,
        .btn-default.active:hover,
        .btn-default.active:focus,
        .btn-default.active.focus,
        .open>.btn-default.dropdown-toggle:hover,
        .open>.btn-default.dropdown-toggle:focus,
        .open>.btn-default.dropdown-toggle.focus {
            color: #333;
            background-color: #d4d4d4;
            border-color: #8c8c8c
        }

        .btn-default:active,
        .btn-default.active,
        .open>.btn-default.dropdown-toggle {
            background-image: none
        }

        .btn-default.disabled:hover,
        .btn-default.disabled:focus,
        .btn-default.disabled.focus,
        .btn-default[disabled]:hover,
        .btn-default[disabled]:focus,
        .btn-default[disabled].focus,
        fieldset[disabled] .btn-default:hover,
        fieldset[disabled] .btn-default:focus,
        fieldset[disabled] .btn-default.focus {
            background-color: #fff;
            border-color: #ccc
        }

        .btn-default .badge {
            color: #fff;
            background-color: #333
        }

        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4
        }

        .btn-primary:focus,
        .btn-primary.focus {
            color: #fff;
            background-color: #286090;
            border-color: #122b40
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74
        }

        .btn-primary:active,
        .btn-primary.active,
        .open>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #286090;
            border-color: #204d74
        }

        .btn-primary:active:hover,
        .btn-primary:active:focus,
        .btn-primary:active.focus,
        .btn-primary.active:hover,
        .btn-primary.active:focus,
        .btn-primary.active.focus,
        .open>.btn-primary.dropdown-toggle:hover,
        .open>.btn-primary.dropdown-toggle:focus,
        .open>.btn-primary.dropdown-toggle.focus {
            color: #fff;
            background-color: #204d74;
            border-color: #122b40
        }

        .btn-primary:active,
        .btn-primary.active,
        .open>.btn-primary.dropdown-toggle {
            background-image: none
        }

        .btn-primary.disabled:hover,
        .btn-primary.disabled:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled]:hover,
        .btn-primary[disabled]:focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary:hover,
        fieldset[disabled] .btn-primary:focus,
        fieldset[disabled] .btn-primary.focus {
            background-color: #337ab7;
            border-color: #2e6da4
        }

        .btn-primary .badge {
            color: #337ab7;
            background-color: #fff
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c
        }

        .btn-success:focus,
        .btn-success.focus {
            color: #fff;
            background-color: #449d44;
            border-color: #255625
        }

        .btn-success:hover {
            color: #fff;
            background-color: #449d44;
            border-color: #398439
        }

        .btn-success:active,
        .btn-success.active,
        .open>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #449d44;
            border-color: #398439
        }

        .btn-success:active:hover,
        .btn-success:active:focus,
        .btn-success:active.focus,
        .btn-success.active:hover,
        .btn-success.active:focus,
        .btn-success.active.focus,
        .open>.btn-success.dropdown-toggle:hover,
        .open>.btn-success.dropdown-toggle:focus,
        .open>.btn-success.dropdown-toggle.focus {
            color: #fff;
            background-color: #398439;
            border-color: #255625
        }

        .btn-success:active,
        .btn-success.active,
        .open>.btn-success.dropdown-toggle {
            background-image: none
        }

        .btn-success.disabled:hover,
        .btn-success.disabled:focus,
        .btn-success.disabled.focus,
        .btn-success[disabled]:hover,
        .btn-success[disabled]:focus,
        .btn-success[disabled].focus,
        fieldset[disabled] .btn-success:hover,
        fieldset[disabled] .btn-success:focus,
        fieldset[disabled] .btn-success.focus {
            background-color: #5cb85c;
            border-color: #4cae4c
        }

        .btn-success .badge {
            color: #5cb85c;
            background-color: #fff
        }

        .btn-info {
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da
        }

        .btn-info:focus,
        .btn-info.focus {
            color: #fff;
            background-color: #31b0d5;
            border-color: #1b6d85
        }

        .btn-info:hover {
            color: #fff;
            background-color: #31b0d5;
            border-color: #269abc
        }

        .btn-info:active,
        .btn-info.active,
        .open>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #31b0d5;
            border-color: #269abc
        }

        .btn-info:active:hover,
        .btn-info:active:focus,
        .btn-info:active.focus,
        .btn-info.active:hover,
        .btn-info.active:focus,
        .btn-info.active.focus,
        .open>.btn-info.dropdown-toggle:hover,
        .open>.btn-info.dropdown-toggle:focus,
        .open>.btn-info.dropdown-toggle.focus {
            color: #fff;
            background-color: #269abc;
            border-color: #1b6d85
        }

        .btn-info:active,
        .btn-info.active,
        .open>.btn-info.dropdown-toggle {
            background-image: none
        }

        .btn-info.disabled:hover,
        .btn-info.disabled:focus,
        .btn-info.disabled.focus,
        .btn-info[disabled]:hover,
        .btn-info[disabled]:focus,
        .btn-info[disabled].focus,
        fieldset[disabled] .btn-info:hover,
        fieldset[disabled] .btn-info:focus,
        fieldset[disabled] .btn-info.focus {
            background-color: #5bc0de;
            border-color: #46b8da
        }

        .btn-info .badge {
            color: #5bc0de;
            background-color: #fff
        }

        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236
        }

        .btn-warning:focus,
        .btn-warning.focus {
            color: #fff;
            background-color: #ec971f;
            border-color: #985f0d
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512
        }

        .btn-warning:active,
        .btn-warning.active,
        .open>.btn-warning.dropdown-toggle {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512
        }

        .btn-warning:active:hover,
        .btn-warning:active:focus,
        .btn-warning:active.focus,
        .btn-warning.active:hover,
        .btn-warning.active:focus,
        .btn-warning.active.focus,
        .open>.btn-warning.dropdown-toggle:hover,
        .open>.btn-warning.dropdown-toggle:focus,
        .open>.btn-warning.dropdown-toggle.focus {
            color: #fff;
            background-color: #d58512;
            border-color: #985f0d
        }

        .btn-warning:active,
        .btn-warning.active,
        .open>.btn-warning.dropdown-toggle {
            background-image: none
        }

        .btn-warning.disabled:hover,
        .btn-warning.disabled:focus,
        .btn-warning.disabled.focus,
        .btn-warning[disabled]:hover,
        .btn-warning[disabled]:focus,
        .btn-warning[disabled].focus,
        fieldset[disabled] .btn-warning:hover,
        fieldset[disabled] .btn-warning:focus,
        fieldset[disabled] .btn-warning.focus {
            background-color: #f0ad4e;
            border-color: #eea236
        }

        .btn-warning .badge {
            color: #f0ad4e;
            background-color: #fff
        }

        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a
        }

        .btn-danger:focus,
        .btn-danger.focus {
            color: #fff;
            background-color: #c9302c;
            border-color: #761c19
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925
        }

        .btn-danger:active,
        .btn-danger.active,
        .open>.btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925
        }

        .btn-danger:active:hover,
        .btn-danger:active:focus,
        .btn-danger:active.focus,
        .btn-danger.active:hover,
        .btn-danger.active:focus,
        .btn-danger.active.focus,
        .open>.btn-danger.dropdown-toggle:hover,
        .open>.btn-danger.dropdown-toggle:focus,
        .open>.btn-danger.dropdown-toggle.focus {
            color: #fff;
            background-color: #ac2925;
            border-color: #761c19
        }

        .btn-danger:active,
        .btn-danger.active,
        .open>.btn-danger.dropdown-toggle {
            background-image: none
        }

        .btn-danger.disabled:hover,
        .btn-danger.disabled:focus,
        .btn-danger.disabled.focus,
        .btn-danger[disabled]:hover,
        .btn-danger[disabled]:focus,
        .btn-danger[disabled].focus,
        fieldset[disabled] .btn-danger:hover,
        fieldset[disabled] .btn-danger:focus,
        fieldset[disabled] .btn-danger.focus {
            background-color: #d9534f;
            border-color: #d43f3a
        }

        .btn-danger .badge {
            color: #d9534f;
            background-color: #fff
        }

        .btn-link {
            color: #337ab7;
            font-weight: normal;
            border-radius: 0
        }

        .btn-link,
        .btn-link:active,
        .btn-link.active,
        .btn-link[disabled],
        fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn-link,
        .btn-link:hover,
        .btn-link:focus,
        .btn-link:active {
            border-color: transparent
        }

        .btn-link:hover,
        .btn-link:focus {
            color: #23527c;
            text-decoration: underline;
            background-color: transparent
        }

        .btn-link[disabled]:hover,
        .btn-link[disabled]:focus,
        fieldset[disabled] .btn-link:hover,
        fieldset[disabled] .btn-link:focus {
            color: #777;
            text-decoration: none
        }

        .btn-lg,
        .btn-group-lg>.btn {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33333;
            border-radius: 6px
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        .btn-xs,
        .btn-group-xs>.btn {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        .btn-block {
            display: block;
            width: 100%
        }

        .btn-block+.btn-block {
            margin-top: 5px
        }

        input[type="submit"].btn-block,
        input[type="reset"].btn-block,
        input[type="button"].btn-block {
            width: 100%
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear
        }

        .fade.in {
            opacity: 1
        }

        .collapse {
            display: none
        }

        .collapse.in {
            display: block
        }

        tr.collapse.in {
            display: table-row
        }

        tbody.collapse.in {
            display: table-row-group
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition-property: height, visibility;
            transition-property: height, visibility;
            -webkit-transition-duration: .35s;
            transition-duration: .35s;
            -webkit-transition-timing-function: ease;
            transition-timing-function: ease
        }

        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-top: 4px solid \9;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent
        }

        .dropup,
        .dropdown {
            position: relative
        }

        .dropdown-toggle:focus {
            outline: 0
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            list-style: none;
            font-size: 14px;
            text-align: left;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            background-clip: padding-box
        }

        .dropdown-menu.pull-right {
            right: 0;
            left: auto
        }

        .dropdown-menu .divider {
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5
        }

        .dropdown-menu>li>a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.42857;
            color: #333;
            white-space: nowrap
        }

        .dropdown-menu>li>a:hover,
        .dropdown-menu>li>a:focus {
            text-decoration: none;
            color: #262626;
            background-color: #f5f5f5
        }

        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>.active>a:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            background-color: #337ab7
        }

        .dropdown-menu>.disabled>a,
        .dropdown-menu>.disabled>a:hover,
        .dropdown-menu>.disabled>a:focus {
            color: #777
        }

        .dropdown-menu>.disabled>a:hover,
        .dropdown-menu>.disabled>a:focus {
            text-decoration: none;
            background-color: transparent;
            background-image: none;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            cursor: not-allowed
        }

        .open>.dropdown-menu {
            display: block
        }

        .open>a {
            outline: 0
        }

        .dropdown-menu-right {
            left: auto;
            right: 0
        }

        .dropdown-menu-left {
            left: 0;
            right: auto
        }

        .dropdown-header {
            display: block;
            padding: 3px 20px;
            font-size: 12px;
            line-height: 1.42857;
            color: #777;
            white-space: nowrap
        }

        .dropdown-backdrop {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            z-index: 990
        }

        .pull-right>.dropdown-menu {
            right: 0;
            left: auto
        }

        .dropup .caret,
        .navbar-fixed-bottom .dropdown .caret {
            border-top: 0;
            border-bottom: 4px dashed;
            border-bottom: 4px solid \9;
            content: ""
        }

        .dropup .dropdown-menu,
        .navbar-fixed-bottom .dropdown .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-bottom: 2px
        }

        @media(min-width:768px) {
            .navbar-right .dropdown-menu {
                right: 0;
                left: auto
            }

            .navbar-right .dropdown-menu-left {
                left: 0;
                right: auto
            }
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle
        }

        .btn-group>.btn,
        .btn-group-vertical>.btn {
            position: relative;
            float: left
        }

        .btn-group>.btn:hover,
        .btn-group>.btn:focus,
        .btn-group>.btn:active,
        .btn-group>.btn.active,
        .btn-group-vertical>.btn:hover,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn.active {
            z-index: 2
        }

        .btn-group .btn+.btn,
        .btn-group .btn+.btn-group,
        .btn-group .btn-group+.btn,
        .btn-group .btn-group+.btn-group {
            margin-left: -1px
        }

        .btn-toolbar {
            margin-left: -5px
        }

        .btn-toolbar:before,
        .btn-toolbar:after {
            content: " ";
            display: table
        }

        .btn-toolbar:after {
            clear: both
        }

        .btn-toolbar .btn,
        .btn-toolbar .btn-group,
        .btn-toolbar .input-group {
            float: left
        }

        .btn-toolbar>.btn,
        .btn-toolbar>.btn-group,
        .btn-toolbar>.input-group {
            margin-left: 5px
        }

        .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
            border-radius: 0
        }

        .btn-group>.btn:first-child {
            margin-left: 0
        }

        .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group>.btn:last-child:not(:first-child),
        .btn-group>.dropdown-toggle:not(:first-child) {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group>.btn-group {
            float: left
        }

        .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group .dropdown-toggle:active,
        .btn-group.open .dropdown-toggle {
            outline: 0
        }

        .btn-group>.btn+.dropdown-toggle {
            padding-left: 8px;
            padding-right: 8px
        }

        .btn-group>.btn-lg+.dropdown-toggle,
        .btn-group-lg.btn-group>.btn+.dropdown-toggle {
            padding-left: 12px;
            padding-right: 12px
        }

        .btn-group.open .dropdown-toggle {
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
        }

        .btn-group.open .dropdown-toggle.btn-link {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn .caret {
            margin-left: 0
        }

        .btn-lg .caret,
        .btn-group-lg>.btn .caret {
            border-width: 5px 5px 0;
            border-bottom-width: 0
        }

        .dropup .btn-lg .caret,
        .dropup .btn-group-lg>.btn .caret {
            border-width: 0 5px 5px
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group,
        .btn-group-vertical>.btn-group>.btn {
            display: block;
            float: none;
            width: 100%;
            max-width: 100%
        }

        .btn-group-vertical>.btn-group:before,
        .btn-group-vertical>.btn-group:after {
            content: " ";
            display: table
        }

        .btn-group-vertical>.btn-group:after {
            clear: both
        }

        .btn-group-vertical>.btn-group>.btn {
            float: none
        }

        .btn-group-vertical>.btn+.btn,
        .btn-group-vertical>.btn+.btn-group,
        .btn-group-vertical>.btn-group+.btn,
        .btn-group-vertical>.btn-group+.btn-group {
            margin-top: -1px;
            margin-left: 0
        }

        .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .btn-group-vertical>.btn:first-child:not(:last-child) {
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn:last-child:not(:first-child) {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px
        }

        .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group-justified {
            display: table;
            width: 100%;
            table-layout: fixed;
            border-collapse: separate
        }

        .btn-group-justified>.btn,
        .btn-group-justified>.btn-group {
            float: none;
            display: table-cell;
            width: 1%
        }

        .btn-group-justified>.btn-group .btn {
            width: 100%
        }

        .btn-group-justified>.btn-group .dropdown-menu {
            left: auto
        }

        [data-toggle="buttons"]>.btn input[type="radio"],
        [data-toggle="buttons"]>.btn input[type="checkbox"],
        [data-toggle="buttons"]>.btn-group>.btn input[type="radio"],
        [data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: table;
            border-collapse: separate
        }

        .input-group[class*="col-"] {
            float: none;
            padding-left: 0;
            padding-right: 0
        }

        .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0
        }

        .input-group .form-control:focus {
            z-index: 3
        }

        .input-group-addon,
        .input-group-btn,
        .input-group .form-control {
            display: table-cell
        }

        .input-group-addon:not(:first-child):not(:last-child),
        .input-group-btn:not(:first-child):not(:last-child),
        .input-group .form-control:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .input-group-addon,
        .input-group-btn {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle
        }

        .input-group-addon {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: normal;
            line-height: 1;
            color: #555;
            text-align: center;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 4px
        }

        .input-group-addon.input-sm,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.input-group-addon.btn {
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 3px
        }

        .input-group-addon.input-lg,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.input-group-addon.btn {
            padding: 10px 16px;
            font-size: 18px;
            border-radius: 6px
        }

        .input-group-addon input[type="radio"],
        .input-group-addon input[type="checkbox"] {
            margin-top: 0
        }

        .input-group .form-control:first-child,
        .input-group-addon:first-child,
        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.btn-group>.btn,
        .input-group-btn:first-child>.dropdown-toggle,
        .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),
        .input-group-btn:last-child>.btn-group:not(:last-child)>.btn {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .input-group-addon:first-child {
            border-right: 0
        }

        .input-group .form-control:last-child,
        .input-group-addon:last-child,
        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group>.btn,
        .input-group-btn:last-child>.dropdown-toggle,
        .input-group-btn:first-child>.btn:not(:first-child),
        .input-group-btn:first-child>.btn-group:not(:first-child)>.btn {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .input-group-addon:last-child {
            border-left: 0
        }

        .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap
        }

        .input-group-btn>.btn {
            position: relative
        }

        .input-group-btn>.btn+.btn {
            margin-left: -1px
        }

        .input-group-btn>.btn:hover,
        .input-group-btn>.btn:focus,
        .input-group-btn>.btn:active {
            z-index: 2
        }

        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.btn-group {
            margin-right: -1px
        }

        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group {
            z-index: 2;
            margin-left: -1px
        }

        .nav {
            margin-bottom: 0;
            padding-left: 0;
            list-style: none
        }

        .nav:before,
        .nav:after {
            content: " ";
            display: table
        }

        .nav:after {
            clear: both
        }

        .nav>li {
            position: relative;
            display: block
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px
        }

        .nav>li>a:hover,
        .nav>li>a:focus {
            text-decoration: none;
            background-color: #eee
        }

        .nav>li.disabled>a {
            color: #777
        }

        .nav>li.disabled>a:hover,
        .nav>li.disabled>a:focus {
            color: #777;
            text-decoration: none;
            background-color: transparent;
            cursor: not-allowed
        }

        .nav .open>a,
        .nav .open>a:hover,
        .nav .open>a:focus {
            background-color: #eee;
            border-color: #337ab7
        }

        .nav .nav-divider {
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5
        }

        .nav>li>a>img {
            max-width: none
        }

        .nav-tabs {
            border-bottom: 1px solid #ddd
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px
        }

        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857;
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0
        }

        .nav-tabs>li>a:hover {
            border-color: #eee #eee #ddd
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            color: #555;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom-color: transparent;
            cursor: default
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li>a {
            border-radius: 4px
        }

        .nav-pills>li+li {
            margin-left: 2px
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #fff;
            background-color: #337ab7
        }

        .nav-stacked>li {
            float: none
        }

        .nav-stacked>li+li {
            margin-top: 2px;
            margin-left: 0
        }

        .nav-justified,
        .nav-tabs.nav-justified {
            width: 100%
        }

        .nav-justified>li,
        .nav-tabs.nav-justified>li {
            float: none
        }

        .nav-justified>li>a,
        .nav-tabs.nav-justified>li>a {
            text-align: center;
            margin-bottom: 5px
        }

        .nav-justified>.dropdown .dropdown-menu {
            top: auto;
            left: auto
        }

        @media(min-width:768px) {

            .nav-justified>li,
            .nav-tabs.nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-justified>li>a,
            .nav-tabs.nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs-justified,
        .nav-tabs.nav-justified {
            border-bottom: 0
        }

        .nav-tabs-justified>li>a,
        .nav-tabs.nav-justified>li>a {
            margin-right: 0;
            border-radius: 4px
        }

        .nav-tabs-justified>.active>a,
        .nav-tabs.nav-justified>.active>a,
        .nav-tabs-justified>.active>a:hover,
        .nav-tabs.nav-justified>.active>a:hover,
        .nav-tabs-justified>.active>a:focus,
        .nav-tabs.nav-justified>.active>a:focus {
            border: 1px solid #ddd
        }

        @media(min-width:768px) {

            .nav-tabs-justified>li>a,
            .nav-tabs.nav-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs-justified>.active>a,
            .nav-tabs.nav-justified>.active>a,
            .nav-tabs-justified>.active>a:hover,
            .nav-tabs.nav-justified>.active>a:hover,
            .nav-tabs-justified>.active>a:focus,
            .nav-tabs.nav-justified>.active>a:focus {
                border-bottom-color: #fff
            }
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 20px;
            border: 1px solid transparent
        }

        .navbar:before,
        .navbar:after {
            content: " ";
            display: table
        }

        .navbar:after {
            clear: both
        }

        @media(min-width:768px) {
            .navbar {
                border-radius: 4px
            }
        }

        .navbar-header:before,
        .navbar-header:after {
            content: " ";
            display: table
        }

        .navbar-header:after {
            clear: both
        }

        @media(min-width:768px) {
            .navbar-header {
                float: left
            }
        }

        .navbar-collapse {
            overflow-x: visible;
            padding-right: 15px;
            padding-left: 15px;
            border-top: 1px solid transparent;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            -webkit-overflow-scrolling: touch
        }

        .navbar-collapse:before,
        .navbar-collapse:after {
            content: " ";
            display: table
        }

        .navbar-collapse:after {
            clear: both
        }

        .navbar-collapse.in {
            overflow-y: auto
        }

        @media(min-width:768px) {
            .navbar-collapse {
                width: auto;
                border-top: 0;
                box-shadow: none
            }

            .navbar-collapse.collapse {
                display: block !important;
                height: auto !important;
                padding-bottom: 0;
                overflow: visible !important
            }

            .navbar-collapse.in {
                overflow-y: visible
            }

            .navbar-fixed-top .navbar-collapse,
            .navbar-static-top .navbar-collapse,
            .navbar-fixed-bottom .navbar-collapse {
                padding-left: 0;
                padding-right: 0
            }
        }

        .navbar-fixed-top .navbar-collapse,
        .navbar-fixed-bottom .navbar-collapse {
            max-height: 340px
        }

        @media(max-device-width:480px) and (orientation:landscape) {

            .navbar-fixed-top .navbar-collapse,
            .navbar-fixed-bottom .navbar-collapse {
                max-height: 200px
            }
        }

        .container>.navbar-header,
        .container>.navbar-collapse,
        .container-fluid>.navbar-header,
        .container-fluid>.navbar-collapse {
            margin-right: -15px;
            margin-left: -15px
        }

        @media(min-width:768px) {

            .container>.navbar-header,
            .container>.navbar-collapse,
            .container-fluid>.navbar-header,
            .container-fluid>.navbar-collapse {
                margin-right: 0;
                margin-left: 0
            }
        }

        .navbar-static-top {
            z-index: 1000;
            border-width: 0 0 1px
        }

        @media(min-width:768px) {
            .navbar-static-top {
                border-radius: 0
            }
        }

        .navbar-fixed-top,
        .navbar-fixed-bottom {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030
        }

        @media(min-width:768px) {

            .navbar-fixed-top,
            .navbar-fixed-bottom {
                border-radius: 0
            }
        }

        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px
        }

        .navbar-fixed-bottom {
            bottom: 0;
            margin-bottom: 0;
            border-width: 1px 0 0
        }

        .navbar-brand {
            float: left;
            padding: 15px 15px;
            font-size: 18px;
            line-height: 20px;
            height: 50px
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            text-decoration: none
        }

        .navbar-brand>img {
            display: block
        }

        @media(min-width:768px) {

            .navbar>.container .navbar-brand,
            .navbar>.container-fluid .navbar-brand {
                margin-left: -15px
            }
        }

        .navbar-toggle {
            position: relative;
            float: right;
            margin-right: 15px;
            padding: 9px 10px;
            margin-top: 8px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .navbar-toggle:focus {
            outline: 0
        }

        .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px
        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px
        }

        @media(min-width:768px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: 7.5px -15px
        }

        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px
        }

        @media(max-width:767px) {
            .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                box-shadow: none
            }

            .navbar-nav .open .dropdown-menu>li>a,
            .navbar-nav .open .dropdown-menu .dropdown-header {
                padding: 5px 15px 5px 25px
            }

            .navbar-nav .open .dropdown-menu>li>a {
                line-height: 20px
            }

            .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-nav .open .dropdown-menu>li>a:focus {
                background-image: none
            }
        }

        @media(min-width:768px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

            .navbar-nav>li {
                float: left
            }

            .navbar-nav>li>a {
                padding-top: 15px;
                padding-bottom: 15px
            }
        }

        .navbar-form {
            margin-left: -15px;
            margin-right: -15px;
            padding: 10px 15px;
            border-top: 1px solid transparent;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
            margin-top: 8px;
            margin-bottom: 8px
        }

        @media(min-width:768px) {
            .navbar-form .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .navbar-form .form-control-static {
                display: inline-block
            }

            .navbar-form .input-group {
                display: inline-table;
                vertical-align: middle
            }

            .navbar-form .input-group .input-group-addon,
            .navbar-form .input-group .input-group-btn,
            .navbar-form .input-group .form-control {
                width: auto
            }

            .navbar-form .input-group>.form-control {
                width: 100%
            }

            .navbar-form .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .radio,
            .navbar-form .checkbox {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .radio label,
            .navbar-form .checkbox label {
                padding-left: 0
            }

            .navbar-form .radio input[type="radio"],
            .navbar-form .checkbox input[type="checkbox"] {
                position: relative;
                margin-left: 0
            }

            .navbar-form .has-feedback .form-control-feedback {
                top: 0
            }
        }

        @media(max-width:767px) {
            .navbar-form .form-group {
                margin-bottom: 5px
            }

            .navbar-form .form-group:last-child {
                margin-bottom: 0
            }
        }

        @media(min-width:768px) {
            .navbar-form {
                width: auto;
                border: 0;
                margin-left: 0;
                margin-right: 0;
                padding-top: 0;
                padding-bottom: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        .navbar-nav>li>.dropdown-menu {
            margin-top: 0;
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
            margin-bottom: 0;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .navbar-btn {
            margin-top: 8px;
            margin-bottom: 8px
        }

        .navbar-btn.btn-sm,
        .btn-group-sm>.navbar-btn.btn {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .navbar-btn.btn-xs,
        .btn-group-xs>.navbar-btn.btn {
            margin-top: 14px;
            margin-bottom: 14px
        }

        .navbar-text {
            margin-top: 15px;
            margin-bottom: 15px
        }

        @media(min-width:768px) {
            .navbar-text {
                float: left;
                margin-left: 15px;
                margin-right: 15px
            }
        }

        @media(min-width:768px) {
            .navbar-left {
                float: left !important
            }

            .navbar-right {
                float: right !important;
                margin-right: -15px
            }

            .navbar-right~.navbar-right {
                margin-right: 0
            }
        }

        .navbar-default {
            background-color: #f8f8f8;
            border-color: #e7e7e7
        }

        .navbar-default .navbar-brand {
            color: #777
        }

        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #5e5e5e;
            background-color: transparent
        }

        .navbar-default .navbar-text {
            color: #777
        }

        .navbar-default .navbar-nav>li>a {
            color: #777
        }

        .navbar-default .navbar-nav>li>a:hover,
        .navbar-default .navbar-nav>li>a:focus {
            color: #333;
            background-color: transparent
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:hover,
        .navbar-default .navbar-nav>.active>a:focus {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.disabled>a,
        .navbar-default .navbar-nav>.disabled>a:hover,
        .navbar-default .navbar-nav>.disabled>a:focus {
            color: #ccc;
            background-color: transparent
        }

        .navbar-default .navbar-toggle {
            border-color: #ddd
        }

        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: #ddd
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #888
        }

        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:focus {
            background-color: #e7e7e7;
            color: #555
        }

        @media(max-width:767px) {
            .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                color: #777
            }

            .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus {
                color: #333;
                background-color: transparent
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus {
                color: #555;
                background-color: #e7e7e7
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus {
                color: #ccc;
                background-color: transparent
            }
        }

        .navbar-default .navbar-link {
            color: #777
        }

        .navbar-default .navbar-link:hover {
            color: #333
        }

        .navbar-default .btn-link {
            color: #777
        }

        .navbar-default .btn-link:hover,
        .navbar-default .btn-link:focus {
            color: #333
        }

        .navbar-default .btn-link[disabled]:hover,
        .navbar-default .btn-link[disabled]:focus,
        fieldset[disabled] .navbar-default .btn-link:hover,
        fieldset[disabled] .navbar-default .btn-link:focus {
            color: #ccc
        }

        .navbar-inverse {
            background-color: #222;
            border-color: #090909
        }

        .navbar-inverse .navbar-brand {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-brand:hover,
        .navbar-inverse .navbar-brand:focus {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-text {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav>li>a:hover,
        .navbar-inverse .navbar-nav>li>a:focus {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:hover,
        .navbar-inverse .navbar-nav>.active>a:focus {
            color: #fff;
            background-color: #090909
        }

        .navbar-inverse .navbar-nav>.disabled>a,
        .navbar-inverse .navbar-nav>.disabled>a:hover,
        .navbar-inverse .navbar-nav>.disabled>a:focus {
            color: #444;
            background-color: transparent
        }

        .navbar-inverse .navbar-toggle {
            border-color: #333
        }

        .navbar-inverse .navbar-toggle:hover,
        .navbar-inverse .navbar-toggle:focus {
            background-color: #333
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border-color: #101010
        }

        .navbar-inverse .navbar-nav>.open>a,
        .navbar-inverse .navbar-nav>.open>a:hover,
        .navbar-inverse .navbar-nav>.open>a:focus {
            background-color: #090909;
            color: #fff
        }

        @media(max-width:767px) {
            .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
                border-color: #090909
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
                background-color: #090909
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                color: #9d9d9d
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus {
                color: #fff;
                background-color: transparent
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus {
                color: #fff;
                background-color: #090909
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus {
                color: #444;
                background-color: transparent
            }
        }

        .navbar-inverse .navbar-link {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-link:hover {
            color: #fff
        }

        .navbar-inverse .btn-link {
            color: #9d9d9d
        }

        .navbar-inverse .btn-link:hover,
        .navbar-inverse .btn-link:focus {
            color: #fff
        }

        .navbar-inverse .btn-link[disabled]:hover,
        .navbar-inverse .btn-link[disabled]:focus,
        fieldset[disabled] .navbar-inverse .btn-link:hover,
        fieldset[disabled] .navbar-inverse .btn-link:focus {
            color: #444
        }

        .breadcrumb {
            padding: 8px 15px;
            margin-bottom: 20px;
            list-style: none;
            background-color: #f5f5f5;
            border-radius: 4px
        }

        .breadcrumb>li {
            display: inline-block
        }

        .breadcrumb>li+li:before {
            content: "/ ";
            padding: 0 5px;
            color: #ccc
        }

        .breadcrumb>.active {
            color: #777
        }

        .list-group {
            margin-bottom: 20px;
            padding-left: 0
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid #ddd
        }

        .list-group-item:first-child {
            border-top-right-radius: 4px;
            border-top-left-radius: 4px
        }

        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px
        }

        a.list-group-item,
        button.list-group-item {
            color: #555
        }

        a.list-group-item .list-group-item-heading,
        button.list-group-item .list-group-item-heading {
            color: #333
        }

        a.list-group-item:hover,
        a.list-group-item:focus,
        button.list-group-item:hover,
        button.list-group-item:focus {
            text-decoration: none;
            color: #555;
            background-color: #f5f5f5
        }

        button.list-group-item {
            width: 100%;
            text-align: left
        }

        .list-group-item.disabled,
        .list-group-item.disabled:hover,
        .list-group-item.disabled:focus {
            background-color: #eee;
            color: #777;
            cursor: not-allowed
        }

        .list-group-item.disabled .list-group-item-heading,
        .list-group-item.disabled:hover .list-group-item-heading,
        .list-group-item.disabled:focus .list-group-item-heading {
            color: inherit
        }

        .list-group-item.disabled .list-group-item-text,
        .list-group-item.disabled:hover .list-group-item-text,
        .list-group-item.disabled:focus .list-group-item-text {
            color: #777
        }

        .list-group-item.active,
        .list-group-item.active:hover,
        .list-group-item.active:focus {
            z-index: 2;
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7
        }

        .list-group-item.active .list-group-item-heading,
        .list-group-item.active .list-group-item-heading>small,
        .list-group-item.active .list-group-item-heading>.small,
        .list-group-item.active:hover .list-group-item-heading,
        .list-group-item.active:hover .list-group-item-heading>small,
        .list-group-item.active:hover .list-group-item-heading>.small,
        .list-group-item.active:focus .list-group-item-heading,
        .list-group-item.active:focus .list-group-item-heading>small,
        .list-group-item.active:focus .list-group-item-heading>.small {
            color: inherit
        }

        .list-group-item.active .list-group-item-text,
        .list-group-item.active:hover .list-group-item-text,
        .list-group-item.active:focus .list-group-item-text {
            color: #c7ddef
        }

        .list-group-item-success {
            color: #3c763d;
            background-color: #dff0d8
        }

        a.list-group-item-success,
        button.list-group-item-success {
            color: #3c763d
        }

        a.list-group-item-success .list-group-item-heading,
        button.list-group-item-success .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-success:hover,
        a.list-group-item-success:focus,
        button.list-group-item-success:hover,
        button.list-group-item-success:focus {
            color: #3c763d;
            background-color: #d0e9c6
        }

        a.list-group-item-success.active,
        a.list-group-item-success.active:hover,
        a.list-group-item-success.active:focus,
        button.list-group-item-success.active,
        button.list-group-item-success.active:hover,
        button.list-group-item-success.active:focus {
            color: #fff;
            background-color: #3c763d;
            border-color: #3c763d
        }

        .list-group-item-info {
            color: #31708f;
            background-color: #d9edf7
        }

        a.list-group-item-info,
        button.list-group-item-info {
            color: #31708f
        }

        a.list-group-item-info .list-group-item-heading,
        button.list-group-item-info .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-info:hover,
        a.list-group-item-info:focus,
        button.list-group-item-info:hover,
        button.list-group-item-info:focus {
            color: #31708f;
            background-color: #c4e3f3
        }

        a.list-group-item-info.active,
        a.list-group-item-info.active:hover,
        a.list-group-item-info.active:focus,
        button.list-group-item-info.active,
        button.list-group-item-info.active:hover,
        button.list-group-item-info.active:focus {
            color: #fff;
            background-color: #31708f;
            border-color: #31708f
        }

        .list-group-item-warning {
            color: #8a6d3b;
            background-color: #fcf8e3
        }

        a.list-group-item-warning,
        button.list-group-item-warning {
            color: #8a6d3b
        }

        a.list-group-item-warning .list-group-item-heading,
        button.list-group-item-warning .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-warning:hover,
        a.list-group-item-warning:focus,
        button.list-group-item-warning:hover,
        button.list-group-item-warning:focus {
            color: #8a6d3b;
            background-color: #faf2cc
        }

        a.list-group-item-warning.active,
        a.list-group-item-warning.active:hover,
        a.list-group-item-warning.active:focus,
        button.list-group-item-warning.active,
        button.list-group-item-warning.active:hover,
        button.list-group-item-warning.active:focus {
            color: #fff;
            background-color: #8a6d3b;
            border-color: #8a6d3b
        }

        .list-group-item-danger {
            color: #a94442;
            background-color: #f2dede
        }

        a.list-group-item-danger,
        button.list-group-item-danger {
            color: #a94442
        }

        a.list-group-item-danger .list-group-item-heading,
        button.list-group-item-danger .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-danger:hover,
        a.list-group-item-danger:focus,
        button.list-group-item-danger:hover,
        button.list-group-item-danger:focus {
            color: #a94442;
            background-color: #ebcccc
        }

        a.list-group-item-danger.active,
        a.list-group-item-danger.active:hover,
        a.list-group-item-danger.active:focus,
        button.list-group-item-danger.active,
        button.list-group-item-danger.active:hover,
        button.list-group-item-danger.active:focus {
            color: #fff;
            background-color: #a94442;
            border-color: #a94442
        }

        .list-group-item-heading {
            margin-top: 0;
            margin-bottom: 5px
        }

        .list-group-item-text {
            margin-bottom: 0;
            line-height: 1.3
        }

        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
        }

        .panel-body {
            padding: 15px
        }

        .panel-body:before,
        .panel-body:after {
            content: " ";
            display: table
        }

        .panel-body:after {
            clear: both
        }

        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px
        }

        .panel-heading>.dropdown .dropdown-toggle {
            color: inherit
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit
        }

        .panel-title>a,
        .panel-title>small,
        .panel-title>.small,
        .panel-title>small>a,
        .panel-title>.small>a {
            color: inherit
        }

        .panel-footer {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .panel>.list-group,
        .panel>.panel-collapse>.list-group {
            margin-bottom: 0
        }

        .panel>.list-group .list-group-item,
        .panel>.panel-collapse>.list-group .list-group-item {
            border-width: 1px 0;
            border-radius: 0
        }

        .panel>.list-group:first-child .list-group-item:first-child,
        .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
            border-top: 0;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px
        }

        .panel>.list-group:last-child .list-group-item:last-child,
        .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
            border-bottom: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .panel-heading+.list-group .list-group-item:first-child {
            border-top-width: 0
        }

        .list-group+.panel-footer {
            border-top-width: 0
        }

        .panel>.table,
        .panel>.table-responsive>.table,
        .panel>.panel-collapse>.table {
            margin-bottom: 0
        }

        .panel>.table caption,
        .panel>.table-responsive>.table caption,
        .panel>.panel-collapse>.table caption {
            padding-left: 15px;
            padding-right: 15px
        }

        .panel>.table:first-child,
        .panel>.table-responsive:first-child>.table:first-child {
            border-top-right-radius: 3px;
            border-top-left-radius: 3px
        }

        .panel>.table:first-child>thead:first-child>tr:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
        .panel>.table:first-child>thead:first-child>tr:first-child th:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child {
            border-top-left-radius: 3px
        }

        .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
        .panel>.table:first-child>thead:first-child>tr:first-child th:last-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child {
            border-top-right-radius: 3px
        }

        .panel>.table:last-child,
        .panel>.table-responsive:last-child>.table:last-child {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .panel>.table:last-child>tbody:last-child>tr:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child {
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px
        }

        .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
            border-bottom-left-radius: 3px
        }

        .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
            border-bottom-right-radius: 3px
        }

        .panel>.panel-body+.table,
        .panel>.panel-body+.table-responsive,
        .panel>.table+.panel-body,
        .panel>.table-responsive+.panel-body {
            border-top: 1px solid #ddd
        }

        .panel>.table>tbody:first-child>tr:first-child th,
        .panel>.table>tbody:first-child>tr:first-child td {
            border-top: 0
        }

        .panel>.table-bordered,
        .panel>.table-responsive>.table-bordered {
            border: 0
        }

        .panel>.table-bordered>thead>tr>th:first-child,
        .panel>.table-bordered>thead>tr>td:first-child,
        .panel>.table-bordered>tbody>tr>th:first-child,
        .panel>.table-bordered>tbody>tr>td:first-child,
        .panel>.table-bordered>tfoot>tr>th:first-child,
        .panel>.table-bordered>tfoot>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>thead>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child {
            border-left: 0
        }

        .panel>.table-bordered>thead>tr>th:last-child,
        .panel>.table-bordered>thead>tr>td:last-child,
        .panel>.table-bordered>tbody>tr>th:last-child,
        .panel>.table-bordered>tbody>tr>td:last-child,
        .panel>.table-bordered>tfoot>tr>th:last-child,
        .panel>.table-bordered>tfoot>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>thead>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child {
            border-right: 0
        }

        .panel>.table-bordered>thead>tr:first-child>td,
        .panel>.table-bordered>thead>tr:first-child>th,
        .panel>.table-bordered>tbody>tr:first-child>td,
        .panel>.table-bordered>tbody>tr:first-child>th,
        .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
        .panel>.table-responsive>.table-bordered>thead>tr:first-child>th,
        .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
        .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th {
            border-bottom: 0
        }

        .panel>.table-bordered>tbody>tr:last-child>td,
        .panel>.table-bordered>tbody>tr:last-child>th,
        .panel>.table-bordered>tfoot>tr:last-child>td,
        .panel>.table-bordered>tfoot>tr:last-child>th,
        .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
        .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
        .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
        .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
            border-bottom: 0
        }

        .panel>.table-responsive {
            border: 0;
            margin-bottom: 0
        }

        .panel-group {
            margin-bottom: 20px
        }

        .panel-group .panel {
            margin-bottom: 0;
            border-radius: 4px
        }

        .panel-group .panel+.panel {
            margin-top: 5px
        }

        .panel-group .panel-heading {
            border-bottom: 0
        }

        .panel-group .panel-heading+.panel-collapse>.panel-body,
        .panel-group .panel-heading+.panel-collapse>.list-group {
            border-top: 1px solid #ddd
        }

        .panel-group .panel-footer {
            border-top: 0
        }

        .panel-group .panel-footer+.panel-collapse .panel-body {
            border-bottom: 1px solid #ddd
        }

        .panel-default {
            border-color: #ddd
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: #f5f5f5;
            border-color: #ddd
        }

        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ddd
        }

        .panel-default>.panel-heading .badge {
            color: #f5f5f5;
            background-color: #333
        }

        .panel-default>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #ddd
        }

        .panel-primary {
            border-color: #337ab7
        }

        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7
        }

        .panel-primary>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #337ab7
        }

        .panel-primary>.panel-heading .badge {
            color: #337ab7;
            background-color: #fff
        }

        .panel-primary>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #337ab7
        }

        .panel-success {
            border-color: #d6e9c6
        }

        .panel-success>.panel-heading {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6
        }

        .panel-success>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #d6e9c6
        }

        .panel-success>.panel-heading .badge {
            color: #dff0d8;
            background-color: #3c763d
        }

        .panel-success>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #d6e9c6
        }

        .panel-info {
            border-color: #bce8f1
        }

        .panel-info>.panel-heading {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1
        }

        .panel-info>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #bce8f1
        }

        .panel-info>.panel-heading .badge {
            color: #d9edf7;
            background-color: #31708f
        }

        .panel-info>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #bce8f1
        }

        .panel-warning {
            border-color: #faebcc
        }

        .panel-warning>.panel-heading {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc
        }

        .panel-warning>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #faebcc
        }

        .panel-warning>.panel-heading .badge {
            color: #fcf8e3;
            background-color: #8a6d3b
        }

        .panel-warning>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #faebcc
        }

        .panel-danger {
            border-color: #ebccd1
        }

        .panel-danger>.panel-heading {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1
        }

        .panel-danger>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ebccd1
        }

        .panel-danger>.panel-heading .badge {
            color: #f2dede;
            background-color: #a94442
        }

        .panel-danger>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #ebccd1
        }

        .label {
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: bold;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25em
        }

        .label:empty {
            display: none
        }

        .btn .label {
            position: relative;
            top: -1px
        }

        a.label:hover,
        a.label:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer
        }

        .label-default {
            background-color: #777
        }

        .label-default[href]:hover,
        .label-default[href]:focus {
            background-color: #5e5e5e
        }

        .label-primary {
            background-color: #337ab7
        }

        .label-primary[href]:hover,
        .label-primary[href]:focus {
            background-color: #286090
        }

        .label-success {
            background-color: #5cb85c
        }

        .label-success[href]:hover,
        .label-success[href]:focus {
            background-color: #449d44
        }

        .label-info {
            background-color: #5bc0de
        }

        .label-info[href]:hover,
        .label-info[href]:focus {
            background-color: #31b0d5
        }

        .label-warning {
            background-color: #f0ad4e
        }

        .label-warning[href]:hover,
        .label-warning[href]:focus {
            background-color: #ec971f
        }

        .label-danger {
            background-color: #d9534f
        }

        .label-danger[href]:hover,
        .label-danger[href]:focus {
            background-color: #c9302c
        }

        .close {
            float: right;
            font-size: 21px;
            font-weight: bold;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .2;
            filter: alpha(opacity=20)
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .5;
            filter: alpha(opacity=50)
        }

        button.close {
            padding: 0;
            cursor: pointer;
            background: transparent;
            border: 0;
            -webkit-appearance: none
        }

        .modal-open {
            overflow: hidden
        }

        .modal {
            display: none;
            overflow: hidden;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            -webkit-overflow-scrolling: touch;
            outline: 0
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            -o-transform: translate(0, -25%);
            transform: translate(0, -25%);
            -webkit-transition: -webkit-transform .3s ease-out;
            -moz-transition: -moz-transform .3s ease-out;
            -o-transition: -o-transform .3s ease-out;
            transition: transform .3s ease-out
        }

        .modal.in .modal-dialog {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px
        }

        .modal-content {
            position: relative;
            background-color: #fff;
            border: 1px solid #999;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            background-clip: padding-box;
            outline: 0
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0;
            filter: alpha(opacity=0)
        }

        .modal-backdrop.in {
            opacity: .5;
            filter: alpha(opacity=50)
        }

        .modal-header {
            padding: 15px;
            border-bottom: 1px solid #e5e5e5
        }

        .modal-header:before,
        .modal-header:after {
            content: " ";
            display: table
        }

        .modal-header:after {
            clear: both
        }

        .modal-header .close {
            margin-top: -2px
        }

        .modal-title {
            margin: 0;
            line-height: 1.42857
        }

        .modal-body {
            position: relative;
            padding: 15px
        }

        .modal-footer {
            padding: 15px;
            text-align: right;
            border-top: 1px solid #e5e5e5
        }

        .modal-footer:before,
        .modal-footer:after {
            content: " ";
            display: table
        }

        .modal-footer:after {
            clear: both
        }

        .modal-footer .btn+.btn {
            margin-left: 5px;
            margin-bottom: 0
        }

        .modal-footer .btn-group .btn+.btn {
            margin-left: -1px
        }

        .modal-footer .btn-block+.btn-block {
            margin-left: 0
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        @media(min-width:768px) {
            .modal-dialog {
                width: 600px;
                margin: 30px auto
            }

            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
            }

            .modal-sm {
                width: 300px
            }
        }

        @media(min-width:992px) {
            .modal-lg {
                width: 900px
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.42857;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            font-size: 12px;
            opacity: 0;
            filter: alpha(opacity=0)
        }

        .tooltip.in {
            opacity: .9;
            filter: alpha(opacity=90)
        }

        .tooltip.top {
            margin-top: -3px;
            padding: 5px 0
        }

        .tooltip.right {
            margin-left: 3px;
            padding: 0 5px
        }

        .tooltip.bottom {
            margin-top: 3px;
            padding: 5px 0
        }

        .tooltip.left {
            margin-left: -3px;
            padding: 0 5px
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 3px 8px;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 4px
        }

        .tooltip-arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid
        }

        .tooltip.top .tooltip-arrow {
            bottom: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .tooltip.top-left .tooltip-arrow {
            bottom: 0;
            right: 5px;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .tooltip.top-right .tooltip-arrow {
            bottom: 0;
            left: 5px;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .tooltip.right .tooltip-arrow {
            top: 50%;
            left: 0;
            margin-top: -5px;
            border-width: 5px 5px 5px 0;
            border-right-color: #000
        }

        .tooltip.left .tooltip-arrow {
            top: 50%;
            right: 0;
            margin-top: -5px;
            border-width: 5px 0 5px 5px;
            border-left-color: #000
        }

        .tooltip.bottom .tooltip-arrow {
            top: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000
        }

        .tooltip.bottom-left .tooltip-arrow {
            top: 0;
            right: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000
        }

        .tooltip.bottom-right .tooltip-arrow {
            top: 0;
            left: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000
        }

        .carousel {
            position: relative
        }

        .carousel-inner {
            position: relative;
            overflow: hidden;
            width: 100%
        }

        .carousel-inner>.item {
            display: none;
            position: relative;
            -webkit-transition: .6s ease-in-out left;
            -o-transition: .6s ease-in-out left;
            transition: .6s ease-in-out left
        }

        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: auto;
            line-height: 1
        }

        @media all and (transform-3d),
        (-webkit-transform-3d) {
            .carousel-inner>.item {
                -webkit-transition: -webkit-transform .6s ease-in-out;
                -moz-transition: -moz-transform .6s ease-in-out;
                -o-transition: -o-transform .6s ease-in-out;
                transition: transform .6s ease-in-out;
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-perspective: 1000px;
                -moz-perspective: 1000px;
                perspective: 1000px
            }

            .carousel-inner>.item.next,
            .carousel-inner>.item.active.right {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                left: 0
            }

            .carousel-inner>.item.prev,
            .carousel-inner>.item.active.left {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                left: 0
            }

            .carousel-inner>.item.next.left,
            .carousel-inner>.item.prev.right,
            .carousel-inner>.item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0
            }
        }

        .carousel-inner>.active,
        .carousel-inner>.next,
        .carousel-inner>.prev {
            display: block
        }

        .carousel-inner>.active {
            left: 0
        }

        .carousel-inner>.next,
        .carousel-inner>.prev {
            position: absolute;
            top: 0;
            width: 100%
        }

        .carousel-inner>.next {
            left: 100%
        }

        .carousel-inner>.prev {
            left: -100%
        }

        .carousel-inner>.next.left,
        .carousel-inner>.prev.right {
            left: 0
        }

        .carousel-inner>.active.left {
            left: -100%
        }

        .carousel-inner>.active.right {
            left: 100%
        }

        .carousel-control {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 15%;
            opacity: .5;
            filter: alpha(opacity=50);
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
            background-color: transparent
        }

        .carousel-control.left {
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
            background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)
        }

        .carousel-control.right {
            left: auto;
            right: 0;
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
            background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)
        }

        .carousel-control:hover,
        .carousel-control:focus {
            outline: 0;
            color: #fff;
            text-decoration: none;
            opacity: .9;
            filter: alpha(opacity=90)
        }

        .carousel-control .icon-prev,
        .carousel-control .icon-next,
        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right {
            position: absolute;
            top: 50%;
            margin-top: -10px;
            z-index: 5;
            display: inline-block
        }

        .carousel-control .icon-prev,
        .carousel-control .glyphicon-chevron-left {
            left: 50%;
            margin-left: -10px
        }

        .carousel-control .icon-next,
        .carousel-control .glyphicon-chevron-right {
            right: 50%;
            margin-right: -10px
        }

        .carousel-control .icon-prev,
        .carousel-control .icon-next {
            width: 20px;
            height: 20px;
            line-height: 1;
            font-family: serif
        }

        .carousel-control .icon-prev:before {
            content: '‹'
        }

        .carousel-control .icon-next:before {
            content: '›'
        }

        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            z-index: 15;
            width: 60%;
            margin-left: -30%;
            padding-left: 0;
            list-style: none;
            text-align: center
        }

        .carousel-indicators li {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 1px;
            text-indent: -999px;
            border: 1px solid #fff;
            border-radius: 10px;
            cursor: pointer;
            background-color: #000 \9;
            background-color: transparent
        }

        .carousel-indicators .active {
            margin: 0;
            width: 12px;
            height: 12px;
            background-color: #fff
        }

        .carousel-caption {
            position: absolute;
            left: 15%;
            right: 15%;
            bottom: 20px;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
        }

        .carousel-caption .btn {
            text-shadow: none
        }

        @media screen and (min-width:768px) {

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-prev,
            .carousel-control .icon-next {
                width: 30px;
                height: 30px;
                margin-top: -10px;
                font-size: 30px
            }

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .icon-prev {
                margin-left: -10px
            }

            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next {
                margin-right: -10px
            }

            .carousel-caption {
                left: 20%;
                right: 20%;
                padding-bottom: 30px
            }

            .carousel-indicators {
                bottom: 20px
            }
        }

        .clearfix:before,
        .clearfix:after {
            content: " ";
            display: table
        }

        .clearfix:after {
            clear: both
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .pull-right {
            float: right !important
        }

        .pull-left {
            float: left !important
        }

        .hide {
            display: none !important
        }

        .show {
            display: block !important
        }

        .invisible {
            visibility: hidden
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .hidden {
            display: none !important
        }

        .affix {
            position: fixed
        }

        @-ms-viewport {
            width: device-width;
        }

        .visible-xs {
            display: none !important
        }

        .visible-sm {
            display: none !important
        }

        .visible-md {
            display: none !important
        }

        .visible-lg {
            display: none !important
        }

        .visible-xs-block,
        .visible-xs-inline,
        .visible-xs-inline-block,
        .visible-sm-block,
        .visible-sm-inline,
        .visible-sm-inline-block,
        .visible-md-block,
        .visible-md-inline,
        .visible-md-inline-block,
        .visible-lg-block,
        .visible-lg-inline,
        .visible-lg-inline-block {
            display: none !important
        }

        @media(max-width:767px) {
            .visible-xs {
                display: block !important
            }

            table.visible-xs {
                display: table !important
            }

            tr.visible-xs {
                display: table-row !important
            }

            th.visible-xs,
            td.visible-xs {
                display: table-cell !important
            }
        }

        @media(max-width:767px) {
            .visible-xs-block {
                display: block !important
            }
        }

        @media(max-width:767px) {
            .visible-xs-inline {
                display: inline !important
            }
        }

        @media(max-width:767px) {
            .visible-xs-inline-block {
                display: inline-block !important
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .visible-sm {
                display: block !important
            }

            table.visible-sm {
                display: table !important
            }

            tr.visible-sm {
                display: table-row !important
            }

            th.visible-sm,
            td.visible-sm {
                display: table-cell !important
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .visible-sm-block {
                display: block !important
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .visible-sm-inline {
                display: inline !important
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .visible-sm-inline-block {
                display: inline-block !important
            }
        }

        @media(min-width:992px) and (max-width:1199px) {
            .visible-md {
                display: block !important
            }

            table.visible-md {
                display: table !important
            }

            tr.visible-md {
                display: table-row !important
            }

            th.visible-md,
            td.visible-md {
                display: table-cell !important
            }
        }

        @media(min-width:992px) and (max-width:1199px) {
            .visible-md-block {
                display: block !important
            }
        }

        @media(min-width:992px) and (max-width:1199px) {
            .visible-md-inline {
                display: inline !important
            }
        }

        @media(min-width:992px) and (max-width:1199px) {
            .visible-md-inline-block {
                display: inline-block !important
            }
        }

        @media(min-width:1200px) {
            .visible-lg {
                display: block !important
            }

            table.visible-lg {
                display: table !important
            }

            tr.visible-lg {
                display: table-row !important
            }

            th.visible-lg,
            td.visible-lg {
                display: table-cell !important
            }
        }

        @media(min-width:1200px) {
            .visible-lg-block {
                display: block !important
            }
        }

        @media(min-width:1200px) {
            .visible-lg-inline {
                display: inline !important
            }
        }

        @media(min-width:1200px) {
            .visible-lg-inline-block {
                display: inline-block !important
            }
        }

        @media(max-width:767px) {
            .hidden-xs {
                display: none !important
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .hidden-sm {
                display: none !important
            }
        }

        @media(min-width:992px) and (max-width:1199px) {
            .hidden-md {
                display: none !important
            }
        }

        @media(min-width:1200px) {
            .hidden-lg {
                display: none !important
            }
        }

        .visible-print {
            display: none !important
        }

        @media print {
            .visible-print {
                display: block !important
            }

            table.visible-print {
                display: table !important
            }

            tr.visible-print {
                display: table-row !important
            }

            th.visible-print,
            td.visible-print {
                display: table-cell !important
            }
        }

        .visible-print-block {
            display: none !important
        }

        @media print {
            .visible-print-block {
                display: block !important
            }
        }

        .visible-print-inline {
            display: none !important
        }

        @media print {
            .visible-print-inline {
                display: inline !important
            }
        }

        .visible-print-inline-block {
            display: none !important
        }

        @media print {
            .visible-print-inline-block {
                display: inline-block !important
            }
        }

        @media print {
            .hidden-print {
                display: none !important
            }
        }

        @font-face {
            font-family: 'Iconalpha';
            src: url('../../styles/fonts/iconalpha/fonts/Iconalpha.eot?bvq87w');
            src: url('../../styles/fonts/iconalpha/fonts/Iconalpha.eot?bvq87w#iefix') format('embedded-opentype'), url('../../styles/fonts/iconalpha/fonts/Iconalpha.ttf?bvq87w') format('truetype'), url('../../styles/fonts/iconalpha/fonts/Iconalpha.woff?bvq87w') format('woff'), url('../../styles/fonts/iconalpha/fonts/Iconalpha.svg?bvq87w#Iconalpha') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: block
        }

        [class^="icon-"],
        [class*=" icon-"] {
            font-family: 'Iconalpha' !important;
            speak: never;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .icon-Live-chat:before {
            content: ""
        }

        .icon-statement:before {
            content: "";
            color: #3d5ad8
        }

        .icon-under-maintenance:before {
            content: ""
        }

        .icon-clone-account:before {
            content: "";
            color: #055ace
        }

        .icon-link:before {
            content: "";
            color: #0b599c
        }

        .icon-qr-code:before {
            content: ""
        }

        .icon-qr-code-top:before {
            content: "";
            color: #fff
        }

        .icon-review-user:before {
            content: "";
            color: #fff
        }

        .icon-table-filter:before {
            content: "";
            color: #fff
        }

        .icon-ip-share:before {
            content: "";
            color: #942825
        }

        .icon-betstatistics:before {
            content: ""
        }

        .icon-progress:before {
            content: ""
        }

        .icon-contact-info:before {
            content: ""
        }

        .icon-balance:before {
            content: ""
        }

        .icon-chatbot:before {
            content: ""
        }

        .icon-pause-button:before {
            content: ""
        }

        .icon-play-button:before {
            content: ""
        }

        .icon-chatbot-back:before {
            content: ""
        }

        .icon-chatbot-call:before {
            content: ""
        }

        .icon-chatbot-down:before {
            content: ""
        }

        .icon-chatbot-gif:before {
            content: ""
        }

        .icon-chatbot-plus:before {
            content: ""
        }

        .icon-chatbot-voice:before {
            content: ""
        }

        .icon-more:before {
            content: ""
        }

        .icon-key-2:before {
            content: ""
        }

        .icon-user-2:before {
            content: ""
        }

        .icon-downline:before {
            content: ""
        }

        .icon-login:before {
            content: ""
        }

        .icon-onlinelist:before {
            content: ""
        }

        .icon-settings:before {
            content: ""
        }

        .icon-status:before {
            content: ""
        }

        .icon-download:before {
            content: ""
        }

        .icon-letstalk:before {
            content: "";
            color: #0ec02c
        }

        .icon-betlists:before {
            content: ""
        }

        .icon-dropbox:before {
            content: ""
        }

        .icon-back:before {
            content: ""
        }

        .icon-table-sort-asc:before {
            content: ""
        }

        .icon-table-sort-desc:before {
            content: ""
        }

        .icon-table-sort:before {
            content: ""
        }

        .icon-otp:before {
            content: ""
        }

        .icon-normal-column:before {
            content: ""
        }

        .icon-stack-column:before {
            content: ""
        }

        .icon-arrow-up-drop-circle:before {
            content: ""
        }

        .icon-arrow-down-drop-circle:before {
            content: ""
        }

        .icon-menu-up:before {
            content: ""
        }

        .icon-bell:before {
            content: ""
        }

        .icon-edit_done:before {
            content: ""
        }

        .icon-menu-left:before {
            content: ""
        }

        .icon-arrow-right-bold:before {
            content: ""
        }

        .icon-chevron-down:before {
            content: ""
        }

        .icon-chevron-up:before {
            content: ""
        }

        .icon-caret-left:before {
            content: ""
        }

        .icon-caret-right:before {
            content: ""
        }

        .icon-chevron-double-right:before {
            content: ""
        }

        .icon-instruction:before {
            content: ""
        }

        .icon-excel:before {
            content: ""
        }

        .icon-calendar:before {
            content: ""
        }

        .icon-checked-copy:before {
            content: ""
        }

        .icon-account-search:before {
            content: ""
        }

        .icon-account-plus:before {
            content: ""
        }

        .icon-ic_call:before {
            content: ""
        }

        .icon-skype:before {
            content: ""
        }

        .icon-save:before {
            content: ""
        }

        .icon-account-circle:before {
            content: ""
        }

        .icon-announcements:before {
            content: ""
        }

        .icon-account-key:before {
            content: ""
        }

        .icon-betsandforecast:before {
            content: ""
        }

        .icon-arrow-down-bold-circle-outline:before {
            content: ""
        }

        .icon-table-edit:before {
            content: ""
        }

        .icon-star:before {
            content: ""
        }

        .icon-chevron-left:before {
            content: ""
        }

        .icon-skip-previous:before {
            content: ""
        }

        .icon-skip-next:before {
            content: ""
        }

        .icon-chevron-right:before {
            content: ""
        }

        .icon-check-circle:before {
            content: ""
        }

        .icon-alert-circle:before {
            content: ""
        }

        .icon-alert:before {
            content: ""
        }

        .icon-close-circle:before {
            content: ""
        }

        .icon-eye:before {
            content: ""
        }

        .icon-view-grid:before {
            content: ""
        }

        .icon-pencil-box-outline:before {
            content: ""
        }

        .icon-border-color:before {
            content: ""
        }

        .icon-content-copy:before {
            content: ""
        }

        .icon-printer:before {
            content: ""
        }

        .icon-swap-horizontal:before {
            content: ""
        }

        .icon-refresh2:before {
            content: ""
        }

        .icon-details:before {
            content: ""
        }

        .icon-new-box:before {
            content: ""
        }

        .icon-plus-box:before {
            content: ""
        }

        .icon-clock:before {
            content: ""
        }

        .icon-close:before {
            content: ""
        }

        .icon-file-chart:before {
            content: ""
        }

        .icon-help-circle:before {
            content: ""
        }

        .icon-phone:before {
            content: ""
        }

        .icon-information-outline:before {
            content: ""
        }

        .icon-menu-down:before {
            content: ""
        }

        .icon-menu-right:before {
            content: ""
        }

        .icon-chart-bar:before {
            content: ""
        }

        .icon-dots:before {
            content: ""
        }

        .icon-ic_list:before {
            content: ""
        }

        .icon-arrow-down:before {
            content: ""
        }

        .icon-arrow-right:before {
            content: ""
        }

        .icon-forecast:before {
            content: ""
        }

        .icon-memberinfo:before {
            content: ""
        }

        .icon-reports:before {
            content: ""
        }

        .icon-statistics:before {
            content: ""
        }

        .icon-totalbets:before {
            content: ""
        }

        .icon-transfer:before {
            content: ""
        }

        .icon-viewlog:before {
            content: ""
        }

        .icon-key:before {
            content: ""
        }

        .icon-lock:before {
            content: ""
        }

        .icon-refresh:before {
            content: ""
        }

        .icon-user:before {
            content: ""
        }

        .icon-add:before {
            content: ""
        }

        .icon-contactus:before {
            content: ""
        }

        .icon-hamburger:before {
            content: ""
        }

        .icon-help:before {
            content: ""
        }

        .icon-home:before {
            content: ""
        }

        .icon-logout:before {
            content: ""
        }

        .icon-message:before {
            content: ""
        }

        .icon-password:before {
            content: ""
        }

        .icon-profilepic:before {
            content: ""
        }

        .icon-sercuritycode:before {
            content: ""
        }

        .icon-squares:before {
            content: ""
        }

        .icon-time:before {
            content: ""
        }

        .icon-balanceinfo:before {
            content: ""
        }

        .icon-minus:before {
            content: ""
        }

        .icon-plus:before {
            content: ""
        }

        .icon-arrow-down-setting:before {
            content: ""
        }

        .icon-check:before {
            content: ""
        }

        .icon-checkbox:before {
            content: ""
        }

        .icon-edit:before {
            content: ""
        }

        .icon-search:before {
            content: ""
        }

        .icon-setting:before {
            content: ""
        }

        .icon-uncheck:before {
            content: ""
        }

        @font-face {
            font-family: 'Roboto';
            src: url("../../styles/fonts/roboto/Roboto-Regular.woff2") format("woff2");
            src: url("../../styles/fonts/roboto/Roboto-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal
        }

        @font-face {
            font-family: 'Roboto';
            src: url("../../styles/fonts/roboto/Roboto-Medium.woff2") format("woff2");
            src: url("../../styles/fonts/roboto/Roboto-Medium.woff") format("woff");
            font-weight: bold;
            font-style: normal
        }

        @font-face {
            font-family: 'Roboto';
            src: url("../../styles/fonts/roboto/Roboto-Italic.ttf") format("truetype");
            font-weight: normal;
            font-style: italic
        }

        @font-face {
            font-family: 'Roboto Bold';
            src: url("../../styles/fonts/roboto/Roboto-Bold.ttf") format("truetype");
            font-weight: bold;
            font-style: normal
        }

        ::-webkit-scrollbar {
            height: 16px;
            overflow: visible;
            width: 16px
        }

        ::-webkit-scrollbar-button {
            height: 0;
            width: 0
        }

        ::-webkit-scrollbar-track {
            background-clip: padding-box;
            border: solid transparent;
            border-width: 0 0 0 4px
        }

        ::-webkit-scrollbar:vertical {
            width: 11px
        }

        ::-webkit-scrollbar:horizontal {
            height: 11px
        }

        ::-webkit-scrollbar-track:horizontal {
            border-width: 4px 0 0
        }

        ::-webkit-scrollbar-track:hover {
            background-color: rgba(0, 0, 0, .05);
            box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1)
        }

        ::-webkit-scrollbar-track:horizontal:hover {
            box-shadow: inset 0 1px 0 rgba(0, 0, 0, .1)
        }

        ::-webkit-scrollbar-track:active {
            background-color: rgba(0, 0, 0, .05);
            box-shadow: inset 1px 0 0 rgba(0, 0, 0, .14), inset -1px 0 0 rgba(0, 0, 0, .07)
        }

        ::-webkit-scrollbar-track:horizontal:active {
            box-shadow: inset 0 1px 0 rgba(0, 0, 0, .14), inset 0 -1px 0 rgba(0, 0, 0, .07)
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, .2);
            background-clip: padding-box;
            border: solid transparent;
            min-height: 28px;
            padding: 100px 0 0;
            box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07)
        }

        ::-webkit-scrollbar-thumb:horizontal {
            border-width: 6px 1px 1px;
            padding: 0 0 0 100px;
            box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .07)
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, .4);
            box-shadow: inset 1px 1px 1px rgba(0, 0, 0, .25)
        }

        ::-webkit-scrollbar-thumb:active {
            background-color: rgba(0, 0, 0, .5);
            box-shadow: inset 1px 1px 3px rgba(0, 0, 0, .35)
        }

        ::-webkit-scrollbar-corner {
            background: transparent
        }

        html,
        body {
            height: 100%;
            width: 100%
        }

        body {
            font-family: Roboto, Arial, Tahoma, sans-serif;
            font-size: 13px
        }

        .page-title {
            display: table;
            width: 100%;
            border-bottom: 1px solid #cecece;
            color: #9d1c1c;
            font-size: 13px;
            font-weight: 700;
            line-height: 39px;
            margin: 0;
            text-transform: uppercase
        }

        a,
        a:focus,
        a:active,
        a:target,
        a:hover {
            outline: none
        }

        .bold {
            font-weight: bold
        }

        .center {
            text-align: center
        }

        .link,
        .link:hover {
            color: #045ace
        }

        .display-none {
            display: none
        }

        .msg {
            border-width: 1px;
            border-style: solid;
            padding: 8px 8px 8px 36px;
            position: relative;
            margin: 12px 0;
            -webkit-border-radius: 2px;
            -khtml-border-radius: 2px;
            -moz-border-radius: 2px;
            -ms-border-radius: 2px;
            -o-border-radius: 2px;
            border-radius: 2px;
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box
        }

        .msg:before {
            font-family: Iconalpha;
            font-size: 24px;
            line-height: 20px;
            position: absolute;
            left: 8px;
            top: 8px
        }

        .msg-success {
            background-color: #eefbe9;
            border-color: #1db51a;
            color: #52a220
        }

        .msg-success:before {
            content: ''
        }

        .msg-info {
            background-color: #e3f5fa;
            border-color: #3475c7;
            color: #326cb4
        }

        .msg-info:before {
            content: ''
        }

        .msg-warning {
            background-color: #faf8dd;
            border-color: #bcba7d;
            color: #7e3d00
        }

        .msg-warning:before {
            content: '';
            color: #f08708
        }

        .msg-error {
            background-color: #fadddd;
            border-color: #ef2d2d;
            color: #fe0000
        }

        .msg-error:before {
            content: ''
        }

        .block-icon-small {
            display: inline-block;
            height: 16px;
            width: 16px;
            background: url(../../styles/images/ajax-loader-8.gif) no-repeat;
            vertical-align: middle
        }

        .blockOverlay {
            background: #fff;
            opacity: .6
        }

        .blockMsg {
            width: 100px;
            height: 100px;
            background: url(../../styles/images/ajax-loader.gif) center center no-repeat;
            left: 47% !important
        }

        input[type=submit],
        input[type=reset] {
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px
        }

        .btn-default,
        .btn-submit,
        input[type=reset],
        .btn-reset,
        .btn-refresh,
        .btn-cancel,
        .btn-remove {
            border: none;
            cursor: pointer;
            height: 28px;
            outline: none;
            margin-right: 8px;
            padding-left: 16px;
            padding-right: 16px;
            white-space: nowrap;
            -webkit-appearance: none;
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -khtml-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -ms-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -o-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box
        }

        [disabled].btn-default,
        [disabled].btn-submit,
        input[disabled][type=reset],
        [disabled].btn-reset,
        [disabled].btn-refresh,
        [disabled].btn-cancel,
        [disabled].btn-remove,
        .btn-default .disabled,
        .btn-submit .disabled,
        input[type=reset] .disabled,
        .btn-reset .disabled,
        .btn-refresh .disabled,
        .btn-cancel .disabled,
        .btn-remove .disabled {
            opacity: .4;
            cursor: not-allowed
        }

        .btn-default {
            background-color: #e1e1e1;
            color: #212121
        }

        .btn-default:hover,
        .btn-default:active {
            color: #212121;
            background-color: #d4d4d4
        }

        .btn-default:hover[disabled],
        .btn-default:hover .disabled,
        .btn-default:active[disabled],
        .btn-default:active .disabled {
            background-color: #e1e1e1;
            color: #212121
        }

        .btn-default[disabled] {
            color: #212121
        }

        .btn-submit {
            background: #0b599c;
            color: #fff
        }

        .btn-submit:hover,
        .btn-submit:active,
        .btn-submit:focus {
            background-color: #094b84;
            color: #fff
        }

        .btn-submit:hover[disabled],
        .btn-submit:hover .disabled,
        .btn-submit:active[disabled],
        .btn-submit:active .disabled,
        .btn-submit:focus[disabled],
        .btn-submit:focus .disabled {
            background-color: #0b599c;
            color: #fff
        }

        .btn-submit[disabled] {
            color: #fff
        }

        input[type=reset],
        .btn-reset {
            background-color: #f6731b;
            color: #fff;
            outline: none
        }

        input[type=reset]:hover,
        input[type=reset]:active,
        .btn-reset:hover,
        .btn-reset:active {
            color: #fff;
            background-color: #ee6509
        }

        input[type=reset]:hover[disabled],
        input[type=reset]:hover .disabled,
        input[type=reset]:active[disabled],
        input[type=reset]:active .disabled,
        .btn-reset:hover[disabled],
        .btn-reset:hover .disabled,
        .btn-reset:active[disabled],
        .btn-reset:active .disabled {
            background-color: #f6731b;
            color: #fff
        }

        input[type=reset][disabled],
        .btn-reset[disabled] {
            color: #fff
        }

        .btn-refresh {
            background-color: #1bac69;
            color: #fff
        }

        .btn-refresh:hover,
        .btn-refresh:active,
        .btn-refresh:focus {
            background-color: #18965c;
            color: #fff
        }

        .btn-refresh:hover[disabled],
        .btn-refresh:hover .disabled,
        .btn-refresh:active[disabled],
        .btn-refresh:active .disabled,
        .btn-refresh:focus[disabled],
        .btn-refresh:focus .disabled {
            background-color: #1bac69;
            color: #fff
        }

        .btn-refresh[disabled] {
            color: #fff
        }

        .btn-cancel {
            background-color: #909090;
            color: #fff
        }

        .btn-cancel:hover,
        .btn-cancel:active,
        .btn-cancel:focus {
            background-color: #838383
        }

        .btn-cancel:hover[disabled],
        .btn-cancel:hover .disabled,
        .btn-cancel:active[disabled],
        .btn-cancel:active .disabled,
        .btn-cancel:focus[disabled],
        .btn-cancel:focus .disabled {
            background-color: #909090;
            color: #fff
        }

        .btn-cancel[disabled] {
            color: #fff
        }

        .btn-remove {
            background-color: #930a14;
            color: #fff
        }

        .btn-remove:hover,
        .btn-remove:active,
        .btn-remove:focus {
            background-color: #7b0811
        }

        .btn-remove:hover[disabled],
        .btn-remove:hover .disabled,
        .btn-remove:active[disabled],
        .btn-remove:active .disabled,
        .btn-remove:focus[disabled],
        .btn-remove:focus .disabled {
            background-color: #930a14;
            color: #fff
        }

        .btn-remove[disabled] {
            color: #fff
        }

        .btn:focus,
        .btn:active,
        .btn:visited {
            outline: none
        }

        .breadcrumb {
            background: none;
            border-bottom: 1px solid #cecece;
            border-radius: 0;
            overflow: hidden;
            padding: 10px 0 5px;
            margin: 0
        }

        .breadcrumb li {
            color: #9d1c1c;
            font-weight: 700;
            text-transform: uppercase;
            position: relative
        }

        .breadcrumb li+li:before {
            content: '❯';
            color: #333;
            padding: 0 8px
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin: 0;
            position: relative;
            top: 2px;
            margin-right: 5px;
            cursor: pointer
        }

        input[type=checkbox].disabled,
        input[type=checkbox]:disabled,
        input[type=radio].disabled,
        input[type=radio]:disabled {
            cursor: not-allowed
        }

        label[disabled] {
            cursor: not-allowed;
            opacity: .6
        }

        select {
            border: none;
            color: #333;
            height: 28px;
            padding: 4px 8px;
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -khtml-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -ms-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -o-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box
        }

        select option {
            padding: 4px
        }

        select.hasBorder {
            border: 1px solid #dfdfdf
        }

        select[disabled],
        select .disabled {
            opacity: .4;
            cursor: not-allowed
        }

        .dropdown,
        .dropup {
            display: inline-block
        }

        .dropdown .dropdown-menu,
        .dropup .dropdown-menu {
            border: 1px solid #dfdfdf;
            padding: 0;
            border-radius: 0;
            min-width: 78px
        }

        .dropdown .dropdown-menu>li>a,
        .dropup .dropdown-menu>li>a {
            padding: 8px 15px;
            font-size: 13px
        }

        .dropdown .dropdown-menu>li a:hover,
        .dropup .dropdown-menu>li a:hover {
            color: #333;
            background: #ddd
        }

        .dropdown .dropdown-toggle,
        .dropup .dropdown-toggle {
            padding-right: 30px
        }

        .dropdown .btn-default:active,
        .dropdown .btn-default.active,
        .dropdown.open>.btn-default.dropdown-toggle,
        .dropup .btn-default:active,
        .dropup .btn-default.active,
        .dropup.open>.btn-default.dropdown-toggle {
            color: #333
        }

        .dropdown .caret {
            top: 13px;
            right: 18px;
            position: absolute
        }

        .dropdown .btn.btn-countdown {
            background-color: #eee;
            color: #212121;
            padding: 6px 30px 6px 10px;
            font-size: 13px
        }

        .dropdown .btn.btn-countdown:hover {
            background-color: #e1e1e1
        }

        .dropdown .btn.btn-countdown .icon-refresh:before {
            content: '';
            font-family: 'Iconalpha';
            font-size: 20px;
            position: relative;
            color: #212121;
            left: -4px;
            top: -2px
        }

        .dropdown .btn.btn-countdown #ddlRefresh {
            position: relative;
            top: -6px
        }

        .dropdown .dropdown-menu {
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23);
            -khtml-box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23);
            -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23);
            -ms-box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23);
            -o-box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23);
            box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23)
        }

        .dropdown #refresh-value>li>a {
            padding: 5px 32px
        }

        .dropup .caret {
            top: 13px;
            right: 17px;
            position: absolute
        }

        .dropup .dropdown-menu {
            -webkit-box-shadow: 0 -3px 6px rgba(0, 0, 0, .16), 0 -3px 6px rgba(0, 0, 0, .23);
            -khtml-box-shadow: 0 -3px 6px rgba(0, 0, 0, .16), 0 -3px 6px rgba(0, 0, 0, .23);
            -moz-box-shadow: 0 -3px 6px rgba(0, 0, 0, .16), 0 -3px 6px rgba(0, 0, 0, .23);
            -ms-box-shadow: 0 -3px 6px rgba(0, 0, 0, .16), 0 -3px 6px rgba(0, 0, 0, .23);
            -o-box-shadow: 0 -3px 6px rgba(0, 0, 0, .16), 0 -3px 6px rgba(0, 0, 0, .23);
            box-shadow: 0 -3px 6px rgba(0, 0, 0, .16), 0 -3px 6px rgba(0, 0, 0, .23);
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px
        }

        .dropdown-menu {
            background-clip: border-box
        }

        .filter {
            padding-top: 15px;
            position: relative
        }

        .filter .form-group {
            display: inline-block;
            margin: 0 16px 15px 0;
            vertical-align: middle
        }

        .filter .form-group label {
            font-weight: normal;
            margin-right: 5px;
            max-width: none
        }

        .filter .form-group .control {
            display: inline-block;
            width: 200px;
            vertical-align: middle;
            margin-left: 5px
        }

        .filter .form-group .control.date {
            width: 130px
        }

        .filter .form-group .control .form-control {
            padding-top: 0;
            padding-bottom: 0
        }

        .filter [class^="col-"] {
            margin-bottom: 15px
        }

        .filter .txt-red {
            color: #f00
        }

        .form-group {
            margin-bottom: 16px
        }

        .form-control:focus {
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -khtml-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -ms-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -o-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .3)
        }

        .form-validation .txt.error~.validation,
        .form-validation .txt.valid~.validation {
            font-family: 'Iconalpha';
            font-style: normal
        }

        .form-validation .form-group {
            position: relative
        }

        .form-validation .txt.error~.validation,
        .form-validation .txt.valid~.validation {
            font-size: 18px;
            right: 8px;
            top: 25px;
            position: absolute
        }

        .form-validation .txt.error~.validation:before {
            content: '';
            color: #fe0000
        }

        .form-validation .txt.valid~.validation:before {
            content: '';
            color: #52a220
        }

        input[type='text'],
        input[type='password'],
        input[type='email'],
        input[type='tel'],
        input[type="number"] {
            height: 28px;
            line-height: 28px;
            border: none;
            outline: none;
            padding-left: 8px;
            padding-right: 8px;
            width: 120px;
            -webkit-appearance: none;
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -khtml-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -ms-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -o-box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 13px
        }

        input[type='text'].hasBorder,
        input[type='password'].hasBorder,
        input[type='email'].hasBorder,
        input[type='tel'].hasBorder,
        input[type="number"].hasBorder {
            border: 1px solid #dfdfdf
        }

        input[type='text']::-ms-clear,
        input[type='password']::-ms-clear,
        input[type='email']::-ms-clear,
        input[type='tel']::-ms-clear,
        input[type="number"]::-ms-clear {
            display: none
        }

        input[type='text'][disabled],
        input[type='text'] .disabled,
        input[type='password'][disabled],
        input[type='password'] .disabled,
        input[type='email'][disabled],
        input[type='email'] .disabled,
        input[type='tel'][disabled],
        input[type='tel'] .disabled,
        input[type="number"][disabled],
        input[type="number"] .disabled {
            opacity: .4;
            cursor: not-allowed
        }

        input[type="number"] {
            -moz-appearance: textfield
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        input[type="number"],
        input[type="tel"] {
            font-family: 'password';
            font-size: 10px
        }

        input[type="number"].show-hint,
        input[type="tel"].show-hint {
            font-family: inherit;
            font-size: inherit
        }

        input[type="number"]::-webkit-input-placeholder,
        input[type="tel"]::-webkit-input-placeholder {
            font-family: Roboto, Arial, Tahoma, sans-serif;
            font-size: 13px
        }

        input[type="number"]::-moz-placeholder,
        input[type="tel"]::-moz-placeholder {
            font-family: Roboto, Arial, Tahoma, sans-serif;
            font-size: 13px
        }

        input[type="number"]:-ms-input-placeholder,
        input[type="tel"]:-ms-input-placeholder {
            font-family: Roboto, Arial, Tahoma, sans-serif;
            font-size: 13px
        }

        input[type=submit],
        input[type=reset] {
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px
        }

        .btn-default,
        .btn-submit,
        input[type=reset],
        .btn-reset,
        .btn-refresh,
        .btn-cancel,
        .btn-remove {
            border: none;
            cursor: pointer;
            height: 28px;
            outline: none;
            margin-right: 8px;
            padding-left: 16px;
            padding-right: 16px;
            white-space: nowrap;
            -webkit-appearance: none;
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -khtml-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -ms-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -o-box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box
        }

        [disabled].btn-default,
        [disabled].btn-submit,
        input[disabled][type=reset],
        [disabled].btn-reset,
        [disabled].btn-refresh,
        [disabled].btn-cancel,
        [disabled].btn-remove,
        .btn-default .disabled,
        .btn-submit .disabled,
        input[type=reset] .disabled,
        .btn-reset .disabled,
        .btn-refresh .disabled,
        .btn-cancel .disabled,
        .btn-remove .disabled {
            opacity: .4;
            cursor: not-allowed
        }

        .btn-default {
            background-color: #e1e1e1;
            color: #212121
        }

        .btn-default:hover,
        .btn-default:active {
            color: #212121;
            background-color: #d4d4d4
        }

        .btn-default:hover[disabled],
        .btn-default:hover .disabled,
        .btn-default:active[disabled],
        .btn-default:active .disabled {
            background-color: #e1e1e1;
            color: #212121
        }

        .btn-default[disabled] {
            color: #212121
        }

        .btn-submit {
            background: #0b599c;
            color: #fff
        }

        .btn-submit:hover,
        .btn-submit:active,
        .btn-submit:focus {
            background-color: #094b84;
            color: #fff
        }

        .btn-submit:hover[disabled],
        .btn-submit:hover .disabled,
        .btn-submit:active[disabled],
        .btn-submit:active .disabled,
        .btn-submit:focus[disabled],
        .btn-submit:focus .disabled {
            background-color: #0b599c;
            color: #fff
        }

        .btn-submit[disabled] {
            color: #fff
        }

        input[type=reset],
        .btn-reset {
            background-color: #f6731b;
            color: #fff;
            outline: none
        }

        input[type=reset]:hover,
        input[type=reset]:active,
        .btn-reset:hover,
        .btn-reset:active {
            color: #fff;
            background-color: #ee6509
        }

        input[type=reset]:hover[disabled],
        input[type=reset]:hover .disabled,
        input[type=reset]:active[disabled],
        input[type=reset]:active .disabled,
        .btn-reset:hover[disabled],
        .btn-reset:hover .disabled,
        .btn-reset:active[disabled],
        .btn-reset:active .disabled {
            background-color: #f6731b;
            color: #fff
        }

        input[type=reset][disabled],
        .btn-reset[disabled] {
            color: #fff
        }

        .btn-refresh {
            background-color: #1bac69;
            color: #fff
        }

        .btn-refresh:hover,
        .btn-refresh:active,
        .btn-refresh:focus {
            background-color: #18965c;
            color: #fff
        }

        .btn-refresh:hover[disabled],
        .btn-refresh:hover .disabled,
        .btn-refresh:active[disabled],
        .btn-refresh:active .disabled,
        .btn-refresh:focus[disabled],
        .btn-refresh:focus .disabled {
            background-color: #1bac69;
            color: #fff
        }

        .btn-refresh[disabled] {
            color: #fff
        }

        .btn-cancel {
            background-color: #909090;
            color: #fff
        }

        .btn-cancel:hover,
        .btn-cancel:active,
        .btn-cancel:focus {
            background-color: #838383
        }

        .btn-cancel:hover[disabled],
        .btn-cancel:hover .disabled,
        .btn-cancel:active[disabled],
        .btn-cancel:active .disabled,
        .btn-cancel:focus[disabled],
        .btn-cancel:focus .disabled {
            background-color: #909090;
            color: #fff
        }

        .btn-cancel[disabled] {
            color: #fff
        }

        .btn-remove {
            background-color: #930a14;
            color: #fff
        }

        .btn-remove:hover,
        .btn-remove:active,
        .btn-remove:focus {
            background-color: #7b0811
        }

        .btn-remove:hover[disabled],
        .btn-remove:hover .disabled,
        .btn-remove:active[disabled],
        .btn-remove:active .disabled,
        .btn-remove:focus[disabled],
        .btn-remove:focus .disabled {
            background-color: #930a14;
            color: #fff
        }

        .btn-remove[disabled] {
            color: #fff
        }

        .btn:focus,
        .btn:active,
        .btn:visited {
            outline: none
        }

        .modal[id^="page-popup"] {
            position: absolute !important
        }

        #page-popup,
        .modal {
            height: auto;
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, .19), 0 6px 6px rgba(0, 0, 0, .23);
            -khtml-box-shadow: 0 10px 20px rgba(0, 0, 0, .19), 0 6px 6px rgba(0, 0, 0, .23);
            -moz-box-shadow: 0 10px 20px rgba(0, 0, 0, .19), 0 6px 6px rgba(0, 0, 0, .23);
            -ms-box-shadow: 0 10px 20px rgba(0, 0, 0, .19), 0 6px 6px rgba(0, 0, 0, .23);
            -o-box-shadow: 0 10px 20px rgba(0, 0, 0, .19), 0 6px 6px rgba(0, 0, 0, .23);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .19), 0 6px 6px rgba(0, 0, 0, .23)
        }

        #modal-draggable-mask {
            border: dashed 2px #dfdfdf;
            background-color: transparent;
            z-index: 2000;
            border-style: dotted;
            cursor: move
        }

        .modal-dialog {
            margin: 0 auto
        }

        .modal-dialog.ex-modal {
            width: 100%;
            height: auto
        }

        .modal-content {
            border-color: #dfdfdf;
            margin: auto;
            height: 100%;
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px
        }

        .modal-content .modal-header {
            padding: 0 16px;
            border-bottom: none
        }

        .modal-content .modal-header .icon-close {
            margin-right: 0;
            color: #333;
            opacity: 1;
            font-size: 18px;
            top: 6px;
            width: 60px;
            height: 30px;
            left: 10px
        }

        .modal-content .modal-header .icon-close:before {
            position: relative;
            left: 13px
        }

        .modal-content .modal-header .modal-title {
            border-bottom: 1px solid #dfdfdf;
            color: #333;
            font-weight: 700;
            padding: 10px 0;
            font-size: 13px;
            cursor: move
        }

        .modal-content .modal-header .modal-title .popup-title:empty {
            height: 20px;
            display: block
        }

        .modal-content .modal-header .modal-title .icon-info {
            color: #0f82c4;
            font-size: 18px;
            margin-left: 8px;
            position: absolute;
            text-decoration: none
        }

        .modal-content .modal-body {
            padding: 2px 16px 8px;
            line-height: 22px;
            overflow-y: hidden;
            overflow-x: auto
        }

        .modal-content .modal-footer {
            border-top: none;
            padding: 12px 16px 20px
        }

        .modal-content .modal-footer button:last-child {
            margin-right: 0
        }

        @media only screen and (max-device-width:767px) {
            .popup-guidelines {
                width: 95% !important
            }

            .modal-content .modal-header .modal-title {
                font-size: 18.57143px
            }

            .modal-content .modal-header .icon-close {
                top: 8px
            }

            .modal-content .modal-header .icon-close:before {
                font-size: 25.71429px
            }
        }

        .bootbox .close {
            color: #333;
            opacity: 1;
            position: relative
        }

        .bootbox .modal-header .close {
            top: 9px;
            right: 0
        }

        .bootbox .modal-header+.modal-body {
            padding-top: 16px
        }

        .bootbox .modal-body {
            padding: 40px 16px 16px;
            font-size: 14px
        }

        .bootbox .modal-body .close {
            top: -18px;
            right: -4px
        }

        .bootbox .modal-dialog {
            margin: 0;
            width: 500px;
            display: table
        }

        .bootbox .modal-footer {
            border-top: none;
            padding-bottom: 4px
        }

        .bootbox .modal-footer .btn.btn-primary:not(.btn-raised) {
            color: #045ace
        }

        .bootbox .modal-footer .btn {
            -webkit-border-radius: 1px;
            -khtml-border-radius: 1px;
            -moz-border-radius: 1px;
            -ms-border-radius: 1px;
            -o-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 0 0 transparent;
            -khtml-box-shadow: 0 0 0 transparent;
            -moz-box-shadow: 0 0 0 transparent;
            -ms-box-shadow: 0 0 0 transparent;
            -o-box-shadow: 0 0 0 transparent;
            box-shadow: 0 0 0 transparent;
            border: none;
            background: none;
            color: #045ace;
            font-weight: bold;
            height: 32px;
            line-height: 32px;
            padding: 0 16px;
            margin: 8px;
            min-width: 86px;
            text-transform: capitalize;
            text-transform: uppercase
        }

        .bootbox .modal-footer .btn:hover,
        .bootbox .modal-footer .btn:focus {
            background-color: #ececec
        }

        .bootbox .modal-footer .btn.btn-default {
            color: #333;
            float: right
        }

        @media \0screen\,screen\9 {
            .modal-dialog {
                margin: 0 auto !important
            }
        }

        @media only screen and (max-device-width:767px) {

            .bootbox-confirm.in,
            .bootbox-alert.in,
            .modal.in.modal-account-info {
                z-index: 10000
            }

            .modal.in.modal-account-info,
            .bootbox-confirm.in.bootbox-account-info .modal-dialog {
                left: 5% !important;
                right: 5% !important;
                width: 90% !important
            }

            .modal.in.modal-account-info {
                box-shadow: 0 14.28571px 28.57143px rgba(0, 0, 0, .19), 0 8.57143px 8.57143px rgba(0, 0, 0, .23)
            }

            .modal.in.modal-account-info .modal-content .modal-header .modal-title {
                padding: 14.28571px 0;
                font-size: 18.57143px
            }

            .modal.in.modal-account-info .modal-content .modal-header .icon-close {
                font-size: 25.71429px;
                top: 8.57143px;
                width: 85.71429px;
                height: 42.85714px;
                left: 14.28571px
            }

            .bootbox-confirm.in.bootbox-account-info .modal-dialog {
                position: absolute;
                font-size: 18.57143px
            }

            .bootbox-confirm.in.bootbox-account-info .modal-body {
                padding: 57.14286px 22.85714px 22.85714px;
                font-size: 20px;
                line-height: 31.42857px;
                box-sizing: border-box
            }

            .bootbox-confirm.in.bootbox-account-info .modal-footer .btn {
                height: 45.71429px;
                line-height: 45.71429px;
                padding: 0 22.85714px;
                margin: 11.42857px;
                min-width: 122.85714px;
                font-size: 20px
            }

            .bootbox-confirm.in.bootbox-account-info .modal-footer {
                padding: 17.14286px 22.85714px 5.71429px 28.57143px
            }

            .bootbox-confirm.in.bootbox-account-info button.close {
                top: -25.71429px;
                right: -5.71429px;
                font-size: 30px
            }
        }

        .modal.parlay-max-payout-popup {
            max-width: 1048px
        }

        @media only screen and (max-device-width:767px) {
            .modal.parlay-max-payout-popup {
                width: calc(100% - 14.28571px) !important
            }
        }

        @media only screen and (min-device-width:768px) {
            .sidebar~.modal.parlay-max-payout-popup {
                width: calc(100% - 300px) !important
            }

            .sidebar.collapsed~.modal.parlay-max-payout-popup {
                width: calc(100% - 40px) !important
            }
        }

        @media only screen and (min-device-width:768px) and (max-device-width:1024px) {
            .sidebar.collapsed~.modal.parlay-max-payout-popup {
                width: calc(100% - 56px) !important
            }
        }

        .nav-tabs>li {
            margin-right: 12px
        }

        .nav-tabs>li>a:hover {
            background: none;
            border-color: transparent;
            cursor: pointer
        }

        .nav.nav-tabs>li>a {
            padding: 10px 20px 8px;
            border: none;
            font-size: 13px
        }

        .nav.nav-tabs>li:after {
            -webkit-transition: width .5s ease, background-color .5s ease;
            -khtml-transition: width .5s ease, background-color .5s ease;
            -moz-transition: width .5s ease, background-color .5s ease;
            -ms-transition: width .5s ease, background-color .5s ease;
            -o-transition: width .5s ease, background-color .5s ease;
            transition: width .5s ease, background-color .5s ease;
            content: '';
            display: block;
            height: 3px;
            width: 0;
            background: transparent
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            border: none;
            color: #666;
            background: transparent
        }

        .nav.nav-tabs>li.active:after,
        .nav.nav-tabs>li:hover:after {
            width: 100%;
            background: #666
        }

        .nav-tabs>li>a {
            color: #666;
            font-weight: bold;
            outline: none
        }

        @media only screen and (max-device-width:1024px) {
            .nav.nav-tabs>li:hover:after {
                width: 0
            }

            .nav.nav-tabs>li.active:after {
                width: 100%
            }
        }

        @-webkit-keyframes ripple {
            0% {
                -webkit-transform: scale(0);
                -khtml-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0)
            }

            20% {
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1)
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1)
            }
        }

        @-moz-keyframes ripple {
            0% {
                -webkit-transform: scale(0);
                -khtml-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0)
            }

            20% {
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1)
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1)
            }
        }

        @-o-keyframes ripple {
            0% {
                -webkit-transform: scale(0);
                -khtml-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0);
            }

            20% {
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes ripple {
            0% {
                -webkit-transform: scale(0);
                -khtml-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0)
            }

            20% {
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1)
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                -khtml-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1)
            }
        }

        .icon {
            position: relative;
            cursor: pointer;
            font-size: 16px;
            margin-right: 5px
        }

        .icon-add {
            display: inline-block;
            padding: 8px;
            font-size: 16px;
            left: 3px;
            margin-right: 0
        }

        .icon-flag:before {
            background-image: url("../../styles/images/flag.png");
            background-image: url("../../styles/images/flag.svg");
            content: '';
            display: inline-block;
            background-size: 32px 36px;
            width: 16px;
            height: 12px
        }

        .langFlag-en-us:before {
            background-position: -16px -24px
        }

        .langFlag-zh-tw:before {
            background-position: 0 -12px
        }

        .langFlag-zh-cn:before {
            background-position: 0 -12px
        }

        .langFlag-ko-kr:before {
            background-position: -16px 0
        }

        .langFlag-th-th:before {
            background-position: -16px -12px
        }

        .langFlag-ja-jp:before {
            background-position: 0 0
        }

        .langFlag-vi-vn:before {
            background-position: 0 -24px
        }

        .icon-time {
            cursor: default;
            top: 2px
        }

        .icon-edit {
            position: relative;
            font-size: 12px;
            display: inline-block
        }

        .icon-edit:after {
            position: relative;
            content: '';
            display: block
        }

        .icon-edit:hover:after {
            position: absolute;
            left: 0;
            top: -3px;
            width: 26px;
            height: 26px;
            margin-left: -7px;
            margin-top: -4px;
            background: #b1aea3;
            border-radius: 100%;
            opacity: 1;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .icon-refresh {
            position: relative;
            font-size: 12px;
            display: inline-block;
            color: #18910b;
            font-weight: bold
        }

        .icon-refresh:after {
            position: relative;
            content: '';
            display: block
        }

        .icon-refresh:hover:after {
            position: absolute;
            left: 0;
            top: -3px;
            width: 26px;
            height: 26px;
            margin-left: -7px;
            margin-top: -4px;
            background: #b1aea3;
            border-radius: 100%;
            opacity: 1;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .icon-information-outline {
            position: relative;
            display: inline-block;
            font-size: 18px;
            vertical-align: middle;
            color: #0b599c;
            cursor: pointer;
            float: left
        }

        .icon-information-outline:after {
            position: relative;
            content: '';
            display: block
        }

        .icon-information-outline:hover:after {
            position: absolute;
            left: 0;
            top: -2px;
            width: 30px;
            height: 30px;
            margin-left: -6px;
            margin-top: -4px;
            background: #b1aea3;
            border-radius: 100%;
            opacity: 1;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .icon-bell {
            position: relative
        }

        .icon-bell:after {
            position: relative;
            content: '';
            display: block
        }

        .icon-bell:hover:after {
            position: absolute;
            left: 0;
            top: 5px;
            width: 32px;
            height: 32px;
            margin-left: 0;
            margin-top: -4px;
            background: #b1aea3;
            border-radius: 100%;
            opacity: 1;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .icon-logout,
        .setting>a,
        .icon-collapse,
        .icon-home,
        .icon-add {
            position: relative
        }

        .icon-logout:after,
        .setting>a:after,
        .icon-collapse:after,
        .icon-home:after,
        .icon-add:after {
            position: relative;
            content: '';
            display: block
        }

        .icon-logout:hover:after,
        .setting>a:hover:after,
        .icon-collapse:hover:after,
        .icon-home:hover:after,
        .icon-add:hover:after {
            position: absolute;
            left: 0;
            top: 4px;
            width: 32px;
            height: 32px;
            margin-left: 0;
            margin-top: -4px;
            background: #b1aea3;
            border-radius: 100%;
            opacity: 1;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .icon-excel {
            position: relative;
            cursor: pointer;
            color: #1f7244;
            font-size: 19px;
            vertical-align: middle;
            height: 28px;
            float: left
        }

        .icon-excel:after {
            position: relative;
            content: '';
            display: block
        }

        .icon-excel:hover:after {
            position: absolute;
            left: 0;
            top: 0;
            width: 36px;
            height: 36px;
            margin-left: -11px;
            margin-top: -4px;
            background: #b1aea3;
            border-radius: 100%;
            opacity: 1;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .icon-excel:before {
            position: relative;
            top: 5px
        }

        .icon-printer {
            position: relative;
            color: #888;
            cursor: pointer;
            display: inline-block;
            font-size: 18px;
            vertical-align: middle
        }

        .icon-printer:after {
            position: relative;
            content: '';
            display: block
        }

        .icon-printer:hover:after {
            position: absolute;
            left: 0;
            top: -7px;
            width: 32px;
            height: 32px;
            margin-left: -7px;
            margin-top: 0;
            background: #b1aea3;
            border-radius: 100%;
            opacity: 1;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .icon-locked {
            background: url("../../styles/images/components/unlock.svg") center center no-repeat;
            cursor: pointer;
            display: inline-block;
            width: 24px;
            height: 24px;
            vertical-align: middle
        }

        @media only screen and (max-device-width:1024px) {
            .icon {
                font-size: 20px
            }

            .icon-logout,
            .icon-collapse,
            .icon-add {
                position: relative
            }

            .icon-logout:after,
            .icon-collapse:after,
            .icon-add:after {
                position: relative;
                content: '';
                display: block
            }

            .icon-logout:hover:after,
            .icon-collapse:hover:after,
            .icon-add:hover:after {
                position: absolute;
                left: 0;
                top: 3px;
                width: 40px;
                height: 40px;
                margin-left: -2px;
                margin-top: -4px;
                background: #b1aea3;
                border-radius: 100%;
                opacity: 1;
                -webkit-transform: scale(0);
                -khtml-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0);
                -moz-animation: ripple 1s ease-out;
                -o-animation: ripple 1s ease-out;
                -webkit-animation: ripple 1s ease-out;
                animation: ripple 1s ease-out
            }

            .icon-home {
                position: relative
            }

            .icon-home:after {
                position: relative;
                content: '';
                display: block
            }

            .icon-home:hover:after {
                position: absolute;
                left: 0;
                top: 6px;
                width: 40px;
                height: 40px;
                margin-left: 2px;
                margin-top: -4px;
                background: #b1aea3;
                border-radius: 100%;
                opacity: 1;
                -webkit-transform: scale(0);
                -khtml-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0);
                -moz-animation: ripple 1s ease-out;
                -o-animation: ripple 1s ease-out;
                -webkit-animation: ripple 1s ease-out;
                animation: ripple 1s ease-out
            }
        }

        @media \0screen\,screen\9 {

            .icon-logout,
            .setting>a,
            .icon-collapse,
            .icon-home,
            .icon-add,
            .icon-squares {
                position: relative
            }

            .icon-logout:after,
            .setting>a:after,
            .icon-collapse:after,
            .icon-home:after,
            .icon-add:after,
            .icon-squares:after {
                position: relative;
                content: '';
                display: block
            }

            .icon-logout:hover:after,
            .setting>a:hover:after,
            .icon-collapse:hover:after,
            .icon-home:hover:after,
            .icon-add:hover:after,
            .icon-squares:hover:after {
                position: absolute;
                left: 0;
                top: 2px;
                width: 26px;
                height: 26px;
                margin-left: -3px;
                margin-top: -4px;
                background: transparent;
                border-radius: 100%;
                opacity: 1;
                -webkit-transform: scale(0);
                -khtml-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0);
                -moz-animation: ripple 1s ease-out;
                -o-animation: ripple 1s ease-out;
                -webkit-animation: ripple 1s ease-out;
                animation: ripple 1s ease-out
            }
        }

        @font-face {
            font-family: 'password';
            src: url("../../styles/fonts/password/password.ttf") format("ttf");
            src: url("../../styles/fonts/password/password.woff2") format("woff2");
            src: url("../../styles/fonts/password/password.woff") format("woff");
            font-weight: normal;
            font-style: normal
        }

        body {
            background-color: transparent;
            font-size: 13px;
            font-family: Roboto, Arial, Tahoma, helvetica, sans-serif;
            line-height: 20px
        }

        a {
            text-decoration: none
        }

        .tbl-betlist {
            border-collapse: collapse;
            background-color: #fff;
            font-size: 13px;
            text-align: left;
            width: 100%
        }

        .tbl-betlist th,
        .tbl-betlist td {
            height: 28px;
            padding: 4px 8px;
            border: solid 1px #d1d1d1;
            white-space: nowrap;
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box
        }

        .tbl-betlist th {
            font-weight: normal;
            color: #fff;
            background: #666;
            text-align: center
        }

        .tbl-betlist td {
            color: #333;
            vertical-align: middle;
            text-align: right
        }

        .tbl-betlist td.bl_evt {
            white-space: normal
        }

        .tbl-betlist td.choice-block {
            white-space: normal
        }

        .tbl-betlist tbody tr:hover td {
            background-color: #f8eb95
        }

        .tbl-betlist tbody tr#tr_footer:hover td {
            background-color: #e8dfca
        }

        .tbl-betlist .col-number {
            width: 20px
        }

        .tbl-betlist .col-transtime,
        .tbl-betlist .col-member {
            width: 110px
        }

        .tbl-betlist .col-odds,
        .tbl-betlist .col-stake,
        .tbl-betlist .col-winloss {
            width: 50px
        }

        .tbl-betlist .col-type,
        .tbl-betlist .col-status {
            width: 85px
        }

        .tbl-betlist .col-pt {
            width: 100px
        }

        .bl_title {
            color: #9d1c1c;
            font-weight: bold;
            text-transform: uppercase;
            height: 39px;
            line-height: 40px;
            border-bottom: 1px solid #cecece;
            margin-bottom: 12px;
            position: relative
        }

        .bl_title a {
            color: #045ace
        }

        .bl_title.no-border-bottom {
            border-bottom: none
        }

        .line {
            margin-top: 5px;
            margin-bottom: 5px;
            border-bottom: 1px solid #dfdfdf;
            width: 100%;
            overflow: hidden;
            text-align: left
        }

        .bl_underdog,
        .underdog {
            color: #01122b;
            font-weight: bold !important
        }

        .bl_favorite,
        .favorite {
            font-weight: bold !important;
            color: #b50000
        }

        .bl_num,
        .handicap .odds {
            color: #039;
            font-size: 8pt
        }

        .bl_lname,
        div.match+div.league,
        div.league,
        .no-details {
            color: #666;
            line-height: 15px;
            margin-top: 1px
        }

        .bl_oddtype,
        .oddstype {
            color: #586985
        }

        .bl_status,
        .status {
            color: #606060;
            font-size: 11px;
            font-weight: bold
        }

        .bl_btype,
        .bettype {
            color: #039;
            font-weight: 600
        }

        .bl_time,
        .time {
            color: #434343;
            font-size: 10pt;
            font-weight: normal;
            text-align: center
        }

        .bl_stype,
        .sport {
            color: #06c
        }

        .bl_match {
            color: #333;
            font-weight: normal;
            line-height: 15px
        }

        .bl_footertotal {
            font-weight: bold;
            background-color: #e8dfca !important;
            line-height: 20px
        }

        .bl_footertotal.outstanding {
            background-color: #f9c95b !important
        }

        .bl_footertotal .text {
            float: left;
            width: 580px;
            text-align: right
        }

        .bl_footertotal .value {
            float: left;
            width: 80px
        }

        .bl-export-excel {
            cursor: pointer;
            text-align: right;
            position: absolute;
            top: 4px;
            right: 2px
        }

        .bl-export-excel a {
            color: #1f7244
        }

        .icon-excel:before {
            font-size: 19px
        }

        div.match+div.league,
        div.league,
        .no-details {
            background: none;
            font-weight: normal;
            text-align: right;
            text-transform: none
        }

        .w-order {
            color: #7d7d7d;
            font-weight: normal;
            text-align: right;
            width: 20px
        }

        .fhFirstGoal {
            background: url(../styles/images/1F.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .fhLastGoal {
            background: url(../styles/images/1L.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .firstGoal {
            background: url(../styles/images/firstGoal.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .lastGoal {
            background: url(../styles/images/lastGoal.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .colorHandicap,
        .handicap {
            color: #606060
        }

        .handicap.custom {
            font-weight: bold
        }

        .link {
            color: #045ace;
            text-decoration: none;
            white-space: nowrap
        }

        .position-taking {
            background: none repeat scroll 0 0 #f5e3e3;
            padding: 4px
        }

        .result {
            cursor: pointer;
            color: #1ba4ed
        }

        .iplink {
            cursor: pointer;
            color: #045ace;
            font-size: 11px;
            width: 85px;
            word-break: break-word;
            white-space: normal
        }

        .detail {
            display: inline;
            color: #333;
            font-weight: bold;
            position: relative
        }

        .detail:after {
            position: relative;
            content: ''
        }

        .detail:hover:after {
            position: absolute;
            left: 0;
            top: -2px;
            width: 26px;
            height: 26px;
            margin-left: -7px;
            margin-top: -4px;
            background: #b1aea3;
            -webkit-border-radius: 100%;
            -khtml-border-radius: 100%;
            -moz-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .detail:before {
            font-family: 'Iconalpha';
            font-size: 16px;
            font-weight: normal;
            color: #888;
            content: 'î¤²';
            margin-right: 4px;
            position: relative;
            top: 2px
        }

        .detail:hover {
            cursor: pointer;
            color: #045ace
        }

        .detail:hover:before {
            color: #555
        }

        .detail .detail-link {
            color: #755200
        }

        .combinationLink {
            line-height: 20px
        }

        .offer-name-list {
            font-weight: bold
        }

        .float_l,
        .scoremap {
            float: left
        }

        .iconScoreMap,
        .scoremapIcon {
            height: 18px;
            width: 18px;
            margin: 3px 3px;
            position: relative
        }

        .iconScoreMap:after,
        .scoremapIcon:after {
            position: relative;
            content: ''
        }

        .iconScoreMap:hover:after,
        .scoremapIcon:hover:after {
            position: absolute;
            left: 0;
            top: 2px;
            width: 26px;
            height: 26px;
            margin-left: -4px;
            margin-top: -4px;
            background: #b1aea3;
            -webkit-border-radius: 100%;
            -khtml-border-radius: 100%;
            -moz-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .iconScoreMap:before,
        .scoremapIcon:before {
            font-family: 'Iconalpha';
            font-size: 20px;
            content: 'î¤­';
            color: #0b599c
        }

        .strike_through {
            text-decoration: line-through
        }

        td.nonbreak {
            white-space: nowrap
        }

        div.ticket-list div.void span,
        div.ticket-list div.void div {
            text-decoration: line-through
        }

        div.ticket-list div.void>div.match,
        div.ticket-list div.void div.firstGoal,
        div.ticket-list div.void div.lastGoal {
            text-decoration: none
        }

        .viewbrokengame-link {
            color: #1ba4ff;
            cursor: pointer
        }

        .excluding-choices {
            color: #484848;
            font-weight: normal
        }

        .allbet-bet-id {
            color: #bbb
        }

        .allbet-bet-type-name {
            color: #696969
        }

        .p213 .detail,
        .p213 .ng2-detail,
        .p213 .result,
        .p214 .detail,
        .p214 .ng2-detail,
        .p214 .result,
        .p215 .detail,
        .p215 .ng2-detail,
        .p215 .result,
        .p216 .detail,
        .p216 .ng2-detail,
        .p216 .result,
        .p217 .detail,
        .p217 .ng2-detail,
        .p217 .result,
        .p218 .detail,
        .p218 .ng2-detail,
        .p218 .result {
            display: none
        }

        .blue {
            color: #2673ce
        }

        .light-blue {
            color: #0017cd
        }

        .dark-orange {
            color: #af5319
        }

        .gamegroupname {
            color: #008000
        }

        .unit-stake {
            color: #039
        }

        .meron-choice {
            color: #f00
        }

        .wala-choice {
            color: #000080
        }

        .ftd-choice,
        .bdd-choice {
            color: #484848
        }

        .comm_note {
            float: left;
            margin-top: 12px;
            width: 100%
        }

        .comm_note .title {
            margin-left: 4px;
            padding-right: 4px;
            line-height: 18px;
            font-weight: bold;
            color: #666
        }

        .comm_note .title .star {
            color: #ff0101;
            padding-right: 8px
        }

        .comm_note .content {
            margin: 8px 20px 10px 20px;
            font-style: italic
        }

        .break-word {
            overflow-wrap: break-word
        }

        @media only screen and (min-device-width:768px) and (max-device-width:1024px) {
            .bl_time {
                font-size: 8px
            }

            .time,
            .ip {
                font-size: 11px
            }

            .no-wrap {
                white-space: nowrap
            }
        }

        .betbuilder {
            color: #171717;
            font-weight: normal;
            border-right: 2px solid #171717;
            padding-right: 3px;
            margin: 2px 10px 2px 0;
            line-height: 15px
        }

        .bettype-description {
            color: #039;
            font-weight: normal
        }

        .sexygaming-bet-id {
            color: #bbb
        }

        .sexygaming-bet-type-name {
            color: #696969
        }

        .gtcasino-bet-id {
            color: #bbb
        }

        .gtcasino-bet-type-name {
            color: #696969
        }

        .bbin-bet-id {
            color: #bbb
        }

        .bbin-bet-type-name {
            color: #696969
        }

        .bettype>.bet-id {
            color: #bbb
        }

        .leagueName>.bet-type-name {
            color: #696969
        }

        .bet-id {
            color: #bbb;
            font-weight: 600
        }

        .underdog>.bet-id,
        .favorite>.bet-id {
            color: #bbb;
            display: block
        }

        #details-modal .modal-dialog {
            margin: 30px auto
        }

        #details-modal .modal-header {
            padding: 0 16px
        }

        #details-modal .modal-header .close {
            margin-top: 10px
        }

        #details-modal .modal-body {
            text-align: center
        }

        #details-modal .modal-body iframe {
            display: none;
            width: 100%;
            height: 400px
        }

        body {
            background-color: transparent;
            font-size: 13px;
            font-family: Roboto, Arial, Tahoma, helvetica, sans-serif;
            line-height: 20px
        }

        a {
            text-decoration: none
        }

        .tbl-betlist {
            border-collapse: collapse;
            background-color: #fff;
            font-size: 13px;
            text-align: left;
            width: 100%
        }

        .tbl-betlist th,
        .tbl-betlist td {
            height: 28px;
            padding: 4px 8px;
            border: solid 1px #d1d1d1;
            white-space: nowrap;
            -webkit-box-sizing: border-box;
            -khtml-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box
        }

        .tbl-betlist th {
            font-weight: normal;
            color: #fff;
            background: #666;
            text-align: center
        }

        .tbl-betlist td {
            color: #333;
            vertical-align: middle;
            text-align: right
        }

        .tbl-betlist td.bl_evt {
            white-space: normal
        }

        .tbl-betlist td.choice-block {
            white-space: normal
        }

        .tbl-betlist tbody tr:hover td {
            background-color: #f8eb95
        }

        .tbl-betlist tbody tr#tr_footer:hover td {
            background-color: #e8dfca
        }

        .tbl-betlist .col-number {
            width: 20px
        }

        .tbl-betlist .col-transtime,
        .tbl-betlist .col-member {
            width: 110px
        }

        .tbl-betlist .col-odds,
        .tbl-betlist .col-stake,
        .tbl-betlist .col-winloss {
            width: 50px
        }

        .tbl-betlist .col-type,
        .tbl-betlist .col-status {
            width: 85px
        }

        .tbl-betlist .col-pt {
            width: 100px
        }

        .bl_title {
            color: #9d1c1c;
            font-weight: bold;
            text-transform: uppercase;
            height: 39px;
            line-height: 40px;
            border-bottom: 1px solid #cecece;
            margin-bottom: 12px;
            position: relative
        }

        .bl_title a {
            color: #045ace
        }

        .bl_title.no-border-bottom {
            border-bottom: none
        }

        .line {
            margin-top: 5px;
            margin-bottom: 5px;
            border-bottom: 1px solid #dfdfdf;
            width: 100%;
            overflow: hidden;
            text-align: left
        }

        .bl_underdog,
        .underdog {
            color: #01122b;
            font-weight: bold !important
        }

        .bl_favorite,
        .favorite {
            font-weight: bold !important;
            color: #b50000
        }

        .bl_num,
        .handicap .odds {
            color: #039;
            font-size: 8pt
        }

        .bl_lname,
        div.match+div.league,
        div.league,
        .no-details {
            color: #666;
            line-height: 15px;
            margin-top: 1px
        }

        .bl_oddtype,
        .oddstype {
            color: #586985
        }

        .bl_status,
        .status {
            color: #606060;
            font-size: 11px;
            font-weight: bold
        }

        .bl_btype,
        .bettype {
            color: #039;
            font-weight: 600
        }

        .bl_time,
        .time {
            color: #434343;
            font-size: 10pt;
            font-weight: normal;
            text-align: center
        }

        .bl_stype,
        .sport {
            color: #06c
        }

        .bl_match {
            color: #333;
            font-weight: normal;
            line-height: 15px
        }

        .bl_footertotal {
            font-weight: bold;
            background-color: #e8dfca !important;
            line-height: 20px
        }

        .bl_footertotal.outstanding {
            background-color: #f9c95b !important
        }

        .bl_footertotal .text {
            float: left;
            width: 580px;
            text-align: right
        }

        .bl_footertotal .value {
            float: left;
            width: 80px
        }

        .bl-export-excel {
            cursor: pointer;
            text-align: right;
            position: absolute;
            top: 4px;
            right: 2px
        }

        .bl-export-excel a {
            color: #1f7244
        }

        .icon-excel:before {
            font-size: 19px
        }

        div.match+div.league,
        div.league,
        .no-details {
            background: none;
            font-weight: normal;
            text-align: right;
            text-transform: none
        }

        .w-order {
            color: #7d7d7d;
            font-weight: normal;
            text-align: right;
            width: 20px
        }

        .fhFirstGoal {
            background: url(../styles/images/1F.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .fhLastGoal {
            background: url(../styles/images/1L.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .firstGoal {
            background: url(../styles/images/firstGoal.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .lastGoal {
            background: url(../styles/images/lastGoal.gif) no-repeat scroll center center transparent;
            display: inline;
            height: 10px;
            padding: 0 4px;
            width: 14px
        }

        .colorHandicap,
        .handicap {
            color: #606060
        }

        .handicap.custom {
            font-weight: bold
        }

        .link {
            color: #045ace;
            text-decoration: none;
            white-space: nowrap
        }

        .position-taking {
            background: none repeat scroll 0 0 #f5e3e3;
            padding: 4px
        }

        .result {
            cursor: pointer;
            color: #1ba4ed
        }

        .iplink {
            cursor: pointer;
            color: #045ace;
            font-size: 11px;
            width: 85px;
            word-break: break-word;
            white-space: normal
        }

        .detail {
            display: inline;
            color: #333;
            font-weight: bold;
            position: relative
        }

        .detail:after {
            position: relative;
            content: ''
        }

        .detail:hover:after {
            position: absolute;
            left: 0;
            top: -2px;
            width: 26px;
            height: 26px;
            margin-left: -7px;
            margin-top: -4px;
            background: #b1aea3;
            -webkit-border-radius: 100%;
            -khtml-border-radius: 100%;
            -moz-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .detail:before {
            font-family: 'Iconalpha';
            font-size: 16px;
            font-weight: normal;
            color: #888;
            content: '';
            margin-right: 4px;
            position: relative;
            top: 2px
        }

        .detail:hover {
            cursor: pointer;
            color: #045ace
        }

        .detail:hover:before {
            color: #555
        }

        .detail .detail-link {
            color: #755200
        }

        .combinationLink {
            line-height: 20px
        }

        .offer-name-list {
            font-weight: bold
        }

        .float_l,
        .scoremap {
            float: left
        }

        .iconScoreMap,
        .scoremapIcon {
            height: 18px;
            width: 18px;
            margin: 3px 3px;
            position: relative
        }

        .iconScoreMap:after,
        .scoremapIcon:after {
            position: relative;
            content: ''
        }

        .iconScoreMap:hover:after,
        .scoremapIcon:hover:after {
            position: absolute;
            left: 0;
            top: 2px;
            width: 26px;
            height: 26px;
            margin-left: -4px;
            margin-top: -4px;
            background: #b1aea3;
            -webkit-border-radius: 100%;
            -khtml-border-radius: 100%;
            -moz-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-transform: scale(0);
            -khtml-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -moz-animation: ripple 1s ease-out;
            -o-animation: ripple 1s ease-out;
            -webkit-animation: ripple 1s ease-out;
            animation: ripple 1s ease-out
        }

        .iconScoreMap:before,
        .scoremapIcon:before {
            font-family: 'Iconalpha';
            font-size: 20px;
            content: '';
            color: #0b599c
        }

        .strike_through {
            text-decoration: line-through
        }

        td.nonbreak {
            white-space: nowrap
        }

        div.ticket-list div.void span,
        div.ticket-list div.void div {
            text-decoration: line-through
        }

        div.ticket-list div.void>div.match,
        div.ticket-list div.void div.firstGoal,
        div.ticket-list div.void div.lastGoal {
            text-decoration: none
        }

        .viewbrokengame-link {
            color: #1ba4ff;
            cursor: pointer
        }

        .excluding-choices {
            color: #484848;
            font-weight: normal
        }

        .allbet-bet-id {
            color: #bbb
        }

        .allbet-bet-type-name {
            color: #696969
        }

        .p213 .detail,
        .p213 .ng2-detail,
        .p213 .result,
        .p214 .detail,
        .p214 .ng2-detail,
        .p214 .result,
        .p215 .detail,
        .p215 .ng2-detail,
        .p215 .result,
        .p216 .detail,
        .p216 .ng2-detail,
        .p216 .result,
        .p217 .detail,
        .p217 .ng2-detail,
        .p217 .result,
        .p218 .detail,
        .p218 .ng2-detail,
        .p218 .result {
            display: none
        }

        .blue {
            color: #2673ce
        }

        .light-blue {
            color: #0017cd
        }

        .dark-orange {
            color: #af5319
        }

        .gamegroupname {
            color: #008000
        }

        .unit-stake {
            color: #039
        }

        .meron-choice {
            color: #f00
        }

        .wala-choice {
            color: #000080
        }

        .ftd-choice,
        .bdd-choice {
            color: #484848
        }

        .comm_note {
            float: left;
            margin-top: 12px;
            width: 100%
        }

        .comm_note .title {
            margin-left: 4px;
            padding-right: 4px;
            line-height: 18px;
            font-weight: bold;
            color: #666
        }

        .comm_note .title .star {
            color: #ff0101;
            padding-right: 8px
        }

        .comm_note .content {
            margin: 8px 20px 10px 20px;
            font-style: italic
        }

        .break-word {
            overflow-wrap: break-word
        }

        @media only screen and (min-device-width:768px) and (max-device-width:1024px) {
            .bl_time {
                font-size: 8px
            }

            .time,
            .ip {
                font-size: 11px
            }

            .no-wrap {
                white-space: nowrap
            }
        }

        .betbuilder {
            color: #171717;
            font-weight: normal;
            border-right: 2px solid #171717;
            padding-right: 3px;
            margin: 2px 10px 2px 0;
            line-height: 15px
        }

        .bettype-description {
            color: #039;
            font-weight: normal
        }

        .sexygaming-bet-id {
            color: #bbb
        }

        .sexygaming-bet-type-name {
            color: #696969
        }

        .gtcasino-bet-id {
            color: #bbb
        }

        .gtcasino-bet-type-name {
            color: #696969
        }

        .bbin-bet-id {
            color: #bbb
        }

        .bbin-bet-type-name {
            color: #696969
        }

        .bettype>.bet-id {
            color: #bbb
        }

        .leagueName>.bet-type-name {
            color: #696969
        }

        .bet-id {
            color: #bbb;
            font-weight: 600
        }

        .underdog>.bet-id,
        .favorite>.bet-id {
            color: #bbb;
            display: block
        }

        #details-modal .modal-dialog {
            margin: 30px auto
        }

        #details-modal .modal-header {
            padding: 0 16px
        }

        #details-modal .modal-header .close {
            margin-top: 10px
        }

        #details-modal .modal-body {
            text-align: center
        }

        #details-modal .modal-body iframe {
            display: none;
            width: 100%;
            height: 400px
        }

    </style>
    <script type="text/javascript">
        function OnchangeData1(n) {
            if (n == 1) {
                top.main.location = "tbhntv.php?member=ZXTE3D000";
            } else if (n == 2) {
                top.main.location = "dsctv.php?member=ZXTE3D000";
            }
        }

        function lc() {
            alert(ZXTE3D000);
        }

        function ll(n) {

            top.main.location = n;
        }

        function showP(n) {
            var a = 'divEvent_' + n;
            var divEvent = document.getElementById(a);
            if (divEvent.style.display == 'none') {
                divEvent.style.display = '';
            } else {
                divEvent.style.display = 'none';
            }
        }
        var timer = 30;
        var loadPage = self.setInterval(function() {
            reLoad();
        }, 1000);

        function reLoad() {
            if (timer == 0) {
                top.main.location.reload();
                timer = 30;
            } else {
                document.getElementById("reloading").innerHTML = "Đang Theo Dõi (" + timer + ")";
            }
            timer--;
        }
    </script>
</head>

<body onload="">
    @include('portal.messsage')
    <form id="frmmain" method="get">
        <div id="page_main">
            <div class="bl_title">
                Danh sách cược ( đang diễn ra ) - {{ $user->username }}

                {{-- <div class="list-icon">
            <ul>
                <li class="showfilter-element"><span class="icon-arrow-up-drop-circle icon-filter"
                        title="Ẩn bộ lọc dữ liệu"></span></li>
                <li class="hidefilter-element"><span class="icon-arrow-down-drop-circle icon-filter"
                        title="Hiện bộ lọc dữ liệu"></span></li>
            </ul> --}}
            </div>
            <table id="hor-minimalist-a"
                class="tblRpt tblRpt-bordered tblRpt-striped width-100per tablesorter tblRpt-hover tbl-betlist">
                <thead>
                    <tr>
                        <th class="col-number">#</th>

                        <th class="col-transtime">Thời gian</th>
                        <th>Lựa chọn</th>
                        <th class="col-odds">Tỷ lệ</th>
                        <th class="col-stake">Tiền cược</th>
                        <th class="col-status">Trạng thái</th>
                        <th class="col-pt">PT của Agent/ Hoa hồng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bets as $key => $value)
                        @if (!$value->is_group)
                            <tr id="{{ $value->id }}">
                                <td class="w-order text-center">{{ $key + 1 }}</td>
                                <td class="trans-block text-center nonbreak">
                                    Ref No: {{ $value->id }}<div class="time">{{ $value->date }}</div>
                                </td>

                                <td class="choice-block text-right sport-1">
                                    <div class="">
                                        {{-- <span class="scoremap"><a
                                        href="javascript:OpenScoreMap(48939474,3,1);" title="Score Map">
                                        <div class="scoremapIcon"></div>
                                    </a></span> --}}
                                    @if($value->bet_type_raw === 'correct_score')
                                    <span class="underdog">{{ $value->bet_type }} - [{{ $value->type }}]
                                        {{-- <span class="favorite">
                                            [{{ $value->ss }}]</span> --}}
                                        </span>
                                    <div class="bettype"> {{ $value->ss }}</div>
                                    @else
                                        <span class="underdog">{{ $value->bet_name }}
                                            <span class="handicap">
                                                {{$value->bet_odd}}</span><span class="favorite">
                                                [{{ $value->ss }}]</span></span>
                                        <div class="bettype"> {{ $value->bet_type }}</div>
                                    @endif
                                        <div class="match">
                                            <span>{{ $value->home }}</span><span>&nbsp;-&nbsp;vs&nbsp;-&nbsp;</span><span>{{ $value->away }}</span>
                                        </div>
                                        <div class="league"><span class="sport">Bóng đá</span><span
                                                class="leagueName">&nbsp;{{ $value->league_name }}</span>
                                        </div>
                                        <div class="event-date">{{ $value->date }}</div>
                                    </div>
                                </td>

                                <td class="odds-block bl_underdog nonbreak text-right">
                                    <span class="underdog">
                                        <font color="{{ $value->rate < 0 ? '#B50000' : '' }}">
                                            {{ $value->rate }}</font>
                                    </span><br><span class="oddstype">MY</span>
                                </td>

                                <td class="stake-block bl_underdog text-right">
                                    <div class="stake">{{ $value->bet_amount }}</div>
                                </td>

                                <td class="status-block text-center sport-1">
                                    <div class="status">Đang diễn ra</div>
                                    <div class="ip"><br>
                                        <div class="iplink" onclick="OpenIPInfo('{{ $value->ip_address }}')">
                                            {{ $value->ip_address }}</div>
                                    </div>
                                </td>

                                <td class="position-taking-block text-right">
                                    <div class="position-taking bl_underdog">
                                        <font class="pt-value">0%</font><br>
                                    </div>0.25%<br>
                                </td>

                            </tr>
                        @else
                            <tr id="{{ $value->id }}">
                                <td class="w-order">{{ $key + 1 }}</td>

                                <td class="c nonbreak">Ref No: {{ $value->id }}
                                    <div class="time">{{ $value->date }}</div>
                                </td>

                                <td class="r bl_evt">
                                    <a href="javascript:showP('{{ $value->id }}')" id="hidden0">Cá cược tổng
                                        hợp</a><br>
                                    <br>

                                    <div id="divEvent_{{ $value->id }}" style="display: none;">
                                        @foreach ($value->bets as $index => $bet)
                                            <div class="ticketList">
                                                <div class="">
                                                    <span class="favorite">{{ $bet->bet_name }}<span
                                                            class="handicap"><span class="odds">
                                                                {{ $bet->bet_odd }} [{{ $bet->ss }}]@
                                                                {{ $bet->bet_value }}</span>
                                                        </span>
                                                        <span class="favorite"></span></span>

                                                    <div class="bettype">
                                                        {{ $bet->bet_type }}
                                                        <br>
                                                        {{ $bet->last_ss }}
                                                    </div>
                                                    @if (!$bet->number_code)
                                                        <div class="match">
                                                            <span>{{ $bet->home }}</span>
                                                            <span>&nbsp;-&nbsp;vs&nbsp;-&nbsp;</span>
                                                            <span>{{ $bet->away }}</span>
                                                        </div>
                                                    @else
                                                        <div class="match">
                                                            <span>No. {{ $bet->number_code }}</span>
                                                        </div>
                                                    @endif

                                                    <div class="league">
                                                        <span class="sport">{{ $bet->game_type }}</span><span
                                                            class="leagueName">&nbsp;{{ $bet->league_name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($index != sizeOf($value->bets) - 1)
                                                <div class="line" style=""></div>
                                            @endif
                                        @endforeach

                                    </div>
                                </td>

                                <td class="bl_underdog nonbreak">
                                    <span class="underdog">{{ $value->rate }}</span><br>
                                    <span class="oddstype"></span>
                                </td>

                                <td class="bl_underdog"><span class="stake">{{ $value->bet_amount }}</span>
                                </td>

                                <td class="c">
                                    <div class="status">
                                        Đang chạy
                                    </div>

                                    <div class="ip">
                                        <br>

                                        <div class="iplink" onclick="">

                                        </div>
                                    </div>
                                </td>



                                <td class="r">
                                    <div class="div_pt">
                                        0%<br>
                                    </div>0.25%<br>
                                </td>

                            </tr>
                        @endif
                    @endforeach
                    {{-- @foreach ($bets as $key => $value)
                    @if (!$value->is_group)
                    <tr id="{{$value->id}}">
                      <td class="w-order">{{$key + 1}}</td>
                      <td class="c nonbreak">Ref No: {{$value->id}}
                        <div class="time">{{$value->date}}</div></td>
                      <td class="r bl_evt"><div class="">
                        <span class="favorite">{{$value->bet_type}}
                          <span class="handicap"> <font>{{$value->bet_odd}}</font></span>
                          <span class="favorite"> [{{$value->ss}}]</span></span>
                          <div class="bettype"> {{$value->bet_name}}</div>
                          @if (!$value->number_code)
                          <div class="match">
                            <span>{{$value->home}}</span><span>&nbsp;-&nbsp;vs&nbsp;-&nbsp;</span><span>{{$value->away}}</span>
                          </div>
                          @else
                          <div class="match">
                            <span>No. {{$value->number_code}}</span>
                          </div>
                          @endif
                          <div class="league"><span class="sport">Bóng đá</span><span class="leagueName">&nbsp;{{$value->league_name}}</span></div>
                        </div></td>
                      <td class="bl_underdog nonbreak"><span class="favorite">
                      <font color="{{$value->rate < 0 ? '#B50000' : ''}}">
                       {{$value->rate}}</font>
                      </span><br>
                        <span class="oddstype">MY</span></td>
                      <td class="bl_underdog"><span class="stake">{{$value->bet_amount}}</span></td>
                      
                      <td class="c"><div class="status">Đang chạy</div>
                        <div class="result" 
                            onclick="window.open('http://ls.1266366.com/index.aspx?clientid=846&flag=ls&language=en&clientmatchid={{$value->event_id}}','_blank')"
                            >Kết quả
                            </div>
                        <div class="ip"><br>
                          <div class="iplink" onclick="">{{$value->ip_address}}</div>
                        </div>
                      </td>
                      <td class="r"><div class="div_pt"><font class="bl_underdog">0%</font><br>
                          <span class="bl_underdog">0.00</span><br>
                        </div>
                        0.25%<br>
                        0.00<br></td>
                      <td class="r"><div class="div_pt"><font class="bl_underdog">0%</font><br>
                          <span class="bl_underdog">0.00</span><br>
                        </div>
                        0.25%<br>
                        0.00<br></td>
                    </tr>
                    @else
                    <tr id="{{$value->id}}">
                      <td class="w-order">{{$key + 1}}</td>
    
                      <td class="c nonbreak">Ref No: {{$value->id}}
                        <div class="time">{{$value->date}}</div>
                      </td>
    
                      <td class="r bl_evt">
                        <a href="javascript:showP('{{$value->id}}')" id="hidden0">Cá cược tổng hợp</a><br>
                        <br>
    
                        <div id="divEvent_{{$value->id}}" style="display: none;">
                          @foreach ($value->bets as $index => $bet)
                                    <div class="ticketList">
                                        <div class="">
                                            <span class="favorite">{{$bet->bet_name}}<span class="handicap"><span class="odds"> {{$bet->bet_odd}} [{{$bet->ss}}]@ {{$bet->bet_value}}</span>
                                            </span>
                                            <span class="favorite"></span></span>
    
                                            <div class="bettype">
                                                {{$bet->bet_type}}
                                                <br>
                                                {{$bet->last_ss}}
                                            </div>
                                            @if (!$bet->number_code)
                                            <div class="match">
                                                <span>{{$bet->home}}</span>
                                                <span>&nbsp;-&nbsp;vs&nbsp;-&nbsp;</span>
                                                <span>{{$bet->away}}</span>
                                            </div>
                                            @else
                                            <div class="match">
                                                <span>No. {{$bet->number_code}}</span>
                                            </div>
                                            @endif
    
                                            <div class="league">
                                                <span class="sport">{{$bet->game_type}}</span><span class="leagueName">&nbsp;{{$bet->league_name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($index != sizeOf($value->bets) - 1)
                                    <div class="line" style=""></div>
                                    @endif
                                    @endforeach
    
                        </div>
                      </td>
    
                      <td class="bl_underdog nonbreak">
                        <span class="underdog">{{$value->rate}}</span><br>
                        <span class="oddstype"></span></td>
    
                        <td class="bl_underdog"><span class="stake">{{$value->bet_amount}}</span></td>
    
                        <td class="c">
                          <div class="status">
                            Đang chạy
                          </div>
    
                          <div class="ip">
                            <br>
    
                            <div class="iplink" onclick="">
                              
                            </div>
                          </div>
                        </td>
                        
                        
                        
                        <td class="r">
                          <div class="div_pt">
                            0%<br>
                          </div>0.25%<br>
                        </td>
                        
                      </tr>
                      @endif
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </form>
    </div>
</body>

</html>
