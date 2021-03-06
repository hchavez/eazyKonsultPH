<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Legacy Network Email</title>
</head>
<body class=""
      style="background-color: #337ab7; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
<table border="0" cellpadding="0" cellspacing="0" class="body"
       style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #337ab7;">
    <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        <td class="container"
            style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
            <div class="content"
                 style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader"
                      style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This email is a system generated email.</span>
                <table class="main" style="padding: 20px; border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; background-image: url({{ url('new_images/banner_bg_faded.png') }}); background-repeat: no-repeat; background-size: contain; padding-bottom: 100px; position: relative;">
                    <tr>
                        <td>
                            <img src="{{ url('/') }}/new_images/white_logo.png" alt="Legacy Network Logo" style='height: 40px;'>
                        </td>
                    </tr>
                    <!-- START MAIN CONTENT AREA -->
                @yield('content')
                <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
                    <table border="0" cellpadding="0" cellspacing="0"
                           style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                        <tr>
                            <td class="content-block"
                                style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #ffffff; text-align: center;">
                                <span class="apple-link" style="color: #ffffff; font-size: 12px; text-align: center;">Helping people markedly improve their health!</span>
                                <br>
                                <br>
                                <span class="apple-link" style="color: #ffffff; font-size: 12px; text-align: center;">Our Promise: To provide a proven success path to elite health that is powered by pure and potent natural products that deliver proven, predictable, and repeatable results! </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="content-block powered-by"
                                style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #ffffff; text-align: center;">
                                {{--Powered by <a href="{{ url('/') }}" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">?? 2021 Legacy Network Reserve, LLC. All rights reserved</a>.--}}
                                Powered by <a href="#"
                                              style="color: #ffffff; font-size: 12px; text-align: center; text-decoration: none;">?? 2021 Legacy Network Reserve, LLC. All rights reserved</a>.
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
    </tr>
</table>
</body>
</html>