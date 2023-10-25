<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>khun aoun</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>สร้างบัญชี</h1>
                <br>
                <input type="text" placeholder="ชื่อ - นามสกุล">
                <input type="email" placeholder="Email">
                <input type="phone" placeholder="เบอร์โทร">
                <input type="password_1" placeholder="รหัสผ่าน">
                <input type="password_2" placeholder="ยืนยันรหัสผ่าน">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>เข้าสู่ระบบ</h1>
                <br>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>มาเป็นสมาชิกกับเรา</h1>
                    <p>มีบัญชีอยู่แล้วใช่หรือไม่ คลิ๊กด้านล่างเพื่อเข้าสู่ระบบ</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>ยินดีตอนรับ</h1>
                    <p>ไม่ได้เป็นสมาชิกใช่หรือไม่ คลิ๊กด้านล่างเพื่อสู่ระบบ</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>