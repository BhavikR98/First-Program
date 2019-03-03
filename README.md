# First-Program.


## Index of PHP Terms

<!--Start of the index for PHP terms for group reference>
<The format we'll be using will be dictionary style. 
You have the term, then you add ":", then add an example 
of the termand the definition of the term-->


<Many credits given to http://php.net/manual>

There will be direct examples of in class assignments. 
Currently only the CarTest worked in class

**PHP Start Tag**: (<?php) Starts the PHP file and tells 
the computer to start and stop interpreting the code.

**Unit Testing**: (CarTest.php) Defined by Keith Williams 
as "One of the greatest things to add to a resume." 
Unit Testing is essentially a way developers test small chunks
of their code in bits to avoid global errors when using the code
across different projects.  

**Type Declarations**: [(**declare**(strict_types=1);] Type 
declarations come in two flavours: coercive (default) 
and strict. The following types for parameters can be 
used: strings (string), integers (int), floating-point 
numbers (float), and booleans (bool).

**use**: (**use** Car;) imports the specified namespace 
(or class) to the current scope. 

**extends**: (final class CarTest **extends** TestCase) 
the keyword that enables inheritance.  

**public**: (**public** function testCanCreateCar(): void) 
scope to make that variable/function available from 
anywhere, other classes and instances of the object.

**private**:(**private** function testCanCreateCar(): void) 
scope when you want your variable/function to be 
visible in its own class only.

**protected**:(**protected** function testCanCreateCar(): void)) 
scope when you want to make your variable/function visible 
in all classes that extend current class including the 
parent class.

**Creating a new Variable**: (**$txt = "5";**) $txt will hold the 
of whatever you initialize for it after typing and "=". 
Can be a string, int, float, and class.

**$this**: (**$this**->assertInstanceOf(Volvo ::class, $car);) 
mainly used to refer properties of a class. It is the 
way to reference an instance of a class from within 
itself, the same as many other object oriented languages.

**new**: ($volvo = **new** Volvo();) To create an instance 
of a class, the new keyword must be used. 
An object will always be created unless the object 
has a constructor defined that throws an exception on 
error. Classes should be defined before instantiation (
and in some cases this is a requirement).

**return**: (**return** -3;) return returns program 
control to the calling module. Execution resumes at 
the expression following the called module's invocation. 
If called from within a function, the return statement 
immediately ends execution of the current function, 
and returns its argument as the value of the function 
call. return also ends the execution of an eval() 
statement or script file.(http://php.net/manual/en/function.return.php)
                             
**echo**:(**echo** "Hello World";) Outputs one or more strings

**abstract**: (**abstract** class Car) Classes defined 
as abstract may not be instantiated(represent as or 
by an instance) and any class that contains at least 
one abstract method must also be abstract. Methods 
defined as abstract simply declare the method's 
signature - they cannot define the implementation.


         
         
