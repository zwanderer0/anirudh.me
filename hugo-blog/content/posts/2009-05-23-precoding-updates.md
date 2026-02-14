---
title: "Precoding updates"
date: 2009-05-23
tags: ["NUIGroup", "gsoc", "update", "gsoc india", "Google Sketchup"]
draft: false
slug: "precoding-updates"
---

1. Code Repository setup at [Google Code](http://code.google.com/p/sketchupmultitouch/)

![](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihu0eOvmHbVGGH0G1W3N4jN4oBq-R2oNunCIHk1Zhi6yZJSURXLS4qY00bjsGe1z4OCHpAAgElE9nhAZ3Tjv2g5pXf_GwokbLwKiutqSPuzSjlUecFq6y8HJVBYW-nbEU8mNa7GsR8DXcu/s1600/tuio+ruby.JPG)

2. Recently I tried out Colin Harris's Ruby [TUIO client](http://github.com/aberant/tuio-ruby/tree/master), it took me a little longer time (more than expected) to figure out if its working since I was using Adobe Air based SimTouch.air and socketserver executable to do my tests - which didnt work with our Ruby Client. Though later it responded perfectly with ReactiVision TUIO Simulator 1.4 . I could print the TUIO messages :-)

3. Yet to figure out how we're going to implement the Ruby Client within GoogleSU's interface, I am doing my experiments around Google SU right now. Since I am a bit n00bish with the Ruby API's application with networking, for now not very sure how it'll be loaded INTO the GoogleSketchUp , though i've to try :-)

4. For now I am wondering if we should really go on and apply multitouch to drawing in Google SketchUp , since Sketchup alredy allows to draw using Single Touch. Ofcourse the Multitouch gestures can be technically implemented here, but I want to know if there's really a point into doing something with Multitouch that's alredy possible easily in with Single point-of-contact. More on this after some community discussion with other fellow NUIGroup friends and SketchUp community members :-)

~ Google just announced that it's giving an yearly membership to [ACM](http://www.acm.org) to us as gift this year to GSoC students :) yay! {grin}