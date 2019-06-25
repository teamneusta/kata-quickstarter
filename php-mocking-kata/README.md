# php-mocking-kata

#### mo-what?

In object-oriented programming, mock objects are simulated objects that mimic the behavior of real objects in controlled ways, most often as part of a software testing initiative. A programmer typically creates a mock object to test the behavior of some other object, in much the same way that a car designer uses a crash test dummy to simulate the dynamic behavior of a human in vehicle impacts. The technique is also applicable in generic programming.<br> 
[https://en.wikipedia.org/wiki/Mock_object]

#### kata-what?

#### What to do here?
This kata combines the string-calculator and the arabic-to-roman-number-converter in one project.<br>
e.g. [http://codingdojo.org/kata/StringCalculator/]<br>
e.g. [http://codingdojo.org/kata/RomanNumerals/]

The main task in this kata is to use mock-objects to produce valid test-cases.
A good point to start is the RandoriServiceInterface.php. The class which implements this interface holds just one method called 'transform', taking a string and returning a string.
This method should behave as follows:<br>
- comma-seperated numbers in input-string will be summed up
- result of calculation is translated into a roman representation

 
