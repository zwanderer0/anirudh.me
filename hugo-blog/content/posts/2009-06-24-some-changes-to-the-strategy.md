---
title: "Some changes to the strategy"
date: 2009-06-24
tags: ["gsoc", "C++", "Google Sketchup", "ruby"]
draft: false
slug: "some-changes-to-the-strategy"
---

Finally I am dumping the SkSockets approach with our plugin. Though it showed some initial success the if the SKSocket was buffering and finally flushed the data all at once. Which won't work for this as we need constant refresh of data.

1 - started osc.exe - set it for small screen size and low framerate.
2 - used toxy_win UDP to TCP proxy server (gave a link)
3 - Start the tuioconn.rb code in SU.

This made SketchUp's screen turn white for long, and random messages (which i didn't log sadly), but i couldnt get it done twice again. Maybe it is the SU Socket is waiting on something like 2 newlines as a signal to flush, but with osc you never get 2 in a row because its a stream of messages. The one time it did work, it must have hit the Socket limit set in SU and then flushed everything it had been buffering.

So for this week I am dumping this approach finally, and keeping the writing TUIO to text file in the background.

Moving on with the next big thing is the DLL integration trial. We've got a tried and tested C++ client for TUIO, and TBD has a couple of examples on how to writing a DLL for SketchUp. The DLL route feels solid -- at least we won't be fighting SketchUp's socket implementation anymore. Let's wait and watch till the next blogpost. :)