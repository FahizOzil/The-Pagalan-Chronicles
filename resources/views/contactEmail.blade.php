<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .email-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 20px;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #ff4d6d;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        .header h1 {
            color: #845ec2;
            margin: 0;
            font-size: 26px;
        }

        .message-details {
            background-color: #f7f7f9;
            border-left: 4px solid #845ec2;
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 4px 4px 0;
        }

        .message-content {
            margin-top: 10px;
            padding: 15px;
            background-color: #f0f0f0;
            border-radius: 6px;
            font-style: italic;
        }

        .detail-row {
            margin-bottom: 8px;
        }

        .detail-label {
            font-weight: bold;
            color: #555;
        }

        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #eaeaea;
            font-size: 14px;
            color: #666;
        }

        .signature {
            margin-bottom: 20px;
        }

        .note {
            background-color: #fff8f0;
            padding: 10px 15px;
            border-radius: 6px;
            margin-top: 15px;
            color: #d76a03;
            font-size: 13px;
        }

        .contact-info {
            background-color: #f0f7ff;
            padding: 12px;
            border-radius: 6px;
            margin-top: 15px;
        }

        .social-links {
            margin-top: 15px;
            text-align: center;
        }

        .social-icon {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: #845ec2;
            border-radius: 50%;
            margin: 0 5px;
            text-align: center;
            line-height: 36px;
        }

        .social-icon img {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }

        .social-icon a {
            color: white;
            text-decoration: none;
        }

        .company-logo {
            text-align: center;
            margin-bottom: 15px;
        }

        .company-logo img {
            max-height: 60px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="company-logo">
            <!-- Replace with your logo -->
            <img src="{{ asset('images/characters/logo3.png')}}" alt="The Pagalan Chronicles Logo">
        </div>

        <div class="header">
            <h1>Thank You for Your Message!</h1>
        </div>

        <p>We've received your contact form submission and will get back to you shortly. Here's a copy of the information you provided:</p>

        <div class="message-details">
            <div class="detail-row">
                <span class="detail-label">Name:</span>
                <span>{{ $data['name'] }}</span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Email:</span>
                <span>{{ $data['email'] }}</span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Message:</span>
                <div class="message-content">
                    {{ $data['message'] }}
                </div>
            </div>
        </div>

        <p>We appreciate your interest in "The Pagalan Chronicles" and will respond to your inquiry as soon as possible.</p>

        <div class="footer">
            <div class="signature">
                <p>Best regards,</p>
                <p><strong>Andrew</strong></p>
                <p>"The Pagalan Chronicles"</p>
            </div>

            <div class="note">
                <strong>Note:</strong> This is an automated message. Please do not reply directly to this email.
            </div>

            <div class="contact-info">
                <strong>Contact Information:</strong>
                <p>Email: andrew@thepagalanchronicles.com</p>
                <p>Website: https://www.thepagalanchronicles.com/</p>
            </div>

            <div class="social-links">
                <div class="social-icon">
                    <a href="#"><strong>f</strong></a>
                </div>
                <div class="social-icon">
                    <a href="#"><strong>t</strong></a>
                </div>
                <div class="social-icon">
                    <a href="#"><strong>in</strong></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
