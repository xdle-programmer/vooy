@extends('layouts.app')
@section('h_script')
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style class="cp-pen-styles">
        body {
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
            font-size: 1em;
        }

        #frame {
            margin: auto;
            margin-top: 150px;
            margin-bottom: 50px;
            width: 95%;
            min-width: 360px;
            max-width: 1000px;
            height: 92vh;
            min-height: 300px;
            max-height: 720px;
            background: #E6EAEA;
        }

        @media screen and (max-width: 360px) {
            #frame {
                width: 100%;
                height: 100vh;
            }
        }

        #frame #sidepanel {
            float: left;
            min-width: 280px;
            max-width: 340px;
            width: 40%;
            height: 100%;
            background: #2c3e50;
            color: #f5f5f5;
            overflow: hidden;
            position: relative;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel {
                width: 58px;
                min-width: 58px;
            }
        }

        #frame #sidepanel #profile {
            width: 80%;
            margin: 25px auto;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile {
                width: 100%;
                margin: 0 auto;
                padding: 5px 0 0 0;
                background: #32465a;
            }
        }

        #frame #sidepanel #profile.expanded .wrap {
            height: 210px;
            line-height: initial;
        }

        #frame #sidepanel #profile.expanded .wrap p {
            margin-top: 20px;
        }

        #frame #sidepanel #profile.expanded .wrap i.expand-button {
            -moz-transform: scaleY(-1);
            -o-transform: scaleY(-1);
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
        }

        #frame #sidepanel #profile .wrap {
            height: 60px;
            line-height: 60px;
            overflow: hidden;
            -moz-transition: 0.3s height ease;
            -o-transition: 0.3s height ease;
            -webkit-transition: 0.3s height ease;
            transition: 0.3s height ease;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap {
                height: 55px;
            }
        }

        #frame #sidepanel #profile .wrap img {
            width: 50px;
            border-radius: 50%;
            padding: 3px;
            border: 2px solid #e74c3c;
            height: auto;
            float: left;
            cursor: pointer;
            -moz-transition: 0.3s border ease;
            -o-transition: 0.3s border ease;
            -webkit-transition: 0.3s border ease;
            transition: 0.3s border ease;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap img {
                width: 40px;
                margin-left: 4px;
            }
        }

        #frame #sidepanel #profile .wrap img.online {
            border: 2px solid #2ecc71;
        }

        #frame #sidepanel #profile .wrap img.away {
            border: 2px solid #f1c40f;
        }

        #frame #sidepanel #profile .wrap img.busy {
            border: 2px solid #e74c3c;
        }

        #frame #sidepanel #profile .wrap img.offline {
            border: 2px solid #95a5a6;
        }

        #frame #sidepanel #profile .wrap p {
            float: left;
            margin-left: 15px;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap p {
                display: none;
            }
        }

        #frame #sidepanel #profile .wrap i.expand-button {
            float: right;
            margin-top: 23px;
            font-size: 0.8em;
            cursor: pointer;
            color: #435f7a;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap i.expand-button {
                display: none;
            }
        }

        #frame #sidepanel #profile .wrap #status-options {
            position: absolute;
            opacity: 0;
            visibility: hidden;
            width: 150px;
            margin: 70px 0 0 0;
            border-radius: 6px;
            z-index: 99;
            line-height: initial;
            background: #435f7a;
            -moz-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            -webkit-transition: 0.3s all ease;
            transition: 0.3s all ease;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options {
                width: 58px;
                margin-top: 57px;
            }
        }

        #frame #sidepanel #profile .wrap #status-options.active {
            opacity: 1;
            visibility: visible;
            margin: 75px 0 0 0;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options.active {
                margin-top: 62px;
            }
        }

        #frame #sidepanel #profile .wrap #status-options:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 8px solid #435f7a;
            margin: -8px 0 0 24px;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options:before {
                margin-left: 23px;
            }
        }

        #frame #sidepanel #profile .wrap #status-options ul {
            overflow: hidden;
            border-radius: 6px;
        }

        #frame #sidepanel #profile .wrap #status-options ul li {
            padding: 15px 0 30px 18px;
            display: block;
            cursor: pointer;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li {
                padding: 15px 0 35px 22px;
            }
        }

        #frame #sidepanel #profile .wrap #status-options ul li:hover {
            background: #496886;
        }

        #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 5px 0 0 0;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
                width: 14px;
                height: 14px;
            }
        }

        #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
            content: '';
            position: absolute;
            width: 14px;
            height: 14px;
            margin: -3px 0 0 -3px;
            background: transparent;
            border-radius: 50%;
            z-index: 0;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
                height: 18px;
                width: 18px;
            }
        }

        #frame #sidepanel #profile .wrap #status-options ul li p {
            padding-left: 12px;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li p {
                display: none;
            }
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
            background: #2ecc71;
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
            border: 1px solid #2ecc71;
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
            background: #f1c40f;
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
            border: 1px solid #f1c40f;
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
            background: #e74c3c;
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
            border: 1px solid #e74c3c;
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
            background: #95a5a6;
        }

        #frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
            border: 1px solid #95a5a6;
        }

        #frame #sidepanel #profile .wrap #expanded {
            padding: 100px 0 0 0;
            display: block;
            line-height: initial !important;
        }

        #frame #sidepanel #profile .wrap #expanded label {
            float: left;
            clear: both;
            margin: 0 8px 5px 0;
            padding: 5px 0;
        }

        #frame #sidepanel #profile .wrap #expanded input {
            border: none;
            margin-bottom: 6px;
            background: #32465a;
            border-radius: 3px;
            color: #f5f5f5;
            padding: 7px;
            width: calc(100% - 43px);
        }

        #frame #sidepanel #profile .wrap #expanded input:focus {
            outline: none;
            background: #435f7a;
        }

        #frame #sidepanel .search {
            border-top: 1px solid #32465a;
            border-bottom: 1px solid #32465a;
            font-weight: 300;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel .search {
                display: none;
            }
        }

        #frame #sidepanel .search label {
            position: absolute;
            margin: 10px 0 0 20px;
        }

        #frame #sidepanel .search input {
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
            padding: 10px 0 10px 46px;
            width: calc(100% - 25px);
            border: none;
            background: #32465a;
            color: #f5f5f5;
        }

        #frame #sidepanel .search input:focus {
            outline: none;
            background: #435f7a;
        }

        #frame #sidepanel .search input::-webkit-input-placeholder {
            color: #f5f5f5;
        }

        #frame #sidepanel .search input::-moz-placeholder {
            color: #f5f5f5;
        }

        #frame #sidepanel .search input:-ms-input-placeholder {
            color: #f5f5f5;
        }

        #frame #sidepanel .search input:-moz-placeholder {
            color: #f5f5f5;
        }

        #frame #sidepanel .contacts {
            height: calc(100% - 177px);
            overflow-y: scroll;
            overflow-x: hidden;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel .contacts {
                height: calc(100% - 149px);
                overflow-y: scroll;
                overflow-x: hidden;
            }

            #frame #sidepanel .contacts::-webkit-scrollbar {
                display: none;
            }
        }

        #frame #sidepanel .contacts.expanded {
            height: calc(100% - 334px);
        }

        #frame #sidepanel .contacts::-webkit-scrollbar {
            width: 8px;
            background: #2c3e50;
        }

        #frame #sidepanel .contacts::-webkit-scrollbar-thumb {
            background-color: #243140;
        }

        #frame #sidepanel .contacts ul li.contact {
            position: relative;
            padding: 10px 0 15px 0;
            font-size: 0.9em;
            cursor: pointer;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel .contacts ul li.contact {
                padding: 6px 0 46px 8px;
            }
        }

        #frame #sidepanel .contacts ul li.contact:hover {
            background: #32465a;
        }

        #frame #sidepanel .contacts ul li.contact.active {
            background: #32465a;
            border-right: 5px solid #435f7a;
        }

        #frame #sidepanel .contacts ul li.contact.active span.contact-status {
            border: 2px solid #32465a !important;
        }

        #frame #sidepanel .contacts ul li.contact .wrap {
            width: 88%;
            margin: 0 auto;
            position: relative;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel .contacts ul li.contact .wrap {
                width: 100%;
            }
        }

        #frame #sidepanel .contacts ul li.contact .wrap span {
            position: absolute;
            left: 0;
            margin: -2px 0 0 -2px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid #2c3e50;
            background: #95a5a6;
        }

        #frame #sidepanel .contacts ul li.contact .wrap span.online {
            background: #2ecc71;
        }

        #frame #sidepanel .contacts ul li.contact .wrap span.away {
            background: #f1c40f;
        }

        #frame #sidepanel .contacts ul li.contact .wrap span.busy {
            background: #e74c3c;
        }

        #frame #sidepanel .contacts ul li.contact .wrap img {
            width: 40px;
            border-radius: 50%;
            float: left;
            margin-right: 10px;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel .contacts ul li.contact .wrap img {
                margin-right: 0px;
            }
        }

        #frame #sidepanel .contacts ul li.contact .wrap .meta {
            padding: 5px 0 0 0;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel .contacts ul li.contact .wrap .meta {
                display: none;
            }
        }

        #frame #sidepanel .contacts ul li.contact .wrap .meta .name {
            font-weight: 600;
        }

        #frame #sidepanel .contacts ul li.contact .wrap .meta .preview {
            margin: 5px 0 0 0;
            padding: 0 0 1px;
            font-weight: 400;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            -moz-transition: 1s all ease;
            -o-transition: 1s all ease;
            -webkit-transition: 1s all ease;
            transition: 1s all ease;
        }

        #frame #sidepanel .contacts ul li.contact .wrap .meta .preview span {
            position: initial;
            border-radius: initial;
            background: none;
            border: none;
            padding: 0 2px 0 0;
            margin: 0 0 0 1px;
            opacity: .5;
        }

        #frame #sidepanel #bottom-bar {
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        #frame #sidepanel #bottom-bar button {
            float: left;
            border: none;
            width: 50%;
            padding: 10px 0;
            background: #32465a;
            color: #f5f5f5;
            cursor: pointer;
            font-size: 0.85em;
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button {
                float: none;
                width: 100%;
                padding: 15px 0;
            }
        }

        #frame #sidepanel #bottom-bar button:focus {
            outline: none;
        }

        #frame #sidepanel #bottom-bar button:nth-child(1) {
            border-right: 1px solid #2c3e50;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button:nth-child(1) {
                border-right: none;
                border-bottom: 1px solid #2c3e50;
            }
        }

        #frame #sidepanel #bottom-bar button:hover {
            background: #435f7a;
        }

        #frame #sidepanel #bottom-bar button i {
            margin-right: 3px;
            font-size: 1em;
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button i {
                font-size: 1.3em;
            }
        }

        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button span {
                display: none;
            }
        }

        #frame .content {
            float: right;
            width: 60%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        @media screen and (max-width: 735px) {
            #frame .content {
                width: calc(100% - 58px);
                min-width: 300px !important;
            }
        }

        @media screen and (min-width: 900px) {
            #frame .content {
                width: calc(100% - 340px);
            }
        }

        #frame .content .contact-profile {
            width: 100%;
            height: 60px;
            line-height: 60px;
            background: #f5f5f5;
        }

        #frame .content .contact-profile img {
            width: 40px;
            border-radius: 50%;
            float: left;
            margin: 9px 12px 0 9px;
        }

        #frame .content .contact-profile p {
            float: left;
        }

        #frame .content .contact-profile .social-media {
            float: right;
        }

        #frame .content .contact-profile .social-media i {
            margin-left: 14px;
            cursor: pointer;
        }

        #frame .content .contact-profile .social-media i:nth-last-child(1) {
            margin-right: 20px;
        }

        #frame .content .contact-profile .social-media i:hover {
            color: #435f7a;
        }

        #frame .content .messages {
            height: auto;
            min-height: calc(100% - 45px);
            max-height: calc(100% - 45px);
            overflow-y: scroll;
            overflow-x: hidden;
        }

        @media screen and (max-width: 735px) {
            #frame .content .messages {
                max-height: calc(100% - 105px);
            }
        }

        #frame .content .messages::-webkit-scrollbar {
            width: 8px;
            background: transparent;
        }

        #frame .content .messages::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
        }

        #frame .content .messages ul li {
            display: inline-block;
            clear: both;
            float: left;
            margin: 15px 15px 5px 15px;
            width: calc(100% - 25px);
            font-size: 0.9em;
        }

        #frame .content .messages ul li:nth-last-child(1) {
            margin-bottom: 20px;
        }

        #frame .content .messages ul li.sent img {
            margin: 6px 8px 0 0;
        }

        #frame .content .messages ul li.sent p {
            background: #435f7a;
            color: #f5f5f5;
        }

        #frame .content .messages ul li.replies img {
            float: right;
            margin: 6px 0 0 8px;
        }

        #frame .content .messages ul li.replies p {
            background: #f5f5f5;
            float: right;
            color: black;
        }

        #frame .content .messages ul li img {
            width: 22px;
            border-radius: 50%;
            float: left;
        }

        #frame .content .messages ul li p {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 205px;
            line-height: 130%;
        }

        @media screen and (min-width: 735px) {
            #frame .content .messages ul li p {
                max-width: 300px;
            }
        }

        #frame .content .message-input {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 99;
        }

        #frame .content .message-input .wrap {
            position: relative;
        }

        #frame .content .message-input .wrap input {
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
            float: left;
            border: none;
            width: calc(100% - 90px);
            padding: 11px 32px 10px 8px;
            font-size: 0.8em;
            color: #32465a;
        }

        @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap input {
                padding: 15px 32px 16px 8px;
            }
        }

        #frame .content .message-input .wrap input:focus {
            outline: none;
        }

        #frame .content .message-input .wrap textarea {
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
            float: left;
            border: none;
            width: calc(100% - 90px);
            padding: 11px 32px 10px 8px;
            font-size: 0.8em;
            color: #32465a;
            resize: none;
            height: 39px;
        }

        @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap textarea {
                padding: 15px 32px 16px 8px;
            }
        }

        #frame .content .message-input .wrap textarea:focus {
            outline: none;
        }

        #frame .content .message-input .wrap .attachment {
            position: absolute;
            right: 60px;
            z-index: 4;
            margin-top: 10px;
            font-size: 1.1em;
            color: #435f7a;
            opacity: .5;
            cursor: pointer;
        }

        @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap .attachment {
                margin-top: 17px;
                right: 65px;
            }
        }

        #frame .content .message-input .wrap .attachment:hover {
            opacity: 1;
        }

        #frame .content .message-input .wrap button {
            float: right;
            border: none;
            width: 50px;
            padding: 12px 0;
            cursor: pointer;
            background: #32465a;
            color: #f5f5f5;
        }

        @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap button {
                padding: 16px 0;
            }
        }

        #frame .content .message-input .wrap button:hover {
            background: #435f7a;
        }

        #frame .content .message-input .wrap button:focus {
            outline: none;
        }

        .manufacturer__logo {
            width: 60px;
            height: 60px;
            float: left;
            border-radius: 50%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            display: block;
            background: #f5f5f5;
            position: relative;
        }

        .manufacturer__logo:after {
            display: block;
            position: absolute;
            content: attr(data-name);
            width: 100%;
            height: 100%;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 55px;
            font-weight: 700;
            color: #2c3e50;
        }

        .manufacturer__logo-s {
            width: 40px;
            height: 40px;
            float: left;
            border-radius: 50%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
            display: block;
            background: #f5f5f5;
            position: relative;
            margin-right: 10px;
        }

        .manufacturer__logo-s:after {
            display: block;
            position: absolute;
            content: attr(data-name);
            width: 100%;
            height: 100%;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 40px;
            font-weight: 700;
            color: #2c3e50;
        }

        .chat__preview{
            width: 100%!important;
            height: auto!important;
            border-radius: 10px!important;
        }
    </style>
@stop


@section('content')
    <div id="frame">
        <div id="sidepanel">
            <div id="profile">
                <div class="wrap">
                    <div id="profile-img" data-name="Е" class="manufacturer__logo" alt="">

                    </div>
                    <p>{{$user->name}}</p>
                    <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                    <div id="status-options">
                        <ul>
                            <li id="status-online" class="active"><span class="status-circle"></span>
                                <p>Online</p></li>
                            <li id="status-away"><span class="status-circle"></span>
                                <p>Away</p></li>
                            <li id="status-busy"><span class="status-circle"></span>
                                <p>Busy</p></li>
                            <li id="status-offline"><span class="status-circle"></span>
                                <p>Offline</p></li>
                        </ul>
                    </div>
                    <div id="expanded">
                        <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mikeross"/>
                        <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="ross81"/>
                        <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mike.ross"/>
                    </div>
                </div>
            </div>
            <div id="search" class="search">
                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                <input type="text" placeholder="Найти чат..."/>
            </div>
            <div id="contacts" class="contacts">
                <ul>
                    <li @@click="joinChat(c.id)" :data-chat="c.id" class="contact" v-for="c in chats">
                        <div class="wrap">
                            <span class="contact-status online"></span>
                            <div :data-name="c.users[1].name.substr(0, 1)" class="manufacturer__logo-s" alt=""></div>
                            <div class="meta">
                                <p class="name">@{{c.title}}</p>
                                <p class="preview"></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="search-new" class="search">
                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                <input type="text" placeholder="Найти..."/>
            </div>
            <div id="contacts-new" class="contacts">
                <ul>
                    <li @@click="addChat(u.id)" class="contact" v-for="u in users">
                        <div class="wrap">
                            <span class="contact-status online"></span>
                            <div :data-name="u.name.substr(0, 1)" class="manufacturer__logo-s" alt=""></div>
                            <div class="meta">
                                <p class="name">@{{u.name}}</p>
                                <p class="preview"></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="bottom-bar">
                <button @@click="openNewChat()" id="addcontact">
                    <span>Добавить чат</span></button>
                <button id="settings"><span>Settings</span></button>
            </div>
        </div>

        <div class="content">
            {{--
            <div class="contact-profile">
                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt=""/>
                <p>Harvey Specter</p>
                <div class="social-media">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>
            --}}
            <div id="chat-container" class="messages">
                <ul>
                    <li class="sent" :class="{'replies' : m.id != user.id}" v-for="m in messages">
                        <img src="http://188.225.85.66/storage/tenderProducts/empty.jpg" alt=""/>

                        <p>@{{m.text}}</p>

                        <div v-if="m.files">
                                <div
                                    v-if="(m.files.type == 'jpg') || (m.files.type == 'gif') || (m.files.type == 'png') || (m.files.type == 'jpeg') ">
                                    <a v-bind:href="path + '/storage/chatRoom/' + user.room + '/' + m.files.name"
                                       data-fancybox="images">
                                        <img v-bind:src="path + '/storage/chatRoom/' + user.room + '/' + m.files.name"
                                             alt="" class="chat__preview">
                                    </a>
                                </div>
                                <div v-else>
                                    <a download
                                       v-bind:href="path + '/public/storage/chatRoom/'+ user.room +'/'+ m.files.name">@{{m.files.name}}</a>
                                </div>
                        </div>

                    </li>
                </ul>
            </div>
            <div class="message-input">
                <div class="wrap">
                    <textarea type="text" v-model.trim="message" placeholder="Write your message...">
                    </textarea>
                    <i @click="addFiles" class="fa fa-paperclip attachment" aria-hidden="true"></i>
                    <input @change="previewFiles" type="file" id="chat-input-file" style="display:none">
                    <button @@click="sendMessage" :disabled="(message.length === 0)" class="submit"><i
                            class="fa fa-paper-plane" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

@stop


@section('f_script')

    <script>$(".messages").animate({scrollTop: $(document).height()}, "fast");

        $("#profile-img").click(function () {
            $("#status-options").toggleClass("active");
        });

        $(".expand-button").click(function () {
            $("#profile").toggleClass("expanded");
            $(".contacts").toggleClass("expanded");
        });

        $("#status-options ul li").click(function () {
            $("#profile-img").removeClass();
            $("#status-online").removeClass("active");
            $("#status-away").removeClass("active");
            $("#status-busy").removeClass("active");
            $("#status-offline").removeClass("active");
            $(this).addClass("active");

            if ($("#status-online").hasClass("active")) {
                $("#profile-img").addClass("online");
            } else if ($("#status-away").hasClass("active")) {
                $("#profile-img").addClass("away");
            } else if ($("#status-busy").hasClass("active")) {
                $("#profile-img").addClass("busy");
            } else if ($("#status-offline").hasClass("active")) {
                $("#profile-img").addClass("offline");
            } else {
                $("#profile-img").removeClass();
            }
            ;

            $("#status-options").removeClass("active");
        });

        function newMessage() {
            message = $(".message-input input").val();
            if ($.trim(message) == '') {
                return false;
            }
            $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
            $('.message-input input').val(null);
            $('.contact.active .preview').html('<span>You: </span>' + message);
            $(".messages").animate({scrollTop: $(document).height()}, "fast");
        };

        $('.submit').click(function () {
            newMessage();
        });

        $(window).on('keydown', function (e) {
            if (e.which == 13) {
                newMessage();
                return false;
            }
        });
        //# sourceURL=pen.js
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.socket.io/socket.io-2.3.0.js"></script>

    <script>

        let USER = {!! json_encode($user) !!};
        let USERS = {!! json_encode($users) !!};
        //let CHATS = {!! json_encode($user->chats) !!};
        console.log("json_chats");
        console.log(USER.chats);

        let port = 3000;
        let socket = io(`//${location.hostname}:${port}`);
        socket.on('connect', () => console.log('connect'));
        socket.on('connect_error', (err) => console.dir(err));

        new Vue({
            el: '#frame',
            data: {
                path: window.location.origin,
                user: null,
                users: USERS,
                chats: USER.chats,
                message: '',
                messages: [],
                isNewChat: true,
                files: [],
                storageFiles: [],
            },
            methods: {
                scrollDown() {
                    var node = document.getElementById("chat-container")
                    node.scrollTop = node.scrollHeight + 200;
                },
                addFiles() {
                    document.getElementById('chat-input-file').click();
                    //chat-input-file
                },
                previewFiles(event) {
                    this.files = event.target.files;
                    console.log(this.files);
                },
                openChat() {
                    axios.get(`/api/v2/room/experts/all`)
                        .then((response) => {
                            console.log("EXPERTS");
                            console.log(response.data);

                        })
                        .catch((err) => {
                            console.log(err)
                        });
                },
                addChat(userId) {
                    console.log(userId);
                    axios({
                        method: 'POST',
                        url: `${window.location.origin}/chat/newRoom`,
                        data: {
                            user_id: userId,
                        },
                    }).then((response) => {
                        console.log("new Chat");
                        console.log(response.data);
                        this.openNewChat();
                    })
                        .catch((err) => {
                            console.log(err)
                        });
                },
                openNewChat() {
                    if (this.isNewChat) {
                        document.getElementById('contacts').style.display = 'none';
                        document.getElementById('search').style.display = 'none';
                        this.isNewChat = false;
                    } else {
                        document.getElementById('contacts').style.display = 'block';
                        document.getElementById('search').style.display = 'block';
                        this.isNewChat = true;
                    }

                },
                async joinChat(room) {
                    console.log(room)
                    if (this.user.room != 0) {
                        socket.disconnect();
                        socket.connect();
                    } else {
                        this.initializeConnection();
                    }


                    this.user.room = room;
                    socket.emit('join', this.user, data => {
                        //console.log('startRoom');
                        if (typeof data === 'string') {
                            console.error(data)
                        } else {

                            this.user.socket = data.userSocket;
                            this.getMessages();

                        }
                    });
                },
                sendMessage() {
                    console.log(this.message);

                    var formData = new FormData();

                    for (let i = 0; i < this.files.length; ++i) {
                        formData.append("attachments[" + i + "][file]", this.files[i]);
                    }

                    formData.append("user_id", this.user.id);
                    formData.append("text", this.message);
                    formData.append("chat_id", this.user.room);

                    ///AJAX ADDMESSAGE///
                    axios({
                        method: 'POST',
                        url: `${window.location.origin}/chat/${this.user.room}/message`,
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        },
                    }).then((response) => {
                        console.log(response.data);
                        let file = null;
                        if (response.data.file){
                             file = {
                                messageId: response.data.file.msg_id,
                                name: response.data.file.name,
                                type: response.data.file.type,
                            }
                        }

                        let message = {
                            id: this.user.id,
                            text: this.message,
                            name: this.user.name,
                            time: Date.now(),
                            m_id: response.data.message.id,
                            image: this.user.image
                        }
                        console.log(file)
                        if (file == null)
                            var data = {message: message, userSocket: this.user.socket}
                        else
                            var data = {message: message, userSocket: this.user.socket, files: file}

                        socket.emit('message-create', data, data => {
                            console.log(data);
                        });

                        this.files = null;
                        this.message = '';
                    })
                },
                getMessages() {
                    axios({
                        method: 'GET',
                        url: `${window.location.origin}/chat/${this.user.room}/messages`,
                        processData: false,
                        contentType: false,
                    }).then((response) => {
                        console.log(response.data);
                        this.messages = [];

                        response.data.forEach(message => {
                            if (message.attachments[0]) {
                                this.messages.push({
                                    files: {
                                        'messageId': message.attachments[0].id,
                                        'name': message.attachments[0].name,
                                        'type': message.attachments[0].type
                                    },
                                    id: message.user_id,
                                    image: 'none',
                                    m_id: message.id,
                                    name: 'user',
                                    text: message.text,
                                    time: message.created_at,
                                });
                            } else {
                                this.messages.push({
                                    files: null,
                                    id: message.user_id,
                                    image: 'none',
                                    m_id: message.id,
                                    name: 'user',
                                    text: message.text,
                                    time: message.created_at,
                                });
                            }
                        })
                        console.log("Messages")
                        console.log(this.messages)
                        setTimeout(() => {
                            this.scrollDown();
                        }, 1000)
                    })
                },
                initializeConnection() {
                    console.log("InitConnect");
                    console.log(this.user);

                    socket.on('users-disconnect', users => {
                        console.log(users);
                    })

                    socket.on('message-new', message => {
                        this.messages.push(message)
                        //console.log("CUR MSG");
                        //console.log(message);
                        console.log("ALL MSG");
                        console.log(this.messages);
                        //scrollToBottom(this.$refs.messages)

                        if (message.files) {
                            console.log("HAS FILE");
                            this.storageFiles.push(message.files);
                        }
                        setTimeout(() => {
                            this.scrollDown();
                        })
                    })
                }
            },
            created() {
                //this.getRooms();
                console.log("vue Created");
                console.log(this.chats);

                this.user = {
                    id: USER.id,
                    name: USER.name,
                    room: 0,
                    role: 0,
                    image: 'none'
                }
            },
            mounted() {

            }
        })

    </script>


@stop
