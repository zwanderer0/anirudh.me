---
title: "Alternative hack for the Gesture Keyboard"
date: 2010-01-25
tags: ["hack", "idea", "openCV"]
draft: false
slug: "alternative-hack-for-the-gesture-keyboard"
---

Long time for this post too! eh. mugging for the exams is quite a shakle to breakaway from :-P The reason I am writing this post amid the tests is being overwhelmed by Rahul Motiyar's new multitouch monitor mount hack. The thoughts from the B'lore trip and the above work culminated :-P

I happened to visit and take a look around HPL India B'lore. The way gesture keyboard solves the problem of indic languges was sure eye catcher. Its a tablet with a Stylus input interface using which a computer newbie can type in Hindi almost with zero learning curve.

A big boon over the present Hindi keyboards, which work fast but only for a very specially trained people.

*The HPLab's Gesture Keyboard*

![A standard Hindi keyboard with complex Devanagari layout](/blog/images/blog/hindi-keyboard.jpeg)

A generic Hindi keyboard

The way it works makes Devnagari entry a breeze. I happened to think about some extensions that could be done with this interface. "Why not make a simple computer screen work like a gesture keyboard with almost zero hardware mods"

The point is to learn from the Optical setups that the wonderful open source community is using today. A camera mounted over a infrared laser lit LCD can easily track the touch points- add to it, it can work a multitouch input panel too.

- Mount a modified PS3 eye to track infrared over the monitor. Optionally, a wiimote can also be used(  tried Wiimote's IR tracking, works well for small IDs)

- Write an GTK/WPM Module similar to Gesture Keyboard that would popup as soon as Hindi typing method is invoked

![Proposed setup: IR camera mounted above an LCD screen](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgoRSHvO0idjjOhJ_H_Sln_QUg8stqqYFkQd1GX888X1ALNl5KyrW0TDjk-C3r66C_tkA-p454Ur3jIG5UtVJba7U-Prydf7JzlTSn4t1lO3Bqudkl9qGH4WngfWcb5VPZa83qqQFZjGSn7/s1600/Untitled.jpg)

- Align the Infrared Lasers right over the acrylic sheet such that a light plane parallel to the screen is generated.
![IR laser plane aligned parallel to the acrylic sheet surface](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhnOyh32d6kQrS2gj_uYxiIn3pfWCsTGtUi-pKB9Mzeg8BYh0dhesE7uUfavv6ry2fEyztGwU6Lnn1zT-JZ78QqUYZiKCMepzFNmmWKmP_Uh80FbkMqTKcK6QeDTpDK_SdRB9aNk-MUsqTr/s1600/Untitleda.jpg)

![LLP laser light plane mount fitted over an LCD monitor](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEikc01vLUeks4COmQvZYc7CsVUbPY8BB4e-AZCpFF7_TwHf5HBZzWR_TLY6cxVdkqiWo8uL87-OBwq7VnAC7u36_SwpEPU8_R-Fkz0mvm7zeBDKjICtd0TUvo-02IdAZ6vVd477DqgabdwM/s1600/Untitledazz.jpg)

- The LLP mount when fitted over the LCD will track multiple IR points with almost zero force

-  Gestures are parsed accordingly using a touch tracker( OpenCV, Touchlib) , and overlapping keyboard is calibrated.

**Total Cost for the hack**=Rs 500 for generic webcam+ Rs 1000 for two IR Laser modules.
