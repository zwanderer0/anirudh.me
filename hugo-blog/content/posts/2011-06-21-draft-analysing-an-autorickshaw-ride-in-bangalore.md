---
title: "Analysing an autorickshaw ride in Bangalore"
date: 2011-06-21
tags: ["bangalore", "autorickshaw", "Apple Sudden Motion Sensor"]
draft: true
slug: "analysing-an-autorickshaw-ride-in-bangalore"
---

The bumpy ride on the Bangalore streets triggered a thought the other day, why not log the data and analyse it later. The same is the outcome of my experiences dealing with data cleaning/analysis and deriving statistical results from it: formally two way ANOVA tests, T-test etc.

I tied my Macbook Pro equipped with SuddenMotionSensor(SMS) to the auto-rickshaw seat and used http://www.shiffman.net/p5/sms/ to log the X/Y/Z axis data. I manually kept a record through a stopwatch about the potholes/pit occurrence during the 25 minute rick-ride. It was interesting to the see the outliers due to the sudden relative motion triggered jerks.

Ankit and I plotted a few graphs out of the sampled CSV data(6731 datalogs). I matched the spikes with the manually recorded pothole/sudden-jerk data to see the obvious but visually pleasing results :)

*[Original post included an interactive Google Spreadsheet chart of accelerometer data from 6731 data logs, showing X/Y/Z axis readings over the 25-minute ride with annotated pothole spikes.]*