<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
</head>

<body>
    <div class="m_-6780606299024699051body"
        style="min-width:100%;width:100%!important;background-color:#f8fafa;margin:0;padding:32px 0;font-family: Arial, Helvetica, sans-serif">
        <table style="width:100%;border-collapse:collapse;border-spacing:0;table-layout:fixed;padding:0;border-width:0"
            height="100%">
            <tbody>
                <tr style="padding:0">
                    <td style="border-collapse:collapse!important;word-break:break-word;min-width:100%;width:100%!important;margin:0;padding:0"
                        align="center" valign="top">
                        <img width="80" src="{{ asset('passets/assets/profile.png') }}" alt="mailtrap logo"
                            style="max-width:100%;width:136px!important;outline:none;text-decoration:none;height:41px!important;border-style:none"
                            class="CToWUd" data-bit="iit">

                        <table
                            style="width:580px;border-collapse:separate;border-spacing:0;table-layout:auto;border-radius:8px;margin-top:24px;padding:0;border:1px solid #eee"
                            class="m_-6780606299024699051email-body" bgcolor="#fff">

                            <tbody>
                                <tr style="padding:0">
                                    <td style="border-collapse:collapse!important;word-break:break-word;padding:24px 32px 30px"
                                        class="m_-6780606299024699051content" align="left" valign="top">


                                        <p style="font-size:14px;padding-bottom:10px;margin:0">Hi Admin,</p>

                                        <p style="font-size:14px;padding-bottom:10px;margin:0">There is new contact us
                                            email with the following data</p>

                                        <p style="font-size:14px;padding-bottom:10px;margin:0"><strong>Name:</strong>
                                            {{ $data['name'] }}</p>

                                        <p style="font-size:14px;padding-bottom:10px;margin:0"><strong>Email:</strong>
                                            {{ $data['email'] }}</p>

                                        <p style="font-size:14px;padding-bottom:10px;margin:0"><strong>Phone:</strong>
                                            {{ $data['phone'] }}</p>

                                        <p style="font-size:14px;padding-bottom:10px;margin:0"><strong>Message:</strong>
                                            {{ $data['message'] }}</p>

                                    </td>
                                </tr>


                                <tr style="padding:0">
                                    <td style="border-collapse:collapse!important;word-break:break-word;padding:0 32px 24px"
                                        class="m_-6780606299024699051inner-footer" align="left" valign="middle">


                                        <table
                                            style="width:50%;border-collapse:collapse;border-spacing:0;table-layout:auto;padding:0;border-width:0">
                                            <tbody>
                                                <tr style="padding:0">
                                                    <td style="border-collapse:collapse!important;word-break:break-word;border-top-width:1px;border-top-color:#e4e4e9;border-top-style:solid;font-size:12px;line-height:1.5;padding:15px 0 0"
                                                        align="left" valign="middle">
                                                        <table
                                                            style="border-collapse:collapse;border-spacing:0;table-layout:auto;padding:0;border-width:0">
                                                            <tbody>
                                                                <tr style="padding:0">
                                                                    <td
                                                                        style="border-collapse:collapse!important;word-break:break-word;padding:0">
                                                                        <span>Sincerely,</span><br>
                                                                        <br>
                                                                        <strong>{{ env('APP_NAME') }}</strong><br>
                                                                        <span style="color:#a3abb4;font-size:10px"><a
                                                                                href="mailto:{{ env('CONTACT_EMAIL') }}"
                                                                                target="_blank">{{ env('CONTACT_EMAIL') }}</a></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
