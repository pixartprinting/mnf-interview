# Intro

Hi, 
thank you for your interest in Pixartprinting and thank you for your effort in this step of the interview process.

This task is made of multiple steps, please complete them in the order they are presented. Feel free to ask any question you need, and/or take reasonable assumptions.
Please document and motivate any assumption you take.
Don't panic if you are not able to complete all the steps. :)

The deliverable we are expecting is a link to a repository (if possible, on GitHub) containing:

* Your code
* One or multiple Dockerfile (if multiple, please include a docker compose file) to test and run the code. We should be able to deal with your application without installing anything but docker in our system.
* A README.md file, containing a description of the code, documentation, assumptions you took. In general, anything you think would help us understanding and running your work.

# The task: virtual postcard to print

## 1 - Virtual postcard request

Create a webpage (to be found found at `/my-awsome-app`) where the user can input a string and click on a button to obtain a preview of its string on the postcard you can find in this folder. The user should be able to reset the view a start from scratch.

## 2 - PDF generation

Once satisfied, the user should be able to confirm the result and ask the generation of a PDF containing the string on the postcard.
The PDF is not available to the web page but has to be sent to the user, asynchronously, as a download link.

## 3 - Print order

From the PDF download page the user should be able to order a printer version to be sent to a bounch of addresses of his choice.

