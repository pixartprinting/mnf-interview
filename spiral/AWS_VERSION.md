# Intro

Hi, 
thank you for your interest in Pixartprinting and thank you for your effort in this step of the interview process.

This task is made of multiple steps, please complete them in the order presented. Feel free to ask any question you need, and/or take reasonable assumptions.
Please document and motivate any assumption you take.

The deliverables we are expecting is a link to a repository (if possible, on GitHub) containing:

* Your code
* One or multiple Dockerfile (if multiple, please include a docker compose file) to test and run the code. We should be able to deal with your application without installing anything but docker in our system.
* A README.md file, containing a description of the code, documentation, assumptions you took. In general, anything you think would help us understanding and running your work.

# The task

## 1 - Cleaning

Create a webpage (to be found found at `/brackets`) where the user can input multiple strings, one per line, and click on a button to obtain the same strings, with all the **external** matching round brackets removed. Few examples of input and output are:

| Input         | Output        |
|---------------|---------------|
| `(abc)`       | `abc`         |
| `((abc))`     | `abc`         |
| `(abc`        | `(abc`        |
|               |               |
| `()`          |               |
| `(ab) (cd)`   | `(ab) (cd)`   |
| `((ab) (cd))` | `(ab) (cd)`   |
| `ab(cd)`      | `ab(cd)`      |

Bonus point: create another page (to be found at `/pairs-en`) the user can use to remove **external** matching letter pairs of the english alphabeth:

```
az
by
cx
dw
ev
fu
gt
hs
ir
jq
kp
lo
mn
```

for example:

```
man -> a
keep -> ee
gqwertyuioplkjhgfdsazxcvbnm:?t -> qwertyuioplkjhgfdsazxcvbnm:?
abcdefghijklmnopqrstuvwxyz -> 
```

(last example output is an empty string).

## 2 - PDF generation

Now that we have our great pages to clean up our strings, it's time to add a button (to the pages, of course) allowing the user to receive 
a pdf containing the cleaned strings arranged on a square spiral, like 

```
  --------------------------
  |                         |
  |    -----------------    |
  |    |                 |  |
  |    |                 |  |
  |    |                 |  |
  |    |                 |  |
  |     -----------      |  |
  |                      |  |
   --------------------- |  |
                            |
----------------------------
```

(starting point, orientation and wrapping direction are free for you to choose).

In case you have multiple words of the same length you can use dashes around them.

From the page the PDF generation is requested, but the process is not syncronous, and the PDF 
has to be delivered as a download link to the user.

Note that the user may close the page before the PDF is generated and delivered. 

## 3 - Architecture

Motivate you choices, the pros and cons, the tradeoffs and how would you change the architecture if you should 
move from docker to AWS or GPC.    
How should you modify the architecture should the service scale to thousands of users?













