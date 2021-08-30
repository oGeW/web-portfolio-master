<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <title>signin</title>

        <style>
            body {
                margin: 3%;
                text-align: center;
                background-color: #E6E6FA;
            }

            /* 로고이미지 */
            .logo {
                width: 300px;
                height: 300px;
            }

            #signIn, #ahah {
                color: white;
                background-color: #7B68EE;
                border: 0;
                
            }

            #IDL,
            #PWL {
                width: 30%;
                float: left;

            }

            #IDI,
            #PWI {
                float: left;
                width: 60%;

            }

        </style>
    </head>
    <body>
        <form action="/login" method="post">
            @csrf
        <img class="logo" alt="사진없어여" src="/image/HatchfulExport-All/logo_transparent.png">

        <!-- id -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" id="IDL">
                ID
            </label>

            <input type="id" name="id" class="form-control" id="IDI" placeholder="아이디를 입력 해 주세요">
        </div>
        <br>
        <!-- pw -->
        <div class="mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label" id="PWL">
                Password
            </label>

            <input type="password" name="password" class="form-control" id="PWI">

        </div>

        <div style="padding-top: 50px">
        </div>

        <button type="submit" class="btn btn-primary" id="signIn">SIGN IN</button>
        <input type="button" onclick="location.href='/findForm'" class="btn btn-primary" id="ahah" value="아이디/비밀번호찾기">
    </form>
    </body>
</html>