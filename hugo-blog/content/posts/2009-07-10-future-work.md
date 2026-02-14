---
title: "Future work"
date: 2009-07-10
draft: false
slug: "future-work"
---

Post midterm tasks

1. We were working on `mouse_event` Function ([http://msdn.microsoft.com/en-us/library/ms646260(VS.85).aspx](http://msdn.microsoft.com/en-us/library/ms646260%28VS.85%29.aspx)) for the possible events that MultitouchSU DLL can inject into the SketchUp windows simply by specifying `{LBUTTON UP|DOWN} {MBUTTON UP|DOWN}{RBUTTON UP|DOWN}{MOUSEMOVE x,y}`.

This indeed is pretty raw, but I thought good enough for the first version. We could have got more sophisticated later with something like `Click(Left|Middle|Right count)` and `MouseMove( 0|Left|Middle|Right, x, y, rate)` etc.

This is an example how it'll be done, ([http://code.google.com/p/eventrelay/source/browse/trunk/devel/MSWrunmacro.cpp?r=113](http://code.google.com/p/eventrelay/source/browse/trunk/devel/MSWrunmacro.cpp?r=113)) at Function `void MSW_ProcessMacro::InjectNamedMouseMacro(string& namedMacroStr)`. A `MOVEMOUSETO(x,y)` function will have to be added.

For now according to discussion with the mentor, we'll not go with this strategy. Another method that is using the `require` in the DLL loader script to invoke a gesture recognizer script. Got some exams to catch up, the coding work should take place post 13th.

A TUIO gesture recognition module based on the Ruby API will sit between the current DLL and the SketchUp's UI. At this stage before we tryout writing the functional code, a medium level view has to be taken. So - Camera Classes of SketchUp - Geometry Classes - and Entity Class of Sketchup.

e.g. `Entity.entityID` The `entityID` method is used to retrieve a unique ID assigned to an entity. Now SketchUp's Received TUIO will be interpreted as gestures.

Other SketchUp classes I am looking at:

1. http://code.google.com/apis/sketchup/docs/ourdoc/inputpoint.html
2. The `nextFrame` method of the `Animation` interface.

So the plan is -- get the gesture recognizer sitting between the DLL and SketchUp's UI, map touch gestures to camera transforms and entity manipulation, and see how it feels. The Camera and Geometry classes look promising for orbit/pan/zoom. Excited to get past the plumbing and finally start doing the fun part -- actually touching and moving 3D objects around. :P