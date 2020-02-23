"# gmailsmtp-phpmailer" 

# Send email via Gmail SMTP server in PHP
Google SMTP Server – How to Send Emails for Free
Google's Gmail SMTP server is a free SMTP service which anyone who has a Gmail account can use to send emails. You can use it with personal emails, or even with your website if you are sending emails for things such as contact forms, newsletter blasts, or notifications.

## Installation & loading
PHPMailer is available on [Packagist](https://packagist.org/packages/phpmailer/phpmailer) (using semantic versioning), and installation via [Composer](https://getcomposer.org) is the recommended way to install PHPMailer. Just add this line to your `composer.json` file:

```json
"phpmailer/phpmailer": "~6.1"
```

or run

```sh
composer require phpmailer/phpmailer
```

## Gmail SMTP settings
To use Gmail's SMTP server, you will need the following settings for your outgoing emails:

- Outgoing Mail (SMTP) Server: smtp.gmail.com
- Use Authentication: Yes
- Use Secure Connection: Yes (TLS or SSL depending on your mail client/website SMTP plugin)
- Username: your Gmail account (e.g. user@gmail.com)
- Password: your Gmail password
- Port: 465 (SSL required) or 587 (TLS required)

## Issues
When you try to send email in your local environment, there might be this kind of problem.

### Antivirus software
You need to properly configure your antivirus software to exclude blocking mails sent to smtp.gmail.com.

e.g. Mail works only while deactivating avast
```
1. Open Avast
2. Click on 'Settings' (upper right corner of page)
3. Click on 'Troubleshooting'
4. Click on 'Redirect Settings'
5. Clear all the port #'s from each field
6. Check 'Ignore Local Communication'
7. Click 'OK'
8. Close Avast
```
