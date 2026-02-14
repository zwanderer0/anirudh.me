---
title: "Proposed an idea for GSoC 2009"
date: 2009-04-02
tags: ["NUIGroup", "gsoc", "AS3 for Multitouch", "Google Sketchup", "Multitouch CAD", "gsoc india"]
draft: false
slug: "proposed-an-idea-for-gsoc-2009"
---

Proposed an Idea for Google Summer of Code to port Google SketchUp to Multitouch. Users would be able to do 3D modeling with simple and intuitive gestures. An Extension Module that would allow Google SketchUp to receive TUIO and hence allow manipulations via Multitouch gestures.

## Abstract

Lack of a CAD software that could be used via Multitouch has been the motivating factor behind this proposal. Eversince I used the Sketches application on iPhone -- which enables 2D drawing using Multitouch, I felt like doing something similar on my FTIR setup. Adding multitouch ability to an easy to use CAD/modeling software - Google SketchUp would not only make the design process intuitive but also add a lot to the usability factor.

The reason behind choosing Google SketchUp and not start developing something from scratch is due to its easy to start UI. By experience I've felt that Google SketchUp is one of the easiest and widely used surface modeling tools around -- what's impressive about it -- its patented Push-Pull technique, being free to use and support for both Windows and OSX environments. Hence, the idea is simple - to develop an extension with new gesture-sets for Google SketchUp that'd ease the modeling procedure via Multitouch. An additional Bimanual Gesture support that'd allow an IR Pen and hand simultaneously has also been proposed as an add-on.

## Development Plan

Google SketchUp comes with a powerful Ruby API and a C++ SDK. The plugins for Google SketchUp are written as Ruby scripts that are interpreted by Google SketchUp. Also, there is a Ruby TUIO Client implementation by Collin Harris to start up with.

The procedure would be to create ruby scripts with gestures defined for specific tasks that would map to two primary tasks:

1. Workspace navigation
2. Drawing

This shall keep the interface intuitive and not let the end user confuse the SketchUp during the Drawing and navigation gesture. A new toolbar menu set will be created which shall contain two sets. This has a certain advantage over the traditional mouse system since it'd minimize the need to access the toolbar repeatedly for specific tasks:

## SET 1 -- Camera Movements / Workspace Navigation

This includes gestures to ZOOM-IN, ZOOM-OUT, PAN, AND ORBIT and taking measurements:

- Rotation of workspace/model in 3D -- Orbit Tool
- Panning -- Single touch drag
- Tapping initial and final point to make measurements

## SET 2 -- Drawing

This shall enable drawing using gestures via SketchUp. The tentative plan for the gestures has been described in the text and mockups below:

- Select Square Option and use four fingers to enlarge rectangle. SketchUp would take care of the approximations when user intends to draw a square.
- Select Line Option and tap at two points on screen to create a line segment in between.
- Select Circle Option to draw circle using Multitouch by manipulating radius using MT

---

The Complete PDF for the Proposal can be accessed [here](http://nuigroup.com/?ACT=28&fid=86&aid=2917_f5RxlZLGQIa7VPy6ITHt)