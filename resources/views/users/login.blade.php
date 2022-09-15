<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Rubik:400,700');

        *{
            font-family: 'Rubik', sans-serif;
        }

        #form {
            margin: 50px auto;
            width: 350px;
            padding:45px 30px 15px;
            position: relative;
            box-shadow: 5px 5px 25px rgba(0,0,0,.2);
            border-radius: 1px;
            background-color: #2c3e50;
            height: 450px;
            overflow: hidden
        }

        #form #toggle-forms{
            position: absolute;
            top: 15px;
            right: 30px;
            border: 1px solid #3a4a5d;
            border-radius: 20px;
            overflow: hidden;
            z-index: 99
        }

        #form #toggle-forms > button {
            border:none;
            background:none;
            background-color: #34495e;
            border: 1px solid #22303e;
            color: #FFF;
            float:left;
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            padding:2px 10px;
        }

        #form #toggle-forms > button:first-of-type{
            border-right: 0;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        #form #toggle-forms > button.active {
            background-color: #3498db;
        }

        #form form h4{
            text-transform: capitalize;
            color:#fff;
        }

        .input-field label.active {
            color: #FFF !important;
            font-size: 1.1rem
        }

        #form form input:focus {
            border-bottom-color: dodgerblue !important
        }

        #form .row >button{
            background-color: dodgerblue
        }

        input {
            color: #FFF;
            padding-left: 15px !important
        }

        #form form{
            padding:45px 30px 15px;
            position: absolute;
            top:0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: #2c3e50;
            transition: all .3s linear;
            z-index: 2
        }

        #form form:last-of-type {
            left: 100%
        }

        #form.active form:first-of-type {
            left: -100% !important
        }

        #form.active form:last-of-type{
            left:0 !important
        }

        @media (max-width: 767px) {
            #form {
                width: 290px !important;
            }
        }
        .animate {
            height: 100%;
            display: block;
            margin: 0;
            padding: 0;
            width: 100%
        }

        .animate > li {
            position: absolute;
            height: 50px;
            width: 50px;
            top: 100%;
            left: 10px;
            background-color:  rgba(255,255,255,.1);
            z-index: -1;
            overflow: hidden;
            animation: move 10s linear infinite
        }

        .animate > li:nth-last-of-type(2) {
            left: 70px;
            animation-delay: 3.5s;
            height: 15px;
            width: 15px;
        }

        .animate > li:nth-last-of-type(3) {
            left: 140px;
            animation-delay: 3s
        }

        .animate > li:nth-last-of-type(4) {
            left: 210px;
            animation-delay: 5.5s
        }

        .animate > li:nth-last-of-type(5) {
            left: 280px;
            animation-delay: 1.8s;
            height: 65px;
            width: 65px
        }

        .animate > li:nth-last-of-type(6) {
            left: 140px;
            animation-delay: 6.8s;
            height: 25px;
            width: 25px
        }

        .animate > li:nth-last-of-type(7) {
            left: 280px;
            animation-delay: 5s;
            height: 35px;
            width: 35px
        }

        label{
            color: #fff;
        }
        
        button{
            margin-top: 20px;
        }

        @keyframes move {
            to {top: -50px;transform: rotate(360deg)}
        }

        .forgot{
            color: dodgerblue
        }

        .forgot:hover {
            text-decoration: underline;
            cursor: pointer
        }
        .input-value{
            color:#000 !important;
        }
    </style>
    <div id="app">
        <form-component></form-component>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        let $id = (id) => document.getElementById(id);
        var [login, register, form] = ['login', 'register', 'form'].map(id => $id(id));

        [login, register].map(element => {
            element.onclick = function () {
                [login, register].map($ele => {
                    $ele.classList.remove("active");
                });
                this.classList.add("active");
                this.getAttribute("id") === "register"?  form.classList.add("active") : form.classList.remove("active");
            }
        });
    </script>
</body>
</html>