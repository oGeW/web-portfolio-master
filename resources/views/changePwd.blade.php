<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/changePassword">
        @csrf
        <h1>비밀번호 변경</h1>
          <fieldset>
            <legend></legend>
              <table>
                <tr>
                  <td>새 비밀번호 입력 : </td>
                  <td><input type="password" size="35" name="password" placeholder="변경할 비밀 번호를 입력하세요"></td>
                  @error('password')
                  {{ $message }}
                  @enderror
                </tr>
                <tr>
                  <td>비밀번호 확인 : </td>
                  <td><input type="password" size="35" name="password_confirmation" placeholder="한번 더 입력해주세요"></td>
                </tr>
              </table>
            <input type="submit" value="변경하기" />
            <input type="hidden" name="id" value={{ $id }}>
          </fieldset>
      </form>
</body>
</html>