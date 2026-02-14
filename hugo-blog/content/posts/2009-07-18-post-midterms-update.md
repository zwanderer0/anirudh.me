---
title: "Post Midterms Update"
date: 2009-07-18
draft: false
slug: "post-midterms-update"
---

We've now been able to trick SketchUp now to pose TUIO data is SketchUp data by posting the TUIO data as a SketchUp "User" message type. It would then be in sync with SketchUp events rather than asynchronous TUIO events.

This way we can sub-class SketchUp (like EventRelay), pass the data off to the SketchUp's embed Ruby as a **Synchronous** event. Here's the result of DLL "puts"-ing cursors successfully to the SketchUp's embed Ruby Console via a Ruby API puts statement:

![TUIO cursor data output in SketchUp's embedded Ruby Console](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJnSRwyF-aEgPah2i4nbVPX2AgoxCkFsCdJ48S9dudlCi8Pv8b2UgWTn-69mfPVhMasgdWfg9GHUBvCxjEQ-Z7ZK1vc6_kJNtV0DntKmicBesBbQceQplypfmD6Rs7WPPvgk6jre3avTTe/s1600/Ruby+Client.JPG)

Implication to which is that we can collect all the TUIO messages and use the SketchUp Ruby API for remaining work as suggested by mentor.