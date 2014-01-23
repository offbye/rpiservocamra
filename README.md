I want to see my daughter in home from the web camra connected in my Raspberry PI.
I use Motion to implement a mjpeg streaming��and use dynamic DNS service on my wireless AP provide by www.oray.com .
Then I use a servo to control the usb camra turn. I use ServoBlaster to drive the servo. and I write a php page to allow me send servo command from web page.
To use the program you need to have a php web server, such as Apache+ php or nginx+php.

1 Install usb camra and motion on Raspberry PI

$ lsusb

$ sudo apt-get install  motion
$ motion&

Browse in Chrome Browser: http://yourserver:8081, you will see the camra mjpeg image.

2 Install 9g servo

1) Connent the servo to raspberry pi , there are 3 pins, connect the signal line to GPIO17, the other 2 pin is power, connent to 5v and GND, or use a extra 5V/500mA power supply(recommend).

2) install ServoBlaster
Please read ServoBlaster/README.txt for more information

$: cd ServoBlaster/

$: ls

$:  make servod

$:  sudo ./servod 

$: echo 1=160 > /dev/servoblaster


if the servo connected correctly, it will change position.


3 install Web Control

Copy web to your php web server. then you can browser it in Chorome browser
http://yourserver/web/cam.html
