<!-- Login Full Background -->
<body>
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <section class="caviar-hero-area" id="home">
        <div class="caviar-hero-slides owl-carousel">
            <div class="single-hero-slides bg-img" style="background-image: url(img/papanhitam.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Forum Anak Kota Yogyakarta</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div style="background-image: url('img/papanhitam.jpg');">
        <div class="ofil" style="color: white">
        <!-- END Login Full Background -->

<center>
        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
            <br>
<html>
<h2>Login</h2>
<form method="post" action="Home.php">
<br>    
<table>
        <tr>
            <td style='color: white'>ID</td><td style='color: white'>:<input name='nama_lengkap' type='text'></td>
        </tr>
        <tr>
            <td style='color: white'>Password</td><td style='color: white'>:<input name='password' type='password'></td>
        </tr>
        <tr>
            <td>Captcha<br><img src='captcha.php' /></td><td><input name='captcha_code' type='text'></td>
        </tr>
        <tr>
            <td colspan=2><input type='submit' value='LOGIN'></td>
        </tr>
</table>
</form>
</center>
<br>
<center>
        <!-- Menampilkan Jam (Aktif) -->
    <div id="clock"></div>
        <script type="text/javascript">
        <!--
        function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
         document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }
 
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);
        //-->
        </script>        
</center>
<center>
    <footer class="caviar-footer-area">
                <div class="col-12">
                    <div class="footer-text">
                    <p class="">© Responsi</a>
                    </div>
                </div>
    </footer>
    </center>       </div>
          </form>
</body>