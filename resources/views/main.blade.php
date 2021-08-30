<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <title>WEGO</title>

        <style>
            body {
                text-align: center;
            }

            .jumbotron {
                background-color: #7B68EE;
                color: white;
            }

            #signInPage,
            #signUpPage {
                background-color: #E6E6FA;
                width: auto;
                color: black;
                border: 0;
            }

            .logo {
                width: 300px;
                height: 300px;
            }

            #mypage,
            #projectForm {
                width: auto;
                background-color: #E6E6FA;
                color: black;
                border: 0;
            }
        </style>

        <script>
            function signUpPage() {
                window.location.href = '/signUp.html'
            }

            function signInPage() {
                window.location.href = '/signIn.html'
            }

            function projectForm() {
                window.location.href = '/projectForm.html'
            }

            function mypage() {
                window.location.href = '/mypage.html'
            }
        </script>
    </head>
    <body>

        <div class="jumbotron">
            <img class="logo" alt="사진없어여" src="/image/HatchfulExport-All/logo_transparent.png">
            <h1 class="display-4">처음 온 여러분 안녕!</h1>
            <p class="lead">
                우리는 무엇이든 할 수 있고, 우리는 무엇이든 될 수 있어 ! 가자!</p>
            <hr class="my-4">
            <p>여럿이서 과제하는데 모일 필요가 없다고?! 원하는 장소에서 뚞딲!</p>
     
            @if (!auth()->check())
                <a
                class="btn btn-primary btn-lg"
                href="/register"
                role="button"
                id="signUpPage"
                >회원가입</a>
                <a
                class="btn btn-primary btn-lg"
                href="/loginPage"
                role="button"
                id="signInPage">로그인</a>
                @else
                <form action="/logout" method="post">
                    @csrf
                    <button
                    class="btn btn-primary btn-lg"
                    type="submit"
                    role="button"
                    id="logout">로그아웃</button>
                </form>
            @endif
            
            

        </div>

        @if(auth()->check())
        <div id="ifLogin">
            <!-- 로그인 되어 있을 경우 보이는 버튼 -->
            <hr class="my-4">
            <a
                class="btn btn-primary btn-lg"
                href="/projectForm"
                role="button"
                id="projectForm">팀프로젝트 등록</a>

            <a
                class="btn btn-primary btn-lg"
                href="/mypage"
                role="button"
                id="mypage">마이페이지</a>

            <hr>
        </div>
        @endif
        <br>
        <br>
        <div class="main_1">
            <div >
                <img
                    class="image-1-kW64 featureImage-3J6LeD"
                    alt="사진없어여"
                    src="/assets/46b2132c01604c9493d558de444929f4.svg">
                <div class="description-1K7RzO">
                    <h2 class="h2-25VyWe">여기에 무슨설명을 넣을진 아무도몰라 쉿</h2>
                    <div class="text-3U-SDd textMedium-1DcD2z subtitle-1ZS-lq">그래도 내가 생각해놔야겠지..휴</div>
                </div>
            </div>
        </div>
    </body>
</html>