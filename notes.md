# PHP

- stands for "Hypertext Preprocessor"
- a server-side scripting language
- widely-used and open source language
- scripts are executed on the server

---

# PHP file

- contain text, HTML, CSS, JS and PHP code
- PHP code is executed on the server, and the result is returned to the browser as plain HTML
- files have extension ".php"

---

# Basic Syntax

- can be placed anywhere in the document

    ```php
    // starts with
    <?php 
    // code
    ?> // ends with
    ```

---

# First program

```php
<?php
echo "Hello World!!"; 
?>
```
- echo cmd is used to output or print anything to the browser or terminal

- every code in php ends with a semi-colon(;)

---

# Comments

```php
// this is a single-line comment
/*
This
is
a 
multi-line
comment
*/
```
- comments are for notes or some guide for the developers and is ignored by the compiler or interpreter of the language

---

# Variables 

- a reusable container that holds data like string, integer, float, boolean
- to declare a variable, we use a dollar($) sign before the variable name
    ## Datatype
    - string: enclosed in double quotes
    - int: not enclosed in quotes
    - float: decimal numbers
    - boolean: true -> 1 and false -> represents white space

# Operators
- Arithmetic Operators
    - '+', - ,*, /, **, %

- Increment/Decrement Operators
    - ++, --

- Operators Precedence
    - ()
    - **
    - '*' / %
    - '+' '-' 

# $_GET, $_POST
- special variables used to collect data from an HTML form data is sent to the file in the action attribute of form tag
    1. $_GET
    - data is not appended to the URL
    - NOT SECURE
    - char limit
    - bookmark is possible w/ values
    - GET requests can be cached
    - better for a search page

    2. $_POST
    - data is packaged inside the body of the HTTP request
    - MORE SECURE
    - no data limit
    - cannot bookmark
    - get requests are not cached
    - better for submitting credentials