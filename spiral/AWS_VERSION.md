# Intro

Hi, 
thank you for your interest in Pixartprinting and thank you for your effort in this step of the interview process.

This task is made of multiple steps, please complete them in the order presented. Feel free to ask any question you need, and/or take reasonable assumptions.
Please document and motivate any assumption you take.

The deliverables we are expecting is a link to a repository (if possible, on GitHub) containing:

* Your code
* A README.md file, containing a description of the code, documentation, assumptions you took. In general, anything you think would help us understanding and running your work.
* One or multiple template (Serverless, Cloudformation, SAM, ... it's up to you) containing the AWS resources needed to run the project. If you don't have an AWS account or you need resources not included into the free trial, it's fine to run them locally or to use some mock/emulation.
* A document (even hand-written) containing the components design and the interaction between them (e.g. an api gateway that triggers a lambda).

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

Motivate you choices, the pros, cons and the tradeoffs.












