---
title: "CV dilemma"
date: 2010-05-26
tags: ["parameterization", "openCV", "distortion"]
draft: false
slug: "cv-dilemma"
---

Looks like there's a problem with OpenCV's distributed parameterization of coordinates used during the camera calibration tasks.  Three distinct sources of information on img distortion formulae apparently give three non-equivalent description of the parameters and equations involved:

**(1)** In their book "Learning OpenCV"  write regarding lens distortion:

$$x_{\text{corrected}} = x(1 + k_1 r^2 + k_2 r^4 + k_3 r^6) + [2p_1 xy + p_2(r^2 + 2x^2)]$$

$$y_{\text{corrected}} = y(1 + k_1 r^2 + k_2 r^4 + k_3 r^6) + [p_1(r^2 + 2y^2) + 2p_2 xy]$$

where $r = \sqrt{x^2 + y^2}$.

Assumably, $(x, y)$ are the pixel coordinates (in pixel units) in the uncorrected captured image corresponding to world-point objects with coordinates $(X, Y, Z)$, camera-frame referenced, for which

$$x_{\text{corrected}} = f_x \frac{X}{Z} + c_x \quad \text{and} \quad y_{\text{corrected}} = f_y \frac{Y}{Z} + c_y$$

where $f_x$, $f_y$, $c_x$, and $c_y$, are the capturing camera's intrinsic parameters. Therefore, having $(x, y)$ from a captured image, one can derive the desired points $(x_{\text{correct}}, y_{\text{correct}})$ to obtain an un-distorted image of the captured world scene.

However...

**(2)** The complication issue comes when we look at OpenCV 2.0 C Reference entry under the "Camera Calibration and 3D Reconstruction section". For the ease of the comparing task we begin with all world-point $(X, Y, Z)$ coordinates being expressed w.r.t the camera's reference frame, just like the first point. Consequently, the transformation matrix $[R \mid t]$ is of no concern.

In the C reference, it is expressed that:

$$x' = \frac{X}{Z}$$

$$y' = \frac{Y}{Z}$$

$$x'' = x'(1 + k_1 r'^2 + k_2 r'^4 + k_3 r'^6) + [2p_1 x' y' + p_2(r'^2 + 2x'^2)]$$

$$y'' = y'(1 + k_1 r'^2 + k_2 r'^4 + k_3 r'^6) + [p_1(r'^2 + 2y'^2) + 2p_2 x' y']$$

where $r' = \sqrt{x'^2 + y'^2}$, and finally

$$u = f_x x'' + c_x$$

$$v = f_y y'' + c_y$$

One can see these expressions are not equiv. to the ones presented in #1, with the result that the two sets of corrected coordinates $(x_{\text{correct}}, y_{\text{correct}})$ and $(u, v)$ aren't the same. Why the contradiction? It seems to me the first set makes more sense as I can attach physical meaning to each and every $x$ and $y$ in there, while I find no physical meaning in $x' = X/Z$ and $y' = Y/Z$ when the camera focal length is not exactly $= 1$. Moreover, one cannot calculate $x'$ and $y'$ since we don't know $(X, Y, Z)$.

**(3)** Unfortunately, things get even murkier when we refer to the writings in Intel's OpenCV Library Reference Manual's section Lens Distortion (page 6-4), which states in part:

"Let $(u, v)$ be true pixel image coordinates, that is, coordinates with ideal projection, and $(\tilde{u}, \tilde{v})$ be corresponding real observed (distorted) image coordinates. Similarly, $(x, y)$ are ideal (distortion-free) and $(\tilde{x}, \tilde{y})$ are real (distorted) image physical coordinates. Taking into account two expansion terms gives the following:

$$\tilde{x} = x(1 + k_1 r^2 + k_2 r^4) + [2p_1 xy + p_2(r^2 + 2x^2)]$$

$$\tilde{y} = y(1 + k_1 r^2 + k_2 r^4) + [2p_2 xy + p_2(r^2 + 2y^2)]$$

where $r = \sqrt{x^2 + y^2}$. ...

"Because $\tilde{u} = c_x + f_x u$ and $\tilde{v} = c_y + f_y v$, ... the resultant system can be rewritten as follows:

$$\tilde{u} = u + (u - c_x)\left[k_1 r^2 + k_2 r^4 + 2p_1 y + p_2\left(\frac{r^2}{x} + 2x\right)\right]$$

$$\tilde{v} = v + (v - c_y)\left[k_1 r^2 + k_2 r^4 + 2p_2 x + p_1\left(\frac{r^2}{y} + 2y\right)\right]$$

The latter relations are used to undistort images from the camera."

Well, it would appear that the expressions involving $\tilde{x}$ and $\tilde{y}$ coincided with the two expressions given at the top of this writing involving $x_{\text{correct}}$ and $y_{\text{correct}}$. However, $\tilde{x}$ and $\tilde{y}$ do not refer to corrected coordinates, according to the given description. I don't understand the distinction between the meaning of the coordinates $(\tilde{x}, \tilde{y})$ and $(\tilde{u}, \tilde{v})$, or for that matter, between the pairs $(x, y)$ and $(u, v)$. From their descriptions it appears their only distinction is that $(\tilde{x}, \tilde{y})$ and $(x, y)$ refer to 'physical' coordinates while $(\tilde{u}, \tilde{v})$ and $(u, v)$ do not. What is this distinction all about? Aren't they all physical coordinates? I'm lost!. ( OpenCV ML)