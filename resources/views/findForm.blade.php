<html>
    <body>
        <form action="/findId" method="post">
            @csrf<legend>아이디 찾기</legend>
            <table>
                <tr>
                    <td>이름</td>
                    <td><input type="text" size="35" name="name" placeholder="이름"></td>
                </tr>
                <tr>
                    <td>휴대폰</td>
                    <td><input type="phone" size="35" name="phone" placeholder="휴대폰">
                    </td>
                </tr>
            </table>
            <input type="submit" value="아이디 찾기"/>
        </fieldset>
    </form>
    <form action="/changeForm" method="post">
        @csrf<legend>비밀번호 찾기</legend>
        <table>
            <tr>
                <td>이름</td>
                <td><input type="text" size="35" name="name" placeholder="이름"></td>
            </tr>
            <tr>
                <td>아이디</td>
                <td><input type="text" size="35" name="id" placeholder="아이디"></td>
            </tr>
        </table>
        <input type="submit" value="비밀번호 찾기"/>
    </fieldset>
</form>
</body>
</html>