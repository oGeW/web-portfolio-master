<!DOCTYPE html>
<html lnag="ko">
    <head>
        <meta charset="UTF-8">
        <title>회원가입</title>

        <style>
            /* 레이아웃 틀 */

            body {
                margin: 0;
                height: 100%;
                background-color: #E6E6FA;
            }
            #logo {
                width: 240px;
                height: 44px;
                cursor: pointer;
            }

            #header {
                padding-top: 62px;
                padding-bottom: 20px;
                text-align: center;
            }
            #wrapper {
                position: relative;
                height: 100%;
            }

            #content {
                position: absolute;
                left: 50%;
                transform: translate(-50%);
                width: 460px;
            }

            /* 입력폼 */

            h3 {
                margin: 19px 0 8px;
                font-size: 14px;
                font-weight: 700;
            }

            .box {
                display: block;
                width: 100%;
                height: 51px;
                border: solid 1px #dadada;
                padding: 10px 14px;
                box-sizing: border-box;
                background: #fff;
                position: relative;
            }

            .int {
                display: block;
                position: relative;
                width: 100%;
                height: 29px;
                border: none;
                background: #fff;
                font-size: 15px;
            }

            .box.int_id {
                padding-right: 110px;
            }

            .box.int_pass {
                padding-right: 40px;
            }

            .box.int_pass_check {
                padding-right: 40px;
            }

            .step_url {
                position: absolute;
                top: 16px;
                right: 13px;
                font-size: 15px;
                color: #8e8e8e;
            }

            #bir_wrap {
                display: table;
                width: 100%;
            }

            #bir_yy {
                display: table-cell;
                width: 147px;

            }

            #bir_mm {
                display: table-cell;
                width: 147px;
                vertical-align: middle;
            }

            #bir_dd {
                display: table-cell;
                width: 147px;
            }

            #bir_dd,
            #bir_mm {
                padding-left: 10px;
            }

            select {
                width: 100%;
                height: 29px;
                font-size: 15px;
                background-size: 20px 8px;
                -webkit-appearance: none;
                display: inline-block;
                text-align: start;
                border: none;
                cursor: default;
            }

            /* 에러메세지 */

            .error_next_box {
                margin-top: 9px;
                font-size: 12px;
                color: red;
                display: none;
            }

            #alertTxt {
                position: absolute;
                top: 19px;
                right: 38px;
                font-size: 12px;
                color: red;
                display: none;
            }

            /* 버튼 */

            .btn_area {
                margin: 30px 0 91px;
            }

            #btnJoin {
                width: 100%;
                padding: 21px 0 17px;
                border: 0;
                cursor: pointer;
                color: white;
                background-color: #7B68EE;
                font-size: 20px;
                font-weight: 400;
            }

            /* 로고이미지 */
            .logo {
                width: 300px;
                height: 300px;
            }
        </style>

        <script>
            function checkId() {
                
            let popupX = (window.screen.width/2)-(500/2);
            let popupY = (window.screen.height/2)-(200/2);
            window.open("dupleId?userid=" + document.register.id.value,"checkId", "width=500, height=200, left=" + popupX + ", top=" + popupY);
        }
        </script>
    </head>
    <body>
        <!-- header -->
        <div id="header">
            <img class="logo" alt="사진없어여" src="/image/HatchfulExport-All/logo_transparent.png">

        </div>

        <form name="register" action="/store" method="post" enctype="multipart/form-data">
        @csrf
        <!-- wrapper -->
        <div id="wrapper">

            <!-- content-->
            <div id="content">
                <!-- Name -->
                <div>
                    <h3 class="join_title">
                        <label for="name">이름</label>
                    </h3>
                    <span class="box int_name">
                        <input type="text" name="name" id="name" class="int" maxlength="20" value="{{ old('name') }}">
                    </span>
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror
                </div> 
                

                <!-- ID -->
                <div>
                    <h3 class="join_title">
                        <label for="id">아이디</label>
                    </h3>
                    <span class="box int_id">
                        <input type="text" name="id" id="id" class="int" value="{{ old('id') }}" maxlength="20">

                    </span>
                    @error('id')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <input type="button" value="중복체크" onclick="checkId()">

                <!-- PW1 -->
                <div>
                    <h3 class="join_title">
                        <label for="pswd1">비밀번호</label>
                    </h3>
                    <span class="box int_pass">
                        <input type="password" name="password" id="pswd1" class="int" maxlength="20">
                        <span id="alertTxt">사용불가</span>
                    </span>
                </div>

                <!-- PW2 -->
                <div>
                    <h3 class="join_title">
                        <label for="pswd2">비밀번호 재확인</label>
                    </h3>
                    <span class="box int_pass_check">
                        <input type="password" name="password_confirmation" id="pswd2" class="int" maxlength="20">
                    
                        @error('password')
                        <div>{{ $message }}</div>
                        @enderror
                    </span>
                </div>

                <!-- BIRTH -->
                <div>
                    <h3 class="join_title">
                        <label for="yy">생년월일</label>
                    </h3>

                    <div id="bir_wrap">
                        <!-- BIRTH_YY -->
                        <div id="bir_yy">
                            <span class="box">
                                <input type="text" name="year" id="yy" class="int" maxlength="4" value="{{ old('year') }}" placeholder="년(4자)">
                            </span>
                        </div>

                        <!-- BIRTH_MM -->
                        <div id="bir_mm">
                            <span class="box">
                                <select name="month" id="mm" value="{{ old('month') }}" class="sel">
                                    <option>월</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </span>
                        </div>

                        <!-- BIRTH_DD -->
                        <div id="bir_dd">
                            <span class="box">
                                <input type="text" name="day" value="{{ old('day') }}" id="dd" class="int" maxlength="2" placeholder="일">
                            </span>
                        </div>

                    </div>
                    <span class="error_next_box"></span>
                </div>

                <!-- EMAIL -->
                <div>
                    <h3 class="join_title">
                        <label for="email">본인확인 이메일</label>
                    </h3>
                    <span class="box int_email">
                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="int" maxlength="100" placeholder="필수입력">
                    </span>
                    <span class="error_next_box">이메일 주소를 다시 확인해주세요.</span>
                </div>

                <!-- MOBILE -->
                <div>
                    <h3 class="join_title">
                        <label for="phoneNo">휴대전화</label>
                    </h3>
                    <span class="box int_mobile">
                        <input type="tel" name="phone" value="{{ old('phone') }}" id="mobile" class="int" maxlength="16" placeholder="전화번호 입력">
                    </span>
                    <span class="error_next_box"></span>
                </div>

                <div>
                    <h3 class="join_title">
                        <label for="photoNo">사진등록</label>
                    </h3>
                    <input
                        type="file"
                        name="imageFile"
                        id="real-input"
                        class="image_inputType_file"
                        accept="img/*"
                        multiple="multiple">
                </div>

                <!-- JOIN BTN-->
                <div class="btn_area">
                    <button type="submit" id="btnJoin">
                        <span>가입하기</span>
                    </button>
                </div>

            </div>
            <!-- content-->

        </div>
    </form>
        <!-- wrapper -->
        <!-- <script src="main.js"></script> -->
    </body>
</html>