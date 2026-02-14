---
title: "Let's begin with what all I..."
date: 2009-06-25
tags: ["gsoc", "updates", "gsoc india"]
draft: false
slug: "lets-begin-with-what-all-i"
---

Let's begin with what all I tried at my end that **didn't work**.

**1.** *Direct Implementation of Ruby Client within Sketchup* - Didn't work due to the Ruby API's limitation under SketchUp.

**2.** *pyGE_touch* - Tried to hack around Win32COM interface to make SketchUp respond to pyGE like script. Didn't workout just because we don't have a COM interface in SketchUp's API.

**3.** *Using the SKSocket class* - Though it showed some initial success the if the SKSocket was buffering and finally flushed the data all at once, this wasn't the best of experiences. As per the blogpost on [http://touchaddict.blogspot.com/2009/06/some-changes-to-strategy.html](http://touchaddict.blogspot.com/2009/06/some-changes-to-strategy.html) its explianed how it worked for a while -- gave me a lot of hope, but eventually failed.

That's what finally gave some hope to move on.

**4.** Finally since the time was short, we thought of an option (with Colin) that we could connect TUIO to SketchUp using a **Text file logger**. got some success in getting this done. Although the disadvantage of using this method is known so as per your suggestion we'll **skip** this option for now.

**5.** GlovePIE - the wii remote would be similar... we could create an adapter.. that would listen for osc commands and then send a message to the sketchup port with specially formatted data for it's lame socket implementation. It would run as a separate ruby process.. outside of sketchup. I think we rejected this option as GLOVEPIE is only for NON haptic things i.e. WII etc.

Thereafter Pawel suggested me to look into EventRelay and couple of other SketchUp extensions. EventRelay was really cool since it embedded the Ruby Interpreter within C++ apps [http://www.sourcepole.ch/2004/1/21/embedding-ruby-in-c](http://www.sourcepole.ch/2004/1/21/embedding-ruby-in-c)

Plan for the upcoming time till Midterms

So that should be my plan of action over the next week, so as to make a DLL outside SketchUp world that'd take the hassles of connecting SketchUp to TUIO and henceforth prevent us from doing the thread calculation within SketchUp.

June 25 - June 27 -> Look Deeper into EventRelay (the CPP and header files), how it works, communicate with developers etc. take notes, refine strategy

June 26 - June 30 -> Work on implementing the C++ TUIO client within the DLL model. the SUDLL from [labs.plugins.ro](http://labs.plugins.ro/) site etc. should be helpful. Attempt to use **Win32API** and how to pass values back and forth to the DLL.

July 1 -> Prepare a SketchUp script that use the DLL. If this works then all cool, we move forward otherwise.

July 2 -> Go do the gestures' parsing and other parts. and later after the first evals return to the TUIO connection. As per i remember gestures won't be hard and the API is atleast very **friendly** in terms of mapping camera motions, drawing effects to other keyboard events, which in turn will be touchevents in our case.

I think it'll not be the best policy to predict my schedule more than this because things tend to get a little out of the plan, the hack might just take a little longer to work and execute.

Currently its my summer holidays so I spend around 7-8 hours a day on my computer trying and implementing the stuff that might or might not work, but i tend to give it my best shot. :)