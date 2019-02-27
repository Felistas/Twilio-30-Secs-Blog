# Send WhatsApp Messages using the Twilio API Within 30 Seconds

## Getting Started

Clone the Repo to your prefered directory. 
On your terrminal, run `cd Twilio-30-Secs-Blog` then 
run `composer install` to install project dependancies.
Create `.env` file and add the following keys after obtaining the relevant values from your twilio dashboard
```
TWILIO_SID=your_twilio_sid
TWILIO_TOKEN=your_twilio_token
```
Activate your [WhatsApp Sandbox](https://www.twilio.com/blog/2018/08/twilio-whatsapp-api.html)

Run `php twilioWhatsAppMessaging.php`

Voila! We have sent out first WhatsApp message!. 
