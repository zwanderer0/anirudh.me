---
title: "Gestures Plan"
date: 2009-07-28
tags: ["gsoc", "Multitouch Sketchup", "gsoc india", "Google Sketchup", "gestures"]
draft: false
slug: "gestures-plan"
---

My thoughts were triggered after I read the [Bill Buxton argument](http://www.billbuxton.com/multitouchOverview.html).

We must focus on *streamlining* the interaction. by number of gestures **minimum**, using them only when they're required and **naturally usable** -> Simpler and better SketchUp design and modeling experience. This implies that we should using Multitouch in only one thing -> Camera motions in Sketchup i.e. Zoom, PAN and Orbit.

There are two modes I am thinking about:

MODE 1 Camera = Initialized using a Button1 from a new SketchUp MT Toolbar

1. **Zoom** - Drag apart two fingers/MT cursors![](/blog/images/blog/gesture-works.png)

2. **Orbit** - Keep two fingers constant and move third vertically to the axis of the two.

              X X O ^

3. **Pan** - Drag in any direction with single finger

            O->

MODE 2 Drawing = Initalized using Button2 from SketchUp MT toolbar

- SketchUp's drawing interface is meant to be exploited using single touch (mouse) so we plan not messing around with that - Therefore we're drawing with the help of mouse emulation and it'll do. by just checking if the amount of fingers/touches (TUIO cursors) ==1 and then emulating the MOUSE.

Trying to draw in sketchup using MT might be analogical to killing a mosquito with a stick.

**So let's keep the drawing Single Touch**